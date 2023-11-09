<?php 

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /log-in");
}

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
                <button class="btn-dark"><img src="assets/images/icons/deposit.svg" alt="">Deposit</button>
                <button class="btn-dark"><img src="assets/images/icons/withdraw.svg" alt="">Withdraw</button>
                <button class="btn-dark"><img src="assets/images/icons/transfer.svg" alt="">Transfer</button>
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
                        <h3>Select coin to internal transfer</h3>
                        <p>Choose the coin to send</p>
                        <div id="select-1"></div>
                        <p style="padding-top: 10px;">Popular coins:</p>
                        <div class="swap-box__picker">
                            <div class="swap-box__picker_el">
                                BTC
                            </div>
                            <div class="swap-box__picker_el">
                                ETH
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
            <div class="swap-box__el">
                <div class="swap-box__counter">
                    3
                </div>
                <div class="swap-box__content">
                    <div class="block">
                        <h3>Address</h3>
                        <p class="w-100">Enter the recipient's crypto address</p>

                        <div class="swap_input_dark">
                            <input type="text" class="w-100" placeholder="Enter destination address">

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
                                <input type="text" class="w-100" placeholder="Enter destination address">
                                <span>All</span>
                                <div>
                                    BTC
                                </div>
                            </div>
                            <p class="vailable_p">Available: 0 BTC</p>
                        </div>

                    </div>

                </div>

            </div>
            <button class="btn" style="width: 100%; margin-bottom: 29px;">Stake</button>
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

                            <li>Do not transfer your assets to any non BTC addresses as you may not be able to
                                retrieve the BTC asset after.</li>
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
                    <h2>When does BITEON process withdrawal requests?</h2>
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
                    <h2>Does BITEON support withdrawals to a Smart Contract ETH wallet address?</h2>
                    <h3>No, BITEON does not support ETH withdrawals via Smart Contracts method. Instead, BITEON only supports ETH withdrawals via Direct Transfer method.</h3>
                </div>
                <div>
                    <h2>Does BITEON support withdrawals to a segwit BTC wallet address?</h2>
                    <h3>Yes, BITEON supports withdrawals to segwit BTC wallet addresses starting with "bc1", also known as bech32 addresses.</h3>
                </div>
                <div>
                    <h2>Can traders fix their own withdrawal fees on BITEON?</h2>
                    <h3>At the moment, no. However, BITEON is considering enabling this option for traders to determine their own withdrawal fees in the future.</h3>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
<script src="assets/scripts/main.js"></script>
<script>
    create_select();
</script>

</html>