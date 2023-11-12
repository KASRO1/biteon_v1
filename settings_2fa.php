<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
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
        <div class="account_settings">
            <div class="account_settings__password">
                <div class="left col">
                    <div class="left__item">
                        <img src="assets/images/icons/upload_account_settings.svg" width="50" alt="">
                        <div class="left__text">
                            <span class="left__h2">
                                Step 1: Download an authenticator app
                            </span>
                            <p>
                                Download and install any authenticator app, eg. <a href="">Google Authenticator</a>
                            </p>
                        </div>
                    </div>

                    <div class="left__item">
                        <img src="assets/images/icons/qr_2_account_profile.svg" width="50" alt="">
                        <div class="left__text">
                            <span class="left__h2">
                                Step 2: Scan the QR code
                            </span>
                            <p>
                                Open the authenticator app and scan the image using your phone’s camera
                            </p>
                        </div>
                    </div>

                    <div class="left__item">
                        <img src="assets/images/icons/success_account_profile.svg" width="50" alt="">
                        <div class="left__text">
                            <span class="left__h2">
                                Step 3: Verify your code
                            </span>
                            <p>
                                Enter the 6-digit verification code generated
                            </p>
                        </div>
                    </div>
                    <div class="code">

                        <input type="text" maxlength="1" id="digit1" class="code__block">
                        <input type="text" maxlength="1" id="digit2" class="code__block">
                        <input type="text" maxlength="1" id="digit3" class="code__block">
                        <input type="text" maxlength="1" id="digit4" class="code__block">
                        <input type="text" maxlength="1" id="digit5" class="code__block">
                        <input type="text" maxlength="1" id="digit6" class="code__block">
                        <script>
                            const inputs = document.querySelectorAll('input');

                            inputs.forEach((input, index) => {
                                input.addEventListener('input', (e) => {
                                    const value = e.target.value;

                                    if (/^\d$/.test(value)) {
                                        if (index < inputs.length - 1) {
                                            inputs[index + 1].focus();
                                        }
                                    }
                                });

                                // Добавляем обработчик для обратного перехода при удалении цифры
                                input.addEventListener('keydown', (e) => {
                                    if (e.key === 'Backspace' && index > 0 && !input.value) {
                                        inputs[index - 1].focus();
                                    }
                                });
                            });

                        </script>
                    </div>
                </div>
                <div class="right col ma-t-15px">
                    <img src="assets/images/icons/QR.svg" alt="" class="qr-code" width="250">
                    <div class="input fs-23">KN4GXBBG3VEEFZTS</div>
                </div>
            </div>
            <div class="bottom">
                <div class="bottom__content">
                    <img src="assets/images/icons/warning_bottom_acc_profile.svg" width="30">
                    <p>
                        If you enable two-factor authentication following instructions above, you will be asked to
                        provide an extra verification code next time you login
                    </p>
                </div>
                <div class="blue_button">Enable</div>
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