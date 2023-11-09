<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /log-in");
}
$user_info = get_user_info($auth_token);

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
            <div class="row active_promo_block">
                <div class="row__left">
                    <img src="assets/images/icons/promocode_main.svg" width="60" alt="">
                    <div class="left__text">
                        <span class="row__h1">
                            Activate your gift code
                        </span>
                        <p class="no-width">Enter code of your gift card (promo)</p>
                    </div>
                    
                </div>
                <div class="row__right null">
                    <div class="input_button ">
                        <input type="text" class="input" placeholder="Enter gift code number">
                        <div class="blue_button activate_promo_inpt">
                            <span class="blue_button__text">Redeem</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row danger show">
                <img src="assets/images/icons/affiliate_danger.svg" width="60">
                <ul>
                    <li>Project Gift codes can be purchased and traded via distributors and exchange brokers and can be used for payment with merchants. Once you receive a gift code, it only takes a few steps to redeem.</li>
                    <li>Use cases include: Gift Card reselling, loyalty and game rewards, e-commerce purchases and more.</li>
                   
                </ul>
            </div>
        </div>
    </main>
    <div class="mobile_settings">
        <ul>
            <li class="active">
                <a settings.html"><img src="assets/images/icons/settings.svg" alt="" width="30" height="30">
                    <span>Account settings</span></a>
            </li>
            <li><a settings_password.html"><img src="assets/images/icons/password_profile.svg" alt="" width="30" height="30">
                <span>Password</span></a></li>
            <li><a settings_2fa.html"><img src="assets/images/icons/password_account_profile.svg" alt="" width="30" height="30">
                <span>2FA Auth</span></a></li>
            <li><a href=""><img src="assets/images/icons/mobile_menu.svg" alt="" width="30" height="30">
                <span>Menu</span></a></li>
        </ul>
    </div>
</body>
<script src="assets/scripts/main.js"></script>

</html>