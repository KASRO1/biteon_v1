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

    <main id="status_main" >
        <section class="status_project">
            <div class="status_project_header">
                <h1>Biteon Status</h1>
                <p>Real-time maintenance info</p>
            </div>
            <div class="status_project_header_footer">
                <p>Check the status of Biteon upgrades, system maintenance, potential service outages, and crypto deposits and withdrawals</p>
            </div>
        </section>
        <section class="planned_upgrades_sec">
            <div class="planned_upgrades_sec_title">
                <h1 class="mb-2">Planned upgrades</h1>
                <div class="planned_upgrades_sec_title_line"></div>
            </div>
            <div class="planned_upgrades_sec_content">
                <div class="planned_upgrades_sec_content_cards">
                    <div class="planned_upgrades_sec_content_card">
                        <div>
                            <h3>Copy trading system upgrade</h3>
                            <p>Mar 08, 2023, 9:10 AM ~ 9:18 AM (UTC+0)</p>
                        </div>
                        <div class="planned_upgrades_sec_content_card_complected">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                                <path d="M1.61035 5.66667L5.04785 9L12.6104 1" stroke="#05C28C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <span>
                                Completed
                              </span>
                        </div>
                    </div>
                    <div class="planned_upgrades_sec_content_card">
                        <div>
                            <h3>Copy trading system upgrade</h3>
                            <p>Mar 08, 2023, 9:10 AM ~ 9:18 AM (UTC+0)</p>
                        </div>
                        <div class="planned_upgrades_sec_content_card_complected">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                                <path d="M1.61035 5.66667L5.04785 9L12.6104 1" stroke="#05C28C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <span>
                                Completed
                              </span>
                        </div>
                    </div>
                    <div class="planned_upgrades_sec_content_card">
                        <div>
                            <h3>Copy trading system upgrade</h3>
                            <p>Mar 08, 2023, 9:10 AM ~ 9:18 AM (UTC+0)</p>
                        </div>
                        <div class="planned_upgrades_sec_content_card_complected">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                                <path d="M1.61035 5.66667L5.04785 9L12.6104 1" stroke="#05C28C" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <span>
                                Completed
                              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="planned_upgrades_sec">
            <div class="planned_upgrades_sec_title">
                <h1 class="mb-2">Issue descriptions</h1>
                <div class="planned_upgrades_sec_title_line"></div>
            </div>
            <div class="planned_upgrades_sec_content jflex">
                <div class="issue_descriptions_cards">
                    <div class="issue_descriptions_card">
                        <div class="issue_descriptions_card_title">
                            <h3>2021-03-26 trading service issue updates</h3>
                            <p>2021-03-26 5:50 am ~ 1:03 pm</p>
                        </div>
                        <div class="issue_descriptions_card_next">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_170_8928)">
                                <path d="M1.5 4.9082H16.5267" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9258 1L17.8341 4.90833L13.9258 8.81666" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_170_8928">
                                <rect width="19" height="10" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                    </div>
                    <div class="issue_descriptions_card">
                        <div class="issue_descriptions_card_title">
                            <h3>2021-03-26 trading service issue updates</h3>
                            <p>2021-03-26 5:50 am ~ 1:03 pm</p>
                        </div>
                        <div class="issue_descriptions_card_next">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_170_8928)">
                                <path d="M1.5 4.9082H16.5267" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9258 1L17.8341 4.90833L13.9258 8.81666" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_170_8928">
                                <rect width="19" height="10" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                    </div>
                    <div class="issue_descriptions_card">
                        <div class="issue_descriptions_card_title">
                            <h3>2021-03-26 trading service issue updates</h3>
                            <p>2021-03-26 5:50 am ~ 1:03 pm</p>
                        </div>
                        <div class="issue_descriptions_card_next">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_170_8928)">
                                <path d="M1.5 4.9082H16.5267" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9258 1L17.8341 4.90833L13.9258 8.81666" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_170_8928">
                                <rect width="19" height="10" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                    </div>
                    <div class="issue_descriptions_card">
                        <div class="issue_descriptions_card_title">
                            <h3>2021-03-26 trading service issue updates</h3>
                            <p>2021-03-26 5:50 am ~ 1:03 pm</p>
                        </div>
                        <div class="issue_descriptions_card_next">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_170_8928)">
                                <path d="M1.5 4.9082H16.5267" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9258 1L17.8341 4.90833L13.9258 8.81666" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_170_8928">
                                <rect width="19" height="10" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                    </div>
                    <div class="issue_descriptions_card">
                        <div class="issue_descriptions_card_title">
                            <h3>2021-03-26 trading service issue updates</h3>
                            <p>2021-03-26 5:50 am ~ 1:03 pm</p>
                        </div>
                        <div class="issue_descriptions_card_next">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_170_8928)">
                                <path d="M1.5 4.9082H16.5267" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9258 1L17.8341 4.90833L13.9258 8.81666" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_170_8928">
                                <rect width="19" height="10" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                    </div>
                    <div class="issue_descriptions_card">
                        <div class="issue_descriptions_card_title">
                            <h3>2021-03-26 trading service issue updates</h3>
                            <p>2021-03-26 5:50 am ~ 1:03 pm</p>
                        </div>
                        <div class="issue_descriptions_card_next">
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_170_8928)">
                                <path d="M1.5 4.9082H16.5267" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.9258 1L17.8341 4.90833L13.9258 8.81666" stroke="white" stroke-opacity="0.4" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_170_8928">
                                <rect width="19" height="10" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                    </div>
                </div>
                <a href="">View more <svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 5 10" fill="none">
                    <path d="M1.25098 9L4.25098 5L1.25098 1" stroke="" stroke-opacity="0.9"/>
                  </svg></a>
            </div>
            
        </section>
        <section class="stats_status_deposits_sec">
            <div class="stats_status_deposits_sec_title">
                <h1 class="mb-2">Status of deposits and withdrawals</h1>
                <p >Check if you can deposit or withdraw any crypto listed on Biteon right now.</p>
            </div>
            <table id="status_table_table" class="fees_table status_table" >
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
                        <td ><a class="btn ">Procced</a></td>

                    </tr>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/btc.svg" alt=""><h3>BTC</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">10.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn ">Procced</a></td>

                    </tr>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/eth.png" alt=""><h3>ETH</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">5.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn ">Procced</a></td>

                    </tr>

                </tbody>

            </table>
            
        </section>
    </main>

</body>
<script src="assets/scripts/main.js"></script>
<style>
    .dataTables_wrapper .dataTables_filter{
        float: left;
    text-align: left;
    }
    .dataTables_wrapper .dataTables_filter input{
        border-radius: 4px;
border: 1px solid rgba(255, 255, 255, 0.60);
background: #2A415A;
color: white;
    }
    #status_table_table_wrapper{
overflow: auto;
    }
</style>
<script>
 

    $("#status_table_table").DataTable({
        language: {
        "search": "",
        "searchPlaceholder": 'Search assets',
        },
        paging: false,
        searchPlaceholder: "Search assets",
        searching: true
    })
</script>
</html>