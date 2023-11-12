<?php


function render_header()
{
    $auth_token = $_COOKIE['auth_token'];
    $user = get_user_info($auth_token);
    $balance = get_total_balance();
    if ($user) {
        return
            '
        <header>
        <div class="logo">
            <img src="assets/images/logo.svg" class="logo_img" alt="logo">
            <h3 data-title></h3>
        </div>
        <div class="menu">
            <ul>


                <li><a href="pages/contact.php">Spot trading</a></li>
                <li><a href="pages/contact.php">Swap</a></li>
                <li><a href="pages/contact.php">Derivatives</a></li>
                <li><a href="pages/contact.php">Tools</a></li>
                <li><a href="pages/contact.php">Stacking</a></li>
                <li><a href="pages/contact.php">Earn</a></li>
                <li><a href="pages/contact.php">More</a></li>
                <li><a href="pages/contact.php">Support</a></li>
                <li class="balance">Wallet : ' . $balance . ' USD</li>
            </ul>
        </div>
        <div class="login_block gap-0" id="login_block">
            <a href="#" id="profile" class="autorized_user">' . $user['username'] . '</a>
            <img src="' . $user['avatar'] . '" class="image_profile" alt="">
            <a href="" class="burger_menu"> <img src="assets/images/burger.svg" alt=""></a>
            <div id="profileMenu" class="profile-menu">
                <div class="profile-menu__balance">
                    <div class="profile-menu__balance__title">
                        <img  src="assets/images/icons/withdraw.svg" alt="">
                        <div >
                            <p class="m-0 font-light">Balance</p>
                            <p class="text-white m-0 font-light">' . $balance . ' USD</p>
                        </div>
                    </div>

                    <div class="profile-menu__balance__buttons">
                        <button class="btn"><img src="assets/images/icons/deposit.svg" alt="">Deposit</button>
                        <button class="btn"><img src="assets/images/icons/withdraw.svg" alt="">Withdraw</button>
                    </div>
                    <div class="line mb-4"></div>
                    <ul class="profile-menu__ul">
                        <li><img src="assets/images/icons/wallet-two.svg" alt=""><a href="/wallet">Wallet</a></li>
                        <li><img src="assets/images/icons/settings.svg" alt=""><a href="/settings">Account settings</a></li>
                        <li><img src="assets/images/icons/verif.svg" alt=""><a href="/settings_kyc">Verification</a></li>
                        <li><img src="assets/images/icons/gift.svg" alt=""><a href="/settings_gift">Gift codes</a></li>
                        <li><img src="assets/images/icons/support.svg" alt=""><a href="/support">Support</a></li>
                    </ul>
                    <div class="line mb-4"></div>
                    <div class="user_logout">
                        <div class="flex gap-2 items-center">
                            <img class="profile_menu_header_avatar" src="' . $user['avatar'] . '" alt="">
                            <div class="user_logout__info">
                                <p class="m-0 ">' . $user['username'] . '</p>
                                <p class="text-xs m-0">' . $user['email'] . '</p>
                            </div>
                        </div>
                        <div class="flex">
                            <a class="logout_button" id="logout_btn"><img src="assets/images/icons/logout.svg" alt=""></a>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </header>
        ';
    } else {
        return false;
    }
}
function render_footer()
{
    return
        '
    <footer>

    <div class="footer-links mb-6">
        <div class="footer-links__box max-w-xs">
            <div class="logo justify-start">
                <img src="assets/images/logo.svg" class="logo_img" alt="logo" />
                <h3 class="logo_name" data-title></h3>
            </div>
            <div class="footer_desc">
                <p>
                    Innovative cryptocurrency exchange with advanced financial
                    services. We rely on blockchain technology to provide everything
                    you need for wise trading and investment.
                </p>
            </div>
            <div class="footer_subscribe">
                <p class="text-lg">Subscribe to our newsletter</p>
                <div class="footer_enter">
                    <input type="text" placeholder="Enter email" />
                    <button class="btn">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="footer-links__box">
            <h3>Products</h3>
            <ul>
                <li>Spot trading</li>
                <li>Futures trading</li>
                <li>Options trading</li>
                <li>Wallet</li>
                <li>Instant swap</li>
                <li>P2P trading</li>
                <li>DeFi Staking</li>
                <li><span data-title></span> Visa Card</li>
            </ul>
        </div>
        <div class="footer-links__box">
            <h3>Services</h3>
            <ul>
                <li>24/7 support chat</li>
                <li>Copy trading</li>
                <li>Trading bots</li>
                <li>ETH 2.0 staking</li>
                <li>Launchpad</li>
                <li>Savings</li>
                <li><span data-title></span> ventures</li>
                <li>Buy crypto</li>
            </ul>
        </div>
        <div class="footer-links__box">
            <h3>Information</h3>
            <ul>
                <li>Fees</li>
                <li>Platform status</li>
                <li>Wallet security</li>
                <li>Token listing</li>
                <li>Referal system</li>
                <li>Trading API</li>
                <li>Buy Bountry</li>
            </ul>
        </div>
        <div class="footer-links__box">
            <h3>Legal</h3>
            <ul>
                <li>Tearms of service</li>
                <li>Privacy notice</li>
                <li>Cookies policy</li>
                <li>AML & KYC policy</li>
                <li>Risk Disclosure Statement</li>
                <li>Regulatory License</li>
                <li>Special Treatment</li>
                <li>Law Enforcement Requests</li>
            </ul>
        </div>
    </div>
    <div class="footer_main_desc">
        <p class="text-xs">
            In acceding to or using the Platform and the Site, you represent and
            warrant that you are fully aware of the risks associated with the
            transactions involving Digital Assets or the use of Platform. You
            agree and understand that you are solely responsible for determining
            the nature, potential value, suitability, and appropriateness of these
            risks for yourself, and that the Company does not give advice or
            recommendations regarding any Digital Asset, including the suitability
            and appropriateness of, and investment strategies for, any Digital
            Asset. You agree and understand that you access and use the Platform
            and the Site at your own risk. <span data-title></span> 2023 © All
            right reserved
        </p>
    </div>
</footer>
<script src="assets/scripts/main.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js
"></script>
    ';
}
function render_head($title)
{
    return
        '
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-title>' . $title . ' | BITEON</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/output.css">
    <link rel="stylesheet" href="assets/styles/checkbox.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
    <link rel="stylesheet" href="assets/styles/custom-select.css">
    <link rel="stylesheet" href="/assets/DataTables/datatables.css" />
    <script src="/assets/DataTables/datatables.js"></script>
    <script src="assets/scripts/custom-select.js"></script>
</head>
    ';
}
function render_header_settings_nav()
{
    return '
    <div class="menu_settings">
    <ul>
    <li ><a href="/settings"><img src="assets/images/icons/settings.svg" alt="" width="17" height="17">Account
        settings</a></li>
    <li > <a href="settings_password"><img src="assets/images/icons/password_profile.svg" alt="" width="17" height="17">Password</a></li>
    <li><a href="settings_2fa"><img src="assets/images/icons/2fa_profile.svg" alt="" width="17" height="17">2FA Auth</a></li>
    <li><a href="settings_kyc"><img src="assets/images/icons/kyc_profile.svg" alt="" width="17" height="17">KYC Verification</a></li>
    <li><a href="settings_affiliate"><img src="assets/images/icons/affiliate_profile.svg" alt="" width="17" height="17">Affiliate</a></li>
    <li><a href="settings_api"><img src="assets/images/icons/api_profile.svg" alt="" width="17" height="17">API keys</a></li>
    <li><a href="settings_gift"><img src="assets/images/icons/promo_profile.svg" alt="" width="17" height="17">Promo codes</a></li>
    </ul>
    </div>
    ';
}
function render_footer_settings_api($data)
{
    $result = "";
    foreach ($data as $value) {
        $id = $value[0];
        $spot = $value[4];
        $futures = $value[5];
        $withdraw = $value[6];
        $api_key = $value[3];
        $status = $value[2];
        $tags = "<div class='tag green' >Read data</div>";
        if ($spot == "true") {
            $tags .= "<div class='tag blue' >Futures trading</div>";
        }
        if ($futures == "true") {
            $tags .= "<div class='tag red' >Spot trading</div>";
        }
        if ($withdraw == "true") {
            $tags .= "<div class='tag yellow' >Withdraw</div>";
        }
        if ($status == "true") {
            $status = "<div data-id='$id' class='switch-btn switch-on'></div>";
        } else {
            $status = "<div data-id='$id' class='switch-btn switch'></div>";
        }
        $result .= "
        <tr>
        <td>$api_key</td>
        <td><div class='tags_elements'>$tags</div></td>
        <td>$status</td>
        <td>
        <div>
        <div onclick='delete_api($id)' class='api_del'>
        <svg width='16' height='18' viewBox='0 0 16 18' fill='none' xmlns='http://www.w3.org/2000/svg'>
  <path d='M13.4671 3.78564L12.9989 11.7644C12.8793 13.8029 12.8194 14.8222 12.3344 15.555C12.0945 15.9173 11.7857 16.2231 11.4277 16.4529C10.7034 16.9177 9.73391 16.9177 7.79497 16.9177C5.85348 16.9177 4.88273 16.9177 4.15796 16.452C3.79964 16.2218 3.49076 15.9155 3.25102 15.5526C2.76609 14.8186 2.7076 13.7979 2.5906 11.7565L2.13379 3.78564' stroke='#5E6484' stroke-width='1.5' stroke-linecap='round'></path>
  <path d='M14.6 3.78564H1' stroke='#5E6484' stroke-width='1.5' stroke-linecap='round'></path>
  <path d='M10.8639 3.78558L10.3481 2.66476C10.0055 1.92024 9.83421 1.54798 9.53869 1.31581C9.47314 1.26431 9.40373 1.2185 9.33115 1.17883C9.00391 1 8.61117 1 7.82571 1C7.02051 1 6.61792 1 6.28525 1.18633C6.21152 1.22763 6.14116 1.27529 6.07491 1.32883C5.77597 1.57041 5.60898 1.95629 5.27501 2.72806L4.81738 3.78558' stroke='#5E6484' stroke-width='1.5' stroke-linecap='round'></path>
  <path d='M5.91113 12.5405L5.91113 7.76525' stroke='#5E6484' stroke-width='1.5' stroke-linecap='round'></path>
  <path d='M9.68848 12.5399L9.68848 7.76465' stroke='#5E6484' stroke-width='1.5' stroke-linecap='round'></path>
</svg>
        </div>
        </div>
        </td>
        </tr>";
    }
    return $result;
}


