<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if (!get_user_info($auth_token)) {
    header("Location: /login");
}
$user_info = get_user_info($auth_token);
if ($_GET['pair']) {
    $pair = $_GET['pair'];
} else {
    $pair = 'BTC_USDT';
}
$coin = explode('_', $pair)[0];
$coin_info = get_coin_info($coin);
$coin_fullName = strtolower($coin_info['full_name']);

$coin_id = $coin_info['id_coin'];
$assets_coin = get_assets_coin($pair);

$volume_24h = number_format($assets_coin['quoteVolume'], 2);
$change_24h = number_format($assets_coin['priceChangePercent'], 2);
$high_24h = number_format($assets_coin['highPrice'], 2);
$low_24h = number_format($assets_coin['lowPrice'], 2);
$amount_24h = $assets_coin['count'];
$last_price = number_format($assets_coin['lastPrice'], 2);
$last_price_orig = $assets_coin['lastPrice'];
$balance_coin = get_balance_coin_this_user($coin_id);
$balance_coin_usdt = get_balance_coin_this_user(192);
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


    <link rel="stylesheet" href="/assets/DataTables/datatables.css"/>
    <script src="/assets/DataTables/datatables.js"></script>
    <link rel="stylesheet" href="assets/styles/custom-select.css">

    <script src="assets/scripts/custom-select.js"></script>
</head>
<style>
    #status_main {
        padding: 10px !important;
    }

    .dataTables_wrapper {
        max-height: 1025px;
        overflow-y: auto;
    }
</style>

<body class="swap">
<?= render_header() ?>

