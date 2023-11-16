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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-title>.</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/output.css">
    <link rel="stylesheet" href="assets/styles/checkbox.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">

    <link rel="stylesheet" href="assets/styles/custom-select.css">
    <link rel="stylesheet" href="/assets/DataTables/datatables.css" />
    <script src="/assets/DataTables/datatables.js"></script>
    <script src="assets/scripts/custom-select.js"></script>
</head>

<body class="swap">
    <?=render_header()?>
    <section class="subtitle">
        <div class="subtitle_box">
            <svg width="59" height="46" viewBox="0 0 59 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_170_9076)">
                    <path d="M52.4748 8.85547L31.3564 39.0247" stroke="white" stroke-width="12"
                        stroke-linecap="round" />
                    <path d="M29.4749 8.85547L8.35645 39.0247" stroke="#30ACFF" stroke-width="12"
                        stroke-linecap="round" />
                </g>
                <defs>
                    <clipPath id="clip0_170_9076">
                        <rect width="59" height="45" fill="white" transform="translate(0 0.5)" />
                    </clipPath>
                </defs>
            </svg>

            <div id="subtitle_box">
                <h1>Fees</h1>
                <p>Check out our trading & payment fees</p>
            </div>
        </div>




    </section>
    <main class="fees_main">
        <section class="p-10">
            <table id="fees_table" width="100%" class="fees_table">
                <thead>
                    <tr>
                        <th>Payment Method</th>
                        <th>Min deposit</th>
                        <th>In orders</th>
                        <th>Deposit Fee </th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/usdt.png" alt="">
                            <h3>USDT</h3> <span class="text-gray-500 text-xs">Tether</span>
                        </td>
                        <td>0.000753 </td>
                        <td>1%</td>
                        <td>>0.000038 </td>
                        <td>Deposit Withdraw</td>

                    </tr>


                </tbody>

            </table>
        </section>
        <section class="p-10">
            <div class="trading_fees_table_title">
                <h1>Trading Fees</h1>
                <div class="trading_fees_table_title_line"></div>
            </div>
            <table id="trading_fees_table" class="fees_table">
                <thead>
                    <tr>
                        <th>30-day Trade Volume, $</th>
                        <th>Effective Trading Comissions</th>
                        <th>Your Cashback</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2 000 000 +</td>
                        <td>
                            <div class="grid gap-3">
                                <div class="flex items-center gap-3">
                                    <span>-0.05%</span>
                                    <p>Maker</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span>-0.05%</span>
                                    <p>Maker</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="grid gap-3">
                                <div class="flex items-center gap-3">
                                    <span>-0.05%</span>
                                    <p>Maker</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span>-0.05%</span>
                                    <p>Maker</p>
                                </div>
                            </div>
                        </td>


                    </tr>


                </tbody>

            </table>
        </section>
    </main>
    <footer></footer>
</body>
<script src="assets/scripts/main.js"></script>
<script>

    $("#fees_table").DataTable({
        language: {
            "search": "",
            "searchPlaceholder": 'Search crypto',
        },
        searching: false,
        paging: false,

    })
    $("#trading_fees_table").DataTable({
        language: {
            "search": "",
            "searchPlaceholder": 'Search crypto',
        },
        paging: false,
        searchPlaceholder: "Search crypto",
        searching: false
    })
</script>

</html>