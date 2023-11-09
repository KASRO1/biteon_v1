<?php

require $_SERVER['DOCUMENT_ROOT']. "/vendor/autoload.php";
use Cloudflare\API\Auth\APIKey;
use Cloudflare\API\Adapter\Guzzle;
use Cloudflare\API\Endpoints\EndpointException;
use Cloudflare\API\Endpoints\Zones;
use Cloudflare\API\Endpoints\DNS;

function add_domain_cloudflare($domain, $title, $user_id): bool
{
    $key = new APIKey(CLOUDFLARE_EMAIL, CLOUDFLARE_API_KEY);
    $adapter = new Guzzle($key);
    $zone = new Zones($adapter);
    $dns = new DNS($adapter);
    $response = $zone->addZone($domain,SERVER_IP);
    $zone_id = $response->id;
    $ns_list = $response->name_servers;
    $dns->addRecord($zone_id, 'A', $domain, SERVER_IP, 1);
    $dns->addRecord($zone_id, 'A', '*' , SERVER_IP, 1);
    if(create_domain($domain, $user_id, $title,$zone_id, $ns_list)){
        return true;
    } else {
        return false;
    }
}

function delete_domain_cloudflare($domain): bool
{
    $key = new APIKey(CLOUDFLARE_EMAIL, CLOUDFLARE_API_KEY);
    $adapter = new Guzzle($key);
    $zone = new Zones($adapter);

    try {
        $response = $zone->getZoneID($domain);


    } catch (EndpointException $e) {
        return false;
    }

    if (!empty($response)) {
        $zone_id = $response;
        if(delete_domain($zone_id)){
            $zone->deleteZone($zone_id);
            return true;
        }
    }
    return false;


}
