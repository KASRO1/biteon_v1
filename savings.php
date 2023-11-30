<?php

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title ><?=$domain_titleINIT?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css" />
    <link rel="stylesheet" href="assets/styles/output.css" />
    <link rel="stylesheet" href="assets/styles/checkbox.css" />
    <link rel="stylesheet" href="assets/styles/animated-accordion-2.css" />
    <link rel="stylesheet" href="assets/fonts/stylesheet.css" />
    <link href="assets/styles/itc-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/DataTables/datatables.css" />
</head>
<style>
    #table_wrapper{
        margin: auto;
        max-width: 1400px;
    }
    tbody tr td:nth-child(3){
        
    }
</style>
<body>
    <?=render_header()?>
    <main class="mb-96 p-0">
        <section class="savings_block">
            <div class="savings_block__card">
                <div class="savings_block__content">
                    <h1 class=""><?=$domain_titleINIT?> savings</h1>
                    <p class="leading-relaxed">
                        Low risk | Flexible terms.<br />
                        Savings allows users to earn hourly interests by funding
                        <span ><?=$domain_titleINIT?></span> margin loans.
                    </p>
                    <img src="assets/images/savings.png" alt="" />
                </div>
            </div>
        </section>
        <section class="p-10">
            <table id="table" class="savings_table" >
                <thead>
                    <tr>
                        <th>Token</th>
                        <th>Est. APY</th>
                        <th>Term</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/usdt.png" alt=""><h3>USDT</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">10.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn open_error">Procced</a></td>

                    </tr>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/btc.svg" alt=""><h3>BTC</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">10.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn open_error">Procced</a></td>

                    </tr>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/eth.png" alt=""><h3>ETH</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">5.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn open_error">Procced</a></td>

                    </tr>

                </tbody>

            </table>
        </section>
        <section class="faq-box grid justify-center bg-transparent text-center p-3">
            <h3 class="">FAQs</h3>
            <div id="accordion" class="accordion mb-24" style="margin: 1rem auto">
                <div class="accordion__item">
                    <div class="accordion__header">
                        What’s the benefits for the invitees as new users?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            A customizable crypto bot helps traders to create various
                            automated trading strategies. Compared with traditional manual
                            trading, trading bot can execute orders at a lower risk and
                            costs, and grasp the best trading timings.
                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">
                        How is the interest rate calculated?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            With 15% of the loan interest withheld as insurance fund, the hourly interest rate for lenders is loan principal*APY/365/24*0.85.
                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">
                        Why haven't I received my interests?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            Interests are available for loaned-out assets only. Please verify if your assets are loaned or not.
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-center m-auto max-w-md">
                <a class="btn w-48 open_error">View more ></a>
            </div>
        </section>
    </main>
    <?=render_footer()?>
</body>

<script src="assets/scripts/main.js"></script>
<script src="assets/scripts/animated-accordion-2.js"></script>
<script defer src="assets/scripts/itc-slider.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


<script src="/assets/DataTables/datatables.js"></script>
<script>
    new ItcAccordion(document.querySelector(".accordion"), {
        alwaysOpen: false,
    });
    $("#table").DataTable({
        language: {
        "search": "",
        "searchPlaceholder": 'Search crypto',
        },
        paging: false,
        
    })
</script>

</html>