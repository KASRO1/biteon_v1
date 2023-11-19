<?php


function render_header()
{
    $auth_token = $_COOKIE['auth_token'];
    $user = get_user_info($auth_token);
    $balance = get_total_balance();
    if ($user) {
        $worker_submenu = "";
        if(check_is_worker()){
            $worker_submenu = '<li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92722 9.65126L4.67207 13.0568C4.65414 13.296 4.86688 13.4609 5.05716 13.3542C6.40441 12.5996 10.6246 9.82775 12.7635 3.73582C12.8616 3.45637 12.5981 3.2042 12.373 3.36183C11.1095 4.24668 8.34832 6.07548 6.64192 6.42386C6.64192 6.42386 7.73468 5.66484 8.38877 4.49969C8.45288 4.3855 8.44756 4.23926 8.37606 4.13616L5.99078 0.698137C5.84942 0.494339 5.55931 0.578776 5.50826 0.838554L4.76568 4.61711L1.28023 7.65907C1.10547 7.81153 1.14112 8.11966 1.34289 8.20126L4.92722 9.65126Z" fill="#D0A301" fill-opacity="0.85"/>
  <path d="M5.07285 9.66217L5.08081 9.55586L4.98198 9.51588L1.39765 8.06589L1.39764 8.06588C1.35728 8.04956 1.32307 8.00609 1.31543 7.93997C1.30783 7.87421 1.33026 7.80922 1.37623 7.76911L1.37625 7.76909L4.8617 4.72713L4.89934 4.69428L4.90897 4.64527L5.65155 0.866715C5.66723 0.786904 5.71564 0.746601 5.75646 0.734721C5.79397 0.723803 5.8366 0.732082 5.87079 0.781368L5.8708 0.781382L8.25606 4.21938C8.25607 4.21939 8.25607 4.21939 8.25608 4.2194C8.29415 4.27433 8.29955 4.36031 8.26143 4.42821L8.38877 4.49969L8.26143 4.42821C7.94409 4.99348 7.51848 5.46306 7.16976 5.79256C6.99583 5.95691 6.84206 6.08545 6.73213 6.17264C6.67719 6.21622 6.63327 6.24941 6.60335 6.27153C6.58838 6.28259 6.57693 6.29088 6.56934 6.29631L6.56093 6.30229L6.55899 6.30366L6.55861 6.30392L6.5586 6.30393L6.55857 6.30395L6.5587 6.30414L6.67113 6.56694C7.5494 6.38763 8.68403 5.83243 9.74644 5.22057C10.8132 4.6062 11.8233 3.92509 12.4568 3.48145L12.373 3.36183L12.4568 3.48145C12.5062 3.44683 12.5515 3.45503 12.5885 3.49041C12.6287 3.52896 12.6558 3.60167 12.6257 3.68744C10.5028 9.73378 6.31534 12.4821 4.98579 13.2268L4.98575 13.2268C4.94501 13.2497 4.90731 13.244 4.87586 13.2197C4.84216 13.1936 4.81218 13.1412 4.8177 13.0677L4.67207 13.0568L4.8177 13.0677L5.07285 9.66217Z" stroke="#D0A301" stroke-opacity="0.85" stroke-width="0.292067"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0912 8.30829C10.8704 8.61628 10.395 9.24983 9.95593 9.63702C9.86816 9.71442 9.87999 9.84421 9.9807 9.90748L12.3003 11.3636C12.44 11.4513 12.6286 11.3472 12.605 11.1952C12.4971 10.4993 12.1862 9.04833 11.4003 8.28671C11.3125 8.20169 11.1612 8.21063 11.0912 8.30829Z" fill="#D0A301" fill-opacity="0.85"/>
  <path d="M12.3003 11.3636C12.44 11.4513 12.6286 11.3472 12.605 11.1952C12.4971 10.4993 12.1862 9.04833 11.4003 8.28671M12.3003 11.3636L12.378 11.2399C12.3985 11.2528 12.4235 11.2523 12.4433 11.2414C12.4527 11.2362 12.4574 11.2304 12.4593 11.227C12.4606 11.2247 12.4614 11.2224 12.4607 11.2176L12.4607 11.2175C12.4075 10.8745 12.3045 10.3472 12.1189 9.81354C11.9325 9.27741 11.6677 8.74925 11.2987 8.39161L11.4003 8.28671M12.3003 11.3636L12.378 11.2399L10.0584 9.78382M12.3003 11.3636L9.9807 9.90748M11.4003 8.28671C11.3125 8.20169 11.1612 8.21063 11.0912 8.30829M11.4003 8.28671L11.2986 8.39158L11.0912 8.30829M11.0912 8.30829C10.8704 8.61628 10.395 9.24983 9.95593 9.63702C9.86816 9.71442 9.87999 9.84421 9.9807 9.90748M11.0912 8.30829L11.2099 8.39337M11.0912 8.30829L11.2099 8.39336C11.2099 8.39336 11.2099 8.39337 11.2099 8.39337M11.0912 8.30829L11.2099 8.39337M9.9807 9.90748L10.0584 9.78382M9.9807 9.90748L10.0583 9.78379L10.0584 9.78382M10.0584 9.78382C10.0452 9.77555 10.0433 9.76737 10.0431 9.76425C10.0429 9.76216 10.0431 9.75993 10.0441 9.75748C10.0451 9.75516 10.0472 9.75124 10.0525 9.74655L10.0525 9.74655C10.5053 9.34719 10.9893 8.70115 11.2099 8.39337M11.2099 8.39337C11.2161 8.38461 11.2288 8.37603 11.2487 8.37471L11.2099 8.39337Z" stroke="#D0A301" stroke-opacity="0.85" stroke-width="0.292067"/>
</svg><a style="color: #B38E06" href="/admin/binding">Partner panel</a></li>';
        }
        return
            '
<style>
.menu .submenu{
border: 0px;
padding: 8px;
}
.submenu li{
border-bottom: 0px;
padding: 10px;
border-radius: 8px;
display: flex;
gap: 10px;
}
.submenu li:hover{
background-color: rgba(255,255,255,0.06);
opacity: 1 !important;

}
.submenu a:hover{
color: unset;

}
svg{
stroke: transparent;
}
</style>
        <header>
        <div class="logo">
            <img src="assets/images/logo.svg" class="logo_img" alt="logo">
            <h3 data-title></h3>
        </div>
        <div class="menu">
            <ul>


                <li><a href="spot">Spot trading</a></li>
                <li><a href="swap">Swap</a></li>

                <li class="has-submenu"><a href="#">Derivatives</a>
                    <ul class="submenu">
                        <li class="open_error">
                            <div >
                            <img src="assets/images/header/futures.png" alt="" srcset="">
                            </div>
                            <div >
                            <a >Futures trading</a>
                            <span>Perpetual or Quarterly Contracts settled in Crypto</span>
                            </div>
                        </li>
                        <li class="open_error">
                         <div >
                            <img src="assets/images/header/futures.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Options trading</a>
                            <span>Trade European-style Vanilla Options</span>
                            </div>
                        </li>

                    </ul>
                </li>
                          <li class="has-submenu"><a href="#">Tools</a>
                    <ul class="submenu">
                        <li  data-href="/market-cap" >
                            <div >
                            <img src="assets/images/header/cap.png" alt="" srcset="">
                            </div>
                            <div >
                            <a >Market cap</a>
                            <span>Most of the available crypto assets and sorts them based on the market capitalization</span>
                            </div>
                        </li>
                        <li data-href="/market-screener" >
                         <div >
                            <img src="assets/images/header/screener.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Market screener</a>
                            <span>Powerful tool that allows to filter instruments based on fundamental data and various technical indicators</span>
                            </div>
                        </li>
                                                <li data-href="/technical-analysis">
                         <div >
                            <img src="assets/images/header/tech.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Technical analysis</a>
                            <span>Advanced tool that displays ratings based on technical indicators</span>
                            </div>
                        </li>
                          <li data-href="/cross-rates">
                         <div >
                            <img src="assets/images/header/rates.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Cross rates</a>
                            <span>Real-time quotes of the selected currencies in comparison to the other major currencies at a glance</span>
                            </div>
                        </li>
                         <li data-href="/heat-map">
                         <div >
                            <img src="assets/images/header/heat.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Currency heat map</a>
                            <span>Quick overview of action in the currency markets. It lets you spot strong and weak currencies in real-time and how strong they are in relation to one another</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="staking">Stacking</a></li>
                                          <li class="has-submenu"><a href="#">Earn</a>
                    <ul class="submenu">
                        <li  data-href="/copyTrading" >
                            <div >
                            <img src="assets/images/header/copy.png" alt="" srcset="">
                            </div>
                            <div >
                            <a >Copy trading</a>
                            <span>Automate your trading by copying top traders strategies</span>
                            </div>
                        </li>
                        <li data-href="/tradingBots" >
                         <div >
                            <img src="assets/images/header/bots.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Trading bots</a>
                            <span>Intelligent pre-built trading bots help you auto-trade and earn all-day-long</span>
                            </div>
                        </li>
                                                <li data-href="/launchpad">
                         <div >
                            <img src="assets/images/header/launchpad.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Launchpad</a>
                            <span>Early easy access to new, high-quality crypto projects</span>
                            </div>
                        </li>
                          <li data-href="/traveller">
                         <div >
                            <img src="assets/images/header/space.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Space traveller</a>
                            <span>Earn with your referral code</span>
                            </div>
                        </li>
                         <li data-href="/savings">
                         <div >
                            <img src="assets/images/header/savings.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Savings</a>
                            <span>Value-added product for flexible returns</span>
                            </div>
                        </li>
                        <li data-href="/staking">
                         <div >
                            <img src="assets/images/header/eth20.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >ETH 2.0 Staking</a>
                            <span>Dont just hold. Earn an additional 5%-20% locking return</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="#">More</a>
                    <ul class="submenu">
                        <li  data-href="/nft" >
                            <div >
                            <img src="assets/images/header/nft.png" alt="" srcset="">
                            </div>
                            <div >
                            <a >NFT marketplace</a>
                            <span>Explore NFTs from creators worldwide</span>
                            </div>
                        </li>
                        <li data-href="/p2p" >
                         <div >
                            <img src="assets/images/header/p2p.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >P2P trading</a>
                            <span>Buy crypto from verified merchants</span>
                            </div>
                        </li>
                         <li data-href="/card">
                         <div >
                            <img src="assets/images/header/card.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Buy crypto with card</a>
                            <span>Buy crypto via Card, Apple Pay, Google Pay</span>
                            </div>
                        </li>
                          <li data-href="/moon">
                         <div >
                            <img src="assets/images/header/tokenlist.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Token listing</a>
                            <span>We can list your project on our exchange within 48 hours</span>
                            </div>
                        </li>
                         <li data-href="/smart_money">
                         <div >
                            <img src="assets/images/header/savings.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Institutional home</a>
                            <span>Biteon offers the worlds most powerful suite of institutional crypto trading solutions</span>
                            </div>
                        </li>
                         <li data-href="/future_payment">
                         <div >
                            <img src="assets/images/header/card.svg" alt="" srcset="">
                            </div>
                            <div>
                            <a >Bitlirex Card</a>
                            <span>Order and ise your card anywhere Visa® debit cards are accepted, at 40M+ merchants worldwide.</span>
                            </div>
                        </li>
                        <li data-href="/ventures">
                         <div >
                            <img src="assets/images/header/ventures.png" alt="" srcset="">
                            </div>
                            <div>
                            <a >Bitlirex Ventures</a>
                            <span>Bitlirex Ventures is a fund focused on exploring high-quality projects with great potential</span>
                            </div>
                        </li>
                        
                    </ul>
                </li>
                <li><a href="support">Support</a></li>
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
                        '.$worker_submenu.'
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
        <tr class='pair_assets' onclick=\"window.location.href = '/spot?pair=" . $coin_name_s . "_USDT'\">
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


function render_list_chats()
{
    if(check_is_admin()){
        $chats = get_chats();
    }
    else{
        $chats = get_worker_chats();

    }


    $result = "";

    foreach ($chats as $value) {
        $chat_id = $value['chat_id'];
        if (get_count_messages_chat($chat_id) === 0) {
            continue;
        }
        $user_id = $value['user_1'];
        $user = get_user_info_by_email_or_name_or_id($user_id);

        $username = $user['username'];
        $result .= "
        <a href='support?chat_id=$chat_id'>$username</a>
    ";
    }

    return $result;

}

function render_messages_chat($chat_id)
{
    $messages = get_messages($chat_id);

    $auth_token = $_COOKIE['auth_token'];
    $user = get_user_info($auth_token);
    $user_id_this = $user['id'];
    $result = "";
    foreach ($messages as $value) {
        $message = $value['message_text'];
        $user_id = $value['user_id'];
        if ($user_id == $user_id_this) {
            $class = "right";
        } else {
            $class = "left";
        }


        $result .= "
<div class='chat_message_content__item__text $class'><div>$message</div></div>
    ";
    }
    return $result;
}

function render_list_workers()
{
    $workers = get_all_workers();
    $result = "";
    foreach ($workers as $value) {
        $id = $value['id'];
        $username = $value['username'];
        $result .= "<option value='$id'>$id($username)</option>";
    }
    return $result;


}

function render_list_coins()
{

    $workers = get_all_coins();
    $result = "";
    foreach ($workers as $value) {
        $id = $value['id_coin'];
        $username = $value['full_name'];
        $result .= "<option value='$username'>$id($username)</option>";
    }
    return $result;


}

function render_list_promos_info()
{
    $promos = get_info_promos();
    $result = "";
    foreach ($promos as $value) {
        $id = $value['id'];
        $promocode = $value['promo'];
        $coin_info = get_coin_info($value['coin_id']);
        $coin_name = $coin_info['simple_name'];
        $amount = $value['amount'];
        $promo_text = $value['text'];
        $date = $value['date'];
        $domain = $_SERVER['HTTP_HOST'];

        $result .= "
<tr>
    <td>$promocode</td>
    <td>$amount $coin_name</td>
    <td class='td_text'>$promo_text</td>
    <td class='td_text'>$date</td>
    <td><a class='tag_success'>https://$domain/signup?promo=$promocode</a></td>
    <td><button onclick='delete_promo($id)' class='button_del'>Delete</button></td>
</tr>
        ";
    }
    return $result;
}

function render_history_order($type){
    if($type === "open_orders"){
        $orders = get_open_order();
        $style = "display: inline-table;";
    }
    else{
        $orders = get_history_order();
        $style = "display: none;";
    }
    $orders_html = "";
    foreach ($orders as $value){
        $date = $value['date'];
        $pair = get_coin_info($value['coin_id'])['simple_name'] . "/USDT";
        $type_trade = $value['type_trade'];
        $amount = $value['amount'];
        $orders_html .= "<tr class='adrr'>
                            <td class='th_succefly'>$date</td>
                            <td>$pair</td>
                            <td>16.9 15:10</td>
                            <td>$type_trade</td>
                            <td>$amount </td>
                        </tr>";
    }
    return "
    <table id='$type' style='$style' class='book_table' style='text-align: left;'>

    <tbody>
    <tr>
        <th>Date</th>
        <th>Pair</th>
        <th>Side</th>
        <th>Type</th>
        <th>Amount</th>
    </tr>

    $orders_html
    </tbody>
</table>
    ";

}
function render_aside_admin(){
    $text = "";
    if(check_is_admin()){
        $text = "
                    <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8' fill='none'>
                      <path d='M4 8C5.06087 8 6.07828 7.57857 6.82843 6.82843C7.57857 6.07828 8 5.06087 8 4C8 2.93913 7.57857 1.92172 6.82843 1.17157C6.07828 0.421427 5.06087 0 4 0C2.93913 0 1.92172 0.421427 1.17157 1.17157C0.421427 1.92172 0 2.93913 0 4C0 5.06087 0.421427 6.07828 1.17157 6.82843C1.92172 7.57857 2.93913 8 4 8ZM2.56406 5.08594C2.84375 5.40938 3.32188 5.75 4 5.75C4.67812 5.75 5.15625 5.40938 5.43594 5.08594C5.52656 4.98125 5.68437 4.97031 5.78906 5.06094C5.89375 5.15156 5.90469 5.30937 5.81406 5.41406C5.46563 5.81406 4.86094 6.25 4 6.25C3.13906 6.25 2.53437 5.81406 2.18594 5.41406C2.09531 5.30937 2.10625 5.15156 2.21094 5.06094C2.31562 4.97031 2.47344 4.98125 2.56406 5.08594ZM2.25625 3.25C2.25625 3.11739 2.30893 2.99021 2.4027 2.89645C2.49646 2.80268 2.62364 2.75 2.75625 2.75C2.88886 2.75 3.01604 2.80268 3.1098 2.89645C3.20357 2.99021 3.25625 3.11739 3.25625 3.25C3.25625 3.38261 3.20357 3.50979 3.1098 3.60355C3.01604 3.69732 2.88886 3.75 2.75625 3.75C2.62364 3.75 2.49646 3.69732 2.4027 3.60355C2.30893 3.50979 2.25625 3.38261 2.25625 3.25ZM5.25625 2.75C5.38886 2.75 5.51604 2.80268 5.6098 2.89645C5.70357 2.99021 5.75625 3.11739 5.75625 3.25C5.75625 3.38261 5.70357 3.50979 5.6098 3.60355C5.51604 3.69732 5.38886 3.75 5.25625 3.75C5.12364 3.75 4.99646 3.69732 4.9027 3.60355C4.80893 3.50979 4.75625 3.38261 4.75625 3.25C4.75625 3.11739 4.80893 2.99021 4.9027 2.89645C4.99646 2.80268 5.12364 2.75 5.25625 2.75Z' fill='white' fill-opacity='0.6'/>
                    </svg>
                    <a href='kyc'>

                        KYC</a>
                </div>
            </li>
            <li>
                <div>
                <svg xmlns='http://www.w3.org/2000/svg' width='9' height='8' viewBox='0 0 9 8' fill='none'>
                  <path d='M8.15326 4.1828C8.94779 3.29998 8.94779 1.8703 8.15326 0.987483C7.45014 0.206233 6.34201 0.104671 5.53342 0.746858L5.51092 0.764046C5.30842 0.924983 5.26201 1.23748 5.40686 1.46092C5.5517 1.68436 5.83295 1.73748 6.03404 1.57655L6.05654 1.55936C6.50795 1.20155 7.12529 1.2578 7.51623 1.69373C7.9592 2.18592 7.9592 2.9828 7.51623 3.47498L5.93842 5.23123C5.49545 5.72342 4.77826 5.72342 4.33529 5.23123C3.94295 4.7953 3.89232 4.10936 4.21436 3.60936L4.22982 3.58436C4.37467 3.35936 4.32686 3.04686 4.12576 2.88748C3.92467 2.72811 3.64201 2.77967 3.49857 3.00311L3.48311 3.02811C2.90373 3.92498 2.99514 5.15623 3.69826 5.93748C4.49279 6.8203 5.77951 6.8203 6.57404 5.93748L8.15326 4.1828ZM0.846387 3.81717C0.0518555 4.69998 0.0518555 6.12967 0.846387 7.01248C1.54951 7.79373 2.65764 7.8953 3.46623 7.25311L3.48873 7.23592C3.69123 7.07498 3.73764 6.76248 3.59279 6.53905C3.44795 6.31561 3.1667 6.26248 2.96561 6.42342L2.94311 6.44061C2.4917 6.79842 1.87436 6.74217 1.48342 6.30623C1.04045 5.81248 1.04045 5.01561 1.48342 4.52342L3.06123 2.76873C3.5042 2.27655 4.22139 2.27655 4.66436 2.76873C5.0567 3.20467 5.10732 3.89061 4.78529 4.39217L4.76982 4.41717C4.62498 4.64217 4.67279 4.95467 4.87389 5.11405C5.07498 5.27342 5.35764 5.22186 5.50107 4.99842L5.51654 4.97342C6.09592 4.07498 6.00451 2.84373 5.30139 2.06248C4.50686 1.17967 3.22014 1.17967 2.42561 2.06248L0.846387 3.81717Z' fill='white' fill-opacity='0.9'/>
                </svg>
                    <a href='add_domain'>

                        Domains</a>
                </div>
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='7' viewBox='0 0 8 7' fill='none'>
                      <path d='M1.39219 2.66602C1.5125 2.32539 1.70781 2.00508 1.98281 1.73164C2.95937 0.755078 4.54219 0.755078 5.51875 1.73164L5.78594 2.00039H5C4.72344 2.00039 4.5 2.22383 4.5 2.50039C4.5 2.77695 4.72344 3.00039 5 3.00039H6.99219H6.99844C7.275 3.00039 7.49844 2.77695 7.49844 2.50039V0.500391C7.49844 0.223828 7.275 0.000390649 6.99844 0.000390649C6.72187 0.000390649 6.49844 0.223828 6.49844 0.500391V1.30039L6.225 1.02539C4.85781 -0.341797 2.64219 -0.341797 1.275 1.02539C0.89375 1.40664 0.61875 1.85508 0.45 2.33477C0.357812 2.5957 0.495313 2.88008 0.754688 2.97227C1.01406 3.06445 1.3 2.92695 1.39219 2.66758V2.66602ZM0.359375 4.0207C0.28125 4.04414 0.20625 4.08633 0.145312 4.14883C0.0828125 4.21133 0.040625 4.28633 0.01875 4.36758C0.0140625 4.38633 0.00937499 4.40664 0.00624999 4.42695C0.00156249 4.45352 0 4.48008 0 4.50664V6.50039C0 6.77695 0.223437 7.00039 0.5 7.00039C0.776563 7.00039 1 6.77695 1 6.50039V5.70195L1.275 5.97539C2.64219 7.34102 4.85781 7.34102 6.22344 5.97539C6.60469 5.59414 6.88125 5.1457 7.05 4.66758C7.14219 4.40664 7.00469 4.12227 6.74531 4.03008C6.48594 3.93789 6.2 4.07539 6.10781 4.33477C5.9875 4.67539 5.79219 4.9957 5.51719 5.26914C4.54063 6.2457 2.95781 6.2457 1.98125 5.26914L1.97969 5.26758L1.7125 5.00039H2.5C2.77656 5.00039 3 4.77695 3 4.50039C3 4.22383 2.77656 4.00039 2.5 4.00039H0.50625C0.48125 4.00039 0.45625 4.00195 0.43125 4.00508C0.40625 4.0082 0.382812 4.01289 0.359375 4.0207Z' fill='white' fill-opacity='0.6'/>
                      <path d='M1.98281 1.73164L1.63034 1.37716C2.80224 0.207194 4.69955 0.207615 5.87092 1.37842L0.920458 2.50027L0.92029 2.50074C0.920257 2.50076 0.920224 2.50078 0.920189 2.50079C0.920153 2.50081 0.920118 2.50083 0.920084 2.50084C0.91976 2.50099 0.919587 2.50103 0.919605 2.50102C0.91962 2.50102 0.919768 2.50099 0.920072 2.50097C0.920119 2.50096 0.920167 2.50096 0.920214 2.50096L0.892187 2.58031V2.5854V2.66602V2.66758H1.39219M1.98281 1.73164L1.62933 1.37816C1.62907 1.37842 1.62881 1.37868 1.62855 1.37894C1.30171 1.70579 1.06649 2.08938 0.921938 2.49992C0.921883 2.50007 0.921829 2.50023 0.921774 2.50038L1.38779 2.66602L1.39219 2.66758M1.98281 1.73164C2.875 0.839451 4.27321 0.762368 5.25284 1.50039M1.98281 1.73164C1.70781 2.00508 1.5125 2.32539 1.39219 2.66602L5.25284 1.50039M1.39219 2.66758C1.3 2.92695 1.01406 3.06445 0.754688 2.97227C0.495313 2.88008 0.357812 2.5957 0.45 2.33477C0.61875 1.85508 0.89375 1.40664 1.275 1.02539C2.56901 -0.26862 4.62307 -0.33788 5.99844 0.81761M1.39219 2.66758L5.99844 0.81761M5.25284 1.50039H5.75H5.75135H5.78594V2.00039L5.43135 2.35291L5.1652 2.08519C5.16503 2.08502 5.16486 2.08485 5.16469 2.08468C5.13548 2.0555 5.10559 2.0274 5.07508 2.00039H5C4.72344 2.00039 4.5 2.22383 4.5 2.50039C4.5 2.77695 4.72344 3.00039 5 3.00039H6.99219H6.99844C7.275 3.00039 7.49844 2.77695 7.49844 2.50039V0.500391C7.49844 0.223828 7.275 0.000390649 6.99844 0.000390649C6.72187 0.000390649 6.49844 0.223828 6.49844 0.500391V0.593886C6.52541 0.619423 6.55212 0.645406 6.57855 0.671837L6.57956 0.672844L6.853 0.947846L6.49844 1.30039L5.25284 1.50039ZM5.99844 0.81761V1.25067V0.81761ZM0.921171 2.50016C0.921176 2.50016 0.921176 2.50016 0.921166 2.50017C0.921168 2.50017 0.921169 2.50016 0.921171 2.50016ZM0.921443 2.50132L0.921546 2.50103C0.921911 2.50108 0.922142 2.50114 0.922136 2.50114L0.921443 2.50132ZM1.32643 5.32142L0.501008 4.5007L0.501048 4.50053C0.502523 4.50045 0.503971 4.50041 0.505397 4.50039L1.32643 5.32142ZM6.57856 4.50102L6.57855 4.50104L6.57853 4.50103L6.57856 4.50102Z' stroke='white' stroke-opacity='0.6'/>
                    </svg>
                    <a href='swap_settings'>

                        Swap</a>
                </div>
            </li>";
    }
    return "<aside>
    <nav>
        <ul>
            <li class='li_title'>
                DASHBOARD
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='7' viewBox='0 0 8 7' fill='none'>
                        <path
                            d='M5.33333 6.88029L2.66667 6.02247V0.00216084L5.33333 0.859973V6.88029ZM5.77778 6.86154V0.822473L7.54306 0.0271608C7.7625 -0.0712767 8 0.109973 8 0.375598V5.60685C8 5.75997 7.91667 5.89747 7.79028 5.95529L5.77778 6.85997V6.86154ZM0.209722 0.927161L2.22222 0.0224733V6.05997L0.456944 6.85529C0.2375 6.95372 0 6.77247 0 6.50685V1.2756C0 1.12247 0.0833333 0.984973 0.209722 0.927161Z'
                            fill='white' fill-opacity='0.9' />
                    </svg>
                    <a href='binding'>
                        Binding</a>
                </div>
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8' fill='none'>
                        <path
                            d='M4.01528 3.75V0.259375C4.01528 0.11875 4.11862 0 4.25148 0C6.07754 0 7.55818 1.56719 7.55818 3.5C7.55818 3.64062 7.44599 3.75 7.31313 3.75H4.01528ZM0 4.25C0 2.35469 1.33006 0.785937 3.05575 0.535937C3.19156 0.515625 3.3067 0.63125 3.3067 0.776563V4.5L5.61697 6.94531C5.71587 7.05 5.70849 7.22188 5.59482 7.30625C5.01615 7.74375 4.30757 8 3.5429 8C1.58692 8 0 6.32188 0 4.25ZM7.77075 4.5C7.90804 4.5 8.0158 4.62187 7.99809 4.76562C7.88442 5.63906 7.48732 6.41562 6.90717 6.98906C6.8186 7.07656 6.67984 7.07031 6.59422 6.97813L4.25148 4.5H7.77075Z'
                            fill='white' fill-opacity='0.6' />
                    </svg>
                    <a href='static'>
                        Statistics</a>
                </div>
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='10' height='8' viewBox='0 0 10 8'
                        fill='none'>
                        <path
                            d='M8.35938 0.640723C8.2125 0.493848 8.2125 0.256348 8.35938 0.111036C8.50625 -0.0342766 8.74375 -0.0358391 8.88906 0.111036L9.88906 1.11104C9.95938 1.18135 9.99844 1.27666 9.99844 1.37666C9.99844 1.47666 9.95938 1.57197 9.88906 1.64229L8.88906 2.64229C8.74219 2.78916 8.50469 2.78916 8.35938 2.64229C8.21406 2.49541 8.2125 2.25791 8.35938 2.1126L8.71875 1.75322L6 1.7501C5.79219 1.7501 5.625 1.58291 5.625 1.3751C5.625 1.16729 5.79219 1.0001 6 1.0001H8.72031L8.35938 0.640723ZM1.64062 5.89072L1.28125 6.2501H4C4.20781 6.2501 4.375 6.41729 4.375 6.6251C4.375 6.83291 4.20781 7.0001 4 7.0001H1.27969L1.63906 7.35947C1.78594 7.50635 1.78594 7.74385 1.63906 7.88916C1.49219 8.03447 1.25469 8.03604 1.10938 7.88916L0.109375 6.89072C0.0390625 6.82041 0 6.7251 0 6.6251C0 6.5251 0.0390625 6.42979 0.109375 6.35947L1.10938 5.35947C1.25625 5.2126 1.49375 5.2126 1.63906 5.35947C1.78438 5.50635 1.78594 5.74385 1.63906 5.88916L1.64062 5.89072ZM1.5 1.0001H5.27969C5.22187 1.1126 5.1875 1.23916 5.1875 1.3751C5.1875 1.82354 5.55156 2.1876 6 2.1876H7.83437C7.77187 2.45322 7.84375 2.74229 8.05 2.9501C8.36719 3.26729 8.88125 3.26729 9.19844 2.9501L9.5 2.64854V6.0001C9.5 6.55166 9.05156 7.0001 8.5 7.0001H4.72031C4.77813 6.8876 4.8125 6.76104 4.8125 6.6251C4.8125 6.17666 4.44844 5.8126 4 5.8126H2.16563C2.22813 5.54697 2.15625 5.25791 1.95 5.0501C1.63281 4.73291 1.11875 4.73291 0.801562 5.0501L0.5 5.35166V2.0001C0.5 1.44854 0.948438 1.0001 1.5 1.0001ZM2.5 2.0001H1.5V3.0001C2.05156 3.0001 2.5 2.55166 2.5 2.0001ZM8.5 5.0001C7.94844 5.0001 7.5 5.44854 7.5 6.0001H8.5V5.0001ZM5 5.5001C5.39782 5.5001 5.77936 5.34206 6.06066 5.06076C6.34196 4.77945 6.5 4.39792 6.5 4.0001C6.5 3.60227 6.34196 3.22074 6.06066 2.93944C5.77936 2.65813 5.39782 2.5001 5 2.5001C4.60218 2.5001 4.22064 2.65813 3.93934 2.93944C3.65804 3.22074 3.5 3.60227 3.5 4.0001C3.5 4.39792 3.65804 4.77945 3.93934 5.06076C4.22064 5.34206 4.60218 5.5001 5 5.5001Z'
                            fill='white' fill-opacity='0.6' />
                    </svg>
                    <a href='deposit'>

                        Deposits</a>
                </div>
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8' fill='none'>
                        <g clip-path='url(#clip0_221_1631)'>
                            <path
                                d='M2.85714 1.75C2.85714 1.19844 3.36964 0.75 4 0.75C4.63036 0.75 5.14286 1.19844 5.14286 1.75V2.5H2.85714V1.75ZM2 2.5H0.857143C0.383929 2.5 0 2.83594 0 3.25V6.5C0 7.32812 0.767857 8 1.71429 8H6.28571C7.23214 8 8 7.32812 8 6.5V3.25C8 2.83594 7.61607 2.5 7.14286 2.5H6V1.75C6 0.782812 5.10536 0 4 0C2.89464 0 2 0.782812 2 1.75V2.5ZM2.42857 3.25C2.54224 3.25 2.65124 3.28951 2.73162 3.35983C2.81199 3.43016 2.85714 3.52554 2.85714 3.625C2.85714 3.72446 2.81199 3.81984 2.73162 3.89017C2.65124 3.96049 2.54224 4 2.42857 4C2.31491 4 2.2059 3.96049 2.12553 3.89017C2.04515 3.81984 2 3.72446 2 3.625C2 3.52554 2.04515 3.43016 2.12553 3.35983C2.2059 3.28951 2.31491 3.25 2.42857 3.25ZM5.14286 3.625C5.14286 3.52554 5.18801 3.43016 5.26838 3.35983C5.34876 3.28951 5.45776 3.25 5.57143 3.25C5.68509 3.25 5.7941 3.28951 5.87447 3.35983C5.95485 3.43016 6 3.52554 6 3.625C6 3.72446 5.95485 3.81984 5.87447 3.89017C5.7941 3.96049 5.68509 4 5.57143 4C5.45776 4 5.34876 3.96049 5.26838 3.89017C5.18801 3.81984 5.14286 3.72446 5.14286 3.625Z'
                                fill='white' fill-opacity='0.6' />
                        </g>
                        <defs>
                            <clipPath id='clip0_221_1631'>
                                <rect width='8' height='8' fill='white' />
                            </clipPath>
                        </defs>
                    </svg>
                    <a href='withdrawal'>

                        Withdraw</a>
                </div>
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='9' height='8' viewBox='0 0 9 8' fill='none'>
                        <path
                            d='M2.025 0C2.32337 0 2.60952 0.131696 2.8205 0.366117C3.03147 0.600537 3.15 0.918479 3.15 1.25C3.15 1.58152 3.03147 1.89946 2.8205 2.13388C2.60952 2.3683 2.32337 2.5 2.025 2.5C1.72663 2.5 1.44048 2.3683 1.2295 2.13388C1.01853 1.89946 0.9 1.58152 0.9 1.25C0.9 0.918479 1.01853 0.600537 1.2295 0.366117C1.44048 0.131696 1.72663 0 2.025 0ZM7.2 0C7.49837 0 7.78452 0.131696 7.99549 0.366117C8.20647 0.600537 8.325 0.918479 8.325 1.25C8.325 1.58152 8.20647 1.89946 7.99549 2.13388C7.78452 2.3683 7.49837 2.5 7.2 2.5C6.90163 2.5 6.61548 2.3683 6.4045 2.13388C6.19353 1.89946 6.075 1.58152 6.075 1.25C6.075 0.918479 6.19353 0.600537 6.4045 0.366117C6.61548 0.131696 6.90163 0 7.2 0ZM0 4.66719C0 3.74688 0.672187 3 1.50047 3H2.10094C2.32453 3 2.53688 3.05469 2.72812 3.15156C2.70984 3.26406 2.70141 3.38125 2.70141 3.5C2.70141 4.09688 2.93766 4.63281 3.31031 5C3.3075 5 3.30469 5 3.30047 5H0.299531C0.135 5 0 4.85 0 4.66719ZM5.69953 5C5.69672 5 5.69391 5 5.68969 5C6.06375 4.63281 6.29859 4.09688 6.29859 3.5C6.29859 3.38125 6.28875 3.26562 6.27187 3.15156C6.46312 3.05312 6.67547 3 6.89906 3H7.49953C8.32781 3 9 3.74688 9 4.66719C9 4.85156 8.865 5 8.70047 5H5.69953ZM3.15 3.5C3.15 3.10218 3.29223 2.72064 3.54541 2.43934C3.79858 2.15804 4.14196 2 4.5 2C4.85804 2 5.20142 2.15804 5.45459 2.43934C5.70777 2.72064 5.85 3.10218 5.85 3.5C5.85 3.89782 5.70777 4.27936 5.45459 4.56066C5.20142 4.84196 4.85804 5 4.5 5C4.14196 5 3.79858 4.84196 3.54541 4.56066C3.29223 4.27936 3.15 3.89782 3.15 3.5ZM1.8 7.58281C1.8 6.43281 2.63953 5.5 3.67453 5.5H5.32547C6.36047 5.5 7.2 6.43281 7.2 7.58281C7.2 7.8125 7.03266 8 6.82453 8H2.17547C1.96875 8 1.8 7.81406 1.8 7.58281Z'
                            fill='white' fill-opacity='0.6' />
                    </svg>
                    <a href='usersList'>

                        Users</a>
                </div>
            </li>
            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='6' viewBox='0 0 8 6' fill='none'>
                        <path
                            d='M0.75 0C0.335938 0 0 0.335938 0 0.75C0 0.985937 0.110938 1.20781 0.3 1.35L3.7 3.9C3.87812 4.03281 4.12188 4.03281 4.3 3.9L7.7 1.35C7.88906 1.20781 8 0.985937 8 0.75C8 0.335938 7.66406 0 7.25 0H0.75ZM0 1.75V5C0 5.55156 0.448438 6 1 6H7C7.55156 6 8 5.55156 8 5V1.75L4.6 4.3C4.24375 4.56719 3.75625 4.56719 3.4 4.3L0 1.75Z'
                            fill='white' fill-opacity='0.6' />
                    </svg>
                    <a href='support'>

                        Support</a>
                </div>
            </li>

            <li>
                <div>
                    <svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8' fill='none'>
                        <path
                            d='M7.97782 2.60363C8.03087 2.7396 7.98611 2.89119 7.87173 2.98808L7.15391 3.60383C7.17215 3.73354 7.18209 3.86638 7.18209 4.00078C7.18209 4.13518 7.17215 4.26802 7.15391 4.39773L7.87173 5.01348C7.98611 5.11037 8.03087 5.26197 7.97782 5.39793C7.90488 5.5839 7.81702 5.76206 7.7159 5.93397L7.63798 6.06056C7.52857 6.23247 7.40589 6.395 7.27161 6.54815C7.1738 6.66068 7.01134 6.69818 6.86546 6.65442L5.94208 6.37781C5.71994 6.53878 5.47459 6.67318 5.21266 6.77476L5.00544 7.66712C4.97228 7.80934 4.85624 7.92186 4.70372 7.9453C4.47495 7.98125 4.23955 8 3.99917 8C3.75879 8 3.52339 7.98125 3.29462 7.9453C3.1421 7.92186 3.02606 7.80934 2.9929 7.66712L2.78568 6.77476C2.52375 6.67318 2.2784 6.53878 2.05626 6.37781L1.13454 6.65599C0.988658 6.69975 0.826196 6.66068 0.728388 6.54972C0.594108 6.39656 0.471433 6.23403 0.36202 6.06212L0.284105 5.93553C0.182981 5.76363 0.0951189 5.58547 0.022177 5.39949C-0.0308717 5.26353 0.0138881 5.11194 0.128274 5.01504L0.846089 4.3993C0.827854 4.26802 0.817907 4.13518 0.817907 4.00078C0.817907 3.86638 0.827854 3.73354 0.846089 3.60383L0.128274 2.98808C0.0138881 2.89119 -0.0308717 2.7396 0.022177 2.60363C0.0951189 2.41766 0.182981 2.2395 0.284105 2.06759L0.36202 1.941C0.471433 1.7691 0.594108 1.60656 0.728388 1.45341C0.826196 1.34089 0.988658 1.30338 1.13454 1.34714L2.05792 1.62375C2.28006 1.46279 2.52541 1.32838 2.78734 1.2268L2.99456 0.33444C3.02772 0.192225 3.14376 0.0797031 3.29628 0.056261C3.52505 0.0187537 3.76045 0 4.00083 0C4.24121 0 4.47661 0.0187537 4.70538 0.0546982C4.8579 0.0781403 4.97394 0.190662 5.0071 0.332878L5.21432 1.22524C5.47625 1.32682 5.7216 1.46122 5.94374 1.62219L6.86712 1.34558C7.013 1.30182 7.17546 1.34089 7.27327 1.45185C7.40755 1.605 7.53023 1.76753 7.63964 1.93944L7.71755 2.06603C7.81868 2.23794 7.90654 2.4161 7.97948 2.60207L7.97782 2.60363ZM4.00083 5.25103C4.35256 5.25103 4.68989 5.1193 4.93861 4.88484C5.18732 4.65037 5.32705 4.33237 5.32705 4.00078C5.32705 3.6692 5.18732 3.35119 4.93861 3.11673C4.68989 2.88226 4.35256 2.75054 4.00083 2.75054C3.64909 2.75054 3.31177 2.88226 3.06305 3.11673C2.81434 3.35119 2.67461 3.6692 2.67461 4.00078C2.67461 4.33237 2.81434 4.65037 3.06305 4.88484C3.31177 5.1193 3.64909 5.25103 4.00083 5.25103Z'
                            fill='white' fill-opacity='0.6' />
                    </svg>
                    <a href='settings'>

                        Settings</a>
                </div>
            </li>
            $text

        </ul>
    </nav>
    <a class='dark_button'>
        Go to profile
    </a>
</aside>
";
}

function render_list_domain(){
    $domains = get_all_domain();
    $result = "";
    foreach ($domains as $domain) {
        $domain_id = $domain['id'];
        $domain_name = $domain['domain'];
        $domain_worker = $domain['user_id'];
        $info_user = get_user_info_by_email_or_name_or_id($domain_worker);
        $worker_username = $info_user['username'];
        $domain_ns = $domain['domain_ns'];
        $result .="                               
                               <tr style='border-top: 2px solid white;'>
                                    <td>$domain_name</td>
                                    <td style='cursor: pointer;' >$worker_username</td>
                                    <td style='cursor: pointer;' >$domain_ns</td>
                                    <td>
                                        <div style='display: flex; gap: 10px'>
                                            <button onclick='delete_domain(\"$domain_name\", this)' class='button_del'>
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>";
    }
    return $result;
}