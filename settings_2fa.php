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
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
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
                <div class="left col" style="width: 100%">
                    <div class="left__item" style="display: flex; width: 100%;justify-content: space-between">
                        <div style="display: flex; gap: 15px">
                            <img src="assets/images/icons/upload_account_settings.svg" width="50" alt="">
                            <div class="left__text">
                            <span class="left__h2">
                                Enable 2FA Authentication
                            </span>
                                <p>
                                    Click button down below to enable 2FA Authentication
                                </p>
                            </div>
                        </div>


                        <?php if ($user_info['2fa']): ?>
                            <button onclick="enable_or_disable_2fa(this)" class="btn-danger">Disable 2FA</button>

                        <?php else: ?>
                            <button onclick="enable_or_disable_2fa(this)" class="btn">Enable 2FA</button>
                        <?php endif; ?>

                    </div>

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
<script>
    function enable_or_disable_2fa(el) {
        $.ajax({
            url: '/api/ajax/enable_or_disable_2fa.php',
            method: 'POST',
            success: function (data) {
                console.log(data)
                if (data.status === 'success') {
                    new Notify({
                        title: 'Success',
                        text: "2FA successfully enabled",
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    el.innerHTML = "Disable 2FA"
                    el.classList.add("btn-danger")
                    el.setAttribute("onclick", "enable_or_disable_2fa(this, 1)")
                } else {
                    new Notify({
                        title: 'Success',
                        text: "2FA successfully disabled",
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    el.innerHTML = "Enable 2FA"
                    el.classList.remove("btn-danger")

                }
            },
            error: function (data) {
                console.log(data)
            }
        })
    }
</script>
</html>