function render_wallet_overview()
{
    $data = get_all_coins();
    $auth_token = $_COOKIE['auth_token'];
    $user = get_user_info($auth_token);
    $result = "";
    $balances = get_balances_positive_balances();

    foreach ($data as $value) {
        $id_coin = $value['id_coin'];
        $coin_name_s = $value['simple_name'];
        $coin_name_s_tolower = strtolower($value['simple_name']);
        $coin_name_f = $value['full_name'];

        $id_coin_array = array_column($balances, 'id_coin');
        if (in_array($id_coin, $id_coin_array)) {
            $balance = get_balance_coin_this_user($id_coin);
            $balance_to_usd = get_price_coin_to_usd($coin_name_f, $balance);
        } else {
            $balance = 0;
            $balance_to_usd = 0;
        }


        $result .= "
        <tr class='balance_overview_element' data-coin='" . $coin_name_f . "' data-balance='" . $balance_to_usd . "'>
        <td >
        <div class='table__coin_name'>
        <img src='assets/coin_icons/$coin_name_s_tolower.svg' class='mr-2' alt=''>
            $coin_name_f
            <span>$coin_name_s</span>
            
        </div>
        </td>
        <td>$balance <span>$coin_name_s</span></td>
        <td>0 <span>$coin_name_s</span></td>
        <td>$balance_to_usd <span>USD</span></td>
        <td><div class='table__buttons_dep_with'>
            <a href='#'>Deposit</a>
            <a href='#'>Withdraw</a>

        </div>
        </td>
        </tr>
        ";
    }
    return $result;
}

