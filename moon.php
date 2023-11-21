
<?php

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title ><?=$domain_titleINIT?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css" />
    <link rel="stylesheet" href="assets/styles/output.css" />
    <link rel="stylesheet" href="assets/styles/checkbox.css" />
    <link rel="stylesheet" href="assets/styles/animated-accordion-2.css" />
    <link rel="stylesheet" href="assets/fonts/stylesheet.css" />
    <link rel="stylesheet" href="assets/styles/jvectormap-2.0.5.css" />
    <link href="assets/styles/itc-slider.css" rel="stylesheet" />
</head>
<style>
    .box-header_travellar p{
        color: rgba(255, 255, 255, 0.70) !important;
font-family: Roboto;
font-size: 18px !important;
font-style: normal;
font-weight: 400 !important;
line-height: 29px !important; /* 161.111% */ 
    }
</style>
<body>
    <?=render_header()?>
    <main class="mb-96 p-0">
        <section class="box-header_travellar  moon">
            <div class="box_header_content">
                <div>
                    <h3 class=" mb-4 ">
                        To the moon <br>
                        with <span ><?=$domain_titleINIT?></span>
                    </h3>
                </div>
                <div>
                    <p class=" ">
                        Get your trading volume to 1M+ USD with our<br>
                        Trading competition
                    </p>
                </div>
                <div class="block__button w-80">
                    <a href="" class="btn w-44">Apply to list</a>
                </div>
            </div>

        </section>
        <section class="supercharge-box_moon bg-transparent">
            <h3 class=" mb-2">Why will your <?=$domain_titleINIT?> skyrocket?</h3>
            <p class="text-white mb-16">You will get the most complete solution in the market, which will help you to
                grow.</p>
            <div class="supercharge__elements">
                <div class="supercharge_el supercharge_el_moon sky_rocket ">
                    <div class="p-5 skyrocket_icons bg_light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                            <path
                                d="M20.6243 34.3566C27.9881 34.3566 33.9577 28.3871 33.9577 21.0233C33.9577 13.6595 27.9881 7.68994 20.6243 7.68994C13.2605 7.68994 7.29102 13.6595 7.29102 21.0233C7.29102 28.3871 13.2605 34.3566 20.6243 34.3566Z"
                                stroke="white" stroke-opacity="0.6" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.29102 21.0234H33.9577" stroke="white" stroke-opacity="0.6" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M20.6243 7.68994C23.9594 11.3411 25.8547 16.0793 25.9577 21.0233C25.8547 25.9672 23.9594 30.7055 20.6243 34.3566C17.2893 30.7055 15.394 25.9672 15.291 21.0233C15.394 16.0793 17.2893 11.3411 20.6243 7.68994Z"
                                stroke="white" stroke-opacity="0.6" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="font-bold">3 million users</span>
                    <span class="text-gray-400 ">At the moment, our <br>
                        exchange has more than 3
                        million registered users from
                        more than 150 countries & <br>
                        we continue to grow.</span>
                </div>
                <div class="supercharge_el sky_rocket">
                    <div class="p-5 skyrocket_icons bg_light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                            <path
                                d="M20.2183 6.59716C20.595 6.26839 21.1566 6.26839 21.5333 6.59716L25.1856 9.78459C25.3502 9.92826 25.5573 10.0141 25.7753 10.0289L30.6117 10.3575C31.1105 10.3914 31.5077 10.7886 31.5416 11.2874L31.8702 16.1238C31.885 16.3418 31.9708 16.5489 32.1145 16.7135L35.3019 20.3658C35.6307 20.7425 35.6307 21.3041 35.3019 21.6808L32.1145 25.3331C31.9708 25.4977 31.885 25.7048 31.8702 25.9228L31.5416 30.7592C31.5077 31.258 31.1105 31.6552 30.6117 31.6891L25.7753 32.0177C25.5573 32.0325 25.3502 32.1183 25.1856 32.262L21.5333 35.4494C21.1566 35.7782 20.595 35.7782 20.2183 35.4494L16.566 32.262C16.4014 32.1183 16.1943 32.0325 15.9763 32.0177L11.1399 31.6891C10.6411 31.6552 10.244 31.258 10.2101 30.7592L9.88141 25.9228C9.8666 25.7048 9.7808 25.4977 9.63713 25.3331L6.4497 21.6808C6.12093 21.3041 6.12093 20.7425 6.4497 20.3658L9.63713 16.7135C9.7808 16.5489 9.8666 16.3418 9.88141 16.1238L10.2101 11.2874C10.244 10.7886 10.6411 10.3914 11.1399 10.3575L15.9763 10.0289C16.1943 10.0141 16.4014 9.92826 16.566 9.78459L20.2183 6.59716Z"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" />
                            <path d="M17.125 21.0234L19.625 23.5234L24.625 18.5234" stroke="white" stroke-opacity="0.6"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div><span class="font-bold">Friendly Identity <br>
                        verification policy</span><span class="text-gray-400">Users can trade and make
                        unlimited deposits and
                        withdrawals in any digital br
                        asset.</span>

                </div>
                <div class="supercharge_el sky_rocket">
                    <div class="p-5 skyrocket_icons bg_light">
                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.125 18.5234C23.2316 18.5234 25.75 16.005 25.75 12.8984C25.75 9.79184 23.2316 7.27344 20.125 7.27344C17.0184 7.27344 14.5 9.79184 14.5 12.8984C14.5 16.005 17.0184 18.5234 20.125 18.5234Z"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" />
                            <path
                                d="M10.125 34.7734C10.125 29.2178 12.625 22.2734 20.125 22.2734C27.625 22.2734 30.125 29.2178 30.125 34.7734"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </div><span class="font-bold">Personal manager</span><span class="text-gray-400">Your <?=$domain_titleINIT?>
                        Relations
                        manager will make sure to
                        answer all your questions
                        and solve any issues 24/7.</span>

                </div>
                <div class="supercharge_el sky_rocket">
                    <div class="p-5 skyrocket_icons bg_light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                            <path
                                d="M33.125 13.5234H7.625C7.07272 13.5234 6.625 13.9712 6.625 14.5234V33.7734C6.625 34.3257 7.07272 34.7734 7.625 34.7734H33.125C33.6773 34.7734 34.125 34.3257 34.125 33.7734V14.5234C34.125 13.9712 33.6773 13.5234 33.125 13.5234Z"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" />
                            <path
                                d="M6.625 24.7734V8.27344C6.625 7.72116 7.07272 7.27344 7.625 7.27344H28.125C28.6773 7.27344 29.125 7.72116 29.125 8.27344V13.5234"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" />
                            <path
                                d="M32.875 27.2734H27.375C26.2704 27.2734 25.375 26.378 25.375 25.2734V21.7734C25.375 20.6688 26.2704 19.7734 27.375 19.7734H32.875"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" />
                            <path d="M15.375 13.5234H7.625C7.07272 13.5234 6.625 13.0757 6.625 12.5234V11.0234"
                                stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div><span class="font-bold">Fiat gateway</span><span class="text-gray-400">Our users can withdraw
                        national currency (such as
                        USD, EUR, UAH) to their Visa
                        and MasterCard in just two <br>
                        clicks.</span>

                </div>
            </div>
        </section>
        <section class="grid justify-center">
            <h2 class="coverage_h2 text-center">Coverage</h2>
            <div id="moon_map" class="moon_map">

            </div>
        </section>
        <section class="flex justify-center">
            <div class="p-10 ">
                <div class="map_static">
                    <div class="map_static_el">
                        <p>Europe</p>
                        <h3>36%</h3>
                    </div>
                    <div class="map_static_el">
                        <p>Europe</p>
                        <h3>36%</h3>
                    </div>
                    <div class="map_static_el">
                        <p>Europe</p>
                        <h3>36%</h3>
                    </div>
                    <div class="map_static_el">
                        <p>Europe</p>
                        <h3>36%</h3>
                    </div>
                    <div class="map_static_el_plug"></div>

                    <div class="map_static_el">
                        <p>Europe</p>
                        <h3>36%</h3>
                    </div>
                    <div class="map_static_el">
                        <p>Europe</p>
                        <h3>36%</h3>
                    </div>
                </div>

            </div>
        </section>
        <section class="flex partners_feedback_moon justify-center ">
            <h3 class="coverage_h2">Partners feedback</h3>
            <div class="partners_feedback">
                <div class="partners_feedback_el">
                    <div class="partners_feedback_el_head">
                        <img src="assets/images/avatar_dria.png" alt="">
                        <span>Dash</span>
                    </div>
                    <div class="partners_feedback_content">
                        <p>
                            In the time I have been working with <?=$domain_titleINIT?> I
                            have found that the only thing that matches
                            their high quality of their platform is their high
                            quality team. When we are not in an active
                            <?=$domain_titleINIT?>, we are always planning one. When it
                            came to recognizing their platform in the high
                            user experience for our Dash community, it was
                            a no brainer for me.
                        </p>
                    </div>
                    <div class="partners_feedback_footer">
                        <span>Omar Hamwi</span>
                        <p>Dash Business Development Manager</p>
                    </div>
                </div>
                <div class="partners_feedback_el">
                    <div class="partners_feedback_el_head">
                        <img src="assets/images/avatar_dria.png" alt="">
                        <span>Dash</span>
                    </div>
                    <div class="partners_feedback_content">
                        <p>
                            In the time I have been working with <?=$domain_titleINIT?> I
                            have found that the only thing that matches
                            their high quality of their platform is their high
                            quality team. When we are not in an active
                            <?=$domain_titleINIT?>, we are always planning one. When it
                            came to recognizing their platform in the high
                            user experience for our Dash community, it was
                            a no brainer for me.
                        </p>
                    </div>
                    <div class="partners_feedback_footer">
                        <span>Omar Hamwi</span>
                        <p>Dash Business Development Manager</p>
                    </div>
                </div>
                <div class="partners_feedback_el">
                    <div class="partners_feedback_el_head">
                        <img src="assets/images/avatar_dria.png" alt="">
                        <span>Dash</span>
                    </div>
                    <div class="partners_feedback_content">
                        <p>
                            In the time I have been working with <?=$domain_titleINIT?> I
                            have found that the only thing that matches
                            their high quality of their platform is their high
                            quality team. When we are not in an active
                            <?=$domain_titleINIT?>, we are always planning one. When it
                            came to recognizing their platform in the high
                            user experience for our Dash community, it was
                            a no brainer for me.
                        </p>
                    </div>
                    <div class="partners_feedback_footer">
                        <span>Omar Hamwi</span>
                        <p>Dash Business Development Manager</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="fast_listing">
            <div>
                <h3>Fast listing in 48 hours</h3>
                <p>We can list your <?=$domain_titleINIT?> on our exchange within 48 hours</p>
                <a href="#" class="btn">Fast listing</a>
            </div>
        </section>
        <section class="unseccessful">
            <h2 class=" text-center">Ever had an unsuccessful listing experience?</h2>
            <div class="unseccessful_elements">
                <div class="unseccessful_el">
                    <div class="unseccessful_el_bl1 br-left bg_dark_blue">
                        <span class="unseccessful_el_tag_red">
                            <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M24 5C34.4934 5 43 13.5066 43 24C43 34.4934 34.4934 43 24 43C13.5066 43 5 34.4934 5 24C5 13.5066 13.5066 5 24 5ZM36.518 13.2502L13.2502 36.518C16.1377 39 19.8937 40.5 24 40.5C33.1127 40.5 40.5 33.1127 40.5 24C40.5 19.8937 39 16.1377 36.518 13.2502ZM24 7.5C14.8873 7.5 7.5 14.8873 7.5 24C7.5 28.1063 9.00002 31.8623 11.482 34.7498L34.7498 11.482C31.8623 9.00002 28.1063 7.5 24 7.5Z"
                                        fill="#212121"></path>
                                </g>
                            </svg>
                        </span>
                        <span>We didnt make any money</span>
                    </div>
                    <div class="unseccessful_el_bl1 br-right bg_light">
                        <span class="unseccessful_el_tag_success">
                            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 36 36" version="1.1"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>success-line</title>
                                    <path class="clr-i-outline clr-i-outline-path-1"
                                        d="M13.72,27.69,3.29,17.27a1,1,0,0,1,1.41-1.41l9,9L31.29,7.29a1,1,0,0,1,1.41,1.41Z">
                                    </path>
                                    <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                                </g>
                            </svg>
                        </span>
                        <span>We do a marketing audit before listing, analyze your <br>
                            marketing strategy, and build an improvement plan to<br>
                            get the best results.</span>
                    </div>
                </div>
                <div class="unseccessful_el">
                    <div class="unseccessful_el_bl1 br-left bg_dark_blue">
                        <span class="unseccessful_el_tag_red">
                            <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M24 5C34.4934 5 43 13.5066 43 24C43 34.4934 34.4934 43 24 43C13.5066 43 5 34.4934 5 24C5 13.5066 13.5066 5 24 5ZM36.518 13.2502L13.2502 36.518C16.1377 39 19.8937 40.5 24 40.5C33.1127 40.5 40.5 33.1127 40.5 24C40.5 19.8937 39 16.1377 36.518 13.2502ZM24 7.5C14.8873 7.5 7.5 14.8873 7.5 24C7.5 28.1063 9.00002 31.8623 11.482 34.7498L34.7498 11.482C31.8623 9.00002 28.1063 7.5 24 7.5Z"
                                        fill="#212121"></path>
                                </g>
                            </svg>
                        </span>
                        <span>There were no trades</span>
                    </div>
                    <div class="unseccessful_el_bl1 br-right bg_light">
                        <span class="unseccessful_el_tag_success">
                            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 36 36" version="1.1"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>success-line</title>
                                    <path class="clr-i-outline clr-i-outline-path-1"
                                        d="M13.72,27.69,3.29,17.27a1,1,0,0,1,1.41-1.41l9,9L31.29,7.29a1,1,0,0,1,1.41,1.41Z">
                                    </path>
                                    <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                                </g>
                            </svg>
                        </span>
                        <span>Our big community from different countries will give<br>
                            your asset a chance to grow.</span>
                    </div>
                </div>
                <div class="unseccessful_el">
                    <div class="unseccessful_el_bl1 br-left bg_dark_blue">
                        <span class="unseccessful_el_tag_red">
                            <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M24 5C34.4934 5 43 13.5066 43 24C43 34.4934 34.4934 43 24 43C13.5066 43 5 34.4934 5 24C5 13.5066 13.5066 5 24 5ZM36.518 13.2502L13.2502 36.518C16.1377 39 19.8937 40.5 24 40.5C33.1127 40.5 40.5 33.1127 40.5 24C40.5 19.8937 39 16.1377 36.518 13.2502ZM24 7.5C14.8873 7.5 7.5 14.8873 7.5 24C7.5 28.1063 9.00002 31.8623 11.482 34.7498L34.7498 11.482C31.8623 9.00002 28.1063 7.5 24 7.5Z"
                                        fill="#212121"></path>
                                </g>
                            </svg>
                        </span>
                        <span>There were no users</span>
                    </div>
                    <div class="unseccessful_el_bl1 br-right bg_light">
                        <span class="unseccessful_el_tag_success">
                            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 36 36" version="1.1"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>success-line</title>
                                    <path class="clr-i-outline clr-i-outline-path-1"
                                        d="M13.72,27.69,3.29,17.27a1,1,0,0,1,1.41-1.41l9,9L31.29,7.29a1,1,0,0,1,1.41,1.41Z">
                                    </path>
                                    <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                                </g>
                            </svg>
                        </span>
                        <span>We always attract new users with our activities and <br>
                            events.</span>
                    </div>
                </div>
                <div class="unseccessful_el">
                    <div class="unseccessful_el_bl1 br-left bg_dark_blue">
                        <span class="unseccessful_el_tag_red">
                            <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M24 5C34.4934 5 43 13.5066 43 24C43 34.4934 34.4934 43 24 43C13.5066 43 5 34.4934 5 24C5 13.5066 13.5066 5 24 5ZM36.518 13.2502L13.2502 36.518C16.1377 39 19.8937 40.5 24 40.5C33.1127 40.5 40.5 33.1127 40.5 24C40.5 19.8937 39 16.1377 36.518 13.2502ZM24 7.5C14.8873 7.5 7.5 14.8873 7.5 24C7.5 28.1063 9.00002 31.8623 11.482 34.7498L34.7498 11.482C31.8623 9.00002 28.1063 7.5 24 7.5Z"
                                        fill="#212121"></path>
                                </g>
                            </svg>
                        </span>
                        <span>The service was bad</span>
                    </div>
                    <div class="unseccessful_el_bl1 br-right bg_light">
                        <span class="unseccessful_el_tag_success">
                            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 36 36" version="1.1"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>success-line</title>
                                    <path class="clr-i-outline clr-i-outline-path-1"
                                        d="M13.72,27.69,3.29,17.27a1,1,0,0,1,1.41-1.41l9,9L31.29,7.29a1,1,0,0,1,1.41,1.41Z">
                                    </path>
                                    <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                                </g>
                            </svg>
                        </span>
                        <span>Our managers are ready to help you with any question <br>
                            or issue whenever you need it.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="cooperation">
            <div class="cooperation-info">
                <h2>Let's start cooperation</h2>
                <p>We can list your <?=$domain_titleINIT?> on our exchange within 48 hours</p>
            </div>
            <div class="cooperation-send_contact">
                <div class="cooperation_sender">
                    <input placeholder="Info" type="text">
                    <input placeholder="Info" type="text">
                    <input placeholder="Info" type="text">
                    <input placeholder="Info" type="text">
                    <input placeholder="Info" type="text">
                    <a href="" class="btn">Send</a>
                </div>

            </div>
        </section>
    </main>
    <footer>
        <section class="footer_box1">
            <div class="footer-box__card">
                <div class="footer-box__content">
                    <h1 class="">Trade anywhere and anytime with us</h1>
                    <p>
                        Enjoy the convenience of <span ><?=$domain_titleINIT?></span>’s crypto trading platform. Make
                        money on cryptocurrency anytime, anywhere as valuable.
                    </p>
                    <div class="footer-box__button">
                        <a href="" class="btn">Get started now</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-links mb-6">
            <div class="footer-links__box max-w-xs">
                <div class="logo justify-start">
                    <img src="assets/images/logo.svg" class="logo_img" alt="logo" />
                    <h3 class="logo_name" ><?=$domain_titleINIT?></h3>
                </div>
                <div class="footer_desc">
                    <p>
                        Innovative cryptocurrency exchange with advanced financial
                        services. We rely on blockchain technology to provide everything
                        you need for wise trading and investment.
                    </p>
                </div>
                <div class="footer_subscribe">
                    <p class="text-lg">Subscribe to our newsletter</p>
                    <div class="footer_enter">
                        <input type="text" placeholder="Enter email" />
                        <button class="btn">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="footer-links__box">
                <h3>Products</h3>
                <ul>
                    <li>Spot trading</li>
                    <li>Futures trading</li>
                    <li>Options trading</li>
                    <li>Wallet</li>
                    <li>Instant swap</li>
                    <li>P2P trading</li>
                    <li>DeFi Staking</li>
                    <li><span ><?=$domain_titleINIT?></span> Visa Card</li>
                </ul>
            </div>
            <div class="footer-links__box">
                <h3>Services</h3>
                <ul>
                    <li>24/7 support chat</li>
                    <li>Copy trading</li>
                    <li>Trading bots</li>
                    <li>ETH 2.0 staking</li>
                    <li>Launchpad</li>
                    <li>Savings</li>
                    <li><span ><?=$domain_titleINIT?></span> ventures</li>
                    <li>Buy crypto</li>
                </ul>
            </div>
            <div class="footer-links__box">
                <h3>Information</h3>
                <ul>
                    <li>Fees</li>
                    <li>Platform status</li>
                    <li>Wallet security</li>
                    <li>Token listing</li>
                    <li>Referal system</li>
                    <li>Trading API</li>
                    <li>Buy Bountry</li>
                </ul>
            </div>
            <div class="footer-links__box">
                <h3>Legal</h3>
                <ul>
                    <li>Tearms of service</li>
                    <li>Privacy notice</li>
                    <li>Cookies policy</li>
                    <li>AML & KYC policy</li>
                    <li>Risk Disclosure Statement</li>
                    <li>Regulatory License</li>
                    <li>Special Treatment</li>
                    <li>Law Enforcement Requests</li>
                </ul>
            </div>
        </div>
        <div class="footer_main_desc">
            <p class="text-xs">
                In acceding to or using the Platform and the Site, you represent and
                warrant that you are fully aware of the risks associated with the
                transactions involving Digital Assets or the use of Platform. You
                agree and understand that you are solely responsible for determining
                the nature, potential value, suitability, and appropriateness of these
                risks for yourself, and that the Company does not give advice or
                recommendations regarding any Digital Asset, including the suitability
                and appropriateness of, and investment strategies for, any Digital
                Asset. You agree and understand that you access and use the Platform
                and the Site at your own risk. <span ><?=$domain_titleINIT?></span> 2023 © All right reserved
            </p>
        </div>
    </footer>
