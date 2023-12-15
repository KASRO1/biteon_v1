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

    <link rel="stylesheet" href="assets/styles/custom-select.css">
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
    <script src="assets/scripts/custom-select.js"></script>
</head>
<style>
    main {
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
                <svg xmlns="http://www.w3.org/2000/svg" width="59" height="46" viewBox="0 0 59 46" fill="none">
                    <g clip-path="url(#clip0_170_9444)">
                      <path d="M52.4744 8.85645L31.356 39.0257" stroke="#FFB547" stroke-width="12" stroke-linecap="round"/>
                      <path d="M29.4744 8.85645L8.35596 39.0257" stroke="#30ACFF" stroke-width="12" stroke-linecap="round"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_170_9444">
                        <rect width="59" height="45" fill="white" transform="translate(0 0.5)"/>
                      </clipPath>
                    </defs>
                  </svg>
                <div id="subtitle_box">
                    <h1>Withdraw coins</h1>
                    <p>Withdraw your digital funds in few minutes</p>
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
    <main>
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
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                BTC
                            </div>
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                ETH
                            </div>
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                TRX
                            </div>
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                LTC
                            </div>
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                DOGE
                            </div>
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                XRP
                            </div>
                            <div onclick="window.location.href = '/withdraw?coin=' + this.innerText" class="swap-box__picker_el">
                                BNB
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="swap-box__el">
                <div class="swap-box__counter">
                    2
                </div>
                <div class="swap-box__content">
                    <div class="block">
                        <h3>Select network</h3>
                        <p class="w-100">Please ensure your receiving platform supports the token and network you are
                            withdrawing.
                            If you are unsure, kindly check with the receiving platform first.</p>


                        <div id="select-2"></div>



                    </div>

                </div>
            </div>
            <form id="form_withdraw">
                <div class="swap-box__el">
                    <div class="swap-box__counter">
                        3
                    </div>
                    <div class="swap-box__content">
                        <div class="block">
                            <h3>Address</h3>
                            <p class="w-100">Enter the recipient's crypto address</p>

                            <div class="swap_input_dark">
                                <input name="address" id="address_input" type="text" class="w-100" placeholder="Enter destination address">

                            </div>


                        </div>

                    </div>
                </div>
                <div class="swap-box__el">
                    <div class="swap-box__counter">
                        4
                    </div>
                    <div class="swap-box__content">
                        <div class="block">


                            <h3>Amount</h3>
                            <p class="w-100">Specify the amount of coins/tokens you want to withdraw from your account</p>
                            <div class="step__staking">

                                <div class="swap_input_dark">
                                    <input id="input_amount" type="text" name="amount" class="w-100" placeholder="Enter amount">
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
                <button type="submit" class="btn" style="width: 100%; margin-bottom: 29px;">Withdraw</button>
            </form>
            <div class="swap-box__footer ">
                <img src="assets/images/icons/notificate.svg" alt="">
                <p class="swap-box-footer__text p-2 m-0">The withdrawal normally completes within 30 min. If your
                    transaction is still not
                    completed within the indicated timeframe, please contact our customer support
                    team for further assistance.</p>
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

                            <li>Do not transfer your assets to any non <?=$coin_selected?> addresses as you may not be able to
                                retrieve the <?=$coin_selected?> asset after.</li>
                            <li>Please check your withdrawal address carefully; once a withdrawal request is
                                issued, it cannot be recalled.</li>
                        </ul>


                    </div>

                </div>
            </div>

        </section>
        <section class="defi_info_sec">
            <div class="defi_info">
                <div>
                    <h2>When does <?=$domain_titleINIT?> process withdrawal requests?</h2>
                    <h3>Instant withdrawal may take 5 to 30 min to process. However, please note that in the event of
                        high network congestion, withdrawals may take longer time.</h3>
                </div>
                <div>
                    <h2>Is withdrawal fee already included in the withdrawal amount I have indicated?</h2>
                    <h3>No, the withdrawal fee will charged beyond the indicated withdrawal amount. If traders want to
                        withdraw all the withdrawable amount, traders can click on the
                        "All" button and system will automatically input the amount after fees.</h3>
                </div>
                <div>
                    <h2>Does <?=$domain_titleINIT?> support withdrawals to a Smart Contract ETH wallet address?</h2>
                    <h3>No, <?=$domain_titleINIT?> does not support ETH withdrawals via Smart Contracts method. Instead, <?=$domain_titleINIT?> only supports ETH withdrawals via Direct Transfer method.</h3>
                </div>
                <div>
                    <h2>Does <?=$domain_titleINIT?> support withdrawals to a segwit <?=$coin_selected?> wallet address?</h2>
                    <h3>Yes, <?=$domain_titleINIT?> supports withdrawals to segwit <?=$coin_selected?> wallet addresses starting with "bc1", also known as bech32 addresses.</h3>
                </div>
                <div>
                    <h2>Can traders fix their own withdrawal fees on <?=$domain_titleINIT?>?</h2>
                    <h3>At the moment, no. However, <?=$domain_titleINIT?> is considering enabling this option for traders to determine their own withdrawal fees in the future.</h3>
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
    const options_network = [
        <?php

        foreach ($networks as $network):?>
        [
            "<?=$network['title']?>",
            "<div class='coin_item' style='gap:0;'>  <?=$network['title']?> <div class='price-box-price'></div></div>",
        ],
        <?php endforeach;?>

    ];
    const select1 = new ItcCustomSelect("#select-1", {
        options: currencyoptions,
        targetValue: "<?=$coin_selected?>",
        onSelected(select, option) {
            window.location.href = "/withdraw?coin=" + select.value;

        }
    });
    const select2 = new ItcCustomSelect("#select-2", {
        options: options_network,
        targetValue: "<?=$networks[0]['title']?>",
    });
    const form_withdraw = document.getElementById('form_withdraw');
    function input_value_all_balance() {
        const available_balance_value = document.getElementById('available_balance_value').textContent;
        const input_amount_element = document.getElementById('input_amount');
        input_amount_element.value = available_balance_value;
    }

    form_withdraw.addEventListener('submit', (e) => {
        e.preventDefault();
        const input_amount = document.getElementById('input_amount');
        if (input_amount != null) {
            if (input_amount.value == "") {
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
        const address_input = document.getElementById("address_input");
        if (address_input != null) {
            if (address_input.value == "") {
                new Notify({
                    title: 'Error',
                    text: 'Enter address',
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
            url: '/api/ajax/withdraw.php',
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


            }
        });
    })



</script>

</html>