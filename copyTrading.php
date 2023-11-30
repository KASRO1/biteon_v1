<?php

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if (!get_user_info($auth_token)) {
    header("Location: /login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $domain_titleINIT ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css"/>
    <link rel="stylesheet" href="assets/styles/output.css"/>
    <link rel="stylesheet" href="assets/styles/checkbox.css"/>
    <link rel="stylesheet" href="assets/styles/animated-accordion-2.css"/>
    <link rel="stylesheet" href="assets/fonts/stylesheet.css"/>
    <link href="assets/styles/itc-slider.css" rel="stylesheet">

</head>

<body>
<?= render_header() ?>
<main class="mb-96 p-0">
    <section class="box-header_copy_trading mb-6">
        <div class="flex justify-between p-5 header_copy_trading_content">
            <h3 class="title_text_tradign mb-4">Copy trading</h3>
            <div class="payment_card">
                <div class="payment_card_header">
                    <div class="flex items-center gap-2">
                        <h3 class="mr-3">My Copy Trading</h3>
                        <img class="h-5" src="assets/images/icons/EYE_CLOSE.svg" alt="">
                    </div>
                    <span class=" text-gray-500 font-light">Measured in: USDT</span>
                </div>
                <div class="payment_card_content">
                    <div class="payment_card_content_el">

                        <span class=" text-gray-400 font-normal">Total Assets</span>
                        <span class=" ">*****.** USDT</span>
                    </div>
                    <div class="payment_card_content_el">

                        <span class=" text-gray-400 font-light">Copy Trading P&L</span>
                        <span class=" ">*****.** USDT</span>
                    </div>

                </div>
            </div>
        </div>


    </section>
    <section class="banner_copy_sec  ">
        <div class="banner_copy">
            <div class=""></div>
            <h3 class=" mx-width">Copy Trading Leaderboard <span class="gradient">Followers</span></h3>
            <span class="tag_lith open_error mr-6">Check it Out<svg xmlns="http://www.w3.org/2000/svg" height="19"
                                                         viewBox="0 0 12 19"
                                                         fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.99951 9.5C1.99951 9.08578 2.22337 8.75 2.49951 8.75H9.49951C9.77566 8.75 9.99951 9.08578 9.99951 9.5C9.99951 9.91422 9.77566 10.25 9.49951 10.25H2.49951C2.22337 10.25 1.99951 9.91422 1.99951 9.5Z"
                  fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.64595 3.71966C5.8412 3.42678 6.1578 3.42678 6.35305 3.71966L9.85305 8.96967C10.0483 9.26255 10.0483 9.73745 9.85305 10.0303L6.35305 15.2803C6.1578 15.5732 5.8412 15.5732 5.64595 15.2803C5.4507 14.9874 5.4507 14.5125 5.64595 14.2197L8.7924 9.5L5.64595 4.78032C5.4507 4.48743 5.4507 4.01256 5.64595 3.71966Z"
                  fill="white"/>
          </svg></span>
        </div>
    </section>
    <section class="top_tradersROI p-10">
        <section class=" top_tradersROI_psec ">
            <div class="block max-w-xl">
                <h3 class="">Top Traders By ROI</h3>
                <p>Traders that have earned the highest ROI in the last 7 days.</p>
            </div>
            <a class="flex items-center gap-2  text-blue-400 font-medium open_error">View More </a>
        </section>
        <div class="reviews-box__slider ">
            <swiper-container class="mySwiper" autoplay-delay="3000" autoplay-disable-on-interaction="false"
                              slides-per-view="3" space-between="10" grab-cursor="true">
                <swiper-slide>
                    <div class="swipper_el_traders">
                        <div style="    background: linear-gradient(90deg, #b7fa95, #96f6bb);"
                             class="swipper_el_traders_header">
                            <div class="profile_avatar_tradersRIO">
                                <img src="assets/images/person/SteveETH.jpg" alt="">
                            </div>
                            <div class="flex justify-end">
                                <div class="swipper_el_traders_picker">
                                    No.02
                                </div>
                            </div>
                        </div>

                        <div class="swipper_el_traders_content">
                            <div class="text-gray-500 flex items-center gap-2">
                                <span class="span_tag">ROI</span>
                                <span class="swipper_el_tags">70D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-green-500  m-0">+22.35%</h3>
                                <svg width="144" height="52"
                                     style="width: 144px; height: 52px; display: inline-block; vertical-align: middle; cursor: default;">
                                    <defs id="defs_2">
                                        <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_2">
                                            <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                            <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g opacity="1">
                                        <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                              d="M 0,0 l 144,0 l 0,52 l-144 0 z" fill="transparent"
                                              stroke="none"></path>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 4L 143.5 4" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                            </g>
                                        </g>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <g opacity="1"></g>
                                                <g opacity="1"></g>
                                            </g>
                                            <g opacity="1">
                                                <g opacity="1">
                                                    <text id="-axis-label-4.14" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="25.53125" y="48"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">4.14%
                                                    </text>
                                                    <text id="-axis-label-23.94" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="25.53125" y="4"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">23.94%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1" clip-path="url(#clip_3)">
                                            <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                                  fill="url(#gradient_2)" stroke="none"
                                                  d="M 33.53125 43.46666666666667C 33.53125 43.46666666666667 44.89124596817576 36.4 51.859375 36.4C 59.553745968175754 36.4 64.74470008302373 48 70.1875 48C 79.40720008302374 48 78.89422576044548 16.15555555555556 88.515625 16.15555555555556C 93.5567257604455 16.15555555555556 100.56710651837653 22.044444444444448 106.84375 22.044444444444448C 115.22960651837653 22.044444444444448 116.67542679600034 4 125.171875 4C 131.33792679600035 4 143.5 7.533333333333331 143.5 7.533333333333331L 143.5 48C 143.5 48 132.503125 48 125.171875 48C 117.84062499999999 48 114.175 48 106.84375 48C 99.5125 48 95.846875 48 88.515625 48C 81.184375 48 77.51875 48 70.1875 48C 62.85625 48 59.190625 48 51.859375 48C 44.528125 48 33.53125 48 33.53125 48Z"></path>
                                        </g>
                                        <g opacity="1" clip-path="url(#clip_4)">
                                            <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                                  stroke="#20B26C" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M 33.53125 43.46666666666667C 33.53125 43.46666666666667 44.89124596817576 36.4 51.859375 36.4C 59.553745968175754 36.4 64.74470008302373 48 70.1875 48C 79.40720008302374 48 78.89422576044548 16.15555555555556 88.515625 16.15555555555556C 93.5567257604455 16.15555555555556 100.56710651837653 22.044444444444448 106.84375 22.044444444444448C 115.22960651837653 22.044444444444448 116.67542679600034 4 125.171875 4C 131.33792679600035 4 143.5 7.533333333333331 143.5 7.533333333333331"></path>
                                        </g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                </svg>
                            </div>
                            <div class="grid gap-2">
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">ROI</span>
                                    <span class="swipper_el_tags">90D</span>
                                    <h3 class="m-0 text-green-500 text-base">+89.16</h3>
                                </div>
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">Drawdown</span>
                                    <span class="swipper_el_tags">30D</span>
                                    <h3 class="m-0 text-black text-base">10.92%</h3>
                                </div>
                                <div class="flex gap-2 text-gray-500 items-center justify-between">
                                    <span class="span_tag">AUM</span>

                                    <h3 class="m-0 text-black text-base">27,787,12</h3>
                                </div>
                                <a class="btn m-0 p-2 open_error"
                                   style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                            viewBox="0 0 15 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                              fill="white"/>
                                    </svg>
                                    Copy</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swipper_el_traders">
                        <div class="swipper_el_traders_header">
                            <div class="profile_avatar_tradersRIO">
                                <img src="assets/images/person/ASK-ME-ANY.jpeg" alt="">
                            </div>
                            <div class="flex justify-end">
                                <div class="swipper_el_traders_picker">
                                    No.05
                                </div>
                            </div>
                        </div>

                        <div class="swipper_el_traders_content">
                            <div class="text-gray-500 flex items-center gap-2">
                                <span class="span_tag">ROI</span>
                                <span class="swipper_el_tags">70D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-green-500  m-0">+6.35%</h3>
                                <svg width="144" height="52"
                                     style="width: 144px; height: 52px; display: inline-block; vertical-align: middle; cursor: default;">
                                    <defs id="defs_5">
                                        <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_5">
                                            <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                            <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g opacity="1">
                                        <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                              d="M 0,0 l 144,0 l 0,52 l-144 0 z" fill="transparent"
                                              stroke="none"></path>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 32.41796875 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 32.41796875 4L 143.5 4" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                            </g>
                                        </g>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 32.41796875 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <g opacity="1"></g>
                                                <g opacity="1"></g>
                                            </g>
                                            <g opacity="1">
                                                <g opacity="1">
                                                    <text id="-axis-label--4.17" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="24.41796875" y="48"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">-4.17%
                                                    </text>
                                                    <text id="-axis-label-6.82" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="24.41796875" y="4"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">6.82%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1" clip-path="url(#clip_9)">
                                            <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                                  fill="url(#gradient_5)" stroke="none"
                                                  d="M 32.41796875 17.1319381255687C 32.41796875 17.1319381255687 41.762518764406714 47.2393084622384 50.931640625 47.2393084622384C 56.57345626440672 47.2393084622384 62.10876172400911 35.828935395814376 69.4453125 35.828935395814376C 76.91969922400911 35.828935395814376 82.88498981674904 48 87.958984375 48C 97.69592731674906 48 98.63174830241987 9.725204731574166 106.47265625 9.725204731574166C 113.44268580241987 9.725204731574166 118.04746854431768 42.67515923566879 124.986328125 42.67515923566879C 132.85840604431766 42.67515923566879 143.5 4 143.5 4L 143.5 48C 143.5 48 132.391796875 48 124.986328125 48C 117.58085937499999 48 113.878125 48 106.47265625 48C 99.0671875 48 95.364453125 48 87.958984375 48C 80.553515625 48 76.85078125 48 69.4453125 48C 62.03984375 48 58.337109375 48 50.931640625 48C 43.526171875 48 32.41796875 48 32.41796875 48Z"></path>
                                        </g>
                                        <g opacity="1" clip-path="url(#clip_10)">
                                            <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                                  stroke="#20B26C" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M 32.41796875 17.1319381255687C 32.41796875 17.1319381255687 41.762518764406714 47.2393084622384 50.931640625 47.2393084622384C 56.57345626440672 47.2393084622384 62.10876172400911 35.828935395814376 69.4453125 35.828935395814376C 76.91969922400911 35.828935395814376 82.88498981674904 48 87.958984375 48C 97.69592731674906 48 98.63174830241987 9.725204731574166 106.47265625 9.725204731574166C 113.44268580241987 9.725204731574166 118.04746854431768 42.67515923566879 124.986328125 42.67515923566879C 132.85840604431766 42.67515923566879 143.5 4 143.5 4"></path>
                                        </g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                </svg>

                            </div>
                            <div class="grid gap-2">
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">ROI</span>
                                    <span class="swipper_el_tags">90D</span>
                                    <h3 class="m-0 text-green-500 text-base">+101.64</h3>
                                </div>
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">Drawdown</span>
                                    <span class="swipper_el_tags">30D</span>
                                    <h3 class="m-0 text-black text-base">27.12%</h3>
                                </div>
                                <div class="flex gap-2 text-gray-500 items-center justify-between">
                                    <span class="span_tag">AUM</span>

                                    <h3 class="m-0 text-black text-base">41,549,12</h3>
                                </div>
                                <a class="btn m-0 p-2 open_error"
                                   style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                            viewBox="0 0 15 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                              fill="white"/>
                                    </svg>
                                    Copy</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swipper_el_traders">
                        <div style="    background: linear-gradient(90deg, #f5b788, #c7ec75);"
                             class="swipper_el_traders_header">
                            <div class="profile_avatar_tradersRIO">
                                <img src="assets/images/person/Akoma.jpg" alt="">
                            </div>
                            <div class="flex justify-end">
                                <div style="    background: #d48f5b;" class="swipper_el_traders_picker">
                                    No.03
                                </div>
                            </div>
                        </div>

                        <div class="swipper_el_traders_content">
                            <div class="text-gray-500 flex items-center gap-2">
                                <span class="span_tag">ROI</span>
                                <span class="swipper_el_tags">70D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-green-500  m-0">+27.58%</h3>
                                <svg width="144" height="52"
                                     style="width: 144px; height: 52px; display: inline-block; vertical-align: middle; cursor: default;">
                                    <defs id="defs_3">
                                        <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_3">
                                            <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                            <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g opacity="1">
                                        <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                              d="M 0,0 l 144,0 l 0,52 l-144 0 z" fill="transparent"
                                              stroke="none"></path>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 4L 143.5 4" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                            </g>
                                        </g>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <g opacity="1"></g>
                                                <g opacity="1"></g>
                                            </g>
                                            <g opacity="1">
                                                <g opacity="1">
                                                    <text id="-axis-label--7.71" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="25.53125" y="48"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">-7.71%
                                                    </text>
                                                    <text id="-axis-label-25.09" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="25.53125" y="4"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">25.09%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1" clip-path="url(#clip_5)">
                                            <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                                  fill="url(#gradient_3)" stroke="none"
                                                  d="M 33.53125 23.38414634146341C 33.53125 23.38414634146341 46.15601700985743 30.815853658536586 51.859375 30.815853658536586C 60.81851700985742 30.815853658536586 63.940705823444816 5.730487804878045 70.1875 5.730487804878045C 78.60320582344482 5.730487804878045 81.31870017492002 43.358536585365854 88.515625 43.358536585365854C 95.98120017492002 43.358536585365854 99.85441918884024 4 106.84375 4C 114.51691918884023 4 117.22087440740128 48 125.171875 48C 131.88337440740125 48 143.5 12.18292682926829 143.5 12.18292682926829L 143.5 48C 143.5 48 132.503125 48 125.171875 48C 117.84062499999999 48 114.175 48 106.84375 48C 99.5125 48 95.846875 48 88.515625 48C 81.184375 48 77.51875 48 70.1875 48C 62.85625 48 59.190625 48 51.859375 48C 44.528125 48 33.53125 48 33.53125 48Z"></path>
                                        </g>
                                        <g opacity="1" clip-path="url(#clip_6)">
                                            <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                                  stroke="#20B26C" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M 33.53125 23.38414634146341C 33.53125 23.38414634146341 46.15601700985743 30.815853658536586 51.859375 30.815853658536586C 60.81851700985742 30.815853658536586 63.940705823444816 5.730487804878045 70.1875 5.730487804878045C 78.60320582344482 5.730487804878045 81.31870017492002 43.358536585365854 88.515625 43.358536585365854C 95.98120017492002 43.358536585365854 99.85441918884024 4 106.84375 4C 114.51691918884023 4 117.22087440740128 48 125.171875 48C 131.88337440740125 48 143.5 12.18292682926829 143.5 12.18292682926829"></path>
                                        </g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                </svg>
                            </div>
                            <div class="grid gap-2">
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">ROI</span>
                                    <span class="swipper_el_tags">90D</span>
                                    <h3 class="m-0 text-green-500 text-base">+23.16</h3>
                                </div>
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">Drawdown</span>
                                    <span class="swipper_el_tags">30D</span>
                                    <h3 class="m-0 text-black text-base">15.92%</h3>
                                </div>
                                <div class="flex gap-2 text-gray-500 items-center justify-between">
                                    <span class="span_tag">AUM</span>

                                    <h3 class="m-0 text-black text-base">62,387,11</h3>
                                </div>
                                <a class="btn m-0 p-2 open_error"
                                   style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                            viewBox="0 0 15 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                              fill="white"/>
                                    </svg>
                                    Copy</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swipper_el_traders">
                        <div style="    background: linear-gradient(90deg, rgba(248,198,79,0.71), rgba(239,243,139,0.72));"
                             class="swipper_el_traders_header">
                            <div class="profile_avatar_tradersRIO">
                                <img src="assets/images/person/Andrew-Carnegie.jpg" alt="">
                            </div>
                            <div class="flex justify-end">
                                <div style="background-color: gold" class="swipper_el_traders_picker">
                                    No.01
                                </div>
                            </div>
                        </div>

                        <div class="swipper_el_traders_content">
                            <div class="text-gray-500 flex items-center gap-2">
                                <span class="span_tag">ROI</span>
                                <span class="swipper_el_tags">70D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-green-500  m-0">+61.55%</h3>
                                <svg width="144" height="52"
                                     style="width: 144px; height: 52px; display: inline-block; vertical-align: middle; cursor: default;">
                                    <defs id="defs_1">
                                        <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_1">
                                            <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                            <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g opacity="1">
                                        <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                              d="M 0,0 l 144,0 l 0,52 l-144 0 z" fill="transparent"
                                              stroke="none"></path>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 4L 143.5 4" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                            </g>
                                        </g>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 33.53125 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <g opacity="1"></g>
                                                <g opacity="1"></g>
                                            </g>
                                            <g opacity="1">
                                                <g opacity="1">
                                                    <text id="-axis-label-15.13" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="25.53125" y="48"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">15.13%
                                                    </text>
                                                    <text id="-axis-label-81.22" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="25.53125" y="4"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">81.22%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1" clip-path="url(#clip_1)">
                                            <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                                  fill="url(#gradient_1)" stroke="none"
                                                  d="M 33.53125 44.87093357542745C 33.53125 44.87093357542745 45.90679090823593 48 51.859375 48C 60.56929090823594 48 61.95497404456364 27.894083825087005 70.1875 27.894083825087005C 76.61747404456364 27.894083825087005 82.73593157712283 38.646088666969284 88.515625 38.646088666969284C 97.39843157712284 38.646088666969284 97.45204250815729 11.616280829172347 106.84375 11.616280829172347C 112.1145425081573 11.616280829172347 118.13242746362772 11.616280829172347 125.171875 11.616280829172347C 132.79492746362774 11.616280829172347 143.5 4 143.5 4L 143.5 48C 143.5 48 132.503125 48 125.171875 48C 117.84062499999999 48 114.175 48 106.84375 48C 99.5125 48 95.846875 48 88.515625 48C 81.184375 48 77.51875 48 70.1875 48C 62.85625 48 59.190625 48 51.859375 48C 44.528125 48 33.53125 48 33.53125 48Z"></path>
                                        </g>
                                        <g opacity="1" clip-path="url(#clip_2)">
                                            <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                                  stroke="#20B26C" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M 33.53125 44.87093357542745C 33.53125 44.87093357542745 45.90679090823593 48 51.859375 48C 60.56929090823594 48 61.95497404456364 27.894083825087005 70.1875 27.894083825087005C 76.61747404456364 27.894083825087005 82.73593157712283 38.646088666969284 88.515625 38.646088666969284C 97.39843157712284 38.646088666969284 97.45204250815729 11.616280829172347 106.84375 11.616280829172347C 112.1145425081573 11.616280829172347 118.13242746362772 11.616280829172347 125.171875 11.616280829172347C 132.79492746362774 11.616280829172347 143.5 4 143.5 4"></path>
                                        </g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                </svg>
                            </div>
                            <div class="grid gap-2">
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">ROI</span>
                                    <span class="swipper_el_tags">90D</span>
                                    <h3 class="m-0 text-green-500 text-base">+92.62</h3>
                                </div>
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">Drawdown</span>
                                    <span class="swipper_el_tags">30D</span>
                                    <h3 class="m-0 text-black text-base">10.92%</h3>
                                </div>
                                <div class="flex gap-2 text-gray-500 items-center justify-between">
                                    <span class="span_tag">AUM</span>

                                    <h3 class="m-0 text-black text-base">67,486,22</h3>
                                </div>
                                <a class="btn m-0 p-2 open_error"
                                   style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                            viewBox="0 0 15 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                              fill="white"/>
                                    </svg>
                                    Copy</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swipper_el_traders">
                        <div class="swipper_el_traders_header">
                            <div class="profile_avatar_tradersRIO">
                                <img src="assets/images/person/Crypto-Angel.jpeg" alt="">
                            </div>
                            <div class="flex justify-end">
                                <div class="swipper_el_traders_picker">
                                    No.06
                                </div>
                            </div>
                        </div>

                        <div class="swipper_el_traders_content">
                            <div class="text-gray-500 flex items-center gap-2">
                                <span class="span_tag">ROI</span>
                                <span class="swipper_el_tags">70D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-green-500  m-0">+29.27%</h3>
                                <svg width="144" height="52"
                                     style="width: 144px; height: 52px; display: inline-block; vertical-align: middle; cursor: default;">
                                    <defs id="defs_6">
                                        <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_6">
                                            <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                            <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g opacity="1">
                                        <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                              d="M 0,0 l 144,0 l 0,52 l-144 0 z" fill="transparent"
                                              stroke="none"></path>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 29.21875 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 29.21875 4L 143.5 4" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                            </g>
                                        </g>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 29.21875 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <g opacity="1"></g>
                                                <g opacity="1"></g>
                                            </g>
                                            <g opacity="1">
                                                <g opacity="1">
                                                    <text id="-axis-label--3.3" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="21.21875" y="48"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">-3.3%
                                                    </text>
                                                    <text id="-axis-label-6.84" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="21.21875" y="4"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">6.84%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1" clip-path="url(#clip_11)">
                                            <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                                  fill="url(#gradient_6)" stroke="none"
                                                  d="M 29.21875 45.26627218934911C 29.21875 45.26627218934911 40.8781068791221 36.06706114398422 48.265625 36.06706114398422C 56.115606879122105 36.06706114398422 60.1279328855826 48 67.3125 48C 75.3654328855826 48 77.69211030275677 33.34259659200992 86.359375 31.510848126232744C 92.92961030275679 30.12228796844182 99.7477273554559 31.510848126232744 105.40625 30.122287968441817C 114.98522735545592 27.77167683834547 115.3724625657281 4 124.453125 4C 130.60996256572807 4 143.5 14.84812623274162 143.5 14.84812623274162L 143.5 48C 143.5 48 132.071875 48 124.453125 48C 116.834375 48 113.025 48 105.40625 48C 97.7875 48 93.978125 48 86.359375 48C 78.740625 48 74.93125 48 67.3125 48C 59.693749999999994 48 55.884375 48 48.265625 48C 40.646875 48 29.21875 48 29.21875 48Z"></path>
                                        </g>
                                        <g opacity="1" clip-path="url(#clip_12)">
                                            <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                                  stroke="#20B26C" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M 29.21875 45.26627218934911C 29.21875 45.26627218934911 40.8781068791221 36.06706114398422 48.265625 36.06706114398422C 56.115606879122105 36.06706114398422 60.1279328855826 48 67.3125 48C 75.3654328855826 48 77.69211030275677 33.34259659200992 86.359375 31.510848126232744C 92.92961030275679 30.12228796844182 99.7477273554559 31.510848126232744 105.40625 30.122287968441817C 114.98522735545592 27.77167683834547 115.3724625657281 4 124.453125 4C 130.60996256572807 4 143.5 14.84812623274162 143.5 14.84812623274162"></path>
                                        </g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                </svg>
                            </div>
                            <div class="grid gap-2">
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">ROI</span>
                                    <span class="swipper_el_tags">90D</span>
                                    <h3 class="m-0 text-green-500 text-base">+39.16</h3>
                                </div>
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">Drawdown</span>
                                    <span class="swipper_el_tags">30D</span>
                                    <h3 class="m-0 text-black text-base">19.92%</h3>
                                </div>
                                <div class="flex gap-2 text-gray-500 items-center justify-between">
                                    <span class="span_tag">AUM</span>

                                    <h3 class="m-0 text-black text-base">17,582,52</h3>
                                </div>
                                <a class="btn m-0 p-2 open_error"
                                   style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                            viewBox="0 0 15 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                              fill="white"/>
                                    </svg>
                                    Copy</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="swipper_el_traders">
                        <div class="swipper_el_traders_header">
                            <div class="profile_avatar_tradersRIO">
                                <img src="assets/images/person/Prev0-Trading.png" alt="">
                            </div>
                            <div class="flex justify-end">
                                <div class="swipper_el_traders_picker">
                                    No.07
                                </div>
                            </div>
                        </div>

                        <div class="swipper_el_traders_content">
                            <div class="text-gray-500 flex items-center gap-2">
                                <span class="span_tag">ROI</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-green-500  m-0">+62.35%</h3>
                                <svg width="144" height="52"
                                     style="width: 144px; height: 52px; display: inline-block; vertical-align: middle; cursor: default;">
                                    <defs id="defs_7">
                                        <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_7">
                                            <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                            <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g opacity="1">
                                        <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                              d="M 0,0 l 144,0 l 0,52 l-144 0 z" fill="transparent"
                                              stroke="none"></path>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 29.21875 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 29.21875 4L 143.5 4" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                            </g>
                                        </g>
                                        <g opacity="1">
                                            <g opacity="1">
                                                <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                                      fill-opacity="1" d="M 29.21875 48L 143.5 48" stroke="#D5DAE0"
                                                      stroke-dasharray="2,3" fill="none"></path>
                                                <g opacity="1"></g>
                                                <g opacity="1"></g>
                                            </g>
                                            <g opacity="1">
                                                <g opacity="1">
                                                    <text id="-axis-label--0.7" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="21.21875" y="48"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">-0.7%
                                                    </text>
                                                    <text id="-axis-label-4.25" alignment-baseline="central"
                                                          text-anchor="end" opacity="1" stroke-width="1"
                                                          stroke-opacity="1" fill-opacity="1" x="21.21875" y="4"
                                                          font-size="8"
                                                          font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                        &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                        &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                          font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                          style="stroke-linecap:butt; stroke-linejoin:miter;"
                                                          stroke="none">4.25%
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1" clip-path="url(#clip_13)">
                                            <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                                  fill="url(#gradient_7)" stroke="none"
                                                  d="M 29.21875 41.77777777777778C 29.21875 41.77777777777778 40.839969308932005 41.77777777777778 48.265625 41.77777777777778C 56.077469308932 41.77777777777778 59.60160167821099 48 67.3125 48C 74.83910167821098 48 79.91247796120669 47.4668258764204 86.359375 43.55555555555556C 95.1499779612067 38.22238143197596 98.0093897823364 32.569595442496016 105.40625 24.888888888888893C 113.24688978233641 16.747373220273786 115.34945519361173 4 124.453125 4C 130.58695519361171 4 143.5 4 143.5 4L 143.5 48C 143.5 48 132.071875 48 124.453125 48C 116.834375 48 113.025 48 105.40625 48C 97.7875 48 93.978125 48 86.359375 48C 78.740625 48 74.93125 48 67.3125 48C 59.693749999999994 48 55.884375 48 48.265625 48C 40.646875 48 29.21875 48 29.21875 48Z"></path>
                                        </g>
                                        <g opacity="1" clip-path="url(#clip_14)">
                                            <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                                  stroke="#20B26C" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  d="M 29.21875 41.77777777777778C 29.21875 41.77777777777778 40.839969308932005 41.77777777777778 48.265625 41.77777777777778C 56.077469308932 41.77777777777778 59.60160167821099 48 67.3125 48C 74.83910167821098 48 79.91247796120669 47.4668258764204 86.359375 43.55555555555556C 95.1499779612067 38.22238143197596 98.0093897823364 32.569595442496016 105.40625 24.888888888888893C 113.24688978233641 16.747373220273786 115.34945519361173 4 124.453125 4C 130.58695519361171 4 143.5 4 143.5 4"></path>
                                        </g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                </svg>
                            </div>
                            <div class="grid gap-2">
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">ROI</span>
                                    <span class="swipper_el_tags">90D</span>
                                    <h3 class="m-0 text-green-500 text-base">+29.16</h3>
                                </div>
                                <div class=" flex gap-2 text-gray-500 items-center">
                                    <span class="span_tag">Drawdown</span>
                                    <span class="swipper_el_tags">30D</span>
                                    <h3 class="m-0 text-black text-base">13.92%</h3>
                                </div>
                                <div class="flex gap-2 text-gray-500 items-center justify-between">
                                    <span class="span_tag">AUM</span>

                                    <h3 class="m-0 text-black text-base">9,587,12</h3>
                                </div>
                                <a class="btn m-0 p-2 open_error"
                                   style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                            viewBox="0 0 15 18" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                              fill="white"/>
                                    </svg>
                                    Copy</a>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>

            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

        </div>
    </section>
    <section class="p-10 top_tradersROI">
        <section class="top_tradersROI_psec">
            <div class="block max-w-xl">
                <h3 class="">Traders With The Highest Profit For Followers</h3>
                <p>Traders that have earned the highest profits, in USDT, for Followers.</p>
            </div>
            <a class="flex items-center gap-2  text-blue-400 font-medium open_error">View More </a>
        </section>
        <div class="highest_profits">
            <div class="swipper_el_traders h-80">
                <div class="p-5">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full " src="assets/images/person/Savant.png" alt="">
                        <div>
                            <div class="flex gap-2">
                                <h3 class="text-black m-0">Savant</h3>
                                <img src="assets/images/icons/silver.png" class="h-5" alt="">
                            </div>
                            <div class="flex gap-2">
                                <span class="text-gray-500 ">173 Follower(s)</span>
                                <span class="text-green-400 ">73.00%</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swipper_el_traders_content">
                    <div class="text-gray-500 flex items-center gap-2">
                        <span class="span_tag">ROI</span>
                        <span class="swipper_el_tags">70D</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-green-500  m-0">+401.08%</h3>
                        <svg width="132" height="48"
                             style="width: 132px; height: 48px; display: inline-block; vertical-align: middle; cursor: default;">
                            <defs id="defs_25">
                                <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_25">
                                    <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                    <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                </linearGradient>
                            </defs>
                            <g opacity="1">
                                <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                      d="M 0,0 l 132,0 l 0,48 l-132 0 z" fill="transparent" stroke="none"></path>
                                <g opacity="1">
                                    <g opacity="1">
                                        <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                              fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0"
                                              stroke-dasharray="2,3" fill="none"></path>
                                        <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                              fill-opacity="1" d="M 37.84375 4L 131.5 4" stroke="#D5DAE0"
                                              stroke-dasharray="2,3" fill="none"></path>
                                    </g>
                                </g>
                                <g opacity="1">
                                    <g opacity="1">
                                        <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                              fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0"
                                              stroke-dasharray="2,3" fill="none"></path>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1">
                                            <text id="-axis-label-0" alignment-baseline="central" text-anchor="end"
                                                  opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                                  x="29.84375" y="44" font-size="8"
                                                  font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                  font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                  style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">0%
                                            </text>
                                            <text id="-axis-label-401.08" alignment-baseline="central" text-anchor="end"
                                                  opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                                  x="29.84375" y="4" font-size="8"
                                                  font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                  font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                  style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">
                                                401.08%
                                            </text>
                                        </g>
                                    </g>
                                </g>
                                <g opacity="1"></g>
                            </g>
                            <g opacity="1">
                                <g opacity="1" clip-path="url(#clip_49)">
                                    <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                          fill="url(#gradient_25)" stroke="none"
                                          d="M 37.84375 44C 37.84375 44 47.209375 44 53.453125 44C 59.696875 44 63.35475848377887 44 69.0625 44C 75.84225848377888 44 80.1134441617865 39.57587686290656 84.671875 33.99401615637778C 92.6009441617865 24.28476287068556 91.87482290214176 8.282582434995096 100.28125 5.7722150194474935C 104.36232290214176 4.553505535055351 109.63935024171457 4.908375701776517 115.890625 4.553505535055351C 122.12685024171458 4.199489693997521 131.5 4 131.5 4L 131.5 44C 131.5 44 122.134375 44 115.890625 44C 109.646875 44 106.525 44 100.28125 44C 94.0375 44 90.915625 44 84.671875 44C 78.428125 44 75.30625 44 69.0625 44C 62.818749999999994 44 59.696875 44 53.453125 44C 47.209375 44 37.84375 44 37.84375 44Z"></path>
                                </g>
                                <g opacity="1" clip-path="url(#clip_50)">
                                    <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                          stroke="#20B26C" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                          d="M 37.84375 44C 37.84375 44 47.209375 44 53.453125 44C 59.696875 44 63.35475848377887 44 69.0625 44C 75.84225848377888 44 80.1134441617865 39.57587686290656 84.671875 33.99401615637778C 92.6009441617865 24.28476287068556 91.87482290214176 8.282582434995096 100.28125 5.7722150194474935C 104.36232290214176 4.553505535055351 109.63935024171457 4.908375701776517 115.890625 4.553505535055351C 122.12685024171458 4.199489693997521 131.5 4 131.5 4"></path>
                                </g>
                            </g>
                            <g opacity="1">
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                            </g>
                        </svg>
                    </div>
                    <div class="grid gap-2">
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Trades</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-green-400 text-base">10.92%</h3>
                        </div>
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Win Rate</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-base">100.00%</h3>
                        </div>
                        <div class="flex gap-2 text-gray-500 items-center justify-between">
                            <span class="span_tag">AUM</span>

                            <h3 class="m-0 text-black text-base">27,787,12</h3>
                        </div>
                        <a class="btn m-0 p-2 open_error"
                           style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"
                                    fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                      fill="white"/>
                            </svg>
                            Copy</a>
                    </div>
                </div>
            </div>
            <div class="swipper_el_traders h-80">
                <div class="p-5">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full " src="assets/images/person/Drake.jpg" alt="">
                        <div>
                            <div class="flex gap-2">
                                <h3 class="text-black m-0">Drake</h3>
                                <img src="assets/images/icons/silver.png" class="h-5" alt="">
                            </div>
                            <div class="flex gap-2">
                                <span class="text-gray-500 ">167  Follower(s)</span>
                                <span class="text-green-400 ">391.17%</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swipper_el_traders_content">
                    <div class="text-gray-500 flex items-center gap-2">
                        <span class="span_tag">ROI</span>
                        <span class="swipper_el_tags">7D</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-green-500  m-0">+701.34%
                        </h3>
                        <svg width="132" height="48" style="width: 132px; height: 48px; display: inline-block; vertical-align: middle; cursor: default;"><defs id="defs_26"><linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_26"><stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop><stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop></linearGradient></defs><g opacity="1"><path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 0,0 l 132,0 l 0,48 l-132 0 z" fill="transparent" stroke="none"></path><g opacity="1"><g opacity="1"><path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path><path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 4L 131.5 4" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path></g></g><g opacity="1"><g opacity="1"><path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path><g opacity="1"></g><g opacity="1"></g></g><g opacity="1"><g opacity="1"><text id="-axis-label-0" alignment-baseline="central" text-anchor="end" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" x="29.84375" y="44" font-size="8" font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal" font-variant="normal" fill="#ADB1B8" paint-order="stroke" style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">0%</text><text id="-axis-label-701.34" alignment-baseline="central" text-anchor="end" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" x="29.84375" y="4" font-size="8" font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal" font-variant="normal" fill="#ADB1B8" paint-order="stroke" style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">701.34%</text></g></g></g><g opacity="1"></g></g><g opacity="1"><g opacity="1" clip-path="url(#clip_51)"><path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25" fill="url(#gradient_26)" stroke="none" d="M 37.84375 44C 37.84375 44 47.209375 44 53.453125 44C 59.696875 44 62.8220601434599 44 69.0625 44C 75.3095601434599 44 78.48547092833806 44 84.671875 43.28080531553883C 90.97297092833807 42.5482772353413 95.94839164950952 43.28080531553883 100.28125 40.173610517010296C 108.43589164950951 34.325724879495326 108.22988755772477 23.484869825962413 115.890625 14.60826417999829C 120.71738755772475 9.015425619158288 131.5 4 131.5 4L 131.5 44C 131.5 44 122.134375 44 115.890625 44C 109.646875 44 106.525 44 100.28125 44C 94.0375 44 90.915625 44 84.671875 44C 78.428125 44 75.30625 44 69.0625 44C 62.818749999999994 44 59.696875 44 53.453125 44C 47.209375 44 37.84375 44 37.84375 44Z"></path></g><g opacity="1" clip-path="url(#clip_52)"><path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1" stroke="#20B26C" fill="none" stroke-linecap="round" stroke-linejoin="round" d="M 37.84375 44C 37.84375 44 47.209375 44 53.453125 44C 59.696875 44 62.8220601434599 44 69.0625 44C 75.3095601434599 44 78.48547092833806 44 84.671875 43.28080531553883C 90.97297092833807 42.5482772353413 95.94839164950952 43.28080531553883 100.28125 40.173610517010296C 108.43589164950951 34.325724879495326 108.22988755772477 23.484869825962413 115.890625 14.60826417999829C 120.71738755772475 9.015425619158288 131.5 4 131.5 4"></path></g></g><g opacity="1"><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g></g></svg>
                    </div>
                    <div class="grid gap-2">
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Trades</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-green-400 text-base">34</h3>
                        </div>
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Win Rate</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-base">100.00%</h3>
                        </div>
                        <div class="flex gap-2 text-gray-500 items-center justify-between">
                            <span class="span_tag">AUM</span>

                            <h3 class="m-0 text-black text-base">8,849,36</h3>
                        </div>
                        <a class="btn m-0 p-2 open_error"
                           style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"
                                    fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                      fill="white"/>
                            </svg>
                            Copy</a>
                    </div>
                </div>
            </div>

            <div class="swipper_el_traders h-80">
                <div class="p-5">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full " src="assets/images/person/Morhylk.jpeg" alt="">
                        <div>
                            <div class="flex gap-2">
                                <h3 class="text-black m-0">Morhylk</h3>
                                <img src="assets/images/icons/silver.png" class="h-5" alt="">
                            </div>
                            <div class="flex gap-2">
                                <span class="text-gray-500 ">17 Follower(s)</span>
                                <span class="text-red-500 ">-19.04%</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swipper_el_traders_content">
                    <div class="text-gray-500 flex items-center gap-2">
                        <span class="span_tag">ROI</span>
                        <span class="swipper_el_tags">70D</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-green-500  m-0">+204.54%</h3>
                        <svg width="132" height="48" style="width: 132px; height: 48px; display: inline-block; vertical-align: middle; cursor: default;"><defs id="defs_27"><linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_27"><stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop><stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop></linearGradient></defs><g opacity="1"><path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 0,0 l 132,0 l 0,48 l-132 0 z" fill="transparent" stroke="none"></path><g opacity="1"><g opacity="1"><path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path><path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 4L 131.5 4" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path></g></g><g opacity="1"><g opacity="1"><path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path><g opacity="1"></g><g opacity="1"></g></g><g opacity="1"><g opacity="1"><text id="-axis-label-0" alignment-baseline="central" text-anchor="end" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" x="29.84375" y="44" font-size="8" font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal" font-variant="normal" fill="#ADB1B8" paint-order="stroke" style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">0%</text><text id="-axis-label-204.53" alignment-baseline="central" text-anchor="end" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" x="29.84375" y="4" font-size="8" font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal" font-variant="normal" fill="#ADB1B8" paint-order="stroke" style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">204.53%</text></g></g></g><g opacity="1"></g></g><g opacity="1"><g opacity="1" clip-path="url(#clip_53)"><path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25" fill="url(#gradient_27)" stroke="none" d="M 37.84375 44C 37.84375 44 48.24463763266468 44 53.453125 44C 60.73213763266468 44 61.788305804875314 29.989128092443366 69.0625 28.761159732068645C 74.27580580487532 27.88109323815577 79.53544447230219 28.761159732068645 84.671875 27.88109323815577C 92.02294447230217 26.621574609000167 92.94203996020673 14.192094367171203 100.28125 11.850193125702837C 105.42953996020672 10.207402337065474 109.85877218834845 11.724157795797112 115.890625 10.207402337065474C 122.34627218834845 8.584080545515977 131.5 4 131.5 4L 131.5 44C 131.5 44 122.134375 44 115.890625 44C 109.646875 44 106.525 44 100.28125 44C 94.0375 44 90.915625 44 84.671875 44C 78.428125 44 75.30625 44 69.0625 44C 62.818749999999994 44 59.696875 44 53.453125 44C 47.209375 44 37.84375 44 37.84375 44Z"></path></g><g opacity="1" clip-path="url(#clip_54)"><path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1" stroke="#20B26C" fill="none" stroke-linecap="round" stroke-linejoin="round" d="M 37.84375 44C 37.84375 44 48.24463763266468 44 53.453125 44C 60.73213763266468 44 61.788305804875314 29.989128092443366 69.0625 28.761159732068645C 74.27580580487532 27.88109323815577 79.53544447230219 28.761159732068645 84.671875 27.88109323815577C 92.02294447230217 26.621574609000167 92.94203996020673 14.192094367171203 100.28125 11.850193125702837C 105.42953996020672 10.207402337065474 109.85877218834845 11.724157795797112 115.890625 10.207402337065474C 122.34627218834845 8.584080545515977 131.5 4 131.5 4"></path></g></g><g opacity="1"><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g></g></svg>
                    </div>
                    <div class="grid gap-2">
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Trades</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-green-400 text-base">27</h3>
                        </div>
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Win Rate</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-base">100.00%</h3>
                        </div>
                        <div class="flex gap-2 text-gray-500 items-center justify-between">
                            <span class="span_tag">AUM</span>

                            <h3 class="m-0 text-black text-base ">5,748,51</h3>
                        </div>
                        <a class="btn m-0 p-2 open_error"
                           style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"
                                    fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                      fill="white"/>
                            </svg>
                            Copy</a>
                    </div>
                </div>
            </div>

            <div class="swipper_el_traders h-80">
                <div class="p-5">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full " src="assets/images/person/Sicario.jpg" alt="">
                        <div>
                            <div class="flex gap-2">
                                <h3 class="text-black m-0">Sicario</h3>
                                <img src="assets/images/icons/silver.png" class="h-5" alt="">
                            </div>
                            <div class="flex gap-2">
                                <span class="text-gray-500 ">62  Follower(s)</span>
                                <span class="text-green-400 ">0.00%</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swipper_el_traders_content">
                    <div class="text-gray-500 flex items-center gap-2">
                        <span class="span_tag">ROI</span>
                        <span class="swipper_el_tags">70D</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-green-500  m-0">+155.84%</h3>
                        <svg width="132" height="48"
                             style="width: 132px; height: 48px; display: inline-block; vertical-align: middle; cursor: default;">
                            <defs id="defs_25">
                                <linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_25">
                                    <stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop>
                                    <stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop>
                                </linearGradient>
                            </defs>
                            <g opacity="1">
                                <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                      d="M 0,0 l 132,0 l 0,48 l-132 0 z" fill="transparent" stroke="none"></path>
                                <g opacity="1">
                                    <g opacity="1">
                                        <path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1"
                                              fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0"
                                              stroke-dasharray="2,3" fill="none"></path>
                                        <path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1"
                                              fill-opacity="1" d="M 37.84375 4L 131.5 4" stroke="#D5DAE0"
                                              stroke-dasharray="2,3" fill="none"></path>
                                    </g>
                                </g>
                                <g opacity="1">
                                    <g opacity="1">
                                        <path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1"
                                              fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0"
                                              stroke-dasharray="2,3" fill="none"></path>
                                        <g opacity="1"></g>
                                        <g opacity="1"></g>
                                    </g>
                                    <g opacity="1">
                                        <g opacity="1">
                                            <text id="-axis-label-0" alignment-baseline="central" text-anchor="end"
                                                  opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                                  x="29.84375" y="44" font-size="8"
                                                  font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                  font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                  style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">0%
                                            </text>
                                            <text id="-axis-label-401.08" alignment-baseline="central" text-anchor="end"
                                                  opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1"
                                                  x="29.84375" y="4" font-size="8"
                                                  font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal"
                                                  font-variant="normal" fill="#ADB1B8" paint-order="stroke"
                                                  style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">
                                                401.08%
                                            </text>
                                        </g>
                                    </g>
                                </g>
                                <g opacity="1"></g>
                            </g>
                            <g opacity="1">
                                <g opacity="1" clip-path="url(#clip_49)">
                                    <path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25"
                                          fill="url(#gradient_25)" stroke="none"
                                          d="M 37.84375 44C 37.84375 44 47.209375 44 53.453125 44C 59.696875 44 63.35475848377887 44 69.0625 44C 75.84225848377888 44 80.1134441617865 39.57587686290656 84.671875 33.99401615637778C 92.6009441617865 24.28476287068556 91.87482290214176 8.282582434995096 100.28125 5.7722150194474935C 104.36232290214176 4.553505535055351 109.63935024171457 4.908375701776517 115.890625 4.553505535055351C 122.12685024171458 4.199489693997521 131.5 4 131.5 4L 131.5 44C 131.5 44 122.134375 44 115.890625 44C 109.646875 44 106.525 44 100.28125 44C 94.0375 44 90.915625 44 84.671875 44C 78.428125 44 75.30625 44 69.0625 44C 62.818749999999994 44 59.696875 44 53.453125 44C 47.209375 44 37.84375 44 37.84375 44Z"></path>
                                </g>
                                <g opacity="1" clip-path="url(#clip_50)">
                                    <path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1"
                                          stroke="#20B26C" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                          d="M 37.84375 44C 37.84375 44 47.209375 44 53.453125 44C 59.696875 44 63.35475848377887 44 69.0625 44C 75.84225848377888 44 80.1134441617865 39.57587686290656 84.671875 33.99401615637778C 92.6009441617865 24.28476287068556 91.87482290214176 8.282582434995096 100.28125 5.7722150194474935C 104.36232290214176 4.553505535055351 109.63935024171457 4.908375701776517 115.890625 4.553505535055351C 122.12685024171458 4.199489693997521 131.5 4 131.5 4"></path>
                                </g>
                            </g>
                            <g opacity="1">
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                                <g opacity="1"></g>
                            </g>
                        </svg>
                    </div>
                    <div class="grid gap-2">
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Trades</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-green-400 text-base">510</h3>
                        </div>
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Win Rate</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-base">100.00%</h3>
                        </div>
                        <div class="flex gap-2 text-gray-500 items-center justify-between">
                            <span class="span_tag">AUM</span>

                            <h3 class="m-0 text-black text-base">10,353,15</h3>
                        </div>
                        <a class="btn m-0 p-2 open_error"
                           style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"
                                    fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                      fill="white"/>
                            </svg>
                            Copy</a>
                    </div>
                </div>
            </div>

            <div class="swipper_el_traders h-80">
                <div class="p-5">
                    <div class="flex items-center gap-5">
                        <img class="rounded-full " src="assets/images/person/Maetae25.jpg" alt="">
                        <div>
                            <div class="flex gap-2">
                                <h3 class="text-black m-0">Maetae25</h3>
                                <img src="assets/images/icons/silver.png" class="h-5" alt="">
                            </div>
                            <div class="flex gap-2">
                                <span class="text-gray-500 ">18  Follower(s)</span>
                                <span class="text-red-400 ">-5.26%</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swipper_el_traders_content">
                    <div class="text-gray-500 flex items-center gap-2">
                        <span class="span_tag">ROI</span>
                        <span class="swipper_el_tags">70D</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-green-500  m-0">+475.18%
                        </h3>
                        <svg width="132" height="48" style="width: 132px; height: 48px; display: inline-block; vertical-align: middle; cursor: default;"><defs id="defs_30"><linearGradient x1="1" y1="0" x2="1" y2="0.9999999999999999" id="gradient_30"><stop offset="0" stop-color="rgba(32, 178, 108, 1)"></stop><stop offset="0.98" stop-color="rgba(255, 255, 255)"></stop></linearGradient></defs><g opacity="1"><path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 0,0 l 132,0 l 0,48 l-132 0 z" fill="transparent" stroke="none"></path><g opacity="1"><g opacity="1"><path id="-grid-line-0" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path><path id="-grid-line-1" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 4L 131.5 4" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path></g></g><g opacity="1"><g opacity="1"><path id="-axis-line" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" d="M 37.84375 44L 131.5 44" stroke="#D5DAE0" stroke-dasharray="2,3" fill="none"></path><g opacity="1"></g><g opacity="1"></g></g><g opacity="1"><g opacity="1"><text id="-axis-label-0" alignment-baseline="central" text-anchor="end" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" x="29.84375" y="44" font-size="8" font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal" font-variant="normal" fill="#ADB1B8" paint-order="stroke" style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">0%</text><text id="-axis-label-475.17" alignment-baseline="central" text-anchor="end" opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="1" x="29.84375" y="4" font-size="8" font-family="&quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial,
                                    &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;,
                                    &quot;Noto Color Emoji&quot;" font-style="normal" font-weight="normal" font-variant="normal" fill="#ADB1B8" paint-order="stroke" style="stroke-linecap:butt; stroke-linejoin:miter;" stroke="none">475.17%</text></g></g></g><g opacity="1"></g></g><g opacity="1"><g opacity="1" clip-path="url(#clip_59)"><path opacity="1" stroke-width="1" stroke-opacity="1" fill-opacity="0.25" fill="url(#gradient_30)" stroke="none" d="M 37.84375 44C 37.84375 44 47.48793324691883 44 53.453125 44C 59.97543324691883 44 63.39222759753205 40.77079156573064 69.0625 37.09804911926258C 75.87972759753205 32.682402147206744 79.0668958430587 29.72141285445538 84.671875 23.779026453690257C 91.5543958430587 16.482193206750335 92.57056652656843 4 100.28125 4C 105.05806652656842 4 109.646875 4 115.890625 4C 122.134375 4 131.5 4 131.5 4L 131.5 44C 131.5 44 122.134375 44 115.890625 44C 109.646875 44 106.525 44 100.28125 44C 94.0375 44 90.915625 44 84.671875 44C 78.428125 44 75.30625 44 69.0625 44C 62.818749999999994 44 59.696875 44 53.453125 44C 47.209375 44 37.84375 44 37.84375 44Z"></path></g><g opacity="1" clip-path="url(#clip_60)"><path opacity="1" stroke-width="1.5" stroke-opacity="1" fill-opacity="1" stroke="#20B26C" fill="none" stroke-linecap="round" stroke-linejoin="round" d="M 37.84375 44C 37.84375 44 47.48793324691883 44 53.453125 44C 59.97543324691883 44 63.39222759753205 40.77079156573064 69.0625 37.09804911926258C 75.87972759753205 32.682402147206744 79.0668958430587 29.72141285445538 84.671875 23.779026453690257C 91.5543958430587 16.482193206750335 92.57056652656843 4 100.28125 4C 105.05806652656842 4 109.646875 4 115.890625 4C 122.134375 4 131.5 4 131.5 4"></path></g></g><g opacity="1"><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g><g opacity="1"></g></g></svg>
                    </div>
                    <div class="grid gap-2">
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Trades</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-green-400 text-base">24</h3>
                        </div>
                        <div class="justify-between flex gap-2 text-gray-500 items-center">
                            <div>
                                <span class="span_tag">Win Rate</span>
                                <span class="swipper_el_tags">30D</span>
                            </div>
                            <h3 class="m-0 text-black text-base">100.00%</h3>
                        </div>
                        <div class="flex gap-2 text-gray-500 items-center justify-between">
                            <span class="span_tag">AUM</span>

                            <h3 class="m-0 text-black text-base">3,430,00</h3>
                        </div>
                        <a class="btn m-0 p-2 open_error"
                           style="background: linear-gradient(90deg, #3F00F4 0%, #30ACFF 100%);">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"
                                    fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M10.8769 17.3676C10.3806 17.6028 9.84967 17.7804 9.29191 17.9004C9.49351 17.7161 9.66823 17.4972 9.80359 17.2534C10.0222 16.8599 10.1365 16.4171 10.1358 15.967C10.1373 15.4493 9.98596 14.9427 9.70086 14.5107L7.69735 11.3033L5.69479 14.5097C5.40882 14.9421 5.25719 15.4495 5.25895 15.9679C5.25895 16.4364 5.37991 16.8751 5.59111 17.2534C5.72743 17.4972 5.90119 17.7151 6.10375 17.9004C5.5572 17.7836 5.02577 17.6049 4.51975 17.3676C2.29351 16.3155 0.768066 14.1967 0.768066 11.7564C0.768066 8.88601 2.51623 7.43065 5.37607 4.61113C7.85287 2.16697 7.69159 0.269055 7.69351 0.262335C7.66855 0.229695 7.91431 0.462015 8.16103 0.786494C8.1255 0.740415 10.0359 2.87545 10.3671 5.35417C10.5994 7.09465 10.1348 8.43577 10.1348 8.43577C10.1348 8.43577 11.2705 8.10938 11.6612 6.70777C11.7284 6.47161 11.7553 6.14713 11.7745 6.04057C11.7745 6.04057 12.409 6.73657 13.2654 7.97497C14.1207 9.21433 14.6266 10.4652 14.6266 11.7555C14.6286 14.1958 13.1022 16.3155 10.8769 17.3676Z"
                                      fill="white"/>
                            </svg>
                            Copy</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="w-100">
            <div class="">
                <a  style="width: 100%;" class="btn open_error">View All Master Traders
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="24" viewBox="0 0 17 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3.36621 11.9995C3.36621 11.4472 3.66469 10.9995 4.03287 10.9995H13.3662C13.7344 10.9995 14.0329 11.4472 14.0329 11.9995C14.0329 12.5518 13.7344 12.9995 13.3662 12.9995H4.03287C3.66469 12.9995 3.36621 12.5518 3.36621 11.9995Z"
                              fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M8.22943 4.29337C8.48977 3.90286 8.9119 3.90286 9.17223 4.29337L13.8389 11.2934C14.0992 11.6839 14.0992 12.3171 13.8389 12.7076L9.17223 19.7076C8.9119 20.098 8.48977 20.098 8.22943 19.7076C7.9691 19.3171 7.9691 18.6838 8.22943 18.2934L12.4247 12.0005L8.22943 5.7076C7.9691 5.31706 7.9691 4.68391 8.22943 4.29337Z"
                              fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>
<?=render_footer()?>
</body>

<script src="assets/scripts/main.js"></script>
<script src="assets/scripts/animated-accordion-2.js"></script>
<script defer src="assets/scripts/itc-slider.js"></script>
<script>


    var swiperContainer = document.querySelector('.mySwiper');


    function updateSlidesPerView() {
        var windowWidth = window.innerWidth;


        var slidesPerView;

        if (windowWidth >= 1000) {
            slidesPerView = 3;
        } else if (windowWidth >= 700) {
            slidesPerView = 2;
        } else {
            slidesPerView = 1;
        }

        swiperContainer.setAttribute('slides-per-view', slidesPerView);
    }

    window.addEventListener('load', updateSlidesPerView);
    window.addEventListener('resize', updateSlidesPerView);

    var mySwiper = new Swiper('.mySwiper', {

        slidesPerView: swiperContainer.getAttribute('slides-per-view'),
        spaceBetween: 30,
        grabCursor: true,

    });
</script>

</html>