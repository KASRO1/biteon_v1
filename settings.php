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
    <title ><?=$domain_titleINIT?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/output.css">
    <link rel="stylesheet" href="assets/styles/checkbox.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/styles/custom-select.css">

    <link rel="stylesheet" href="assets/styles/profile.css">
    <script src="assets/scripts/custom-select.js"></script>
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
</head>
<style>
    input[type="file"] {
        display: none;
    }
    input:disabled{
        background: transparent;
    }
</style>

<body class="swap">
    <?=render_header() ?>
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
            <div class="account_settings__photo">
                <div class="left">
                    <img src="assets/images/icons/camera_account_settings.svg" width="66" alt="">
                    <div class="left__text">
                        <span class="left__h2">
                            Profile photo
                        </span>
                        <p>
                            Update your profile avatar
                        </p>
                    </div>
                </div>
                <div class="right">
                    <div class="right__buttons">
                        <span style="cursor:pointer" onclick="remove_avatar()">
                            Remove
                        </span>
                        <form id="upload-form" method="post" enctype="multipart/form-data">
                            <label class="active" id="label_upload" for="file-upload">
                                <img src="assets/images/icons/upload_account_settings.svg" alt="" width="25px">
                                Upload
                            </label>
                            <input type="file" name="avatar" id="file-upload" accept="image/*" class="custom-file-input">
                        </form>
                    </div>
                    <img class="avatar_profile" src="<?= $user_info['avatar'] ?>" width="72" alt="">
                </div>
            </div>
            <div class="account_settings__username">
                <div class="left">
                    <img src="assets/images/icons/username_account_profile.svg" width="66" alt="">
                    <div class="left__text">
                        <span class="left__h2">
                            Account username
                        </span>
                        <p>
                            Manage your account username
                        </p>
                    </div>
                </div>
                <div class="right">
                    <form id="form_change_username" method="post">
                    <div class="right__buttons mob">
                        <input type="text" name="new_username" class="input" value="<?= $user_info['username'] ?>" placeholder="username">
                        <button type="submit" class="active">
                            <img src="assets/images/icons/upload_2_account_profile.svg" alt="" width="25px">
                            Update
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="account_settings__email">
                <div class="left">
                    <img src="assets/images/icons/email_account_profile.svg" width="66" alt="">
                    <div class="left__text">
                        <span class="left__h2">
                            Email
                        </span>
                        <p>
                            Your current active email address
                        </p>
                    </div>
                </div>
                <div class="right">
                    <input type="text" class="input" disabled placeholder="<?=$user_info['email']?>">
                </div>
            </div>
        </div>
    </main>
    <div class="mobile_settings">
        <ul>
            <li class="active">
                <a href="settings"><img src="assets/images/icons/settings.svg" alt="" width="30" height="30">
                    <span>Account settings</span></a>
            </li>
            <li><a  href="settings_password"><img src="assets/images/icons/password_profile.svg" alt="" width="30" height="30">
                    <span>Password</span></a></li>
            <li><a  href="settings_2fa"><img src="assets/images/icons/password_account_profile.svg" alt="" width="30" height="30">
                    <span>2FA Auth</span></a></li>
            <li><a href=""><img src="assets/images/icons/mobile_menu.svg" alt="" width="30" height="30">
                    <span>Menu</span></a></li>
        </ul>
    </div>
</body>
<script src="assets/scripts/main.js"></script>

<script>
    var uploadForm = $('#upload-form');
    var avatarInput = $('#file-upload');
    avatarInput.on('change', function() {

        uploadForm.submit();
    });
    uploadForm.on('submit', (e) => {
        e.preventDefault();


        var formData = new FormData(uploadForm[0]);

        $.ajax({
            url: '/api/ajax/upload_avatar.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == "success") {
                    new Notify({
                        title: 'Success',
                        text: 'Avatar uploaded successfully',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                } else {
                    console.log(response);
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

    function remove_avatar() {
        $.ajax({
            url: '/api/ajax/remove_avatar.php',
            type: 'POST',
            data: {},
            success: function(response) {
                if (response.status == "success") {
                    new Notify({
                        title: 'Success',
                        text: 'Avatar removed successfully',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                } else {
                    console.log(response);
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    }
    const change_username_form =document.getElementById('form_change_username');
    change_username_form.addEventListener('submit', (e)=>{
        e.preventDefault();
        $.ajax({
            url: '/api/ajax/change_username.php',
            type: 'POST',
            data: $('#form_change_username').serialize(),
            success: function(response) {
                if (response.status == "success") {
                    new Notify({
                        title: 'Success',
                        text: 'Username changed successfully',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                } else {
                    console.log(response);
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    })
</script>

</html>