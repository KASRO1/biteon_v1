<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <header>

        <div class="login_block gap-0" id="login_block">
            <a href="#" id="profile" class="autorized_user">123</a>
            <img src="/assets/users_avatars/standard_avatar.png" class="image_profile" alt="">


        </div>


    </header>
    <main>

        <?=render_aside_admin()?>
        <section class="content">

            <h3>Binding</h3>
            <div class="content_container binding">

                <div class="two_cards">


                    <div class="content_card">
                        <div class="content_card_header">
                            <h2>Hand Binding</h2>
                            <div class="border_blue"></div>
                        </div>
                        <div class="content_card_main">
                            <form action="" id="email_binding_form">
                                <div class="content_inputs">
                                    <label for="binding_email">E-mail</label>
                                    <input id="binding_email" placeholder="user@gmail.com" class="main_input" name="email">
                                    <p class="inpt_helper">Для прикрепления юзера, укажите его почту</p>
                                </div>
                                <button class="main_btn" type="submit">Bind</button>
                            </form>
                        </div>

                    </div>
                    <div class="content_card">
                        <div class="content_card_header">
                            <h2>Auto Binding</h2>
                            <div class="border_green"></div>
                        </div>
                        <div class="content_card_main">
                            <form action="" id="domain_binding_form">
                                <div class="content_inputs">
                                    <label for="binding_email">Your domains</label>
                                    <input id="binding_email" value="<?=$domain_worker['domain']?>" disabled placeholder="No domains" class="main_input" name="">
                                    <p class="inpt_helper">Юзеры, которые зарегистрируются, используя ваш домен, будут
                                        автоматически прикреплены к вашему аккаунту</p>
                                </div>
                                <button class="main_btn" type="submit">Bind</button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="content_card">
                    <div class="content_card_header">
                        <h2>Promo Binding</h2>
                        <div class="border_orange"></div>
                    </div>
                    <div class="content_card_main">
                        <form action="" id="promo_binding_form">
                            <div class="content_inputs">
                                <label for="binding_email">Promo</label>
                                <input id="binding_promo" placeholder="PROMO CODE" class="main_input" name="promocode">
                                <p class="inpt_helper">Промокод, активировав который, юзер получит бонус и привяжется к
                                    вашему аккаунту</p>
                            </div>
                            <div class="content_inputs">
                                <label for="binding_promo_coin">Coin</label>
                                <select name="coin_name" class="main_input" id="binding_promo_coin">
                                    <?=render_list_coins()?>
                                </select>
                                <p class="inpt_helper">Выберите монету для промокода</p>
                            </div>
                            <div class="content_inputs">
                                <label for="binding_promo_amount">Amount</label>
                                <input id="binding_promo_amount" placeholder="0.01" class="main_input" name="amount">
                                <p class="inpt_helper">Выберите желаемую сумму бонуса, которую получит пользователь при
                                    активации промокода</p>
                            </div>
                            <div class="content_inputs">
                                <label for="binding_promo_text">Text After Activation</label>
                                <input id="binding_promo_text" placeholder="Text"
                                    value="Your PROMO CODE has been successfuly activated!" class="main_input" name="promo_text">
                                <p class="inpt_helper">Для прикрепления юзера, укажите его почту</p>
                            </div>
                            <button class="main_btn" type="submit">Add promo</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="content_container tables">
                <div class="content_card table">
                    <div class="content_card_header">
                        <h2>Your Promo List</h2>
                        <div class="border_light_blue"></div>
                    </div>
                    <div class="content_card_main">
                        <table>
                            <thead>
                                <tr>
                                    <th>PROMO-CODE</th>
                                    <th>AMOUNT</th>
                                    <th>TEXT</th>
                                    <th>DATE</th>
                                    <th>PROMO LINK</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?=render_list_promos_info()?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

    </main>
</body>
<script>
    const email_binding_form = document.getElementById('email_binding_form');
    email_binding_form.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(email_binding_form);
        $.ajax({
            type: "POST",
            url: "/api/ajax/binding_user_by_email.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            }

        });
    });
    const promo_binding_form = document.getElementById('promo_binding_form');
    promo_binding_form.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(promo_binding_form);
        $.ajax({
            type: "POST",
            url: "/api/ajax/create_promo.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            }

        });
    });
</script>

</html>