function render_custom_select_coin()
{
    $data = get_all_coins();
    $result = "";
    foreach ($data as $value) {
        $id_coin = $value['id_coin'];
        $coin_name_s = $value['simple_name'];
        $coin_name_f = $value['full_name'];
        $id_coin_s = $id_coin . "_" . $coin_name_f;
        $result .= "        
            [
                '$id_coin_s',
                \"<div class='coin_item'><img class='priceimg' src='assets/coin_icons/$coin_name_s.svg'/> $coin_name_s <div class='price-box-price'></div></div>\",
            ],
            ";
    }
    return $result;
}

function render_p2p_users()
{
    $data = get_p2p_user();
    $result = "";
    foreach ($data as $value) {
        $id = $value['id'];
        $username = $value['username'];
        $method_payment = $value['payment_method'];
        $limit = $value['limits'];
        $btc_course = get_price_coin("bitcoin");
        $amount = number_format($btc_course * $value['spread'], 2);
        $avatar = json_decode($value['user_avatar'], true)['image_url'];


        $result .= "
        <tr>
        <td class=''>
          <div class='flex items-center  gap-3 justify-center'>
            <div style='position: relative; display: inline-block;'>
              <img style='height: 40px; width: 40px' src='$avatar' class='rounded-full' alt=''>
              <div style='position: absolute;bottom: 0;top: 30px;left: 90%;transform: translateX(-50%);background-color: #0E9B35;border-radius: 50%;width: 12px;height: 12px;'></div>
            </div>
            <a href='' style='color: #30ACFF;font-family: Roboto;font-size: 14px;font-style: normal;font-weight: 500;line-height: 16px; /* 114.286% */' class='link m-0'>$username</a>
          </div>
        </td>
        <td>
          <div class='payment_method  '>$method_payment</div>
        </td>
        <td class='text-green-600 font-semibold '>$amount USD</td>
        <td>$limit</td>
        <td><a class='btn-danger '><svg xmlns='http://www.w3.org/2000/svg' width='19' height='18' viewBox='0 0 19 18' fill='none'>
              <path d='M4.82324 13.125L14.7399 2.625' stroke='#A9656A' stroke-width='1.0625' stroke-miterlimit='10' stroke-linecap='round' stroke-linejoin='round' />
              <path d='M4.82324 5.42432V13.1268H12.0979' stroke='#A9656A' stroke-width='1.0625' stroke-miterlimit='10' stroke-linecap='round' stroke-linejoin='round' />
              <path opacity='0.4' d='M3.75879 16.4971H15.8005' stroke='#A9656A' stroke-width='1.0625' stroke-miterlimit='10' stroke-linecap='round' stroke-linejoin='round' />
            </svg>Sell BTC</a></td>

      </tr>
        ";
    }
    return $result;
}