<main id="status_main" class="spot_main">
    <section class="spot_header_sec">
        <div class="spot_header_content">
            <div class="spot_header_current_pair">
                <img src="assets/coin_icons/<?= strtolower($coin) ?>.svg" alt="">
                <h2><?= $pair ?></h2>
            </div>
            <div class="spot_header_current_cost">
                <h2 id="cost_change"><?= $last_price ?></h2>
                <p>≈$<span id="cost_change_usd"><?= $last_price ?><span></p>
            </div>
            <div class="spot_header_24h_change">
                <p>24h Change</p>
                <h4 id="24h_change"><?= $change_24h ?> %</h4>
            </div>
            <div class="spot_header_24h_high">
                <p>24h High</p>
                <h4 id="24h_high"><?= $high_24h ?></h4>
            </div>
            <div class="spot_header_24h_low">
                <p>24h Low</p>
                <h4 id="24h_low"><?= $low_24h ?><h4>
            </div>
            <div class="spot_header_24h_volume">
                <p>24h Volume(<?= $coin ?>)</p>
                <h4 id="24h_volume"><?= $volume_24h ?></h4>
            </div>
            <div class="spot_header_24h_amount">
                <p>24h Amount (USDT)</p>
                <h4 id="24h_amount">250,209,831.41</h4>
            </div>
        </div>
    </section>
    <section class="spot_content">
        <div class="spot_content_actual_kurs">
            <table id="spot_table">
                <thead>
                <tr>
                    <th>Currency</th>
                    <th>Last</th>
                    <th>Change</th>


                </tr>
                </thead>
                <tbody>
                <?= render_assets_spot() ?>
                </tbody>

            </table>
            <div class="order_book_container">
                <div class="order_book_header">
                    Order Book
                </div>
                <div class="order_book_content">
                    <table class="book_table" style="text-align: left;">

                        <tr>
                            <th>Price(USDT)</th>
                            <th>Size(<?=$coin?>)</th>
                            <th>Total(USDT)</th>
                        </tr>

                        <tbody id="order_book">

                        </tbody>

                    </table>
                </div>
                <div class="order_book_content">
                    <table class="book_table" style="text-align: left;">

                        <tr style="padding: 5px 16px;
    margin: 5px 0;
    background-color: #e1e8f50a;
    border-top: 1px solid #f4f9ff1a;
    border-bottom: 1px solid #f4f9ff1a;">
                            <th style="font-weight: 600; font-size: 16px;" class="text_success">36455.88</th>
                            <th style="font-weight: 400; font-size: 14px;">36449.78 USD</th>
                            <th></th>
                        </tr>

                        <tbody id="order_book1">

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="spot_content_user_panel">
            <div class="spot_content_user_panel_chart">
                <div class="tradingview-widget-container">
                    <div id="tradingview_f1662"></div>


                </div>
            </div>
            <div class="spot_content_user_panel_control">

                <div class="spot_content_user_panel_control_header">
                    <button class="spot_content_user_control" onclick="switcher_type_trade(this,'limit')">
                        Limit
                    </button>
                    <button class="spot_content_user_control active" onclick="switcher_type_trade(this,'market')">
                        Market
                    </button>
                    <button class="spot_content_user_control" onclick="switcher_type_trade(this,'trigger')">
                        Trigger Order
                    </button>
                </div>

                <div class="spot_content_user_control_market" id="market">

                    <div class="spot_content_user_control_market_buy">
                        <form method="post" class="spot_content_user_control_market_sell" id="market_buy_form">
                            <div class="">
                                <p>Available <span class="balance_usdt"><?= $balance_coin_usdt ?></span> <span
                                            class="text-white">USDT</span></p>
                            </div>
                            <div class="spot_content_market_price">
                                Market Price
                            </div>
                            <div class="spot_content_market_amount" id="input_buy_market">
                                <input type="text" id="input_buy_market"
                                       oninput="validateInput_numbers(this); calculate('USDT','<?= $coin ?>', this.value, 'span', document.getElementById('from_course_buy_market')); "
                                       name="amount" placeholder="Amount"> <span>USDT</span>
                            </div>

                            <div>
                                <div class="range-container">
                                    <input type="range" id="myRange" class="myrange" min="0" max="4" step="1">
                                    <div class="range-markers markers">
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="per_purchase">
                                <p>Get per purchase: <span id="from_course_buy_market">0</span> <span
                                            class="text-white"><?= $coin ?></span>
                                </p>
                            </div>
                            <div>
                                <button type="submit" class="button_spot buy">Buy <?= $coin ?></button>
                            </div>
                        </form>
                    </div>

                    <div class="spot_content_user_control_market_sell">
                        <form method="post" class="spot_content_user_control_market_sell" id="market_sell_form">
                            <div class="">
                                <p>Available <span class="balance_coin"><?= $balance_coin ?></span> <span
                                            class="text-white"><?= $coin ?></span></p>
                            </div>
                            <div class="spot_content_market_price">
                                Market Price
                            </div>
                            <div class="spot_content_market_amount" id="input_sell_market">
                                <input type="text" name="amount"
                                       oninput="validateInput_numbers(this); calculate('<?= $coin ?>','USDT', this.value, 'span', document.getElementById('from_course_sell_market')); "
                                       placeholder="Amount"> <span><?= $coin ?></span>
                            </div>

                            <div>
                                <div class="range-container">
                                    <input type="range" id="myRange1" class="myrange" min="0" max="4" step="1">
                                    <div class="range-markers markers">
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="per_purchase">
                                <p>Get per purchase: <span id="from_course_sell_market">0</span> <span
                                            class="text-white">USDT</span></p>
                            </div>
                            <div>
                                <button type="submit" class="button_spot sell">Sell <?=$coin?></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="spot_content_user_control_market" id="limit">
                    <div class="spot_content_user_control_market_buy">
                        <form class="spot_content_user_control_market_buy"  id="limit_buy_form">
                            <div class="">
                                <p>Available <span class="balance_coin_usdt"><?= $balance_coin ?></span> <span
                                            class="text-white">USDT</span></p>
                            </div>

                            <div class="spot_content_market_amount">
                                <input type="text" name="price" placeholder="Price"> <span>USDT</span>
                            </div>
                            <div class="spot_content_market_amount">
                                <input type="text" name="size" placeholder="Size"> <span>USDT</span>
                            </div>

                            <div>
                                <div class="range-container">
                                    <input type="range" id="myRange" class="myrange" min="0" max="4" step="1">
                                    <div class="range-markers markers">
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                        <div class="marker"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="per_purchase">
                                <div class="spot_content_market_amount">
                                    <input type="text" placeholder="Amount"> <span>USDT</span>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="button_spot buy">Buy <?=$coin?></button>
                            </div>
                        </form>
                    </div>
                    <div class="spot_content_user_control_market_sell">
                        <div class="">
                            <p>Available <span class="balance_coin"><?=$balance_coin?></span> <span class="text-white">USDT</span></p>
                        </div>

                        <div class="spot_content_market_amount">
                            <input type="text" placeholder="Price"> <span>USDT</span>
                        </div>
                        <div class="spot_content_market_amount">
                            <input type="text" placeholder="Size"> <span>USDT</span>
                        </div>

                        <div>
                            <div class="range-container">
                                <input type="range" id="myRange" class="myrange" min="0" max="4" step="1">
                                <div class="range-markers markers">
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                </div>
                            </div>

                        </div>
                        <div class="per_purchase">
                            <div class="spot_content_market_amount">
                                <input type="text" placeholder="Amount"> <span>USDT</span>
                            </div>
                        </div>

                        <div>
                            <button class="button_spot sell">Sell <?=$coin?></button>
                        </div>
                    </div>

                </div>
                <div class="spot_content_user_control_market" id="trigger">
                    <div class="spot_content_user_control_market_buy">
                        <div class="">
                            <p>Available 0.0000000 <span class="text-white">USDT</span></p>
                        </div>

                        <div class="spot_content_market_amount">
                            <input type="text" placeholder="Price"> <span>USDT</span>
                        </div>
                        <div class="trigger_select">
                            <div class="spot_content_market_amount">
                                <input type="text" placeholder="Price"> <span>USDT</span>

                            </div>
                            <div id="select-type_trade1"></div>
                        </div>

                        <div>
                            <div class="range-container">
                                <input type="range" id="myRange" class="myrange" min="0" max="4" step="1">
                                <div class="range-markers markers">
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                </div>
                            </div>

                        </div>
                        <div class="per_purchase">
                            <div class="spot_content_market_amount">
                                <input type="text" placeholder="Amount"> <span>USDT</span>
                            </div>
                        </div>

                        <div>
                            <button class="button_spot buy">Buy <?=$coin?></button>
                        </div>
                    </div>
                    <div class="spot_content_user_control_market_sell">
                        <div class="">
                            <p>Available 0 <span class="text-white">USDT</span></p>
                        </div>

                        <div class="spot_content_market_amount">
                            <input type="text" placeholder="Stop"> <span>USDT</span>
                        </div>
                        <div class="trigger_select">
                            <div class="spot_content_market_amount">
                                <input type="text" placeholder="Price"> <span>USDT</span>

                            </div>
                            <div id="select-type_trade"></div>
                        </div>

                        <div>
                            <div class="range-container">
                                <input type="range" id="myRange" class="myrange" min="0" max="4" step="1">
                                <div class="range-markers markers">
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                    <div class="marker"></div>
                                </div>
                            </div>

                        </div>
                        <div class="per_purchase">
                            <div class="spot_content_market_amount">
                                <input type="text" placeholder="Amount"> <span>USDT</span>
                            </div>
                        </div>

                        <div>
                            <button class="button_spot sell">Sell <?=$coin?></button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="order_book_container">
                <div class="order_book_header">
                    Trades
                </div>
                <div class="order_book_content">
                    <table class="book_table" style="text-align: left;">

                        <tr>
                            <th>Total(USDT)</th>
                            <th>Size(<?=$coin?>)</th>
                            <th>Time</th>
                        </tr>
                        <tbody id="trades_table"></tbody>

                    </table>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="spot_content_user_panel_control_header">
            <button class="spot_content_user_control" onclick="switcher_type_trade(this,'limit')"
                    control-id="ControlID-2">
                My Open Orders
            </button>
            <button class="spot_content_user_control active" onclick="switcher_type_trade(this,'market')"
                    control-id="ControlID-3">
                My Trading History
            </button>
            <div class="order_book_container">

                <div class="order_book_content">
                    <table class="book_table" style="text-align: left;">

                        <tbody>
                        <tr>
                            <th>Date</th>
                            <th>Pair</th>
                            <th>Side</th>
                            <th>Type</th>
                            <th>Amount</th>
                        </tr>

                        <tr class="adrr">
                            <td class="th_succefly">26541.83</td>
                            <td>≈$26541.83</td>
                            <td>16.9 15:10</td>
                            <td>16.9 15:10</td>
                            <td>16.9 15:10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
