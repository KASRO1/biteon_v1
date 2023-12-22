<?php 

function get_price_coin($coin){
    $coin = str_replace(' ', '-', $coin);
    $coin = get_coin_info($coin);
    $spread = $coin['spread'];
    $coin = $coin['full_name'];
    $coin = strtolower($coin);
    $url = "https://api.coincap.io/v2/assets/".$coin;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    $output = json_decode($output);

    return $output->data->priceUsd ;
}

/**
 * @throws Exception
 */
function get_assets_coin($pair) {
    $coin = str_replace('_', '', $pair);
    $coin = strtolower($coin);
    $url = "https://testnet.binancefuture.com/fapi/v1/ticker/24hr?symbol=".urlencode($coin);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    try {
        $output = curl_exec($ch);
        if ($output === false) {
            throw new Exception(curl_error($ch), curl_errno($ch));
        }
    } finally {
        curl_close($ch);
    }

    return json_decode($output, true);
}

function get_trades_coin($coin){
    $coin = str_replace(' ', '-', $coin);
    $coin = strtolower($coin);
    $url = "https://api.coincap.io/v2/trades?symbol=bitcoin";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    $output = json_decode($output);
    return $output;
}
function get_assets_coins(){
    $url = "https://api.coincap.io/v2/assets";
    $assetIds = ["bitcoin","ethereum","litecoin","tron","usd coin","binance coin","bitcoin cash","dogecoin","monero","stellar","tezos","eos","shiba inu","chainlink","bitcoin gold","ethereum classic","xrp","cardano","dash","zcash","solana","apecoin","lunarcoin","polygon","filecoin","flamingo","mdex","qtum","biconomy","decentraland","the sandbox","yearn.finance","serum","barnbridge","power ledger","chiliz","sol1","pax gold","arbitrum","bonfida","power ledger","polyyield","numeraire","ethplorer","perpetual protocol","stratis","bakerytoken","wing finance","metal","myneighboralice","cocos-bcx","ontology","adex","superrare","voxel","beam","augur","dock","lisk","akropolis","uma","venus","bancor","audius","secret","fio protocol","orchid","celer network","mithril","curve dao token","iotex","celo","conflux network","ankr","radiant","gala","basic attention token","helium","vite","selfkey","tomochain","compound","ocean protocol","yieldshark","nexo","astrotools","gnosis","galaxy","woo","ravencoin","trust wallet token","near protocol","polkadot"];
    $ids = implode(',', $assetIds);
    

    $params = array(
        'ids' => $ids
    );
    

    $url .= '?' . http_build_query($params);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    
    $output = json_decode($output, true);
    
    return $output['data'];
}
function get_price_coin_to_usd($coin, $amount){
    $price = get_price_coin($coin);
    if($price == 0){
        $price = 1 ;
    }
    $total = $price * $amount;
    return number_format($total, 2, '.', '');
}
function get_procent_to_balance($total_balance){
    if($total_balance != 0){
        $balance_btc = get_price_coin_to_usd('bitcoin', get_balance_coin_this_user(189));
        $balance_eth = get_price_coin_to_usd('Ethereum', get_balance_coin_this_user(190));
        $percent_btc = ($balance_btc / $total_balance) * 100;
        $percent_eth = ($balance_eth / $total_balance) * 100;
    
    
        $percent_other = 100 - $percent_btc - $percent_eth;
    }
    else{
        $percent_btc = 0;
        $percent_eth = 0;
        $percent_other = 0;
    }
    return array('BTC' => number_format($percent_btc), 'ETH' => number_format($percent_eth), 'Other' => number_format($percent_other));
}
function convertCryptoPrice($amount, $coin1, $coin2) {
    $coin_info1 = get_coin_info($coin1);
    $spread1 = isset($coin_info1['spread']) && $coin_info1['spread'] == 0 ? 1 : $coin_info1['spread'];

    $coin_info2 = get_coin_info($coin2);
    $spread2 = isset($coin_info2['spread']) && $coin_info2['spread'] == 0 ? 1 : $coin_info2['spread'];

    $coin_full_name1 = strtolower($coin_info1['full_name']);
    $coin_full_name2 = strtolower($coin_info2['full_name']);

    $kurs_coin1 = get_price_coin_to_usd($coin_full_name1, $amount);
    $kurs_coin2 = get_price_coin_to_usd($coin_full_name2, 1);

    if ($kurs_coin1 == 0 || $kurs_coin2 == 0) {
        return 0; // или throw new Exception("Деление на ноль недопустимо");
    }

    $kurs_coin1 *= $spread1;
    $kurs_coin2 *= $spread2;

    $kurs = $kurs_coin1 / $kurs_coin2;

    return $kurs;
}
