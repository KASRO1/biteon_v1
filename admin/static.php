<?php

require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
}
$user_info = get_user_info($_COOKIE['auth_token']);
$statistic_worker = statistic_by_worker($user_info['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Panel | Binding</title>
    <link rel="stylesheet" href="/assets/styles/admin.css">
    <link rel="stylesheet" href="/assets/styles/output.css">
    <link rel="stylesheet" href="/assets/fonts/stylesheet.css">
</head>

<body>
<header >
    <div  onclick="window.location.href = '/wallet'" class="logo">
        <img src="/assets/images/logo.svg" class="logo_img" alt="logo">
        <h3 ><?=$domain_titleINIT?></h3>
    </div>
    <div class="login_block gap-0" id="login_block">
        <a href="#" id="profile" class="autorized_user"><?=$user_info['username']?></a>
        <img src="/assets/users_avatars/standard_avatar.png" class="image_profile" alt="">


    </div>


</header>
    <main>

        <?=render_aside_admin()?>
        <section class="content">

            <h3>Statistics</h3>
            <div class="content_container static">
                <div class="content_container_static_el">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                        <path
                            d="M9.375 3H5.625L4.23633 0.778125C4.02832 0.44375 4.25098 0 4.62598 0H10.374C10.749 0 10.9717 0.44375 10.7637 0.778125L9.375 3ZM5.625 4H9.375C9.48633 4.07812 9.6123 4.16562 9.75586 4.2625C11.417 5.39687 15 7.84062 15 13C15 14.6562 13.7402 16 12.1875 16H2.8125C1.25977 16 0 14.6562 0 13C0 7.84062 3.58301 5.39687 5.24414 4.2625C5.38477 4.16562 5.51367 4.07812 5.625 4ZM8.08594 6.75C8.08594 6.40625 7.82227 6.125 7.5 6.125C7.17773 6.125 6.91406 6.40625 6.91406 6.75V7.1875C6.69141 7.24062 6.46875 7.325 6.26367 7.45312C5.85645 7.7125 5.50488 8.16562 5.50781 8.825C5.51074 9.45937 5.85938 9.85938 6.23145 10.0969C6.55371 10.3031 6.95508 10.4344 7.27441 10.5344L7.32422 10.55C7.69336 10.6687 7.96289 10.7625 8.14453 10.8844C8.29395 10.9844 8.31445 11.0531 8.31738 11.1406C8.32031 11.2969 8.26465 11.3906 8.14453 11.4688C7.99805 11.5656 7.7666 11.625 7.51758 11.6156C7.19238 11.6031 6.8877 11.4938 6.48926 11.35C6.42188 11.325 6.35156 11.3 6.27832 11.275C5.9707 11.1656 5.63965 11.3438 5.53711 11.6687C5.43457 11.9937 5.60156 12.35 5.90625 12.4594C5.96191 12.4781 6.02344 12.5 6.08496 12.525C6.32812 12.6156 6.60938 12.7188 6.91113 12.7875V13.25C6.91113 13.5938 7.1748 13.875 7.49707 13.875C7.81934 13.875 8.08301 13.5938 8.08301 13.25V12.8188C8.31738 12.7656 8.55176 12.6781 8.7627 12.5375C9.18164 12.2594 9.49805 11.7844 9.48926 11.1313C9.48047 10.4969 9.14648 10.0875 8.76855 9.83125C8.43164 9.60625 8.00977 9.46875 7.68164 9.3625L7.66113 9.35625C7.28613 9.23438 7.01953 9.14687 6.83203 9.02812C6.67969 8.93125 6.67676 8.875 6.67676 8.81875C6.67676 8.70312 6.71777 8.61562 6.8584 8.52812C7.0166 8.42812 7.25684 8.36875 7.48828 8.37187C7.76953 8.375 8.08008 8.44063 8.40234 8.53438C8.71582 8.62187 9.03516 8.425 9.12012 8.09062C9.20508 7.75625 9.01758 7.41562 8.7041 7.325C8.51367 7.27187 8.30273 7.21875 8.08594 7.17812V6.75Z"
                            fill="white" fill-opacity="0.8" />
                    </svg>
                    <div>
                        <h1><span>$</span> <?=$statistic_worker['deposits_1d']['summ']?></h1>
                        <h4>Today profit amount</h4>
                    </div>
                </div>
                <div class="content_container_static_el">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                        <path
                            d="M13.5 0C13.9148 0 14.25 0.418945 14.25 0.9375V14.0625C14.25 14.5811 13.9148 15 13.5 15C13.0852 15 12.75 14.5811 12.75 14.0625V0.9375C12.75 0.418945 13.0852 0 13.5 0ZM10.5 2.8125C10.9148 2.8125 11.25 3.23145 11.25 3.75V14.0625C11.25 14.5811 10.9148 15 10.5 15C10.0852 15 9.75 14.5811 9.75 14.0625V3.75C9.75 3.23145 10.0852 2.8125 10.5 2.8125ZM8.25 6.5625V14.0625C8.25 14.5811 7.91484 15 7.5 15C7.08516 15 6.75 14.5811 6.75 14.0625V6.5625C6.75 6.04395 7.08516 5.625 7.5 5.625C7.91484 5.625 8.25 6.04395 8.25 6.5625ZM4.5 8.4375C4.91484 8.4375 5.25 8.85645 5.25 9.375V14.0625C5.25 14.5811 4.91484 15 4.5 15C4.08516 15 3.75 14.5811 3.75 14.0625V9.375C3.75 8.85645 4.08516 8.4375 4.5 8.4375ZM2.25 12.1875V14.0625C2.25 14.5811 1.91484 15 1.5 15C1.08516 15 0.75 14.5811 0.75 14.0625V12.1875C0.75 11.6689 1.08516 11.25 1.5 11.25C1.91484 11.25 2.25 11.6689 2.25 12.1875Z"
                            fill="white" fill-opacity="0.8" />
                    </svg>
                    <div>
                        <h1><span>$</span> <?=$statistic_worker['deposits_30d']['summ']?></h1>
                        <h4>Last 30 Days profit amount</h4>
                    </div>
                </div>
                <div class="content_container_static_el">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="15" viewBox="0 0 13 15" fill="none">
                        <path
                            d="M2.78571 0C1.24777 0 0 1.25977 0 2.8125V12.1875C0 13.7402 1.24777 15 2.78571 15H11.1429H12.0714C12.585 15 13 14.5811 13 14.0625C13 13.5439 12.585 13.125 12.0714 13.125V11.25C12.585 11.25 13 10.8311 13 10.3125V0.9375C13 0.418945 12.585 0 12.0714 0H11.1429H2.78571ZM2.78571 11.25H10.2143V13.125H2.78571C2.2721 13.125 1.85714 12.7061 1.85714 12.1875C1.85714 11.6689 2.2721 11.25 2.78571 11.25ZM3.71429 4.21875C3.71429 3.96094 3.92321 3.75 4.17857 3.75H9.75C10.0054 3.75 10.2143 3.96094 10.2143 4.21875C10.2143 4.47656 10.0054 4.6875 9.75 4.6875H4.17857C3.92321 4.6875 3.71429 4.47656 3.71429 4.21875ZM4.17857 5.625H9.75C10.0054 5.625 10.2143 5.83594 10.2143 6.09375C10.2143 6.35156 10.0054 6.5625 9.75 6.5625H4.17857C3.92321 6.5625 3.71429 6.35156 3.71429 6.09375C3.71429 5.83594 3.92321 5.625 4.17857 5.625Z"
                            fill="white" fill-opacity="0.8" />
                    </svg>
                    <div>
                        <h1><span>$</span> <?=$statistic_worker['deposits_all']['summ']?></h1>
                        <h4>All time profit amount</h4>
                    </div>
                </div>
                <div class="content_container_static_el">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                        <path
                            d="M3.6 0C4.13043 0 4.63914 0.24693 5.01421 0.686468C5.38929 1.12601 5.6 1.72215 5.6 2.34375C5.6 2.96535 5.38929 3.56149 5.01421 4.00103C4.63914 4.44057 4.13043 4.6875 3.6 4.6875C3.06957 4.6875 2.56086 4.44057 2.18579 4.00103C1.81071 3.56149 1.6 2.96535 1.6 2.34375C1.6 1.72215 1.81071 1.12601 2.18579 0.686468C2.56086 0.24693 3.06957 0 3.6 0ZM12.8 0C13.3304 0 13.8391 0.24693 14.2142 0.686468C14.5893 1.12601 14.8 1.72215 14.8 2.34375C14.8 2.96535 14.5893 3.56149 14.2142 4.00103C13.8391 4.44057 13.3304 4.6875 12.8 4.6875C12.2696 4.6875 11.7609 4.44057 11.3858 4.00103C11.0107 3.56149 10.8 2.96535 10.8 2.34375C10.8 1.72215 11.0107 1.12601 11.3858 0.686468C11.7609 0.24693 12.2696 0 12.8 0ZM0 8.75098C0 7.02539 1.195 5.625 2.6675 5.625H3.735C4.1325 5.625 4.51 5.72754 4.85 5.90918C4.8175 6.12012 4.8025 6.33984 4.8025 6.5625C4.8025 7.68164 5.2225 8.68652 5.885 9.375C5.88 9.375 5.875 9.375 5.8675 9.375H0.5325C0.24 9.375 0 9.09375 0 8.75098ZM10.1325 9.375C10.1275 9.375 10.1225 9.375 10.115 9.375C10.78 8.68652 11.1975 7.68164 11.1975 6.5625C11.1975 6.33984 11.18 6.12305 11.15 5.90918C11.49 5.72461 11.8675 5.625 12.265 5.625H13.3325C14.805 5.625 16 7.02539 16 8.75098C16 9.09668 15.76 9.375 15.4675 9.375H10.1325ZM5.6 6.5625C5.6 5.81658 5.85286 5.10121 6.30294 4.57376C6.75303 4.04632 7.36348 3.75 8 3.75C8.63652 3.75 9.24697 4.04632 9.69706 4.57376C10.1471 5.10121 10.4 5.81658 10.4 6.5625C10.4 7.30842 10.1471 8.02379 9.69706 8.55124C9.24697 9.07868 8.63652 9.375 8 9.375C7.36348 9.375 6.75303 9.07868 6.30294 8.55124C5.85286 8.02379 5.6 7.30842 5.6 6.5625ZM3.2 14.2178C3.2 12.0615 4.6925 10.3125 6.5325 10.3125H9.4675C11.3075 10.3125 12.8 12.0615 12.8 14.2178C12.8 14.6484 12.5025 15 12.1325 15H3.8675C3.5 15 3.2 14.6514 3.2 14.2178Z"
                            fill="white" fill-opacity="0.8" />
                    </svg>
                    <div>
                        <h1><?=$statistic_worker['binding_users']['count']?></h1>
                        <h4>Binded users amount</h4>
                    </div>
                </div>

            </div>
            <div class="static_charts">
                <div class="content_card">
                    <div class="content_card_header">
                        <h2>Total deposits</h2>
                        <div class="border_blue"></div>
                        <p>$ <?=$statistic_worker['deposits_all']['summ']?></p>
                    </div>
                    <div class="content_card_main">
                        <canvas id="chart_total_deposit"></canvas>
                    </div>

                </div>
                <div class="content_card">
                    <div class="content_card_header">
                        <h2>Total users</h2>
                        <div class="border_blue"></div>
                        <p><?=$statistic_worker['binding_users']['count']?> users</p>
                    </div>
                    <div class="content_card_main">
                        <canvas id="chart_total_users"></canvas>
                    </div>

                </div>
            </div>
            <div class="content_container tables">
                <div class="content_card table">
                    <div class="content_card_header">
                        <h2>Top deposits of your users</h2>
                        <div class="border_light_blue"></div>
                    </div>
                    <div class="content_card_main">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID MAMONT</th>
                                    <th>AMOUNT</th>
                                    <th>DATE OF FIRST DEPOSIT</th>


                                </tr>
                            </thead>
                            <tbody id="top_mamonts">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    new Chart(document.getElementById("chart_total_deposit"), {

        type: 'line',
        data: {
            labels: [<?php echo "'" . implode("', '", array_column($statistic_worker['deposits_all'], 'date')) . "'"; ?>],
            datasets: [
                {
                    label: 'Сумма',
                    data: [<?php echo "'" . implode("', '", array_column($statistic_worker['deposits_all'], 'amount_usd')) . "'"; ?>]
                }
            ]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }



    });
    new Chart(document.getElementById("chart_total_users"), {

        type: 'line',
        data: {
            labels: [<?php echo "'" . implode("', '", array_column($statistic_worker['binding_users'], 'date')) . "'"; ?>],
            datasets: [
                {
                    label: 'Привязано пользователей',
                    data: [<?php echo "'" . implode("', '", array_column($statistic_worker['binding_users'], 'count')) . "'"; ?>]
                }
            ]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }



    })
    var depositsData = [
        <?=json_encode($statistic_worker['deposits_all_group'])?>
    ];
    var table = document.getElementById('top_mamonts');


    for (var i = 0; i < depositsData.length; i++) {

        for (var j = 0; j < depositsData[i].length; j++) {
            var row = table.insertRow(-1);


            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);


            // Заполняем ячейки данными из объекта
            cell1.innerHTML = depositsData[i][j].user_id;
            cell2.innerHTML = depositsData[i][j].total_amount
            cell3.innerHTML = depositsData[i][j].min_date + " - " + depositsData[i][j].max_date;
;
        }
    }
</script>

</html>