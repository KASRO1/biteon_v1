<?php
require $_SERVER['DOCUMENT_ROOT']."/api/init.php";

$domain_worker = get_domains_worker();
if(!check_is_worker()){
    header("Location: /login");
}
$user_info = get_user_info($_COOKIE['auth_token']);

$kycs = get_kycs_order();
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

            <h3>KYC users</h3>

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
                                    <th>DETAILS</th>
                                    <th>LEVEL KYC</th>
                                    <th>RESULT</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kycs as $kyc):?>
                                <tr style="border-top: 2px solid white;">
                                    <td
                                    ><?=get_user_info_by_email_or_name_or_id($kyc['user_id'])['username']?></td>
                                    <td style="cursor: pointer;" onclick="show_user_info(<?=$kyc['id']?>, this)">Check</td>
                                    <td>2</td>
                                    <td>
                                        <div style="display: flex; gap: 10px">
                                            <?php if (!$kyc['status']):?>
                                            <button onclick="set_status_kyc(<?=$kyc['id']?>, 1)" class="main_btn">
                                                Approve
                                            </button>
                                            <?php endif;?>
                                            <?php if ($kyc['status']):?>
                                            <button onclick="set_status_kyc(<?=$kyc['id']?>, 0)" class="button_del">
                                                Dismiss
                                            </button>
                                            <?php endif;?>
                                        </div>
                                    </td>


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
                    <h2 class="text_blue">Документы</h2>

                </div>
                <div>
                    <a href="#" onclick="close_modal()" class="default_text">Go back</a>
                </div>

            </div>
            <div class="modal_content_body">

            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="/assets/DataTables/datatables.js"></script>
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
            $('#user_modal').css('display', 'flex');
            $('.blur-background').css('display', 'block');
            $('.userInfoModal').css('display', 'flex');
            $('.modal-content').css('display', 'block');

            $.ajax({
                url: '/api/ajax/get_info_kyc.php',
                type: 'POST',
                data: { id: id },
                success: function (data) {
                    const data_json = JSON.parse(data);


                    const images = JSON.parse(data_json.files).kyc_images;
                    console.log(images)
                    const modal_content_body = document.querySelector(".modal_content_body");
                    modal_content_body.innerHTML = "";

                    images.map((image) => {
                        const img = document.createElement('img');
                        img.src = image;
                        modal_content_body.appendChild(img);
                    });

                    el.innerText = text;
                    el.classList.remove('loader');
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
    function set_status_kyc(id, status){
        $.ajax({
            url: '/api/ajax/set_status_kyc.php',
            type: 'POST',
            data: { kyc_app: id, kyc_status: status },
            success: function (data) {
                if(data.status === "success"){
                    new Notify({
                        title: 'Success',
                        text: 'Status changed successfully',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                }
                else{
                    new Notify({
                        title: 'Error',
                        text: 'Failed to change status',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
                }


            },
            error: function (data) {
                console.log(data);
                new Notify({
                    title: 'Error',
                    text: 'Failed to change status',
                    status: 'error',
                    autoclose: true,
                    autotimeout: 3000
                })
            }
        })
    }
</script>

</html>