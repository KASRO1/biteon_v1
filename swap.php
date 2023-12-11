<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if (!get_user_info($auth_token)) {
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
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
    <link rel="stylesheet" href="assets/styles/custom-select.css">

    <script src="assets/scripts/custom-select.js"></script>
</head>

<body class="swap">
    <?= render_header() ?>
    <section class="subtitle">
        <div class="subtitle_box">
            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="40" viewBox="0 0 57 40" fill="none">
                <path d="M30.335 5L5.0003 33.5684" stroke="#19958D" stroke-width="10" stroke-linecap="round" />
                <path d="M51.335 6L26.0003 34.5684" stroke="#D3007F" stroke-width="10" stroke-linecap="round" />
            </svg>
            <div id="subtitle_box">
                <h1>Instant swap</h1>
                <p>Convert top crypto and stablecoins with 0 fees and no slippage</p>
            </div>
        </div>




    </section>
    <main class="swap__block">
        <section class="swap-box__wrapper">

            <div class="swap-box__el mb-0">
                <div class="swap-box__counter">
                    1
                </div>
                <style>
                    .itc-select {
                        width: unset;
                    }

                    .itc-select__toggle {
                        border-radius: 0px 2px 2px 0px;
                        border: 0.5px solid #C0C0C0;
                        background: #4C5E72;
                        border-radius: 0px 5px 5px 0px;
                        width: auto;
                    }

                    .swap-box__content {
                        width: 100%;
                    }
                </style>
                <div class="swap-box__content">
                    <div class="block">
                        <h2 class="m-0">You send</h2>
                        <p>Select the crypto asset you want to exchange</p>
                        <div class="flex">
                            <input placeholder="Enter amount" oninput="validateInput_numbers(this); calculate()" value="1" id="inpt_amount" style="padding: 0px 15px;
                            border: 0.5px solid #C0C0C0;width: 60%;border-radius: 5px 0px 0px 5px;" type="text">
                            <div id="select-1"></div>
                        </div>
                        <p style="padding-top: 7px;" id="available_balance">Available: <b>0 BTC</b></p>

                    </div>

                </div>
            </div>
            <div class="flex justify-center ">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="61" viewBox="0 0 20 41" fill="none">
                    <path d="M6.94373 2C9.98361 5.67986 10.4801 12.3983 10.5828 16.9684C10.6686 20.7863 9.82755 24.5458 9.82755 28.3664M2 26.6023C2.57398 27.9224 7.54724 40.2808 9.07224 39.2133C11.3601 37.6118 12.9099 34.2373 14.817 32.1868C15.9341 30.9858 17.1305 29.9732 18.479 29.0741" stroke="#ADB0B3" stroke-width="3" stroke-linecap="round" />
                </svg>
            </div>
            <div class="swap-box__el">
                <div class="swap-box__counter">
                    2
                </div>
                <div class="swap-box__content">
                    <div class="block">
                        <h2 class="m-0">You receive</h2>
                        <p class="w-100">Select receive currency</p>
                        <div class="flex">
                            <input disabled id="receive" placeholder="You will receive" style="padding: 0px 15px;
                            border: 0.5px solid #C0C0C0;width: 60%;border-radius: 5px 0px 0px 5px;" type="text">
                            <div id="select-2"></div>
                        </div>
                        <p style="padding-top: 7px;" id="convert_course" class="mb-5">Reference exchange rate: </p>

                    </div>
                    <a href="#" onclick="swap()" class="btn">Submit Swap</a>
                </div>

            </div>

            <div class="swap-box__footer ">
                <img src="assets/images/icons/notificate.svg" alt="">
                <p class="swap-box-footer__text p-2 m-0">Once the conversion is complete, funds will be transferred
                    directly to your spot account.</p>
            </div>
        </section>

        <section class="block">

            <div class="swap-box__wrapper instructions">
                <h1>Is it safe to deposit and store my cryptocurrencies with <span ><?=$domain_titleINIT?></span>?</h1>
                <p>Yes, it is safe to do so! To maintain a high level of asset security and flexibility, <span ><<?=$domain_titleINIT?>/span> uses an
                    industry-standard cold wallet to keep your deposited assets safe, and a hot wallet that allows for
                    all-day withdrawals. All withdrawals undergo a strict confirmation procedure and every withdrawal
                    request is manually reviewed by our team daily at 0:00AM, 8:00AM, and 4:00PM UTC. In addition, 100%
                    of our traders' deposit assets are segregated from <span ><?=$domain_titleINIT?></span>'s own operating budget
                    for increased
                    financial accountability. If you wish to learn more, please refer to our Terms of Service.</p>
                <h1>What type of coin deposits does <span ><?=$domain_titleINIT?></span> support?</h1>
                <p>We're constantly working on expanding the types of coin deposits we accept to better suit your needs.
                    Here are the types of coin deposits we currently support: BTC ETH XRP EOS USDT DOGE DOT LTC XLM
                    Note: Each coin must be based and have their transaction hash (TXID) validated on their respective
                    standard blockchains. Depositing a coin type via a blockchain not listed above may result in the
                    permanent loss of your coin.</p>
                <h1>I don't see my deposit in my account. Why?</h1>
                <p>There might be a few reasons for the delay. Here are the major reasons for the respective coins: BTC
                    — Unconfirmed transactions on the blockchain (at least 3 confirmation is needed). ETH — Unconfirmed
                    transactions on the blockchain (at least 30 confirmations are needed), or it could be a Smart
                    Contract transaction that <span ><?=$domain_titleINIT?></span> does not currently support. XRP or EOS — Invalid
                    or missing
                    tag/memo when the deposit was made. USDT — Unconfirmed transaction on the blockchain (1 or 30 or 100
                    confirmations are needed depending if the deposit was an Omni, ERC-20, or TRC-20 transfer).</p>
            </div>
        </section>
    </main>

</body>
<script src="assets/scripts/main.js"></script>
<script>
    const currencyoptions = [
        <?= render_custom_select_coin() ?>

    ];

    function available_balance_func(id_coin, text) {
        $.ajax({
            type: "POST",
            url: "/api/ajax/get_balance_coin.php",
            data: {
                coin: id_coin
            },
            success: function(response) {

                if (response.status == 'success') {
                    const balance = parseFloat(response.balance);

                    const available_balance = document.getElementById('available_balance');

                    available_balance.textContent = `Available: ${balance.toFixed(1)} ${text}`;
                }
            },
            error: function(response) {
                console.log(response)
            }
        });
    }
    const select1 = new ItcCustomSelect("#select-1", {
        options: currencyoptions,
        targetValue: "189_Bitcoin",
        onSelected(select, option) {
            const text = option ? option.textContent : '';
            const id_coin = select.value;
            available_balance_func(id_coin, text)
            calculate()
        },


    });
    available_balance_func(189, "BTC")
    const select2 = new ItcCustomSelect("#select-2", {
        options: currencyoptions,
        targetValue: "191_Litecoin",
        onSelected(select, option) {
            calculate()
        }

    });

    function calculate() {
        const select_2 = document.getElementById('select-2');
        const select_2_value = select_2.querySelector('.itc-select__toggle').value;
        const coin_name2 = select_2_value.split('_')[1];

        const select_1 = document.getElementById('select-1');
        const select_1_value = select_1.querySelector('.itc-select__toggle').value;
        const coin_name1 = select_1_value.split('_')[1];
        const inpt_amount = document.getElementById('inpt_amount');
        const inpt_amount_value = inpt_amount.value;


        $.ajax({
            type: "POST",
            url: "/api/ajax/convert_crypto_price.php",
            data: {
                coin1: coin_name1,
                coin2: coin_name2,
                amount: inpt_amount_value
            },
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    const kurs = response.course;
                    const receive = document.getElementById('receive');
                    const text = select_2.querySelector('.itc-select__toggle').textContent;

                    const convert_course = document.getElementById('convert_course');
                    receive.value = `${(kurs).toFixed(2)} `;
                    convert_course.textContent = `Reference exchange rate: ${inpt_amount_value} ${coin_name1} = ${kurs.toFixed(2)} ${coin_name2}`;

                }
            },
            error: function(response) {
                console.log(response)
            }
        });
    }

    function swap() {
        const select_2 = document.getElementById('select-2');
        const select_2_value = select_2.querySelector('.itc-select__toggle').value;
        const coin_name2 = select_2_value.split('_')[0];

        const select_1 = document.getElementById('select-1');
        const select_1_value = select_1.querySelector('.itc-select__toggle').value;
        const coin_name1 = select_1_value.split('_')[0];
        const inpt_amount = document.getElementById('inpt_amount');
        const inpt_amount_value = inpt_amount.value;


        if (inpt_amount_value != 0 && coin_name1 != coin_name2) {
            $.ajax({
                type: "POST",
                url: "/api/ajax/swap.php",
                data: {
                    coin_change_from: coin_name1,
                    coin_change_to: coin_name2,
                    amount_from: inpt_amount_value
                },
                success: function(response) {
          
                    if (response.status == 'success') {
                        new Notify({
                            title: 'Success',
                            text: 'The exchange was completed successfully.',
                            status: 'success',
                            autoclose: true,
                            autotimeout: 3000
                        })
                    } else {
                        new Notify({
                            title: 'Error',
                            text: 'An error occurred while exchanging.',
                            status: 'error',
                            autoclose: true,
                            autotimeout: 3000
                        })

                    }
                },
                error: function(response) {
                    console.log(response)
                }
            });
        } else {
            new Notify({
                title: 'Error',
                text: 'Check that the data is correct',
                status: 'error',
                autoclose: true,
                autotimeout: 3000
            })
        }
    }
    calculate()
</script>

</html>