<div style="display: none" id="__DATA__">
    <?= $assets_coin ?>
</div>
</body>
<script>
    function switcher_type_trade(this_el, el) {
        const limitElement = document.getElementById("limit");
        const marketElement = document.getElementById("market");
        const triggerElement = document.getElementById("trigger");
        document.querySelectorAll(".spot_content_user_control").forEach(item => {
            item.classList.remove("active");
        });
        if (el === "limit") {
            limitElement.style.display = "flex";
            marketElement.style.display = "none";
            triggerElement.style.display = "none";

            // Добавить класс "active" к текущему элементу
            this_el.classList.add("active");
        } else if (el === "market") {
            limitElement.style.display = "none";
            marketElement.style.display = "flex";
            triggerElement.style.display = "none";

            // Добавить класс "active" к текущему элементу
            this_el.classList.add("active");
        } else {
            limitElement.style.display = "none";
            marketElement.style.display = "none";
            triggerElement.style.display = "flex";
            this_el.classList.add("active");
            // Удалить класс "active" у всех элементов

        }
    }


    const payment_methods = [
        ["Limit", "Limit"],
        ["Market", "Market"]
    ]
    const select1 = new ItcCustomSelect("#select-type_trade", {
        options: payment_methods,
        targetValue: "Limit"

    });
    const select = new ItcCustomSelect("#select-type_trade1", {
        options: payment_methods,
        targetValue: "Limit"

    });
    const ranges = document.querySelectorAll(".myrange");
    const markersLists = document.querySelectorAll(".markers");

    const values = ["20%", "40%", "60%", "80%", "100%"];

    ranges.forEach((range, index) => {
        const markers = markersLists[index].querySelectorAll(".marker");

        range.addEventListener("input", function () {
            const currentIndex = parseInt(range.value);

            markers.forEach((marker, i) => {
                if (i === currentIndex) {
                    marker.style.backgroundColor = "white";
                } else {
                    marker.style.backgroundColor = "#141F2A";
                }
            });
        });

        markers.forEach((marker, i) => {
            marker.addEventListener("click", () => {
                range.value = i;
                range.dispatchEvent(new Event("input"));
            });
        });
    });
