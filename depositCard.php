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


            <form id="transfer_form">

                <div class="swap-box__el">

                    <div class="swap-box__content">
                        <div class="block">


                            <h3>Amount</h3>
                            <p class="w-100">Enter the amount to deposit in USD </p>
                            <div class="step__staking">

                                <div class="swap_input_dark">
                                    <input type="text" id="input_amount" name="amount" class="w-100" placeholder="Enter amount">


                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <button class="btn" style="width: 100%; margin-bottom: 29px;" type="submit">Deposit</button>
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
            "<div class='coin_item' > <img class='priceimg' src='/assets/coin_icons/<?=strtolower($coin['simple_name'])?>.svg'/> <?=$coin['simple_name']?> <div class='price-box-price'></div></div>",
        ],
        <?php endforeach;?>


    ];



    const form_withdraw = document.getElementById('transfer_form');

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

        const formData = new FormData(form_withdraw);

        $.ajax({
            url: '/api/ajax/CreatePaymentOrder',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data)
                if (data.status == "success") {
                    window.location.href = data.url;

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