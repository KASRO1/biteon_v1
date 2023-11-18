<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
}
$user_info = get_user_info($_COOKIE['auth_token']);
$userlist = get_static_userList($user_info['id']);

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

            <h3>Users List</h3>

            <div class="content_container tables">
                <div class="content_card table">
                    <div class="content_card_header">
                        <h2>Users</h2>
                        <div class="border_blue"></div>
                    </div>
                    <div class="content_card_main">
                        <table id="user_table">
                            <thead>
                                <tr>
                                    <th>USER</th>
                                    <th>DOMAIN/PROMO</th>
                                    <th>REGISTRATION DATE</th>
                                    <th>BALANCE</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($userlist as $user):?>
                                <tr>
                                    <td>
                                        <a href="#" onclick="show_user_info('<?=$user['ref_code']?>',this)"><?=$user['username']?></a>
                                    </td>
                                    <td class="td_text"><?=$user['type']?></td>
                                    <td><?=$user['created_date']?></td>
                                    <td>$ <?=get_total_balance_by_id($user['id'])?></td>

                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <div class="userInfoModal" id="user_modal">
        <div class="blur-background"></div>
        <div class="modal-content">
            <div class="modal_content_header">


                <div class="modal_header_text">
                    <h2 class="text_blue">User</h2>
                    <h1 id="user_id" class="text_blue">12345</h1>
                </div>
                <div>
                    <a href="#" onclick="close_modal()" class="default_text">Go back</a>
                </div>

            </div>
            <div class="modal_content_body">
                <table>
                    <thead>
                        <tr>
                            <th class="text_center">ALL DEPOSITS / ALL FAKE WITHDRAWAL / ALL LOGS</th>
                            <th>KYC</th>
                            <th>REGISTRATION DATE</th>
                            <th>BALANCE</th>
                            <th>DOMAIN/PROMO</th>

                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <table class="table_logs">
                                    <thead>
                                        <tr>
                                            <th class="text_blue">AMOUNT</th>
                                            <th class="text_blue">DATE</th>
                                            <th class="text_orange">AMOUNT</th>
                                            <th class="text_orange">DATE</th>
                                            <th class="text_success">ACTION</th>
                                            <th class="text_success">DATE</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$100.00</td>
                                            <td>2023-10-26
                                                14:36:01</td>
                                            <td>$100.00</td>
                                            <td>2023-10-26
                                                14:36:01</td>
                                            <td>REGISTERED</td>
                                            <td>2023-10-26
                                                14:36:01</td>
                                        </tr>
                                        <tr>
                                            <td>$100.00</td>
                                            <td>2023-10-26
                                                14:36:01</td>
                                            <td>$100.00</td>
                                            <td>2023-10-26
                                                14:36:01</td>
                                            <td>REGISTERED</td>
                                            <td>2023-10-26
                                                14:36:01</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </td>
                            <td id="kyc_lvl">LVL 2</td>
                            <td id="register_date">2023-10-26 14:36:01</td>
                            <td id="balance_user">$ 100.00</td>
                            <td id="promos" class="td_text">https://biteon.com/signup?promo=12345</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="/assets/DataTables/datatables.js"></script>
<script>
    var status = false;
    $("#user_table").DataTable({
        language: {
            "search": "",
            "searchPlaceholder": 'user@gmail.com',
        },
        paging: false,

    })
    $('#user_table_filter input').addClass('main_input');

    function show_user_info(id, el) {
        if (status) {
            status = true;
            el.classList.add('loader');
            const text = el.innerText;
            el.innerText = '';
            $('#user_modal').css('display', 'flex');
            $.ajax({
                url: '/api/ajax/get_info_user.php',
                type: 'GET',
                data: { refCode: id },
                success: function (data) {
                    el.classList.remove('loader');
                    el.innerText = text;
                    if (data.status == 'success') {
                        $('#user_modal').css('display', 'flex');
                        $('.blur-background').css('display', 'block');
                        $('.userInfoModal').css('display', 'flex');
                        $('.modal-content').css('display', 'block');
                        $('#user_id').text(data.data.ref_code);
                        $('#kyc_lvl').text("LVL " + data.data.kyc_step);
                        $('#register_date').text(data.data.created_date);
                        $('#balance_user').text("$ " + data.data.balance);
                        status = false;

                    }
                    else {
                        console.log(data.status);
                    }
                    status = false;
                },
                error: function (data) {
                    console.log(data);
                    el.innerText = text;
                    el.classList.remove('loader');
                    status = false;
                }
            })


        }
    }
    function close_modal() {
        $('.blur-background').css('display', 'none');
        $('.userInfoModal').css('display', 'none');
        $('.modal-content').css('display', 'none');
    }
</script>

</html>