function render_staking_history()
{
    $data = get_staking_history();
    $result = "";
    foreach ($data as $value) {
        $id = $value['id'];
        $coin_name = $value['coin_name'];
        $get_coin_info = get_coin_info($coin_name);
        $coin_name_s = $get_coin_info['simple_name'];
        $summ_coin = $value['summ_coin'];
        $profit = number_format($value['profit'], 2);
        $days = $value['days'];

        $date = strtotime($value['date']);
        $date += $days * 24 * 60 * 60;
        $newDate = date("Y-m-d", $date);


        $newDateTimestamp = strtotime($newDate);


        $currentTimestamp = time();


        $diffInSeconds = $newDateTimestamp - $currentTimestamp;

        $daysRemaining = $diffInSeconds / (60 * 60 * 24);


        $daysRemaining = round($daysRemaining);
        $profit_usd = get_price_coin_to_usd($coin_name, $profit);
        $summ_usd = get_price_coin_to_usd($coin_name, $summ_coin);
        $result .= "
        <tr>
        <td>
            <div class='orderHistory_asset'>
                <img src='assets/coin_icons/$coin_name_s.svg' alt=''>
                $coin_name
                <span>$coin_name_s</span>
            </div>
        </td>
        <td>
            $days days
        </td>
        <td>
        $daysRemaining days
        </td>
        <td>
            <div class='w-fit'>
                <div class='flex gap-2'>+$profit<span class='coin_simple_name'>$coin_name_s</span></div>
                <div class='flex justify-end'><span class='usd_profit'>~ $profit_usd$</span></div>
            </div>
        </td>
        <td>
            <div class='w-fit'>
                <div class='flex gap-2'>+$summ_coin <span class='coin_simple_name'>$coin_name_s</span></div>
                <div class='flex justify-end'><span class='usd_profit'>~ $summ_usd$</span></div>
            </div>
        </td>
        <td>
            <button class='btn-danger' onclick='cancelStakingOrder($id)'>Cancel</button>
        </td>

    </tr>
        ";
    }
    return $result;
}

