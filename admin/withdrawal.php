<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
}
$auth_token = $_COOKIE['auth_token'];
$user_info = get_user_info($auth_token);

$withdraws = get_withdraws();
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
    <header>

        <div class="login_block gap-0" id="login_block">
            <a href="#" id="profile" class="autorized_user"><?=$user_info['username']?></a>
            <img src="/assets/users_avatars/standard_avatar.png" class="image_profile" alt="">


        </div>


    </header>
    <main>

        <?=render_aside_admin()?>
        <section class="content">

            <h3>Fake Withdrawal List</h3>

            <div class="content_container tables">
                <div class="content_card table">
                    <div class="content_card_header">
                        <h2>Withdrawal</h2>
                        <div class="border_light_blue"></div>
                    </div>
                    <div class="content_card_main">
                        <table>
                            <thead>
                                <tr>
                                    <th>STATUS</th>
                                    <th>USER</th>
                                    <th>ADDRESS</th>
                                    <th>AMOUNT</th>
                                    <th>DATE</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($withdraws as $withdraw):?>
                                <tr>
                                    <td><?=$withdraw['status']?></td>
                                    <td><?=$withdraw['id_user']?></td>
                                    <td><?=$withdraw['withdraw_address']?></td>
                                    <td><?=$withdraw['amount']?></td>
                                    <td><?=$withdraw['date']?></td>
                                </tr>
                                <?php endforeach;?>
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