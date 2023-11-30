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

<body>
    <?=render_header()?>
    <main class="mb-96 p-0">
        <section class="savings_block  flex mb-24">
            <div class="savings_block__card particate items-center flex">
                <div class="savings_block__content particate_content items-center">
                    <h1 class=" ">Participate in <br>
                        ETH2.0 staking</h1>
                    <p class="leading-relaxed text-left">
                        with lower barriers and stable returns
                    </p>

                </div>
                <img src="assets/images/bg/participate.png" class="h-80  bg-center" alt="" />
            </div>
        </section>
        <section class=" conversion_ratio_sec ">
            <div class="conversion_ratio">
            <div>
                <span class="">Conversion ratio</span>
                <h3 class="pt-2  m-0">1ETH:1BETH</h3>
                <p>Low/medium risk |
                    Start at 0.1ETH</p>
            </div>
            <div>
                <span class="">Returns of BETH holdings</span>
                <h3 class="m-0 font-normal">4.29%</h3>
            </div>
            <div class="max-w-xs">
                <a  class="btn open_error">One-click convert</a>
            </div>
        </div>
        </section>
        <section class="px-20  ">
            <h3 class="text-center h3_flow"><span ><?=$domain_titleINIT?></span> flow</h3>
            <div class="stake_flow">
                <div>
                    <h3 class="bg-blue-400 rounded-full p-5 text-center w-16">1</h3>
                    <span>Stake ETH</span>
                    <p>Stake at least 0.1 ETH</p>
                </div>
                <div>
                    <h3 class="bg-blue-400 rounded-full p-5 text-center w-16">2</h3>
                    <span>Earn returns</span>
                    <p class="max-w-xs"><?=$domain_titleINIT?> issues BETH as the staking proof at a ratio of
                        1:1. The staking return will be distributed at 11:30 (+8
                        UTC) every day.</p>
                </div>
                <div>
                    <h3 class="bg-blue-400 rounded-full p-5 text-center w-16">3</h3>
                    <span>Redeem ETH</span>
                    <p class="max-w-xs">You can redeem your ETH once the Shanghai Upgrade enables staking withdrawals,
                        which is expected to happen 6 - 12 months after the Merge. You'll then be able to swap BETH to
                        ETH on a 1:1 basis.</p>
                </div>
            </div>
        </section>
        <section class="justify-center grid ">
            <div class="flex justify-center">
                <div class="w-fit w-100  mb-8">
                    <h2 class="m-1 highlights_h2" ><span ><?=$domain_titleINIT?></span> highlights</h2>
                    <div class="w-100" style="border-radius: 5px; height: 3px;
            background: linear-gradient(90deg, #7044EE 0%, #30ACFF 100%);"></div>
                </div>
            </div>
            <div class="stable_returns">
                <div class="flex  gap-5 items-start">
                    <img class="h-20" src="assets/images/stable_returns.png" alt="">
                    <div class="grid  gap-3 items-center">
                        <h3 class=" m-0 font-normal">Stable returns</h3>
                        <span class=" ">Don't just hold. Earn an additional 5%-20% locking
                            return.</span>
                    </div>
                </div>
                <div class="flex gap-5 items-start">
                    <img class="h-18" src="assets/images/Low_barriers.png" alt="">
                    <div class="grid gap-3 items-center">
                        <h3 class=" m-0 font-normal">Low barriers to entry</h3>
                        <span class="  "><?=$domain_titleINIT?> will cover the spending on ETH 2.0 nodes and
                            maintenance so you can participate with just 0.1 ETH. <?=$domain_titleINIT?> will distribute all the returns
                            generated to the participants.</span>
                    </div>
                </div>
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