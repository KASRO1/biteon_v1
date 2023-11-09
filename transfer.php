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
    <header>
        <div class="logo">
            <img src="assets/images/logo.svg" class="logo_img" alt="logo">
            <h3 data-title></h3>
        </div>
        <div class="menu">
            <ul>


                <li><a href="pages/contact.php">Spot trading</a></li>
                <li><a href="pages/contact.php">Swap</a></li>
                <li><a href="pages/contact.php">Derivatives</a></li>
                <li><a href="pages/contact.php">Tools</a></li>
                <li><a href="pages/contact.php">Stacking</a></li>
                <li><a href="pages/contact.php">Earn</a></li>
                <li><a href="pages/contact.php">More</a></li>
                <li><a href="pages/contact.php">Support</a></li>
                <li class="balance">Wallet : 0 USD</li>
            </ul>
        </div>
        <div class="login_block gap-0">
            <a href="" class="autorized_user">KASRO</a>
            <img src="assets/images/profile.png" class="image_profile" alt="">
            <a href=""><img src="assets/images/burger.svg" alt=""></a>

        </div>

    </header>
    <section class="subtitle">
        <div class="subtitle_content">
            <div class="subtitle_box">
                <img src="assets/images/subtitle_logo.svg" alt="">
                <div id="subtitle_box">
                    <h1>Internal transfer</h1>
                    <p>Send crypto to Bitlirex users via email or account ID</p>
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
    <main >
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
                        <h3>Recipient email / ID</h3>
                        <p class="w-100">Enter the recipient email or account ID of the other user</p>
                            
                        <div class="swap_input_dark">
                            <input type="text" class="w-100" placeholder="Enter user Email or account ID    ">

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
                                <input type="text" class="w-100" placeholder="Enter amount">
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
                <p class="swap-box-footer__text p-2 m-0">Please note the network fee will only be charged for withdrawals to non-Bitlirex
                    addresses. If the recipient address is correct and belongs to a Bitlirex account,
                    the network fee will not be deducted.</p>
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
                           
                            <li>The recipient (another Bitlirex user) will instantly receive your transfer. They may
                                find the record in [Transaction History]</li>
                            <li>Please note that for internal transfer within Bitlirex, no TxID in blockchain will be
                                created</li>
                        </ul>


                    </div>

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