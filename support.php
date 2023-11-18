<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}
$auth_token = $_COOKIE['auth_token'];
$info_user = get_user_info($auth_token);

$chat = get_chat();
$chat_id = $chat['chat_id'] ? $chat['chat_id'] : 0;

$user_id = $info_user['id'];
?>
<style>
    svg{
        stroke: transparent !important;
    }
</style>
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

    <script src="assets/scripts/custom-select.js"></script>
</head>

<body class="swap">
    <?=render_header()?>
    <section class="subtitle">
        <div class="subtitle_box">
            <img src="assets/images/subtitle_logo.svg" alt="">
            <div id="subtitle_box">
                <h1>Customer support chat</h1>
                <p>Here to help you 24/7</p>
            </div>
        </div>




    </section>
    <main id="chat_main" class="swap__block">
        <section id="chat_messanger" class="swap-box__wrapper">
            <div class="header_chat">
                <div class="header-chat_image">
                    <img src="assets/images/support_img.svg" alt="">
                </div>
                <div class="header-chat_info">
                    <h3>Live support service</h3>

                </div>
            </div>
            <div class="chat-container ">
                <div class="non_message">
                    <svg xmlns="http://www.w3.org/2000/svg" width="57" height="54" viewBox="0 0 57 54" fill="none">
                        <path d="M55.945 22.3672L51.2717 17.7208C52.4038 15.8845 53.0111 13.773 53.0275 11.6158C53.0222 9.31536 52.3355 7.06808 51.0541 5.15757C49.7727 3.24706 47.9541 1.75896 45.8278 0.881095C43.7014 0.00322735 41.3627 -0.225062 39.1067 0.22504C36.8507 0.675142 34.7787 1.78346 33.152 3.41011C31.5254 5.03676 30.4171 7.10883 29.967 9.3648C29.5169 11.6208 29.7451 13.9595 30.623 16.0859C31.5009 18.2122 32.989 20.0308 34.8995 21.3122C36.81 22.5936 39.0573 23.2803 41.3577 23.2856C43.5098 23.2854 45.6209 22.6969 47.4628 21.5838L52.1091 26.2571C52.3602 26.5103 52.659 26.7113 52.9882 26.8484C53.3173 26.9856 53.6704 27.0562 54.027 27.0562C54.3837 27.0562 54.7367 26.9856 55.0659 26.8484C55.3951 26.7113 55.6939 26.5103 55.945 26.2571C56.2064 26.0051 56.4144 25.703 56.5564 25.3688C56.6985 25.0346 56.7717 24.6753 56.7717 24.3121C56.7717 23.949 56.6985 23.5896 56.5564 23.2555C56.4144 22.9213 56.2064 22.6192 55.945 22.3672ZM45.7879 16.1811C44.5973 17.3156 43.0158 17.9485 41.3712 17.9485C39.7266 17.9485 38.1451 17.3156 36.9545 16.1811C36.3701 15.6012 35.9067 14.9109 35.5913 14.1503C35.276 13.3898 35.115 12.5742 35.1176 11.7509C35.1033 10.9211 35.2539 10.0967 35.5607 9.32559C35.8676 8.55448 36.3245 7.852 36.9051 7.25891C37.4856 6.66582 38.1781 6.19394 38.9425 5.87066C39.7068 5.54737 40.5278 5.37912 41.3577 5.37566C42.181 5.37304 42.9967 5.53409 43.7572 5.84943C44.5177 6.16478 45.208 6.62814 45.7879 7.21258C46.3716 7.78748 46.8346 8.47303 47.1501 9.2291C47.4655 9.98517 47.6269 10.7966 47.6248 11.6158C47.6457 12.4617 47.4935 13.303 47.1776 14.088C46.8618 14.8731 46.3889 15.5853 45.7879 16.1811ZM51.3257 32.3892C50.6092 32.3892 49.9221 32.6738 49.4155 33.1804C48.9089 33.687 48.6243 34.3741 48.6243 35.0905V45.8959C48.6243 46.6124 48.3397 47.2995 47.8331 47.8061C47.3265 48.3127 46.6394 48.5973 45.923 48.5973H8.10406C7.38761 48.5973 6.70051 48.3127 6.19391 47.8061C5.68731 47.2995 5.4027 46.6124 5.4027 45.8959V19.99L21.2867 35.9009C22.8062 37.4186 24.8659 38.271 27.0135 38.271C29.1611 38.271 31.2209 37.4186 32.7404 35.9009L36.4683 32.065C36.9769 31.5563 37.2627 30.8664 37.2627 30.1471C37.2627 29.4277 36.9769 28.7378 36.4683 28.2291C35.9596 27.7204 35.2697 27.4347 34.5503 27.4347C33.8309 27.4347 33.141 27.7204 32.6323 28.2291L28.9045 32.065C28.3995 32.56 27.7206 32.8372 27.0135 32.8372C26.3064 32.8372 25.6275 32.56 25.1226 32.065L9.21161 16.1811H21.6108C22.3273 16.1811 23.0144 15.8965 23.521 15.3899C24.0276 14.8833 24.3122 14.1962 24.3122 13.4797C24.3122 12.7633 24.0276 12.0762 23.521 11.5696C23.0144 11.063 22.3273 10.7784 21.6108 10.7784H8.10406C5.95473 10.7784 3.89343 11.6322 2.37362 13.152C0.853818 14.6718 0 16.7331 0 18.8824V45.8959C0 48.0453 0.853818 50.1066 2.37362 51.6264C3.89343 53.1462 5.95473 54 8.10406 54H45.923C48.0723 54 50.1336 53.1462 51.6534 51.6264C53.1732 50.1066 54.027 48.0453 54.027 45.8959V35.0905C54.027 34.3741 53.7424 33.687 53.2358 33.1804C52.7292 32.6738 52.0421 32.3892 51.3257 32.3892Z" fill="white" fill-opacity="0.1"/>
                    </svg>
                    <p>No messages found</p>
                </div>
            </div>


        </section>
        <div class="sender__block">
            <form method="post" id="send_message">
            <div class="sender__block__wrapper">

                <div class="sender__block__wrapper__input_files">

                    <svg width="16" height="16" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5 5.188L5.77223 9.64688C5.19304 10.1931 4.40749 10.5 3.5884 10.5C2.76931 10.5 1.98376 10.1931 1.40457 9.64688C0.825384 9.10063 0.5 8.35976 0.5 7.58725C0.5 6.81474 0.825384 6.07387 1.40457 5.52763L6.13234 1.06875C6.51847 0.704585 7.04216 0.5 7.58823 0.5C8.13429 0.5 8.65799 0.704585 9.04411 1.06875C9.43024 1.43291 9.64716 1.92683 9.64716 2.44183C9.64716 2.95684 9.43024 3.45075 9.04411 3.81491L4.3112 8.27379C4.11814 8.45588 3.85629 8.55817 3.58326 8.55817C3.31022 8.55817 3.04838 8.45588 2.85531 8.27379C2.66225 8.09171 2.55379 7.84476 2.55379 7.58725C2.55379 7.32975 2.66225 7.08279 2.85531 6.90071L7.22297 2.78632"
                            stroke="white" stroke-width="0.873339" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <div class="sender__block__wrapper__input">
                    <input type="text" name="message" id="input_send" placeholder="Enter your message">
                </div>
                <div class="sender__block__wrapper__button">
                    <button type="submit" class="btn"><img src="assets/images/telegrama.svg" alt="">Send</button>
                </div>

            </div>
            </form>
        </div>
    </main>

