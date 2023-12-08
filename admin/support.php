<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
if(!check_is_worker()){
    header("Location: /login");
}
$chat_id = $_GET['chat_id'];
if (!$chat_id) {
    $chats = get_chats();

}
$this_user_id = get_user_info($_COOKIE['auth_token']);
$info_chat = get_info_chat($chat_id);
$companion_id = $info_chat['user_1'];
$info_companion = get_user_info_by_email_or_name_or_id($companion_id);
$companion_name = $info_companion['username'];

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

    <header >
        <div  onclick="window.location.href = '/'" class="logo">
            <img src="/assets/images/logo.svg" class="logo_img" alt="logo">
            <h3 ><?=$domain_titleINIT?></h3>
        </div>
        <div class="login_block gap-0" id="login_block">
            <a href="#" id="profile" class="autorized_user"><?=$user_info['username']?></a>
            <img src="/assets/users_avatars/standard_avatar.png" class="image_profile" alt="">


        </div>


    </header>


</header>
<main>
    <style>.content_container.tables {
            height: 100%;
        }
        .content_card.table {
            height: 100%;
        }
    </style>

    <?=render_aside_admin()?>
    <section class="content">

        <h3>Support</h3>

        <div class="content_container tables">
            <div class="content_card table">

                <div class="content_card_main">
                    <div class="chat">
                        <div class="chat_header">
                            <div class="searcher">
                                <input placeholder="user@gmail.com" type="text" class="main_input">
                            </div>
                            <div class="chat_header__title">
                                <?= $companion_name ?>
                            </div>
                        </div>
                        <div class="chat_content">
                            <div class="chat_aside">
                                <div class="chat_aside_header">
                                    <h3>All dialogs</h3>
                                </div>
                                <div class="chat_aside_content">
                                    <?= render_list_chats() ?>
                                </div>
                            </div>
                            <div class="chat_message">
                                <div class="chat_message_content">
                                    <div id="messages" class="chat_message_content__item">

                                        <?= render_messages_chat($chat_id) ?>

                                    </div>
                                    <form id="form_Send_msg" method="post">
                                        <div class="sender_message">
                                            <div class="sender_message__input">
                                                <input id="input_msg" type="text" name="message" placeholder="Write a message">
                                            </div>
                                            <div class="sender_message__button">
                                                <button type="submit" class="main_btn">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                    14:36:01
                                </td>
                                <td>$100.00</td>
                                <td>2023-10-26
                                    14:36:01
                                </td>
                                <td>REGISTERED</td>
                                <td>2023-10-26
                                    14:36:01
                                </td>
                            </tr>
                            <tr>
                                <td>$100.00</td>
                                <td>2023-10-26
                                    14:36:01
                                </td>
                                <td>$100.00</td>
                                <td>2023-10-26
                                    14:36:01
                                </td>
                                <td>REGISTERED</td>
                                <td>2023-10-26
                                    14:36:01
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </td>
                    <td id="kyc_lvl">LVL 2</td>
                    <td id="register_date">2023-10-26 14:36:01</td>
                    <td id="balance_user">$ 100.00</td>
                    <td id="promos" class="td_text">https://<?=$domain_titleINIT?>.com/signup?promo=12345</td>

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
    const form_send_msg = document.getElementById('form_Send_msg');
    const input_send_msg = document.getElementById('input_msg');
    form_send_msg.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        if(input_send_msg.value !== ""){
            $.ajax({
                url: '/api/ajax/send_message_chat.php',
                type: 'POST',
                data: {
                    chat_id: <?=$chat_id?>,
                    message: formData.get('message')
                },
                success: function (data) {
                    add_message(formData.get('message'), <?=$this_user_id?>);
                    input_send_msg.value = "";

                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }

    });

    function add_message(message, user) {

        const chatContainer = document.getElementById('messages');

        const user_this = <?=$this_user_id?>;
        const class_user = user == user_this ? 'right' : 'left';


        const divElement = document.createElement('div');


        divElement.classList.add('chat_message_content__item__text');


        divElement.classList.add(class_user);


        const messageElement = document.createElement('div');


        messageElement.textContent = message;


        divElement.appendChild(messageElement);


        chatContainer.appendChild(divElement);


    }
</script>

</html>