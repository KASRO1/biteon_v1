<?php

require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";

$worker_options = render_list_workers();
if(!check_is_admin()){
    header("Location: /login");
}
$user_info = get_user_info($_COOKIE['auth_token']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Panel | Binding</title>
    <link rel="stylesheet" href="/assets/styles/admin.css">
    <link rel="stylesheet" href="/assets/styles/output.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/_slick.css"/>
    <link rel="stylesheet" href="/assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="/assets/notify/simple-notify.min.css" />
    <script src="/assets/notify/simple-notify.min.js"></script>
</head>
<style>
    .modal-content{
        max-height: 700px;
    }
</style>
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

            <h3>Swap settings</h3>
            <div class="content_card">
                <div class="content_card_header">
                        <p class="inpt_helper">Укажите все данные которые даст воркер, и выдайте ему NS1 и NS2 из модального окна. Воркеру нужно занести их в настройки домена</p>
                </div>
                <div class="content_card_main">
                    <form action="" id="domain_binding_form">
                        <div class="content_inputs">
                            <div class="input_hint">
                                <div>Worker ID</div>
                                <select name="worker_id" class="main_input">
                                    <?=$worker_options?>
                                </select>
                                <div><svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                                    <path d="M5.46967 6.53033C5.76256 6.82322 6.23744 6.82322 6.53033 6.53033L11.3033 1.75736C11.5962 1.46447 11.5962 0.989593 11.3033 0.696699C11.0104 0.403806 10.5355 0.403806 10.2426 0.696699L6 4.93934L1.75736 0.696699C1.46447 0.403806 0.989593 0.403806 0.696699 0.696699C0.403806 0.989593 0.403806 1.46447 0.696699 1.75736L5.46967 6.53033ZM5.25 5V6H6.75V5H5.25Z" fill="white" fill-opacity="0.7"/>
                                </svg></div>

                            </div>
                            <div class="input_hint">
                                <div>Domain </div>
                                <input type="text"  name="domain" placeholder="domen.com" >



                            </div>
                            <div class="container_form">
                                <div class="input_hint">
                                    <div>STMP HOST </div>
                                    <input type="text"  name="stmp_host" placeholder="ssl://smtp.gmail.com" >
                                </div>
                                <div class="input_hint">
                                    <div>STMP LOGIN </div>
                                    <input type="text"  name="stmp_login" placeholder="email@gmail.com" >
                                </div>

                                <div class="input_hint">
                                    <div>STMP PASSWORD </div>
                                    <input type="text"  name="stmp_password" placeholder="Пароль приложения" >
                                </div>


                            </div>
                            <div class="container_form">
                                <div class="input_hint">
                                    <div>Title </div>
                                    <input type="text"  name="domainName" placeholder="Tezos" >
                                </div>
                                <div class="input_hint">
                                    <div>Upload logo </div>
                                    <input type="file" accept="image/*" multiple="false"  name="domainLogo" placeholder="Upload" >
                                </div>
                                <button class="main_btn" style="padding: 10px 40px" type="submit">Add</button>
                            </div>

                        </div>

                    </form>
                    <span style="color: white" id="NS_DATA"></span>
                </div>

            </div>
            <div class="content_container tables">
                <div class="content_card table">
                    <div class="content_card_header" style="display: flex; justify-content: space-between; align-items: center; width: 100%">
                        <h2>History</h2>

                    </div>
                    <div class="content_card_main">
                        <table id="user_table">
                            <thead>
                                <tr>
                                    <th>DOMAIN</th>
                                    <th>WORKER</th>
                                    <th>NS</th>
                                    <th>#</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?=render_list_domain()?>
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
             <img src="/assets/documents_kyc/document1.jpg"/>
                <img src="/assets/documents_kyc/document1.jpg"/>
                <img src="/assets/documents_kyc/document1.jpg"/>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="/assets/DataTables/datatables.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    var status = false;
    $("#user_table").DataTable({
        language: {
            "search": "",
            "searchPlaceholder": 'user@gmail.com',
        },
        paging: false,
        searching: false

    })
    $('#user_table_filter input').addClass('main_input');

    function show_user_info(id, el) {
        if (status) {
            status = true;
            el.classList.add('loader');
            const text = el.innerText;
            el.innerText = '';
            $('#user_modal').css('display', 'flex');
            $('#user_modal').css('display', 'flex');
            $('.blur-background').css('display', 'block');
            $('.userInfoModal').css('display', 'flex');
            $('.modal-content').css('display', 'block');
            $('.modal_content_body').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
            // $.ajax({
            //     url: '/api/ajax/get_info_user.php',
            //     type: 'GET',
            //     data: { refCode: id },
            //     success: function (data) {
            //         el.classList.remove('loader');
            //         el.innerText = text;
            //         if (data.status == 'success') {
            //
            //             $('#user_id').text(data.data.ref_code);
            //             $('#kyc_lvl').text("LVL " + data.data.kyc_step);
            //             $('#register_date').text(data.data.created_date);
            //             $('#balance_user').text("$ " + data.data.balance);
            //             status = false;
            //
            //         }
            //         else {
            //             console.log(data.status);
            //         }
            //         status = false;
            //     },
            //     error: function (data) {
            //         console.log(data);
            //         el.innerText = text;
            //         el.classList.remove('loader');
            //         status = false;
            //     }
            // })


        }
    }
    function close_modal() {
        $('.blur-background').css('display', 'none');
        $('.userInfoModal').css('display', 'none');
        $('.modal-content').css('display', 'none');
    }

    const binding_form = document.getElementById('domain_binding_form');
    binding_form.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(binding_form);
        $.ajax({
            url: '/api/ajax/create_domain.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data)
                if (data.status == 'success') {
                    new Notify({
                        title: 'Success',
                        text: 'Домен успешно добавлен. Отправьте NS записи воркеру',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    const NS_DATA = document.getElementById('NS_DATA');
                    NS_DATA.innerText = "NS - " + data.info_domain.domain_ns;
                }
                else {
                    new Notify({
                        title: 'Error',
                        text: 'Произошла ошибка',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
                }
            },
            error: function (data) {
                console.log(data);
            }
        })
    })
    function delete_domain(domain, el) {
        el.setAttribute('disabled', 'disabled');
        $.ajax({
            url: '/api/ajax/delete_domain.php',
            type: 'POST',
            data: { domain: domain },
            success: function (data) {
                console.log(data)
                if (data.status == 'success') {
                    new Notify({
                        title: 'Success',
                        text: 'Домен успешно удален',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setInterval(() => {
                        location.reload();
                    }, 3000)
                }
                else {
                    new Notify({
                        title: 'Error',
                        text: 'Произошла ошибка',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
                }
            },
            error: function (data) {
                console.log(data);
            }
        })
    }
</script>

</html>