<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}
$user_info = get_user_info($auth_token);
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

    <script src="assets/scripts/custom-select.js"></script>
</head>
<style>
    .subtitle {
        justify-content: center;
    }
    .marker{
        border-radius: 0;
        border: 0;
        background-color: transparent;
    }
    .coin_item span{
        font-weight: 600;
    }

</style>

<body class="swap">
    <?=render_header()?>
    <section class="subtitle">
        <div class="subtitle_content">
            <div class="subtitle_box">
                <img src="assets/images/subtitle_logo.svg" alt="">
                <div id="subtitle_box">
                    <h1>Deposit coins</h1>
                    <p>Top up your account balance with crypto</p>
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
    <main class="swap__block">
        <section class="swap-box__wrapper">

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
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
                                BTC
                            </div>
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
                                ETH
                            </div>
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
                                TRX
                            </div>
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
                                LTC
                            </div>
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
                                DOGE
                            </div>
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
                                XRP
                            </div>
                            <div onclick="window.location.href = '/deposit?coin=' + this.innerText" class="swap-box__picker_el">
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
                        <p class="w-100">Make sure you selected the same network on the platform where you are
                            withdrawing funds for this deposit</p>
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

                        <button type="text" class="btn" name="" onclick="show_address(this)" id="show_adress">Show
                            address</button>
                        <div id="address_block_el" class="d-none">
                            <h3>Select network</h3>
                            <p class="w-100">Make sure you selected the same network on the platform where you are
                                withdrawing funds for this deposit</p>
                            <div class="copy_block flex mb-5">
                                <input type="text" disabled value="<?=$get_coin['payment_address']?>" class="copy-input">
                                <div data-copy="<?=$get_coin['payment_address']?>" id="copy_button" onclick="copy(this)" class="copy_button"><img
                                        src="assets/images/icons/copy.svg" alt="">Copy</div>
                            </div>
                            <a class="swap-box__button" onclick="show_qr()">Show QR
                                <img id="arrow" src="assets/images/icons/arrow.svg" alt="">
                            </a>
                            <div class="qr_code d-none">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?=$get_coin['payment_address']?>"
                                    class="p-5 " alt="">
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="swap-box__footer ">
                <img src="assets/images/icons/notificate.svg" alt="">
                <p class="swap-box-footer__text p-2 m-0">12 network confirmations are required before your funds will be
                    added to your account balance.</p>
            </div>
        </section>

        <section class="block">
            <div class="swap-box__wrapper mb-5">
                <div class="swap-box__content">
                    <div class="block">
                        <div class="w-fit">
                            <h1 class=" mb-1">Important information</h1>
                            <div class="line-gradient"></div>


                        </div>
                        <ul class="mb-4">
                            <li>Send only <span class="marker"><?=$coin_selected?></span> to this deposit address</li>
                            <li>Ensure the network is <span class="marker">Bitcoin (<?=$coin_selected?>)</span></li>
                            <li>Deposits via smart contracts are not supported</li>
                            <li>Do not send NFTs to this address</li>
                        </ul>
                        <div class="min-deposit mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                fill="none">
                                <path
                                    d="M3.85714 7.29514C3.92229 8.11286 4.56857 8.74971 5.72743 8.82514V9.42857H6.24171V8.82086C7.44171 8.73686 8.14286 8.09571 8.14286 7.16486C8.14286 6.31886 7.60629 5.88257 6.64714 5.65629L6.24171 5.56029V3.91714C6.756 3.97543 7.08343 4.25657 7.16229 4.64571H8.064C7.99886 3.858 7.32343 3.24171 6.24171 3.17486V2.57143H5.72743V3.18771C4.70314 3.288 4.00457 3.90429 4.00457 4.776C4.00457 5.54743 4.524 6.03771 5.38714 6.23914L5.72743 6.32314V8.06657C5.20029 7.98686 4.85143 7.698 4.77257 7.29514H3.85714ZM5.72314 5.43857C5.21743 5.32114 4.94314 5.082 4.94314 4.722C4.94314 4.31914 5.23886 4.01743 5.72743 3.92914V5.43771L5.72314 5.43857ZM6.31629 6.46114C6.93086 6.60343 7.21457 6.834 7.21457 7.24114C7.21457 7.70571 6.86143 8.02457 6.24171 8.08286V6.444L6.31629 6.46114Z"
                                    fill="white" />
                                <path
                                    d="M6 11.25C4.60761 11.25 3.27226 10.6969 2.28769 9.71231C1.30312 8.72775 0.75 7.39239 0.75 6C0.75 4.60761 1.30312 3.27226 2.28769 2.28769C3.27226 1.30312 4.60761 0.75 6 0.75C7.39239 0.75 8.72775 1.30312 9.71231 2.28769C10.6969 3.27226 11.25 4.60761 11.25 6C11.25 7.39239 10.6969 8.72775 9.71231 9.71231C8.72775 10.6969 7.39239 11.25 6 11.25ZM6 12C7.5913 12 9.11742 11.3679 10.2426 10.2426C11.3679 9.11742 12 7.5913 12 6C12 4.4087 11.3679 2.88258 10.2426 1.75736C9.11742 0.632141 7.5913 0 6 0C4.4087 0 2.88258 0.632141 1.75736 1.75736C0.632141 2.88258 0 4.4087 0 6C0 7.5913 0.632141 9.11742 1.75736 10.2426C2.88258 11.3679 4.4087 12 6 12Z"
                                    fill="white" />
                            </svg>Minimum deposit: 0.000791 <?=$coin_selected?>
                        </div>

                    </div>

                </div>
            </div>
            <div class="swap-box__wrapper instructions">
                <h1>Is it safe to deposit and store my cryptocurrencies with <span ><?=$domain_titleINIT?></span>?</h1>
                <p>Yes, it is safe to do so! To maintain a high level of asset security and flexibility, <span
                        ><?=$domain_titleINIT?></span> uses an
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
            ["Bank", "<div class='coin_item'> <img class='priceimg' src=/> Bank Card<div class='price-box-price'></div></div>"],
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
                if(select.value == "Bank"){
                    window.location.href = "/";
                }
                else{
                    window.location.href = "/deposit?coin=" + select.value;
                }

            }
        });
        const select2 = new ItcCustomSelect("#select-2", {
            options: options_network,
            targetValue: "<?=$networks[0]['title']?>",
        });


</script>

</html>