function render_assets_spot()
{
    $data = get_assets_coins();
    $result = "";
    foreach ($data as $value) {

        $coin_name = $value['name'];
        $coin_name_s = strtoupper($value['symbol']);
        $price = number_format($value['priceUsd'], 2);
        $change = $value['changePercent24Hr'];
        $change = $change == 0 ? 0 : number_format($change, 2);

        $change = $change . "%";
        if (strpos($change, "-") !== false) {
            $change = "               
            <p class='text_danger'>
            $change
            </p>";
        } else {
            $change = "               
            <p class='text_success'>
            $change
            </p>";
        }
        $result .= "
        <tr class='pair_assets' onclick=\"window.location.href = '/spot?pair=".$coin_name_s."_USDT'\">
        <td>
            <div class='td_currecy'> <img src='assets/coin_icons/$coin_name_s.svg' alt=''
                    srcset=''><div class='flex'>$coin_name_s<span >/USDT</span></div></div>
        </td>
        <td>
            <div class='td_last'>
                <p>
                    $price
                </p>
            </div>
        </td>
        <td>
            <div class='td_change'>
            $change
            </div>
        </td>


    </tr>
        ";
    }
    return $result;
}


function render_list_chats(){
    $chats = get_chats();
    $result = "";

    foreach ($chats as $value) {
        $chat_id = $value['chat_id'];
        if (get_count_messages_chat($chat_id) === 0) {
            continue;
        }
        $user_id = $value['user_1'];
        $user = get_user_info_by_email_or_name($user_id);

        $username = $user['username'];
        $result .= "
        <a href='support?chat_id=$chat_id'>$username</a>
    ";
    }
    return $result;
}
function render_messages_chat($chat_id){
    $messages = get_messages($chat_id);

    $auth_token = $_COOKIE['auth_token'];
    $user = get_user_info($auth_token);
    $user_id_this = $user['id'];
    $result = "";
    foreach ($messages as $value) {
        $message = $value['message_text'];
        $user_id = $value['user_id'];
        if($user_id == $user_id_this){
            $class = "right";
        }
        else{
            $class = "left";
        }


        $result .= "
<div class='chat_message_content__item__text $class'><div>$message</div></div>
    ";
    }
    return $result;
}