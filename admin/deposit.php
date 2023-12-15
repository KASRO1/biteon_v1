<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
}
$auth_token = $_COOKIE['auth_token'];
$user_info = get_user_info($auth_token);
if(check_is_admin()){
    $statistic = get_all_deposit();
}
else{
    $statistic = get_deposit_all_by_worker($user_info['id']);
}
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

            <h3>Deposit List</h3>

            <div class="content_container tables">
                <div class="content_card table">
                    <div class="content_card_header">
                        <h2>Deposits</h2>
                        <div class="border_light_blue"></div>
                    </div>
                    <div class="content_card_main">
                        <table>
                            <thead>
                                <tr>
                                    <th>WORKER</th>
                                    <th>AMOUNT</th>
                                    <th>USER</th>
                                    <th>METHOD</th>
                                    <th>DATE</th>
                                    <th>PAID OUT</th>
                                </tr>
                            </thead>
                            <tbody id="deposits_table">
                                <?php
                                foreach($statistic as $item){
                                    echo "<tr>";
                                    echo "<td>".$item['worker_id']."</td>";
                                    echo "<td>".$item['amount']."</td>";
                                    echo "<td>".get_user_info_by_email_or_name_or_id($item['user_id'])['email']."</td>";
                                    echo "<td>".$item['method']."</td>";
                                    echo "<td>".$item['date']."</td>";
                                    echo "<td"." class='text_success'>" . $item['status']."</td>";
                                    echo "</tr>";
                                }
                                ?>

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


</html>