</body>
<script src="assets/scripts/main.js"></script>
<script>
    function check_exist_msg(){
        const messagess = document.querySelectorAll('.message-content');
        if (messagess.length === 0){
            $(".chat-container").removeClass('non_message_container');
            $(".non_message").css('display', 'none');

        }
    }
    function get_messages() {
        $.ajax({
            url: '/api/ajax/get_messages.php',
            type: 'GET',
            data: {
                chat_id: <?=$chat_id?>
            },
            success: function (data) {
                // Удаляем старые сообщения перед добавлением новых
                $(".chat-container").empty();

                if (data.status === "success") {
                    $(".non_message").css('display', 'none');
                    const messages = data.messages;

                    if (messages.length === 0) {
                        $(".chat-container").addClass('non_message_container');
                    }

                    messages.forEach(message => {
                        add_message(message.message_text, message.user_id);
                    });
                } else {
                    $(".chat-container").addClass('non_message_container');
                    $(".non_message").css('display', 'block');
                }
            }
        });
    }

    get_messages();
    setInterval(get_messages, 3000);
    const form_send_msg = document.getElementById('send_message');
    const input_send_msg = document.getElementById('input_send');
    form_send_msg.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const value = input_send_msg.value;
        if(value !== ""){
            $.ajax({
                url: '/api/ajax/send_message_chat.php',
                type: 'POST',
                data: {
                    chat_id: <?=$chat_id?>,
                    message: formData.get('message')
                },
                success: function (data) {
                    add_message(formData.get('message'), <?=$user_id?>);
                    input_send_msg.value = "";

                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    });
    if(<?=$chat_id?> === 0){
        window.location.reload();
    }
    function add_message(message, user) {
        check_exist_msg();
        const chatContainer = document.querySelector('.chat-container');

        const user_this = <?=$user_id?>;
        const class_user = user == user_this ? 'user2' : 'user1';
        const user2Message = document.createElement('div');
        user2Message.classList.add('chat-message', class_user);


        if(user == user_this){
            const avatar = document.createElement('div');
            avatar.classList.add('avatar');
            const avatarImg = document.createElement('img');
            avatarImg.src = '<?=$info_user['avatar']?>';
            avatarImg.alt = 'Аватар пользователя 1';
            avatar.appendChild(avatarImg);

            const messageContent = document.createElement('div');
            messageContent.classList.add('message-content');
            const messageText = document.createElement('p');
            messageText.textContent = message;
            messageContent.appendChild(messageText);


            user2Message.appendChild(messageContent);
            user2Message.appendChild(avatar);
            chatContainer.appendChild(user2Message);
        } else {
            const avatar = document.createElement('div');
            avatar.classList.add('avatar');
            const avatarImg = document.createElement('img');
            avatarImg.src = 'assets/images/support_img.svg';
            avatarImg.alt = 'Аватар пользователя 2';
            avatar.appendChild(avatarImg);

            const messageContent = document.createElement('div');
            messageContent.classList.add('message-content');
            const messageText = document.createElement('p');
            messageText.textContent = message;
            messageContent.appendChild(messageText);

            user2Message.appendChild(avatar);
            user2Message.appendChild(messageContent);

            chatContainer.appendChild(user2Message);
        }



    }
</script>
</html>