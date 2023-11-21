<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$info = get_api_keys();
$table_elements = render_footer_settings_api($info);

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/Pristine/pristine.js" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/styles/profile.css">
    <script src="assets/scripts/custom-select.js"></script>
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
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
            <form action="" id="create_api" method="post">
                <div class="row api_keys">
                    <div class="row__left">
                        <img src="assets/images/icons/api_code_message.svg" width="75" style="height: 40px;" alt="">
                        <div class="left__text">
                            <span class="row__h1">
                                Create API key
                            </span>
                            <p>Create API Keys to suit your trading needs</p>
                        </div>

                    </div>

                    <div class="create_api_checkboxs">
                        <div class="row__checkbox">
                            <input disabled checked style="--b: var(--active); cursor: pointer; opacity: 0.9;" type="checkbox" id="read_data">
                            <label style="cursor: pointer;" for="read_data">Read data</label>
                        </div>
                        <div class="row__checkbox">
                            <input name="spot_checkbox" type="checkbox" id="read_data">
                            <label for="read_data">Spot trading</label>
                        </div>
                        <div class="row__checkbox">
                            <input name="futures_checkbox" type="checkbox" id="read_data">
                            <label for="read_data">Futures trading</label>
                        </div>
                        <div class="row__checkbox">
                            <input name="withdraw_checkbox" type="checkbox" id="read_data">
                            <label for="read_data">Withdraw</label>
                        </div>
                    </div>
                    <button type="submit" class="blue_button api_keys_btn big_pad">
                        Create
                    </button>

                </div>
            </form>
            <div class="row flex-d-col no_pad table_affiliate">
                <table class="td_affiliate">
                    <thead>
                        <tr>
                            <th>Secret key</th>
                            <th>Permissions</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?= $table_elements ?>
                    </tbody>
                </table>
            </div>
            <div class="row danger">
                <img src="assets/images/icons/affiliate_danger.svg" width="60">
                <ul>
                    <li>We provide clients with the most powerful, industry-leading API functionalities. You can use API to check market data, process automated trading orders and much more.</li>
                    <li>Each account can have up to 20 keys.</li>
                    <li>For security reasons, please do not reveal your key(s) to non-trusted third parties.</li>
                    <li>After changing your login password, please set up new API key(s), as the old one will expire within seven (7) days.</li>
                    <li>Please keep your API keys securely.</li>
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
<script>
    const form = document.getElementById('create_api');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const spot_checkbox = document.querySelector('input[name="spot_checkbox"]');
        const futures_checkbox = document.querySelector('input[name="futures_checkbox"]');
        const withdraw_checkbox = document.querySelector('input[name="withdraw_checkbox"]');
        const spot = spot_checkbox.checked;
        const futures = futures_checkbox.checked;
        const withdraw = withdraw_checkbox.checked;
        $.ajax({
            url: 'api/ajax/create_api.php',
            type: 'POST',
            dataType: 'json',
            data: {
                spot: spot,
                futures: futures,
                withdraw: withdraw
            },
            success: function(data) {
                if (data.status == 'success') {
                    new Notify({
                        title: 'Success',
                        text: 'API key created successfully',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    window.location.reload();
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
    });

    $('.switch-btn').click(function() {
        $(this).toggleClass('switch-on');
        if ($(this).hasClass('switch-on')) {
            $(this).trigger('on.switch');
        } else {
            $(this).trigger('off.switch');
        }
    });
    $('.switch-btn').on('on.switch', function() {
        const id = $(this).data('id');
        $.ajax({
            url: 'api/ajax/change_status_api.php',
            type: 'POST',
            data: {
                id: id,
                status: 'true'
            },

            success: function(data) {
                if (data.status == 'success') {
                    new Notify({
                        title: 'Success',
                        text: 'API key status changed successfully',
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
        })

    });
    $('.switch-btn').on('off.switch', function() {
        const id = $(this).data('id');
        $.ajax({
            url: 'api/ajax/change_status_api.php',
            type: 'POST',
            data: {
                id: id,
                status: 'false'
            },

            success: function(data) {
                if (data.status == 'success') {
                    new Notify({
                        title: 'Success',
                        text: 'API key status changed successfully',
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
        })
    });

    function delete_api(id_api){
        $.ajax({
            url: 'api/ajax/delete_api.php',
            type: 'POST',
            data: {
                id: id_api
            },
            success: function(data) {
                if (data.status == 'success') {
                    new Notify({
                        title: 'Success',
                        text: 'API key deleted successfully',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
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
        })
    }
</script>

</html>