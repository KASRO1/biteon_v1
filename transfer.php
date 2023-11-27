<?php

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}
$coins = get_all_coins();
$coin_selected = "BTC";
if(isset($_GET['coin'])) {
    $coin_selected = $_GET['coin'];
}
$get_coin = get_coin_info($coin_selected);
if(!$get_coin){
    $coin_selected = "BTC";
}
$networks = get_networks($get_coin['id_coin']);
if($networks == []) {
    $networks[] = ["title"=>$get_coin['full_name'] . " (<span>". $get_coin['simple_name']."</span>)"];
}
$balance_coin = get_balance_coin_this_user($get_coin['id_coin'])

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
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
    <link rel="stylesheet" href="assets/styles/custom-select.css">

    <script src="assets/scripts/custom-select.js"></script>
</head>
<style>
main{
    display: grid;
    gap: 20px;
}
.itc-select__toggle {
        border-radius: 5px;
        border: 1px solid rgba(192, 192, 192, 0.10);
        background: #243B54;
        padding: 1rem;
    }
    .subtitle{
        justify-content: center;
    }
</style>
<body class="swap">
    <?=render_header()?>
    <section class="subtitle">
        <div class="subtitle_content">
            <div class="subtitle_box">
                <img src="assets/images/subtitle_logo.svg" alt="">
                <div id="subtitle_box">
                    <h1>Internal transfer</h1>
                    <p>Send crypto to <?=$domain_titleINIT?> users via email or account ID</p>
                </div>
            </div>
            <div class="subtitle_buttons">
                <button onclick="window.location.href='/deposit'" class="btn-dark"><img src="assets/images/icons/deposit.svg" alt="">Deposit</button>
                <button onclick="window.location.href='/withdraw'" class="btn-dark"><img src="assets/images/icons/withdraw.svg" alt="">Withdraw</button>
                <button onclick="window.location.href='/transfer'" class="btn-dark"><img src="assets/images/icons/transfer.svg" alt="">Transfer</button>
                <button class="btn-dark"><img src="assets/images/icons/history.svg" alt="">History</button>
            </div>
    
        </div>


    </section>
    <main >
        <section class="swap-box__wrapper  m-auto">

            <div class="swap-box__el">
                <div class="swap-box__counter">
                    1
                </div>
                <div class="swap-box__content">
                    <div class="block">
                        <h3>Select coin to deposit</h3>
                        <p>Select the cryptocurrency you want to deposit into your account</p>
                        <div id="select-1"></div>
                        <p style="padding-top: 10px;">Popular coins:</p>
                        <div class="swap-box__picker">
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                BTC
                            </div>
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                ETH
                            </div>
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                TRX
                            </div>
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                LTC
                            </div>
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                DOGE
                            </div>
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                XRP
                            </div>
                            <div onclick="window.location.href = '/transfer?coin=' + this.innerText" class="swap-box__picker_el">
                                BNB
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <form id="transfer_form">
                <div class="swap-box__el">
                    <div class="swap-box__counter">
                        2
                    </div>
                    <div class="swap-box__content">
                        <div class="block">
                            <h3>Recipient email / ID</h3>
                            <p class="w-100">Enter the recipient email or account ID of the other user</p>

                            <div class="swap_input_dark">
                                <input id="user_email" name="user_email" type="text" class="w-100" placeholder="Enter user Email or account ID    ">

                            </div>


                        </div>

                    </div>
                </div>
                <div class="swap-box__el">
                    <div class="swap-box__counter">
                        3
                    </div>
                    <div class="swap-box__content">
                        <div class="block">


                            <h3>Amount</h3>
                            <p class="w-100">Enter the amount to transfer</p>
                            <div class="step__staking">

                                <div class="swap_input_dark">
                                    <input type="text" id="input_amount" name="amount" class="w-100" placeholder="Enter amount">
                                    <span style="cursor: pointer" onclick="input_value_all_balance()">All</span>
                                    <div>
                                        <?=$coin_selected?>
                                    </div>
                                </div>
                                <p class="vailable_p">Available: <span id="available_balance_value"><?=$balance_coin?></span> <?=$coin_selected?></p>
                            </div>

                        </div>

                    </div>

                </div>
                <button class="btn" style="width: 100%; margin-bottom: 29px;" type="submit">Transfer</button>
            </form>
            <div class="swap-box__footer ">
                <img src="assets/images/icons/notificate.svg" alt="">
                <p class="swap-box-footer__text p-2 m-0">Please note the network fee will only be charged for withdrawals to non-<?=$domain_titleINIT?> addresses. If the recipient address is correct and belongs to a <?=$domain_titleINIT?> account, the network fee will not be deducted.</p>
            </div>
        </section>

        <section class="block">
            <div class="swap-box__wrapper m-auto ">
                <div class="swap-box__content">
                    <div class="block">
                        <div class="w-fit">
                            <h1 class=" mb-1">Important information</h1>
                            <div class="line-gradient"></div>


                        </div>
                        <ul class="mb-4">
                           
                            <li>The recipient (another <?=$domain_titleINIT?> user) will instantly receive your transfer. They may
                                find the record in [Transaction History]</li>
                            <li>Please note that for internal transfer within <?=$domain_titleINIT?>, no TxID in blockchain will be
                                created</li>
                        </ul>


                    </div>

                </div>
            </div>

        </section>
    </main>

</body>
<script src="assets/scripts/main.js"></script>
<script>
    const currencyoptions = [
        <?php foreach ($coins as $coin):?>
        [
            "<?=$coin['simple_name']?>",
            "<div class='coin_item' > <img class='priceimg' src='/assets/images/icons/crypto/<?=$coin['simple_name']?>.png'/> <?=$coin['simple_name']?> <div class='price-box-price'></div></div>",
        ],
        <?php endforeach;?>


    ];

    const select1 = new ItcCustomSelect("#select-1", {
        options: currencyoptions,
        targetValue: "<?=$coin_selected?>",
        onSelected(select, option) {
            window.location.href = "/transfer?coin=" + select.value;

        }
    });

    const form_withdraw = document.getElementById('transfer_form');
    function input_value_all_balance() {
        const available_balance_value = document.getElementById('available_balance_value').textContent;
        const input_amount_element = document.getElementById('input_amount');
        input_amount_element.value = available_balance_value;
    }

    form_withdraw.addEventListener('submit', (e) => {
        e.preventDefault();
        const input_amount = document.getElementById('input_amount');
        if (input_amount != null) {
            if (input_amount.value === "") {
                new Notify({
                    title: 'Error',
                    text: 'Enter amount',
                    status: 'error',
                    autoclose: true,
                    autotimeout: 3000
                })
                return;
            }
        }
        const user_email = document.getElementById("user_email");
        if (user_email != null) {
            if (user_email.value === "") {
                new Notify({
                    title: 'Error',
                    text: 'Enter user email or account ID',
                    status: 'error',
                    autoclose: true,
                    autotimeout: 3000
                })
                return;
            }
        }
        const formData = new FormData(form_withdraw);
        formData.append('coin', select1.value);
        $.ajax({
            url: '/api/ajax/transfer.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data)
                if (data.status == "success") {
                    new Notify({
                        title: 'Success',
                        text: data.message,
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })

                } else {
                    new Notify({
                        title: 'Error',
                        text: data.message,
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
                }


            },
            error: function(data) {
                console.log(data)
                new Notify({
                    title: 'Error',
                    text: 'Error',
                    status: 'error',
                    autoclose: true,
                    autotimeout: 3000
                })
            }

        });
    })



</script>

</html>