</script>

<script src="assets/scripts/main.js"></script>
<style>
    .dataTables_wrapper .dataTables_filter {
        float: left;
        text-align: left;
        width: 100%;
    }

    .dataTables_wrapper .dataTables_filter input {
        border-radius: 3px;
        background: rgba(225, 232, 245, 0.04);
        border: none;
        margin-bottom: 0px;
        color: white;
    }

    .dataTables_wrapper .dataTables_filter {
        padding: 12px 10px;
        background: #141F2A;
    }

    #tradingview_f1662 {
        height: 600px;
    }

    table.dataTable > thead > tr > th,
    table.dataTable > thead > tr > td {
        border: none;
    }

    table.dataTable {
        border: none;
        border-bottom: none !important;
        border-radius: 3px;
        background: #141F2A;
        padding: 0px 16px;
        max-width: 330px;
    }

    .table.dataTable.no-footer {
        border: none;
    }

    table.dataTable thead > tr > th.sorting:before,
    table.dataTable thead > tr > th.sorting_asc:before,
    table.dataTable thead > tr > th.sorting_desc:before,
    table.dataTable thead > tr > th.sorting_asc_disabled:before,
    table.dataTable thead > tr > th.sorting_desc_disabled:before,
    table.dataTable thead > tr > td.sorting:before,
    table.dataTable thead > tr > td.sorting_asc:before,
    table.dataTable thead > tr > td.sorting_desc:before,
    table.dataTable thead > tr > td.sorting_asc_disabled:before,
    table.dataTable thead > tr > td.sorting_desc_disabled:before {
        display: none;
    }

    table.dataTable thead > tr > th.sorting:after,
    table.dataTable thead > tr > th.sorting_asc:after,
    table.dataTable thead > tr > th.sorting_desc:after,
    table.dataTable thead > tr > th.sorting_asc_disabled:after,
    table.dataTable thead > tr > th.sorting_desc_disabled:after,
    table.dataTable thead > tr > td.sorting:after,
    table.dataTable thead > tr > td.sorting_asc:after,
    table.dataTable thead > tr > td.sorting_desc:after,
    table.dataTable thead > tr > td.sorting_asc_disabled:after,
    table.dataTable thead > tr > td.sorting_desc_disabled:after {
        display: none;
    }

    thead {
        font-weight: 300;
        font-size: 14px;
        color: #B7BDC6;
    }
