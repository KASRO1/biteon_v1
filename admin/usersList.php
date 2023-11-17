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
</head>

<body>
    <header>

        <div class="login_block gap-0" id="login_block">
            <a href="#" id="profile" class="autorized_user">123</a>
            <img src="/assets/users_avatars/standard_avatar.png" class="image_profile" alt="">


        </div>


    </header>
    <main>

        <aside>
            <nav>
                <ul>
                    <li class="li_title">
                        DASHBOARD
                    </li>
                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7" fill="none">
                                <path
                                    d="M5.33333 6.88029L2.66667 6.02247V0.00216084L5.33333 0.859973V6.88029ZM5.77778 6.86154V0.822473L7.54306 0.0271608C7.7625 -0.0712767 8 0.109973 8 0.375598V5.60685C8 5.75997 7.91667 5.89747 7.79028 5.95529L5.77778 6.85997V6.86154ZM0.209722 0.927161L2.22222 0.0224733V6.05997L0.456944 6.85529C0.2375 6.95372 0 6.77247 0 6.50685V1.2756C0 1.12247 0.0833333 0.984973 0.209722 0.927161Z"
                                    fill="white" fill-opacity="0.9" />
                            </svg>
                            <a href="binding.php">
                                Binding</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                <path
                                    d="M4.01528 3.75V0.259375C4.01528 0.11875 4.11862 0 4.25148 0C6.07754 0 7.55818 1.56719 7.55818 3.5C7.55818 3.64062 7.44599 3.75 7.31313 3.75H4.01528ZM0 4.25C0 2.35469 1.33006 0.785937 3.05575 0.535937C3.19156 0.515625 3.3067 0.63125 3.3067 0.776563V4.5L5.61697 6.94531C5.71587 7.05 5.70849 7.22188 5.59482 7.30625C5.01615 7.74375 4.30757 8 3.5429 8C1.58692 8 0 6.32188 0 4.25ZM7.77075 4.5C7.90804 4.5 8.0158 4.62187 7.99809 4.76562C7.88442 5.63906 7.48732 6.41562 6.90717 6.98906C6.8186 7.07656 6.67984 7.07031 6.59422 6.97813L4.25148 4.5H7.77075Z"
                                    fill="white" fill-opacity="0.6" />
                            </svg>
                            <a href="users.php">
                                Statistics</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8"
                                fill="none">
                                <path
                                    d="M8.35938 0.640723C8.2125 0.493848 8.2125 0.256348 8.35938 0.111036C8.50625 -0.0342766 8.74375 -0.0358391 8.88906 0.111036L9.88906 1.11104C9.95938 1.18135 9.99844 1.27666 9.99844 1.37666C9.99844 1.47666 9.95938 1.57197 9.88906 1.64229L8.88906 2.64229C8.74219 2.78916 8.50469 2.78916 8.35938 2.64229C8.21406 2.49541 8.2125 2.25791 8.35938 2.1126L8.71875 1.75322L6 1.7501C5.79219 1.7501 5.625 1.58291 5.625 1.3751C5.625 1.16729 5.79219 1.0001 6 1.0001H8.72031L8.35938 0.640723ZM1.64062 5.89072L1.28125 6.2501H4C4.20781 6.2501 4.375 6.41729 4.375 6.6251C4.375 6.83291 4.20781 7.0001 4 7.0001H1.27969L1.63906 7.35947C1.78594 7.50635 1.78594 7.74385 1.63906 7.88916C1.49219 8.03447 1.25469 8.03604 1.10938 7.88916L0.109375 6.89072C0.0390625 6.82041 0 6.7251 0 6.6251C0 6.5251 0.0390625 6.42979 0.109375 6.35947L1.10938 5.35947C1.25625 5.2126 1.49375 5.2126 1.63906 5.35947C1.78438 5.50635 1.78594 5.74385 1.63906 5.88916L1.64062 5.89072ZM1.5 1.0001H5.27969C5.22187 1.1126 5.1875 1.23916 5.1875 1.3751C5.1875 1.82354 5.55156 2.1876 6 2.1876H7.83437C7.77187 2.45322 7.84375 2.74229 8.05 2.9501C8.36719 3.26729 8.88125 3.26729 9.19844 2.9501L9.5 2.64854V6.0001C9.5 6.55166 9.05156 7.0001 8.5 7.0001H4.72031C4.77813 6.8876 4.8125 6.76104 4.8125 6.6251C4.8125 6.17666 4.44844 5.8126 4 5.8126H2.16563C2.22813 5.54697 2.15625 5.25791 1.95 5.0501C1.63281 4.73291 1.11875 4.73291 0.801562 5.0501L0.5 5.35166V2.0001C0.5 1.44854 0.948438 1.0001 1.5 1.0001ZM2.5 2.0001H1.5V3.0001C2.05156 3.0001 2.5 2.55166 2.5 2.0001ZM8.5 5.0001C7.94844 5.0001 7.5 5.44854 7.5 6.0001H8.5V5.0001ZM5 5.5001C5.39782 5.5001 5.77936 5.34206 6.06066 5.06076C6.34196 4.77945 6.5 4.39792 6.5 4.0001C6.5 3.60227 6.34196 3.22074 6.06066 2.93944C5.77936 2.65813 5.39782 2.5001 5 2.5001C4.60218 2.5001 4.22064 2.65813 3.93934 2.93944C3.65804 3.22074 3.5 3.60227 3.5 4.0001C3.5 4.39792 3.65804 4.77945 3.93934 5.06076C4.22064 5.34206 4.60218 5.5001 5 5.5001Z"
                                    fill="white" fill-opacity="0.6" />
                            </svg>
                            <a href="orders.php">

                                Deposits</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                <g clip-path="url(#clip0_221_1631)">
                                    <path
                                        d="M2.85714 1.75C2.85714 1.19844 3.36964 0.75 4 0.75C4.63036 0.75 5.14286 1.19844 5.14286 1.75V2.5H2.85714V1.75ZM2 2.5H0.857143C0.383929 2.5 0 2.83594 0 3.25V6.5C0 7.32812 0.767857 8 1.71429 8H6.28571C7.23214 8 8 7.32812 8 6.5V3.25C8 2.83594 7.61607 2.5 7.14286 2.5H6V1.75C6 0.782812 5.10536 0 4 0C2.89464 0 2 0.782812 2 1.75V2.5ZM2.42857 3.25C2.54224 3.25 2.65124 3.28951 2.73162 3.35983C2.81199 3.43016 2.85714 3.52554 2.85714 3.625C2.85714 3.72446 2.81199 3.81984 2.73162 3.89017C2.65124 3.96049 2.54224 4 2.42857 4C2.31491 4 2.2059 3.96049 2.12553 3.89017C2.04515 3.81984 2 3.72446 2 3.625C2 3.52554 2.04515 3.43016 2.12553 3.35983C2.2059 3.28951 2.31491 3.25 2.42857 3.25ZM5.14286 3.625C5.14286 3.52554 5.18801 3.43016 5.26838 3.35983C5.34876 3.28951 5.45776 3.25 5.57143 3.25C5.68509 3.25 5.7941 3.28951 5.87447 3.35983C5.95485 3.43016 6 3.52554 6 3.625C6 3.72446 5.95485 3.81984 5.87447 3.89017C5.7941 3.96049 5.68509 4 5.57143 4C5.45776 4 5.34876 3.96049 5.26838 3.89017C5.18801 3.81984 5.14286 3.72446 5.14286 3.625Z"
                                        fill="white" fill-opacity="0.6" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_221_1631">
                                        <rect width="8" height="8" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <a href="products.php">

                                Withdraw</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                <path
                                    d="M2.025 0C2.32337 0 2.60952 0.131696 2.8205 0.366117C3.03147 0.600537 3.15 0.918479 3.15 1.25C3.15 1.58152 3.03147 1.89946 2.8205 2.13388C2.60952 2.3683 2.32337 2.5 2.025 2.5C1.72663 2.5 1.44048 2.3683 1.2295 2.13388C1.01853 1.89946 0.9 1.58152 0.9 1.25C0.9 0.918479 1.01853 0.600537 1.2295 0.366117C1.44048 0.131696 1.72663 0 2.025 0ZM7.2 0C7.49837 0 7.78452 0.131696 7.99549 0.366117C8.20647 0.600537 8.325 0.918479 8.325 1.25C8.325 1.58152 8.20647 1.89946 7.99549 2.13388C7.78452 2.3683 7.49837 2.5 7.2 2.5C6.90163 2.5 6.61548 2.3683 6.4045 2.13388C6.19353 1.89946 6.075 1.58152 6.075 1.25C6.075 0.918479 6.19353 0.600537 6.4045 0.366117C6.61548 0.131696 6.90163 0 7.2 0ZM0 4.66719C0 3.74688 0.672187 3 1.50047 3H2.10094C2.32453 3 2.53688 3.05469 2.72812 3.15156C2.70984 3.26406 2.70141 3.38125 2.70141 3.5C2.70141 4.09688 2.93766 4.63281 3.31031 5C3.3075 5 3.30469 5 3.30047 5H0.299531C0.135 5 0 4.85 0 4.66719ZM5.69953 5C5.69672 5 5.69391 5 5.68969 5C6.06375 4.63281 6.29859 4.09688 6.29859 3.5C6.29859 3.38125 6.28875 3.26562 6.27187 3.15156C6.46312 3.05312 6.67547 3 6.89906 3H7.49953C8.32781 3 9 3.74688 9 4.66719C9 4.85156 8.865 5 8.70047 5H5.69953ZM3.15 3.5C3.15 3.10218 3.29223 2.72064 3.54541 2.43934C3.79858 2.15804 4.14196 2 4.5 2C4.85804 2 5.20142 2.15804 5.45459 2.43934C5.70777 2.72064 5.85 3.10218 5.85 3.5C5.85 3.89782 5.70777 4.27936 5.45459 4.56066C5.20142 4.84196 4.85804 5 4.5 5C4.14196 5 3.79858 4.84196 3.54541 4.56066C3.29223 4.27936 3.15 3.89782 3.15 3.5ZM1.8 7.58281C1.8 6.43281 2.63953 5.5 3.67453 5.5H5.32547C6.36047 5.5 7.2 6.43281 7.2 7.58281C7.2 7.8125 7.03266 8 6.82453 8H2.17547C1.96875 8 1.8 7.81406 1.8 7.58281Z"
                                    fill="white" fill-opacity="0.6" />
                            </svg>
                            <a href="categories.php">

                                Users</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                                <path
                                    d="M0.75 0C0.335938 0 0 0.335938 0 0.75C0 0.985937 0.110938 1.20781 0.3 1.35L3.7 3.9C3.87812 4.03281 4.12188 4.03281 4.3 3.9L7.7 1.35C7.88906 1.20781 8 0.985937 8 0.75C8 0.335938 7.66406 0 7.25 0H0.75ZM0 1.75V5C0 5.55156 0.448438 6 1 6H7C7.55156 6 8 5.55156 8 5V1.75L4.6 4.3C4.24375 4.56719 3.75625 4.56719 3.4 4.3L0 1.75Z"
                                    fill="white" fill-opacity="0.6" />
                            </svg>
                            <a href="reviews.php">

                                Support</a>
                        </div>
                    </li>

                    <li>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                <path
                                    d="M7.97782 2.60363C8.03087 2.7396 7.98611 2.89119 7.87173 2.98808L7.15391 3.60383C7.17215 3.73354 7.18209 3.86638 7.18209 4.00078C7.18209 4.13518 7.17215 4.26802 7.15391 4.39773L7.87173 5.01348C7.98611 5.11037 8.03087 5.26197 7.97782 5.39793C7.90488 5.5839 7.81702 5.76206 7.7159 5.93397L7.63798 6.06056C7.52857 6.23247 7.40589 6.395 7.27161 6.54815C7.1738 6.66068 7.01134 6.69818 6.86546 6.65442L5.94208 6.37781C5.71994 6.53878 5.47459 6.67318 5.21266 6.77476L5.00544 7.66712C4.97228 7.80934 4.85624 7.92186 4.70372 7.9453C4.47495 7.98125 4.23955 8 3.99917 8C3.75879 8 3.52339 7.98125 3.29462 7.9453C3.1421 7.92186 3.02606 7.80934 2.9929 7.66712L2.78568 6.77476C2.52375 6.67318 2.2784 6.53878 2.05626 6.37781L1.13454 6.65599C0.988658 6.69975 0.826196 6.66068 0.728388 6.54972C0.594108 6.39656 0.471433 6.23403 0.36202 6.06212L0.284105 5.93553C0.182981 5.76363 0.0951189 5.58547 0.022177 5.39949C-0.0308717 5.26353 0.0138881 5.11194 0.128274 5.01504L0.846089 4.3993C0.827854 4.26802 0.817907 4.13518 0.817907 4.00078C0.817907 3.86638 0.827854 3.73354 0.846089 3.60383L0.128274 2.98808C0.0138881 2.89119 -0.0308717 2.7396 0.022177 2.60363C0.0951189 2.41766 0.182981 2.2395 0.284105 2.06759L0.36202 1.941C0.471433 1.7691 0.594108 1.60656 0.728388 1.45341C0.826196 1.34089 0.988658 1.30338 1.13454 1.34714L2.05792 1.62375C2.28006 1.46279 2.52541 1.32838 2.78734 1.2268L2.99456 0.33444C3.02772 0.192225 3.14376 0.0797031 3.29628 0.056261C3.52505 0.0187537 3.76045 0 4.00083 0C4.24121 0 4.47661 0.0187537 4.70538 0.0546982C4.8579 0.0781403 4.97394 0.190662 5.0071 0.332878L5.21432 1.22524C5.47625 1.32682 5.7216 1.46122 5.94374 1.62219L6.86712 1.34558C7.013 1.30182 7.17546 1.34089 7.27327 1.45185C7.40755 1.605 7.53023 1.76753 7.63964 1.93944L7.71755 2.06603C7.81868 2.23794 7.90654 2.4161 7.97948 2.60207L7.97782 2.60363ZM4.00083 5.25103C4.35256 5.25103 4.68989 5.1193 4.93861 4.88484C5.18732 4.65037 5.32705 4.33237 5.32705 4.00078C5.32705 3.6692 5.18732 3.35119 4.93861 3.11673C4.68989 2.88226 4.35256 2.75054 4.00083 2.75054C3.64909 2.75054 3.31177 2.88226 3.06305 3.11673C2.81434 3.35119 2.67461 3.6692 2.67461 4.00078C2.67461 4.33237 2.81434 4.65037 3.06305 4.88484C3.31177 5.1193 3.64909 5.25103 4.00083 5.25103Z"
                                    fill="white" fill-opacity="0.6" />
                            </svg>
                            <a href="reviews.php">

                                Settings</a>
                        </div>
                    </li>

                </ul>
            </nav>
            <a class="dark_button">
                Go to profile
            </a>
        </aside>
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
                                <tr style="border-top: 2px solid white;">
                                    <td style="cursor: pointer;" 
                                        onclick="show_user_info(46224787, this)">user_name</td>
                                    <td>12345</td>
                                    <td>2023-10-26 14:36:01</td>
                                    <td>$ 100.00</td>


                                </tr>
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