</body>

<script src="assets/scripts/main.js"></script>
<script src="assets/scripts/animated-accordion-2.js"></script>
<script defer src="assets/scripts/itc-slider.js"></script>

<script src="assets/amchart/index.js"></script>
<script src="assets/amchart/map.js"></script>
<script src="assets/amchart/worldLow.js"></script>
<script src="assets/amchart/Animated.js"></script>
<script>
    new ItcAccordion(document.querySelector('.accordion'), {
        alwaysOpen: false
    });

</script>
<script>
    am5.ready(function () {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("moon_map");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/

        root.setThemes([
            am5themes_Animated.new(root),

        ]);


        // Create the map chart
        // https://www.amcharts.com/docs/v5/charts/map-chart/
        var chart = root.container.children.push(am5map.MapChart.new(root, {
            panX: "translateX",
            panY: "translateY",
            projection: am5map.geoMercator(),
            maxZoomLevel: 1
        }));


        // Create main polygon series for countries
        // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
        var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow,
            exclude: ["AQ"]
        }));

        polygonSeries.mapPolygons.template.setAll({
            tooltipText: "{name}",
            toggleKey: "active",

            interactive: true,
            strokeWidth: 0.01,
            fill: am5.color(0x273B51)
        });
        polygonSeries.mapPolygons.template.states.create("hover", {
            fill: am5.color(0x2a4485)
        });

        polygonSeries.mapPolygons.template.states.create("active", {
            fill: am5.color(0x2a4485)
        });

        var previousPolygon;

        polygonSeries.mapPolygons.template.on("active", function (active, target) {
            if (previousPolygon && previousPolygon != target) {
                previousPolygon.set("active", false);
            }
            if (target.get("active")) {
                polygonSeries.zoomToDataItem(target.dataItem);
            }
            else {
                chart.goHome();
            }
            previousPolygon = target;
        });






        chart.chartContainer.get("background").events.on("click", function () {
            chart.goHome();
        })


        chart.appear(100, 100);

    });
</script>

</html>