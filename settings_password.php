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
        <?= render_header_settings_nav() ?>
        <div class="account_settings">
            <div class="account_settings__password">
                <div class="left">
                    <img style="width: auto; height: auto;" src="assets/images/icons/password_account_profile.svg" alt="">
                    <div class="left__text">
                        <span class="left__h2">
                            Change password
                        </span>
                        <p>
                            Contains at least 8 characters
                        </p>
                    </div>
                </div>
                <form novalidate method="post" id="form_change_password">
                    <div class="right">

                        <div class="input">
                            <img src="assets/images/icons/lock_account_profile.svg" alt="" height="15">
                            <input type="password" name="new_password" id="form2-password" class="nullable_input" placeholder="Enter new password">
                        </div>
                        <div class="input">
                            <img src="assets/images/icons/lock_account_profile.svg" alt="" height="15">
                            <input type="password" data-pristine-equals="#form2-password" class="nullable_input" placeholder="Repeat new password">
                        </div>
                        <button type="submit" class="blue_button">

                            <img src="assets/images/icons/key_account_profile.svg" alt="" height="25">
                            Change password

                        </button>

                    </div>
                </form>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/Pristine/pristine.js" type="text/javascript"></script>
<script>
    const form = document.getElementById('form_change_password');
    var pristine = new Pristine(form);
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        var valid = pristine.validate();
        const formData = new FormData(form);
        if (valid) {
            $.ajax({
                url: '/api/ajax/change_password.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status == 'success') {
                        new Notify({
                            title: 'Success',
                            text: 'Password changed successfully',
                            status: 'success',
                            autoclose: true,
                            autotimeout: 3000
                        })
                    } else {
                        console.log(data);
                        new Notify({
                            title: 'Error',
                            text: 'Server error',
                            status: 'error',
                            autoclose: true,
                            autotimeout: 3000
                        })

                    }
                }
            });
        } else {
            new Notify({
                title: 'Error',
                text: 'Check that the data entered is correct',
                status: 'error',
                autoclose: true,
                autotimeout: 3000
            })
        }
    });
</script>

</html>