</style>
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>


<script type="text/javascript">
    const widget = new TradingView.widget({
        "autosize": true,
        "symbol": "<?=$coin?>USDT",
        "interval": "D",
        "timezone": "Etc/UTC",
        "theme": "dark",
        "style": "1",
        "locale": "en",
        "enable_publishing": false,
        "hide_side_toolbar": false,
        "allow_symbol_change": true,
        "container_id": "tradingview_f1662"
    });


</script>
<script>
    $("#spot_table").DataTable({
        language: {
            "search": "",
            "searchPlaceholder": 'Search assets',
        },
        paging: false,
        searchPlaceholder: "Search assets",
        searching: true,
        order: [
            [1, 'desc']
        ]
    })
</script>

<script>
    const tradeWs = new WebSocket('wss://ws.coincap.io/trades/binance');


    const maxTrades = 10; // Максимальное количество сделок для отображения
    const recentTrades1 = []; // Массив для хранения последних сделок для первой таблицы
    const recentTrades2Buy = []; // Массив для хранения последних сделок "buy" для второй таблицы
    const recentTrades3Sell = []; // Массив для хранения последних сделок "sell" для третьей таблицы

    const table1 = document.getElementById("trades_table");
    const table2 = document.getElementById("order_book");
    const table3 = document.getElementById("order_book1");

    tradeWs.onmessage = function (event) {
        const tradeData = JSON.parse(event.data);

        if (tradeData.base === "<?= $coin_fullName ?>" && tradeData.priceUsd > 100 && tradeData.volume > 0.01) {
            const date = new Date(tradeData.timestamp);
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const hours = date.getHours();
            const minutes = date.getMinutes();
            const formattedDate = `${day}.${month} ${hours}:${minutes}`;

            const trade = {
                priceUsd: tradeData.priceUsd.toFixed(2),
                volume: tradeData.volume.toFixed(5),
                formattedDate: formattedDate,
                direction: tradeData.direction
            };

            // Добавляем новую сделку в массивы
            recentTrades1.unshift(trade);

            if (trade.direction === "buy") {
                recentTrades2Buy.unshift(trade);
            } else if (trade.direction === "sell") {
                recentTrades3Sell.unshift(trade);
            }

            // Если количество сделок превышает максимум, удаляем лишнее
            while (recentTrades1.length > 21) {
                recentTrades1.pop();
            }
            while (recentTrades2Buy.length > maxTrades) {
                recentTrades2Buy.pop();
            }
            while (recentTrades3Sell.length > maxTrades) {
                recentTrades3Sell.pop();
            }

            // Обновляем таблицы с небольшой задержкой
            setTimeout(() => {
                updateTable(table1, recentTrades1);
            }, 500); // Задержка в 0.5 секунды для первой таблицы

            setTimeout(() => {
                updateTable(table2, recentTrades2Buy);
            }, 200);

            setTimeout(() => {
                updateTable(table3, recentTrades3Sell);
            }, 200); // Задержка в 0.2 секунды для третьей таблицы (sell)
        }
    };

    // ...

    tradeWs.onopen = function () {
        console.log('WebSocket подключено');
    };

    tradeWs.onclose = function (event) {
        if (event.wasClean) {
            console.log('WebSocket закрыто чисто, код: ' + event.code);
        } else {
            console.error('WebSocket разорвано');
        }
    };

    tradeWs.onerror = function (error) {
        console.error('WebSocket ошибка: ' + error.message);
    };

    function updateTable(table, trades) {
        // Удаляем все строки из таблицы
        while (table.firstChild) {
            table.removeChild(table.firstChild);
        }

        // Добавляем сделки из массива в таблицу (по одной сверху вниз)
        trades.forEach(function (trade) {
            const newRow = document.createElement("tr");

            const td1 = document.createElement("td");
            if (trade.direction === "buy") {
                td1.classList.add("text_success");
            } else {
                td1.classList.add("text_danger");
            }
            td1.textContent = trade.priceUsd;

            const td2 = document.createElement("td");
            td2.textContent = trade.volume;

            const td3 = document.createElement("td");
            td3.textContent = trade.formattedDate;

            newRow.appendChild(td1);
            newRow.appendChild(td2);
            newRow.appendChild(td3);

            table.appendChild(newRow);
        });
    }

    const order_buy_market_form = document.getElementById("market_buy_form");
    order_buy_market_form.addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append("coinName", "<?=$coin_fullName?>");
        formData.append("price", <?=$last_price_orig?>);
        formData.append("type_order", "buy");

        const input_buy_market = document.getElementById('input_buy_market');
        const input_value = input_buy_market.querySelector('input').value;
        if (input_value === "") {
            input_buy_market.classList.add("error_input");
            return false;
        } else {
            $.ajax({
                url: "/api/ajax/orders_market.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                },


            });
        }
        update_assets()
    });
    const order_sell_market_form = document.getElementById("market_sell_form");
    order_sell_market_form.addEventListener("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        formData.append("coinName", "<?=$coin_fullName?>");
        formData.append("price", <?=$last_price_orig?>);
        formData.append("type_order", "sell");

        const input_sell_market = document.getElementById('input_sell_market');
        const input_value = input_sell_market.querySelector('input').value;
        if (input_value === "") {
            input_sell_market.classList.add("error_input");
            return false;
        } else {
            $.ajax({
                url: "/api/ajax/orders_market.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                },
            })
        }
        update_assets()

    })
    const limit_buy_form = document.getElementById("limit_buy_form");
    limit_buy_form.addEventListener("submit", function (e) {
        e.preventDefault()
        const formData = new FormData(this);
        formData.append("coinName", "<?=$coin_fullName?>");

        formData.append("type_order", "buy");

        const input_buy_market = document.getElementById('input_buy_market');
        const input_value = input_buy_market.querySelector('input').value;
        if (input_value === "") {
            input_buy_market.classList.add("error_input");
            return false;
        } else {
            $.ajax({
                url: "/api/ajax/open_limit_order.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                },
            })
        }
    });

