<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}
$user_info = get_user_info($auth_token);
$lastKycApp = checkLastKycApplication();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title ><?=$domain_titleINIT?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/output.css">
    <link rel="stylesheet" href="assets/styles/checkbox.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/styles/custom-select.css">
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
    <link rel="stylesheet" href="assets/styles/profile.css">
    <script src="assets/scripts/custom-select.js"></script>
</head>

<body class="swap">
<?= render_header() ?>
    <section class="subtitle">
        <div class="subtitle_box">
            <img src="assets/images/subtitle_logo.svg" alt="">
            <div id="subtitle_box">
                <h1>Account settings</h1>
                <p>Manage your account settings</p>
            </div>
        </div>




    </section>
    <main>
    <?=render_header_settings_nav()?>
        <div class="wrapper wrapper_kyc">
            <div class="wrapper__col">
                <div class="col_content">
                    <div class="col__header">
                        <span class="col-header__h2">
                            1st level <span class="blue">Completed</span>

                        </span>
                        <img src="assets/images/icons/col_header_complete.svg" width="30">
                    </div>
                    <div class="col__main">
                        <span class="main__h2 purple">
                            Features
                        </span>
                        <ul class="main__ul">
                            <li><span>Deposit crypto</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Withdraw crypto</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Spot trading</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Copy trading</span><img src="assets/images/icons/ul_error.svg" alt="" width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Futures trading</span><img src="assets/images/icons/ul_error.svg" alt=""
                                    width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>P2P trading</span><img src="assets/images/icons/ul_error.svg" alt="" width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Deposit fiat</span><img src="assets/images/icons/ul_error.svg" alt="" width="20">
                            </li>

                        </ul>
                    </div>
                    <div class="col__footer">
                        <div class="footer__h2">
                            Requirements:
                            <div class="footer_req">
                                <div class="req__item">
                                    <img src="assets/images/icons/footer_book.svg" width="20">
                                    <span class="req__span">
                                        Successful registration
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="wrapper__col">
                <div class="col_content">
                    <div class="col__header">
                        <span class="col-header__h2">
                            2nd level

                        </span>
                        <?php if($user_info['kyc_step'] == 2 || $user_info['kyc_step'] == 3):?>
                            <img src="assets/images/icons/col_header_complete.svg" width="30">
                        <?php else:?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                                <rect width="24" height="24" fill="#1E1E1E" />
                                <g id="Account settings">
                                    <g id="KYC Verification">
                                        <rect width="1024" height="891" transform="translate(-594 -336)" fill="#1E2A37" />
                                        <g id="KYC Verification_2">
                                            <g id="level 2">
                                                <g id="ÑÐ¾Ð½">
                                                    <rect x="-207.5" y="-9" width="250" height="413" rx="4"
                                                          fill="#2A415A" />
                                                    <rect x="-207" y="-8.5" width="249" height="412" rx="3.5"
                                                          stroke="#C0C0C0" stroke-opacity="0.1" />
                                                </g>
                                                <g id="TOP">
                                                    <path
                                                            d="M-207.5 -5C-207.5 -7.20914 -205.709 -9 -203.5 -9H38.5C40.7092 -9 42.5 -7.20914 42.5 -5V33H-207.5V-5Z"
                                                            fill="#243B54" />
                                                    <g id="Ofer">
                                                        <g id="Vector">
                                                            <mask id="path-6-outside-1_1_5836" maskUnits="userSpaceOnUse"
                                                                  x="-4.82843" y="-5.00083" width="33.9411" height="33.9411"
                                                                  fill="black">
                                                                <rect fill="white" x="-4.82843" y="-5.00083" width="33.9411"
                                                                      height="33.9411" />
                                                                <path
                                                                        d="M7.66686 3.84122C7.18546 3.83567 6.70779 3.92639 6.26194 4.10805C5.8161 4.28972 5.41105 4.55867 5.07063 4.8991C4.7302 5.23953 4.46125 5.64457 4.27958 6.09042C4.09791 6.53627 4.00719 7.01393 4.01275 7.49534L4.02689 8.60907L3.23048 9.38604C2.88592 9.72254 2.61213 10.1245 2.42519 10.5684C2.23825 11.0122 2.14195 11.489 2.14195 11.9706C2.14195 12.4522 2.23825 12.929 2.42519 13.3728C2.61213 13.8167 2.88592 14.2187 3.23048 14.5552L4.02601 15.333L4.01363 16.445C4.00807 16.9264 4.09879 17.4041 4.28046 17.8499C4.46213 18.2958 4.73108 18.7008 5.07151 19.0412C5.41194 19.3817 5.81698 19.6506 6.26283 19.8323C6.70868 20.014 7.18634 20.1047 7.66775 20.0991L8.7806 20.0859L9.55756 20.8823C9.89406 21.2268 10.2961 21.5006 10.7399 21.6876C11.1838 21.8745 11.6605 21.9708 12.1421 21.9708C12.6237 21.9708 13.1005 21.8745 13.5444 21.6876C13.9882 21.5006 14.3902 21.2268 14.7267 20.8823L15.5046 20.0867L16.6165 20.0991C17.0979 20.1047 17.5756 20.014 18.0214 19.8323C18.4673 19.6506 18.8723 19.3817 19.2128 19.0412C19.5532 18.7008 19.8221 18.2958 20.0038 17.8499C20.1855 17.4041 20.2762 16.9264 20.2706 16.445L20.2574 15.3321L21.0538 14.5552C21.3983 14.2187 21.6721 13.8167 21.8591 13.3728C22.046 12.929 22.1423 12.4522 22.1423 11.9706C22.1423 11.489 22.046 11.0122 21.8591 10.5684C21.6721 10.1245 21.3983 9.72254 21.0538 9.38604L20.2583 8.60819L20.2706 7.49622C20.2762 7.01482 20.1855 6.53715 20.0038 6.0913C19.8221 5.64546 19.5532 5.24041 19.2128 4.89999C18.8723 4.55956 18.4673 4.29061 18.0214 4.10894C17.5756 3.92727 17.0979 3.83655 16.6165 3.84211L15.5037 3.85537L14.7267 3.05896C14.3902 2.7144 13.9882 2.4406 13.5444 2.25367C13.1005 2.06673 12.6238 1.97043 12.1421 1.97043C11.6605 1.97043 11.1838 2.06673 10.7399 2.25367C10.2961 2.4406 9.89406 2.7144 9.55756 3.05896L8.77971 3.85448L7.66686 3.84122ZM10.8163 9.76082L12.1421 11.0867L13.468 9.76082C13.5852 9.6436 13.7442 9.57775 13.91 9.57775C14.0757 9.57775 14.2347 9.6436 14.3519 9.76082C14.4691 9.87803 14.535 10.037 14.535 10.2028C14.535 10.3685 14.4691 10.5275 14.3519 10.6447L13.0261 11.9706L14.3519 13.2965C14.4691 13.4137 14.535 13.5727 14.535 13.7384C14.535 13.9042 14.4691 14.0632 14.3519 14.1804C14.2347 14.2976 14.0757 14.3635 13.91 14.3635C13.7442 14.3635 13.5852 14.2976 13.468 14.1804L12.1421 12.8545L10.8163 14.1804C10.699 14.2976 10.5401 14.3635 10.3743 14.3635C10.2085 14.3635 10.0496 14.2976 9.93234 14.1804C9.81513 14.0632 9.74928 13.9042 9.74928 13.7384C9.74928 13.5727 9.81513 13.4137 9.93234 13.2965L11.2582 11.9706L9.93234 10.6447C9.81513 10.5275 9.74928 10.3685 9.74928 10.2028C9.74928 10.037 9.81513 9.87803 9.93234 9.76082C10.0496 9.6436 10.2085 9.57775 10.3743 9.57775C10.5401 9.57775 10.699 9.6436 10.8163 9.76082Z" />
                                                            </mask>
                                                            <path
                                                                    d="M7.66686 3.84122C7.18546 3.83567 6.70779 3.92639 6.26194 4.10805C5.8161 4.28972 5.41105 4.55867 5.07063 4.8991C4.7302 5.23953 4.46125 5.64457 4.27958 6.09042C4.09791 6.53627 4.00719 7.01393 4.01275 7.49534L4.02689 8.60907L3.23048 9.38604C2.88592 9.72254 2.61213 10.1245 2.42519 10.5684C2.23825 11.0122 2.14195 11.489 2.14195 11.9706C2.14195 12.4522 2.23825 12.929 2.42519 13.3728C2.61213 13.8167 2.88592 14.2187 3.23048 14.5552L4.02601 15.333L4.01363 16.445C4.00807 16.9264 4.09879 17.4041 4.28046 17.8499C4.46213 18.2958 4.73108 18.7008 5.07151 19.0412C5.41194 19.3817 5.81698 19.6506 6.26283 19.8323C6.70868 20.014 7.18634 20.1047 7.66775 20.0991L8.7806 20.0859L9.55756 20.8823C9.89406 21.2268 10.2961 21.5006 10.7399 21.6876C11.1838 21.8745 11.6605 21.9708 12.1421 21.9708C12.6237 21.9708 13.1005 21.8745 13.5444 21.6876C13.9882 21.5006 14.3902 21.2268 14.7267 20.8823L15.5046 20.0867L16.6165 20.0991C17.0979 20.1047 17.5756 20.014 18.0214 19.8323C18.4673 19.6506 18.8723 19.3817 19.2128 19.0412C19.5532 18.7008 19.8221 18.2958 20.0038 17.8499C20.1855 17.4041 20.2762 16.9264 20.2706 16.445L20.2574 15.3321L21.0538 14.5552C21.3983 14.2187 21.6721 13.8167 21.8591 13.3728C22.046 12.929 22.1423 12.4522 22.1423 11.9706C22.1423 11.489 22.046 11.0122 21.8591 10.5684C21.6721 10.1245 21.3983 9.72254 21.0538 9.38604L20.2583 8.60819L20.2706 7.49622C20.2762 7.01482 20.1855 6.53715 20.0038 6.0913C19.8221 5.64546 19.5532 5.24041 19.2128 4.89999C18.8723 4.55956 18.4673 4.29061 18.0214 4.10894C17.5756 3.92727 17.0979 3.83655 16.6165 3.84211L15.5037 3.85537L14.7267 3.05896C14.3902 2.7144 13.9882 2.4406 13.5444 2.25367C13.1005 2.06673 12.6238 1.97043 12.1421 1.97043C11.6605 1.97043 11.1838 2.06673 10.7399 2.25367C10.2961 2.4406 9.89406 2.7144 9.55756 3.05896L8.77971 3.85448L7.66686 3.84122ZM10.8163 9.76082L12.1421 11.0867L13.468 9.76082C13.5852 9.6436 13.7442 9.57775 13.91 9.57775C14.0757 9.57775 14.2347 9.6436 14.3519 9.76082C14.4691 9.87803 14.535 10.037 14.535 10.2028C14.535 10.3685 14.4691 10.5275 14.3519 10.6447L13.0261 11.9706L14.3519 13.2965C14.4691 13.4137 14.535 13.5727 14.535 13.7384C14.535 13.9042 14.4691 14.0632 14.3519 14.1804C14.2347 14.2976 14.0757 14.3635 13.91 14.3635C13.7442 14.3635 13.5852 14.2976 13.468 14.1804L12.1421 12.8545L10.8163 14.1804C10.699 14.2976 10.5401 14.3635 10.3743 14.3635C10.2085 14.3635 10.0496 14.2976 9.93234 14.1804C9.81513 14.0632 9.74928 13.9042 9.74928 13.7384C9.74928 13.5727 9.81513 13.4137 9.93234 13.2965L11.2582 11.9706L9.93234 10.6447C9.81513 10.5275 9.74928 10.3685 9.74928 10.2028C9.74928 10.037 9.81513 9.87803 9.93234 9.76082C10.0496 9.6436 10.2085 9.57775 10.3743 9.57775C10.5401 9.57775 10.699 9.6436 10.8163 9.76082Z"
                                                                    fill="#FF3030" />
                                                            <path
                                                                    d="M7.66686 3.84122C7.18546 3.83567 6.70779 3.92639 6.26194 4.10805C5.8161 4.28972 5.41105 4.55867 5.07063 4.8991C4.7302 5.23953 4.46125 5.64457 4.27958 6.09042C4.09791 6.53627 4.00719 7.01393 4.01275 7.49534L4.02689 8.60907L3.23048 9.38604C2.88592 9.72254 2.61213 10.1245 2.42519 10.5684C2.23825 11.0122 2.14195 11.489 2.14195 11.9706C2.14195 12.4522 2.23825 12.929 2.42519 13.3728C2.61213 13.8167 2.88592 14.2187 3.23048 14.5552L4.02601 15.333L4.01363 16.445C4.00807 16.9264 4.09879 17.4041 4.28046 17.8499C4.46213 18.2958 4.73108 18.7008 5.07151 19.0412C5.41194 19.3817 5.81698 19.6506 6.26283 19.8323C6.70868 20.014 7.18634 20.1047 7.66775 20.0991L8.7806 20.0859L9.55756 20.8823C9.89406 21.2268 10.2961 21.5006 10.7399 21.6876C11.1838 21.8745 11.6605 21.9708 12.1421 21.9708C12.6237 21.9708 13.1005 21.8745 13.5444 21.6876C13.9882 21.5006 14.3902 21.2268 14.7267 20.8823L15.5046 20.0867L16.6165 20.0991C17.0979 20.1047 17.5756 20.014 18.0214 19.8323C18.4673 19.6506 18.8723 19.3817 19.2128 19.0412C19.5532 18.7008 19.8221 18.2958 20.0038 17.8499C20.1855 17.4041 20.2762 16.9264 20.2706 16.445L20.2574 15.3321L21.0538 14.5552C21.3983 14.2187 21.6721 13.8167 21.8591 13.3728C22.046 12.929 22.1423 12.4522 22.1423 11.9706C22.1423 11.489 22.046 11.0122 21.8591 10.5684C21.6721 10.1245 21.3983 9.72254 21.0538 9.38604L20.2583 8.60819L20.2706 7.49622C20.2762 7.01482 20.1855 6.53715 20.0038 6.0913C19.8221 5.64546 19.5532 5.24041 19.2128 4.89999C18.8723 4.55956 18.4673 4.29061 18.0214 4.10894C17.5756 3.92727 17.0979 3.83655 16.6165 3.84211L15.5037 3.85537L14.7267 3.05896C14.3902 2.7144 13.9882 2.4406 13.5444 2.25367C13.1005 2.06673 12.6238 1.97043 12.1421 1.97043C11.6605 1.97043 11.1838 2.06673 10.7399 2.25367C10.2961 2.4406 9.89406 2.7144 9.55756 3.05896L8.77971 3.85448L7.66686 3.84122ZM10.8163 9.76082L12.1421 11.0867L13.468 9.76082C13.5852 9.6436 13.7442 9.57775 13.91 9.57775C14.0757 9.57775 14.2347 9.6436 14.3519 9.76082C14.4691 9.87803 14.535 10.037 14.535 10.2028C14.535 10.3685 14.4691 10.5275 14.3519 10.6447L13.0261 11.9706L14.3519 13.2965C14.4691 13.4137 14.535 13.5727 14.535 13.7384C14.535 13.9042 14.4691 14.0632 14.3519 14.1804C14.2347 14.2976 14.0757 14.3635 13.91 14.3635C13.7442 14.3635 13.5852 14.2976 13.468 14.1804L12.1421 12.8545L10.8163 14.1804C10.699 14.2976 10.5401 14.3635 10.3743 14.3635C10.2085 14.3635 10.0496 14.2976 9.93234 14.1804C9.81513 14.0632 9.74928 13.9042 9.74928 13.7384C9.74928 13.5727 9.81513 13.4137 9.93234 13.2965L11.2582 11.9706L9.93234 10.6447C9.81513 10.5275 9.74928 10.3685 9.74928 10.2028C9.74928 10.037 9.81513 9.87803 9.93234 9.76082C10.0496 9.6436 10.2085 9.57775 10.3743 9.57775C10.5401 9.57775 10.699 9.6436 10.8163 9.76082Z"
                                                                    stroke="white" stroke-width="3"
                                                                    mask="url(#path-6-outside-1_1_5836)" />
                                                        </g>
                                                    </g>
                                                    <path
                                                            d="M-207 -5C-207 -6.933 -205.433 -8.5 -203.5 -8.5H38.5C40.433 -8.5 42 -6.933 42 -5V32.5H-207V-5Z"
                                                            stroke="#C0C0C0" stroke-opacity="0.1" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        <?php endif;?>
                    </div>
                    <div class="col__main">
                        <span class="main__h2 orange">
                            Features
                        </span>
                        <ul class="main__ul">
                            <li><span>Deposit crypto</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>Withdraw crypto</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>Spot trading</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>Copy trading</span><img src="assets/images/icons/ul_error.svg" alt="" width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Futures trading</span><img src="assets/images/icons/ul_error.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>P2P trading</span><img src="assets/images/icons/ul_error.svg" alt="" width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Deposit fiat</span><img src="assets/images/icons/ul_error.svg" alt="" width="20">
                            </li>

                        </ul>
                    </div>
                    <div class="col__footer">
                        <div class="footer__h2">
                            Requirements:
                            <div class="footer_req">
                                <div class="req__item">
                                    <img src="assets/images/icons/footer_book.svg" width="20">
                                    <span class="req__span">
                                        Government-issued ID
                                    </span>
                                </div>
                                <div class="req__item">
                                    <img src="assets/images/icons/footer_book.svg" width="20">
                                    <span class="req__span">
                                        Facial recognition (selfie)
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php if(check_kyc_verif(2) ):?>
                    <div class="blue_button kyc low-opacity">
                        <img src="assets/images/icons/upload_kyc.svg" alt="">
                        <span>Your data is being verified</span>
                    </div>
                <?php  elseif($user_info['kyc_step'] == 2 || $user_info['kyc_step'] == 3): ?>
                    <div class="blue_button kyc low-opacity">
                        <span>Passed</span>
                    </div>

                <?php else:?>
                <form id="upload-form"  method="post" enctype="multipart/form-data">
                    <label  id="label_upload" for="file-upload">
                        <div class="blue_button kyc" id="uploadButton">
                            <img src="assets/images/icons/upload_kyc.svg" alt="">
                            <span>Upgrade</span>
                            <input type="hidden" value="2" name="kyc_step">
                            <input type="file"  name="kyc_images[]" accept="image/*" multiple="true" style="display: none" id="file-upload">
                        </div>
                    </label>
                    <input type="file" style="display: none" name="kyc_images[]" id="file-upload" accept="image/*" class="custom-file-input">
                </form>
                <?php endif;?>
                <?php if($lastKycApp['status'] == -1):?>

                        <p style="margin-top: 10px; padding: 10px; text-align: center">Your KYC lvl 2nd application form dated <?=$lastKycApp['date']?> has not been verified. Apply again or contact support. </p>

                <?php endif;?>
            </div>
            <div class="wrapper__col">
                <div class="col_content">
                    <div class="col__header">
                        <span class="col-header__h2">
                            3rd level

                        </span>
                        <?php if($user_info['kyc_step'] == 3):?>
                            <img src="assets/images/icons/col_header_complete.svg" width="30">
                        <?php else:?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                                <rect width="24" height="24" fill="#1E1E1E" />
                                <g id="Account settings">
                                    <g id="KYC Verification">
                                        <rect width="1024" height="891" transform="translate(-594 -336)" fill="#1E2A37" />
                                        <g id="KYC Verification_2">
                                            <g id="level 2">
                                                <g id="ÑÐ¾Ð½">
                                                    <rect x="-207.5" y="-9" width="250" height="413" rx="4"
                                                          fill="#2A415A" />
                                                    <rect x="-207" y="-8.5" width="249" height="412" rx="3.5"
                                                          stroke="#C0C0C0" stroke-opacity="0.1" />
                                                </g>
                                                <g id="TOP">
                                                    <path
                                                            d="M-207.5 -5C-207.5 -7.20914 -205.709 -9 -203.5 -9H38.5C40.7092 -9 42.5 -7.20914 42.5 -5V33H-207.5V-5Z"
                                                            fill="#243B54" />
                                                    <g id="Ofer">
                                                        <g id="Vector">
                                                            <mask id="path-6-outside-1_1_5836" maskUnits="userSpaceOnUse"
                                                                  x="-4.82843" y="-5.00083" width="33.9411" height="33.9411"
                                                                  fill="black">
                                                                <rect fill="white" x="-4.82843" y="-5.00083" width="33.9411"
                                                                      height="33.9411" />
                                                                <path
                                                                        d="M7.66686 3.84122C7.18546 3.83567 6.70779 3.92639 6.26194 4.10805C5.8161 4.28972 5.41105 4.55867 5.07063 4.8991C4.7302 5.23953 4.46125 5.64457 4.27958 6.09042C4.09791 6.53627 4.00719 7.01393 4.01275 7.49534L4.02689 8.60907L3.23048 9.38604C2.88592 9.72254 2.61213 10.1245 2.42519 10.5684C2.23825 11.0122 2.14195 11.489 2.14195 11.9706C2.14195 12.4522 2.23825 12.929 2.42519 13.3728C2.61213 13.8167 2.88592 14.2187 3.23048 14.5552L4.02601 15.333L4.01363 16.445C4.00807 16.9264 4.09879 17.4041 4.28046 17.8499C4.46213 18.2958 4.73108 18.7008 5.07151 19.0412C5.41194 19.3817 5.81698 19.6506 6.26283 19.8323C6.70868 20.014 7.18634 20.1047 7.66775 20.0991L8.7806 20.0859L9.55756 20.8823C9.89406 21.2268 10.2961 21.5006 10.7399 21.6876C11.1838 21.8745 11.6605 21.9708 12.1421 21.9708C12.6237 21.9708 13.1005 21.8745 13.5444 21.6876C13.9882 21.5006 14.3902 21.2268 14.7267 20.8823L15.5046 20.0867L16.6165 20.0991C17.0979 20.1047 17.5756 20.014 18.0214 19.8323C18.4673 19.6506 18.8723 19.3817 19.2128 19.0412C19.5532 18.7008 19.8221 18.2958 20.0038 17.8499C20.1855 17.4041 20.2762 16.9264 20.2706 16.445L20.2574 15.3321L21.0538 14.5552C21.3983 14.2187 21.6721 13.8167 21.8591 13.3728C22.046 12.929 22.1423 12.4522 22.1423 11.9706C22.1423 11.489 22.046 11.0122 21.8591 10.5684C21.6721 10.1245 21.3983 9.72254 21.0538 9.38604L20.2583 8.60819L20.2706 7.49622C20.2762 7.01482 20.1855 6.53715 20.0038 6.0913C19.8221 5.64546 19.5532 5.24041 19.2128 4.89999C18.8723 4.55956 18.4673 4.29061 18.0214 4.10894C17.5756 3.92727 17.0979 3.83655 16.6165 3.84211L15.5037 3.85537L14.7267 3.05896C14.3902 2.7144 13.9882 2.4406 13.5444 2.25367C13.1005 2.06673 12.6238 1.97043 12.1421 1.97043C11.6605 1.97043 11.1838 2.06673 10.7399 2.25367C10.2961 2.4406 9.89406 2.7144 9.55756 3.05896L8.77971 3.85448L7.66686 3.84122ZM10.8163 9.76082L12.1421 11.0867L13.468 9.76082C13.5852 9.6436 13.7442 9.57775 13.91 9.57775C14.0757 9.57775 14.2347 9.6436 14.3519 9.76082C14.4691 9.87803 14.535 10.037 14.535 10.2028C14.535 10.3685 14.4691 10.5275 14.3519 10.6447L13.0261 11.9706L14.3519 13.2965C14.4691 13.4137 14.535 13.5727 14.535 13.7384C14.535 13.9042 14.4691 14.0632 14.3519 14.1804C14.2347 14.2976 14.0757 14.3635 13.91 14.3635C13.7442 14.3635 13.5852 14.2976 13.468 14.1804L12.1421 12.8545L10.8163 14.1804C10.699 14.2976 10.5401 14.3635 10.3743 14.3635C10.2085 14.3635 10.0496 14.2976 9.93234 14.1804C9.81513 14.0632 9.74928 13.9042 9.74928 13.7384C9.74928 13.5727 9.81513 13.4137 9.93234 13.2965L11.2582 11.9706L9.93234 10.6447C9.81513 10.5275 9.74928 10.3685 9.74928 10.2028C9.74928 10.037 9.81513 9.87803 9.93234 9.76082C10.0496 9.6436 10.2085 9.57775 10.3743 9.57775C10.5401 9.57775 10.699 9.6436 10.8163 9.76082Z" />
                                                            </mask>
                                                            <path
                                                                    d="M7.66686 3.84122C7.18546 3.83567 6.70779 3.92639 6.26194 4.10805C5.8161 4.28972 5.41105 4.55867 5.07063 4.8991C4.7302 5.23953 4.46125 5.64457 4.27958 6.09042C4.09791 6.53627 4.00719 7.01393 4.01275 7.49534L4.02689 8.60907L3.23048 9.38604C2.88592 9.72254 2.61213 10.1245 2.42519 10.5684C2.23825 11.0122 2.14195 11.489 2.14195 11.9706C2.14195 12.4522 2.23825 12.929 2.42519 13.3728C2.61213 13.8167 2.88592 14.2187 3.23048 14.5552L4.02601 15.333L4.01363 16.445C4.00807 16.9264 4.09879 17.4041 4.28046 17.8499C4.46213 18.2958 4.73108 18.7008 5.07151 19.0412C5.41194 19.3817 5.81698 19.6506 6.26283 19.8323C6.70868 20.014 7.18634 20.1047 7.66775 20.0991L8.7806 20.0859L9.55756 20.8823C9.89406 21.2268 10.2961 21.5006 10.7399 21.6876C11.1838 21.8745 11.6605 21.9708 12.1421 21.9708C12.6237 21.9708 13.1005 21.8745 13.5444 21.6876C13.9882 21.5006 14.3902 21.2268 14.7267 20.8823L15.5046 20.0867L16.6165 20.0991C17.0979 20.1047 17.5756 20.014 18.0214 19.8323C18.4673 19.6506 18.8723 19.3817 19.2128 19.0412C19.5532 18.7008 19.8221 18.2958 20.0038 17.8499C20.1855 17.4041 20.2762 16.9264 20.2706 16.445L20.2574 15.3321L21.0538 14.5552C21.3983 14.2187 21.6721 13.8167 21.8591 13.3728C22.046 12.929 22.1423 12.4522 22.1423 11.9706C22.1423 11.489 22.046 11.0122 21.8591 10.5684C21.6721 10.1245 21.3983 9.72254 21.0538 9.38604L20.2583 8.60819L20.2706 7.49622C20.2762 7.01482 20.1855 6.53715 20.0038 6.0913C19.8221 5.64546 19.5532 5.24041 19.2128 4.89999C18.8723 4.55956 18.4673 4.29061 18.0214 4.10894C17.5756 3.92727 17.0979 3.83655 16.6165 3.84211L15.5037 3.85537L14.7267 3.05896C14.3902 2.7144 13.9882 2.4406 13.5444 2.25367C13.1005 2.06673 12.6238 1.97043 12.1421 1.97043C11.6605 1.97043 11.1838 2.06673 10.7399 2.25367C10.2961 2.4406 9.89406 2.7144 9.55756 3.05896L8.77971 3.85448L7.66686 3.84122ZM10.8163 9.76082L12.1421 11.0867L13.468 9.76082C13.5852 9.6436 13.7442 9.57775 13.91 9.57775C14.0757 9.57775 14.2347 9.6436 14.3519 9.76082C14.4691 9.87803 14.535 10.037 14.535 10.2028C14.535 10.3685 14.4691 10.5275 14.3519 10.6447L13.0261 11.9706L14.3519 13.2965C14.4691 13.4137 14.535 13.5727 14.535 13.7384C14.535 13.9042 14.4691 14.0632 14.3519 14.1804C14.2347 14.2976 14.0757 14.3635 13.91 14.3635C13.7442 14.3635 13.5852 14.2976 13.468 14.1804L12.1421 12.8545L10.8163 14.1804C10.699 14.2976 10.5401 14.3635 10.3743 14.3635C10.2085 14.3635 10.0496 14.2976 9.93234 14.1804C9.81513 14.0632 9.74928 13.9042 9.74928 13.7384C9.74928 13.5727 9.81513 13.4137 9.93234 13.2965L11.2582 11.9706L9.93234 10.6447C9.81513 10.5275 9.74928 10.3685 9.74928 10.2028C9.74928 10.037 9.81513 9.87803 9.93234 9.76082C10.0496 9.6436 10.2085 9.57775 10.3743 9.57775C10.5401 9.57775 10.699 9.6436 10.8163 9.76082Z"
                                                                    fill="#FF3030" />
                                                            <path
                                                                    d="M7.66686 3.84122C7.18546 3.83567 6.70779 3.92639 6.26194 4.10805C5.8161 4.28972 5.41105 4.55867 5.07063 4.8991C4.7302 5.23953 4.46125 5.64457 4.27958 6.09042C4.09791 6.53627 4.00719 7.01393 4.01275 7.49534L4.02689 8.60907L3.23048 9.38604C2.88592 9.72254 2.61213 10.1245 2.42519 10.5684C2.23825 11.0122 2.14195 11.489 2.14195 11.9706C2.14195 12.4522 2.23825 12.929 2.42519 13.3728C2.61213 13.8167 2.88592 14.2187 3.23048 14.5552L4.02601 15.333L4.01363 16.445C4.00807 16.9264 4.09879 17.4041 4.28046 17.8499C4.46213 18.2958 4.73108 18.7008 5.07151 19.0412C5.41194 19.3817 5.81698 19.6506 6.26283 19.8323C6.70868 20.014 7.18634 20.1047 7.66775 20.0991L8.7806 20.0859L9.55756 20.8823C9.89406 21.2268 10.2961 21.5006 10.7399 21.6876C11.1838 21.8745 11.6605 21.9708 12.1421 21.9708C12.6237 21.9708 13.1005 21.8745 13.5444 21.6876C13.9882 21.5006 14.3902 21.2268 14.7267 20.8823L15.5046 20.0867L16.6165 20.0991C17.0979 20.1047 17.5756 20.014 18.0214 19.8323C18.4673 19.6506 18.8723 19.3817 19.2128 19.0412C19.5532 18.7008 19.8221 18.2958 20.0038 17.8499C20.1855 17.4041 20.2762 16.9264 20.2706 16.445L20.2574 15.3321L21.0538 14.5552C21.3983 14.2187 21.6721 13.8167 21.8591 13.3728C22.046 12.929 22.1423 12.4522 22.1423 11.9706C22.1423 11.489 22.046 11.0122 21.8591 10.5684C21.6721 10.1245 21.3983 9.72254 21.0538 9.38604L20.2583 8.60819L20.2706 7.49622C20.2762 7.01482 20.1855 6.53715 20.0038 6.0913C19.8221 5.64546 19.5532 5.24041 19.2128 4.89999C18.8723 4.55956 18.4673 4.29061 18.0214 4.10894C17.5756 3.92727 17.0979 3.83655 16.6165 3.84211L15.5037 3.85537L14.7267 3.05896C14.3902 2.7144 13.9882 2.4406 13.5444 2.25367C13.1005 2.06673 12.6238 1.97043 12.1421 1.97043C11.6605 1.97043 11.1838 2.06673 10.7399 2.25367C10.2961 2.4406 9.89406 2.7144 9.55756 3.05896L8.77971 3.85448L7.66686 3.84122ZM10.8163 9.76082L12.1421 11.0867L13.468 9.76082C13.5852 9.6436 13.7442 9.57775 13.91 9.57775C14.0757 9.57775 14.2347 9.6436 14.3519 9.76082C14.4691 9.87803 14.535 10.037 14.535 10.2028C14.535 10.3685 14.4691 10.5275 14.3519 10.6447L13.0261 11.9706L14.3519 13.2965C14.4691 13.4137 14.535 13.5727 14.535 13.7384C14.535 13.9042 14.4691 14.0632 14.3519 14.1804C14.2347 14.2976 14.0757 14.3635 13.91 14.3635C13.7442 14.3635 13.5852 14.2976 13.468 14.1804L12.1421 12.8545L10.8163 14.1804C10.699 14.2976 10.5401 14.3635 10.3743 14.3635C10.2085 14.3635 10.0496 14.2976 9.93234 14.1804C9.81513 14.0632 9.74928 13.9042 9.74928 13.7384C9.74928 13.5727 9.81513 13.4137 9.93234 13.2965L11.2582 11.9706L9.93234 10.6447C9.81513 10.5275 9.74928 10.3685 9.74928 10.2028C9.74928 10.037 9.81513 9.87803 9.93234 9.76082C10.0496 9.6436 10.2085 9.57775 10.3743 9.57775C10.5401 9.57775 10.699 9.6436 10.8163 9.76082Z"
                                                                    stroke="white" stroke-width="3"
                                                                    mask="url(#path-6-outside-1_1_5836)" />
                                                        </g>
                                                    </g>
                                                    <path
                                                            d="M-207 -5C-207 -6.933 -205.433 -8.5 -203.5 -8.5H38.5C40.433 -8.5 42 -6.933 42 -5V32.5H-207V-5Z"
                                                            stroke="#C0C0C0" stroke-opacity="0.1" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        <?php endif;?>
                    </div>
                    <div class="col__main">
                        <span class="main__h2 pink">
                            Features
                        </span>
                        <ul class="main__ul">
                            <li><span>Deposit crypto</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>Withdraw crypto</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>Spot trading</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>Copy trading</span><img src="assets/images/icons/ul_success.svg" alt="" width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Futures trading</span><img src="assets/images/icons/ul_success.svg" alt=""
                                    width="20"></li>
                            <li class="line_dotted"></li>
                            <li><span>P2P trading</span><img src="assets/images/icons/ul_success.svg" alt="" width="20">
                            </li>
                            <li class="line_dotted"></li>
                            <li><span>Deposit fiat</span><img src="assets/images/icons/ul_success.svg" alt="" width="20">
                            </li>

                        </ul>
                    </div>
                    <div class="col__footer">
                        <div class="footer__h2">
                            Requirements:
                            <div class="footer_req">
                                <div class="req__item">
                                    <img src="assets/images/icons/footer_book.svg" width="20">
                                    <span class="req__span">
                                        Proof of address
                                    </span>
                                </div>
                                <div class="req__item">
                                    <img src="assets/images/icons/footer_book.svg" width="20">
                                    <span class="req__span">
                                        Total balance ≥ 10,000 USD
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(check_kyc_verif(3)): ?>
                    <div class="blue_button kyc low-opacity">

                        <span>Your data is being verified</span>
                    </div>
                <?php elseif($user_info['kyc_step'] < 2): ?>
                    <div class="blue_button kyc low-opacity">

                        <span>pass 2nd level KYC</span>
                    </div>
                <?php elseif(get_total_balance() < 10000):?>
                    <div class="blue_button kyc low-opacity">

                        <span>Your balance is less than 10,000 USD</span>
                    </div>

                <?php  elseif($user_info['kyc_step'] == 3): ?>
                    <div class="blue_button kyc low-opacity">
                        <span>Passed</span>
                    </div>
                <?php else:?>
                    <form id="upload-form" method="post" enctype="multipart/form-data">
                        <label  id="label_upload" for="file-upload">
                            <div class="blue_button kyc" id="uploadButton">
                                <img src="assets/images/icons/upload_kyc.svg" alt="">
                                <input type="hidden" value="3" name="kyc_step">
                                <span>Upgrade</span>
                                <input type="file"  name="kyc_images[]" accept="image/*" multiple="true" style="display: none" id="file-upload">
                            </div>
                        </label>
                        <input type="file" style="display: none" name="kyc_images[]" id="file-upload" accept="image/*" class="custom-file-input">
                    </form>
                <?php endif;?>
            </div>

        </div>
    </main>
    <div class="mobile_settings">
        <ul>
            <li class="active">
                <a settings.html"><img src="assets/images/icons/settings.svg" alt="" width="30" height="30">
                    <span>Account settings</span></a>
            </li>
            <li><a settings_password.html"><img src="assets/images/icons/password_profile.svg" alt="" width="30" height="30">
                <span>Password</span></a></li>
            <li><a settings_2fa.html"><img src="assets/images/icons/password_account_profile.svg" alt="" width="30" height="30">
                <span>2FA Auth</span></a></li>
            <li><a href=""><img src="assets/images/icons/mobile_menu.svg" alt="" width="30" height="30">
                <span>Menu</span></a></li>
        </ul>
    </div>
</body>
<script src="assets/scripts/main.js"></script>
<script>
    var uploadForm = $('#upload-form');
    var avatarInput = $('#file-upload');
    avatarInput.on('change', function() {

        uploadForm.submit();
    });
    uploadForm.on('submit', (e) => {
        e.preventDefault();


        var formData = new FormData(uploadForm[0]);

        $.ajax({
            url: '/api/ajax/kyc_documents_upload.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status == "success") {
                    new Notify({
                        title: 'Success',
                        text: 'Your data has been successfully accepted. Please expect.',
                        status: 'success',
                        autoclose: true,
                        autotimeout: 3000
                    })
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                } else {
                    console.log(response);
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

</script>

</html>