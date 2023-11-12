<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-title>.</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/output.css">
    <link rel="stylesheet" href="assets/styles/checkbox.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/styles/custom-select.css">

    <link rel="stylesheet" href="assets/styles/profile.css">
    <script src="assets/scripts/custom-select.js"></script>
</head>

<body class="swap">
<?= render_header() ?>
    <section class="subtitle">
        <div class="subtitle_box">
            <img src="assets/images/subtitle_logo.svg" alt="">
            <div id="subtitle_box">
                <h1>Account settings</h1>
                <p>Manage your account settings</p>
            </div>
        </div>




    </section>
    <main>
    <?=render_header_settings_nav()?>
        <div class="wrapper flex-d-col">
            <div class="row how_to_start_block">
                <div class="row__left grid gap-0 how_to_start_el">
                    <span class="left__h2 orange">
                        How to start?
                    </span>
                    <div class="left__desc">
                        <img src="assets/images/icons/affiliate_coin.svg" alt="">
                        <p>Copy and paste this link to send to friends or use in your articles. When users sign up using
                            this link, your account will be credited with referral bonuses.</p>
                    </div>
                </div>
                <div class="row__right">
                    <span class="left__span">
                        Share your link
                    </span>
                    <div class="input_button">
                        <input type="text" class="input intp_share" placeholder="https://user-link">
                        <div class="affilite blue_button ">
                            <img src="assets/images/icons/affiliate_copy.svg" alt="">
                            <span class="blue_button__text">Copy link</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-d-col pad-30">

                <div class="row__sign">
                    <div class="sign__item">
                        <div class="sign__item_img">
                            <img src="assets/images/icons/affiliate_main_1.svg" alt="" width="225">

                        </div>
                        <span class="sign__h2">
                            How to start?
                        </span>
                        <p class="sign__p">Share referral code/link with your friends to sign up on Biteon</p>
                    </div>
                    <img class="sign__item_arrow" src="assets/images/icons/affiliate_main_line.svg" alt=""
                    width="100">
                    <div class="sign__item">
                        <div class="sign__item_img">
                            <img src="assets/images/icons/affiliate_main_2.svg" alt="" width="225">

                        </div>
                        <span class="sign__h2">
                            Referee Deposit & Trade
                        </span>
                        <p class="sign__p">Get your referees to deposit and trade after registering for a Biteon account
                        </p>
                    </div>
                    <img class="sign__item_arrow" src="assets/images/icons/affiliate_main_line.svg" alt=""
                    width="100">
                    <div class="sign__item">
                        <div class="sign__item_img">
                        <img src="assets/images/icons/affiliate_main_3.svg" alt="" width="225">
                        </div>
                        <span class="sign__h2">
                            Earn Commission
                        </span>
                        <p class="sign__p">Earn up to 30% commission from each trade completed by your referees</p>
                    </div>
                </div>
            </div>
            <div class="row flex-d-col no_pad  table_affiliate">
                <div class="row__header">
                    <ul>
                        <li>User ID</li>
                        <li>Registration Time</li>
                        <li>Deposit Amount(USDT)</li>
                        <li>Trading Volume(USDT)</li>
                        <li>Cash Back</li>
                    </ul>
                </div>
                <div class="row__main">
                </div>
            </div>
            <div class="row danger">
                <img src="assets/images/icons/affiliate_danger.svg" width="60">
                <span>
                    Share your link with a friend who does not have a Biteon account. Regular Task: Referees must
                    accumulatively deposit more than $50 within 14 days of registration. Both referrer and referee will
                    be rewarded with a 100 USDT trading fee rebate voucher each. Disclaimer: You can only claim one
                    reward per referral.
                </span>
            </div>
        </div>
    </main>
    <div class="mobile_settings">
        <ul>
            <li class="active">
                <a settings.html"><img src="assets/images/icons/settings.svg" alt="" width="30"
                        height="30">
                    <span>Account settings</span></a>
            </li>
            <li><a settings_password.html"><img src="assets/images/icons/password_profile.svg" alt=""
                        width="30" height="30">
                    <span>Password</span></a></li>
            <li><a settings_2fa.html"><img src="assets/images/icons/password_account_profile.svg" alt=""
                        width="30" height="30">
                    <span>2FA Auth</span></a></li>
            <li><a href=""><img src="assets/images/icons/mobile_menu.svg" alt="" width="30" height="30">
                    <span>Menu</span></a></li>
        </ul>
    </div>
</body>
<script src="assets/scripts/main.js"></script>

</html>