</script>

<script>
    let pair = "<?=$pair?>";
    let data_element = document.getElementById("__DATA__");

    function update_assets() {
        // const data = JSON.parse(data_element.innerHTML);

        $.ajax({
            url: "/api/ajax/get_assets_coin.php",
            type: "POST",
            data: {
                pair: pair
            },
            success: function (data) {
                data_element.innerHTML = JSON.stringify(data);
                console.log(data)


                const last_price = data['lastPrice'];
                const change_24h = data['priceChangePercent'];
                const high_24h = data['highPrice'];
                const low_24h = data['lowPrice'];
                const volume_24h = data['quoteVolume'];

                document.getElementById("24h_amount").innerText = data['count'];
                document.getElementById("24h_low").innerText = low_24h;
                document.getElementById("24h_high").innerText = high_24h;
                document.getElementById("24h_change").innerText = change_24h + "%";
                if (change_24h > 0) {
                    document.getElementById("24h_change").classList.add("text_success");
                } else {
                    document.getElementById("24h_change").classList.add("text_danger");
                }
                document.getElementById("24h_volume").innerText = volume_24h;
                document.getElementById("cost_change").innerText = last_price;
                if (last_price > 0) {
                    document.getElementById("cost_change").classList.add("text_success");
                } else {
                    document.getElementById("cost_change").classList.add("text_danger");
                }
                document.getElementById("cost_change_usd").innerText = last_price;
                $balance_usdt_elements = document.querySelectorAll('.balance_coin_usdt');
                $balance_usdt_elements.forEach(function (item, index) {
                    item.innerText = data['balance_info_usdt'];
                })
                $balance_coin_elements = document.querySelectorAll('.balance_coin');
                $balance_coin_elements.forEach(function (item, index) {
                    item.innerText = data['balance_info'];
                })
            },
            error: function (data) {
                console.log(data);
            },

        });
    }

    function calculate(coin_name1, coin_name2, inpt_amount_value, type_el, el) {
        console.log(inpt_amount_value)

        setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "/api/ajax/convert_crypto_price.php",
                data: {
                    coin1: coin_name1,
                    coin2: coin_name2,
                    amount: inpt_amount_value
                },
                success: function (response) {

                    if (response.status == 'success') {
                        const kurs = response.course;
                        if (type_el === "input") {
                            el.value = kurs.toFixed(4)
                        } else {
                            el.innerText = kurs.toFixed(4)
                        }


                    }
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }, 1000)

    }

    update_assets()
    setInterval(update_assets, 3000);
</script>


</html>