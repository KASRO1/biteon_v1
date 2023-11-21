<?php
require $_SERVER['DOCUMENT_ROOT'] . "/api/init.php";

$BTC = get_assets_coin("BTC_USDT");
$ETH = get_assets_coin("ETH_USDT");
$DOGE = get_assets_coin("DOGE_USDT");
$TRX = get_assets_coin("TRX_USDT");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title ><?=$domain_titleINIT?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">

    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/styles/output.css">
</head>
<style>
    svg{
        stroke: none;
    }
    .footer-links__box a:hover{
        color: white;
    }
</style>
<body>
    <header>
        <div class="logo">
            <img src="assets/images/logo.svg" class="logo_img" alt="logo">
            <h3 class="logo_name" ><?=$domain_titleINIT?></h3>
        </div>
        <div class="menu">
            <ul>
                <li class="has-submenu"><a href="#">Buy crypto</a>
                    <ul class="submenu">
                        <li>
                            <a href="/deposit.php">Credit / debit card</a>
                            <span>Quick purchase of crypto</span>
                        </li>
                        <li>
                            <a href="/p2p">P2P trade</a>
                            <span>Trade with real users</span>
                        </li>
                        <li>
                            <a href="pages/contact.php">Refill with cryptocurrency</a>
                            <span>Deposit in minutes</span>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu"><a href="#">Trade</a>
                    <ul class="submenu">
                        <li>
                            <a href="/spot">Spot Trading</a>
                            <span>Buy and hold crypto</span>
                        </li>
                        <li>
                            <a href="/login">Futures Trading</a>
                            <span>Perpetual contracts settled in crypto</span>
                        </li>
                        <li>
                            <a href="/login">Options Trading</a>
                            <span>Trade European-style options</span>
                        </li>
                    </ul>
                </li>
                <li><a href="/swap">Swap</a></li>
                <li><a href="/support">Support</a></li>
            </ul>
        </div>
        <div class="login_block">

            <a href="/login" class="login">Log in</a>
            <a href="/register" class="register">Open Free Account</a>
            <a href=""><img src="assets/images/burger.svg" alt=""></a>

        </div>

    </header>
    <main>
        <section class="box-1">
            <div class="row box-1_title_content">
                <div>
                    <h1>
                        Invest, save, earn with crypto
                    </h1>
                </div>
                <div>
                    <p class="description">
                        Get all the benefits of an innovative crypto platform in one click
                        Faster, better, safer and more efficient with crypto
                    </p>
                </div>
                <div class="SignUpButton_div">
                    <a href="register" id="SignUpButton" class="btn SignUpButton"><span class="">Sign Up
                            Now</span><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9"
                            fill="none">
                            <circle cx="4.5" cy="4.5" r="4.5" fill="white" fill-opacity="0.3" />
                            <path d="M7 4.5L3.25 2.33494L3.25 6.66506L7 4.5Z" fill="white" fill-opacity="0.8" />
                        </svg></a>
                </div>
            </div>
            <div class="row image ">

                <img class="phone_image" src="assets/images/phone_image1.png" alt="s">

            </div>
        </section>
        <section class="box-2">
            <div class="glow-green"></div>
            <div class="element_pick cl1 cl_right">
                <img class="icon" src="assets/images/icons/eth.svg" alt="">
            </div>
            <div class="element_pick cl2 cl_right">
                <img class="icon" src="assets/images/icons/btc.svg" alt="">
            </div>
            <div class="element_pick cl1 cl_right">
                <img class="icon" src="assets/images/icons/icon1.svg" alt="">
            </div>
            <div class="element_pick cl2 cl_left">
                <img class="icon" src="assets/images/icons/icon2.svg" alt="">
            </div>
            <div class="element_pick cl1 cl_left">
                <img class="icon" src="assets/images/icons/icon4.svg" alt="">

            </div>
            <div class="glow"></div>
            <div class="element_pick cl2 cl_right">
                <img class="icon" src="assets/images/icons/icon5.svg" alt="">
            </div>
            <div class="element_pick cl1 cl_left">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M21.3014 10.9022C21.3014 16.5212 16.711 21.0827 11.0406 21.0827C5.37018 21.0827 0.779785 16.5212 0.779785 10.9022C0.779785 5.28318 5.37018 0.72168 11.0406 0.72168C16.711 0.72168 21.3014 5.28318 21.3014 10.9022Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.8916 10.902C4.8916 7.53631 7.64967 4.79883 11.0406 4.79883C14.4316 4.79883 17.1897 7.53631 17.1897 10.902C17.1897 14.2677 14.4316 17.0051 11.0406 17.0051C7.64967 17.0051 4.8916 14.2677 4.8916 10.902ZM5.90644 10.902C5.90644 13.7126 8.20892 15.9979 11.0406 15.9979C13.8724 15.9979 16.1748 13.7126 16.1748 10.902C16.1748 8.09139 13.8724 5.80609 11.0406 5.80609C8.20892 5.80609 5.90644 8.09139 5.90644 10.902ZM13.2339 8.0698V8.99854L10.6314 12.5023H13.2339V13.7343H11.5562V14.7551H10.525V13.7343H8.84722V12.8056L11.4471 9.3018H8.84722V8.0698H10.525V7.04629H11.5562V8.0698H13.2339Z" fill="white"/>
                </svg>
            </div>
            <div class="element_pick cl2 cl_left">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M21.1496 11.0975C21.1496 16.7165 16.5592 21.278 10.8888 21.278C5.21832 21.278 0.62793 16.7165 0.62793 11.0975C0.62793 5.47849 5.21832 0.916992 10.8888 0.916992C16.5592 0.916992 21.1496 5.47849 21.1496 11.0975Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33058 16.6847H11.0456H11.0457C11.0457 16.6847 16.2694 17.1262 16.2694 11.1875C16.2694 5.47901 11.4992 5.49926 10.5773 5.50317C10.5557 5.50326 10.5362 5.50335 10.519 5.50335H7.33048V10.4841H6.021V11.7042H7.33058V16.6847ZM9.42308 7.57008H10.8888C11.437 7.57008 14.1951 7.79259 14.1995 11.2277C14.2038 14.6219 11.4231 14.6184 10.9758 14.6178C10.9704 14.6178 10.9653 14.6178 10.9606 14.6178H9.42308V11.7041H11.7291V10.484H9.42308V7.57008Z" fill="white"/>
                </svg>
            </div>
            <div class="element_pick cl1 cl_right">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M21.3014 10.9022C21.3014 16.5212 16.711 21.0827 11.0406 21.0827C5.37018 21.0827 0.779785 16.5212 0.779785 10.9022C0.779785 5.28318 5.37018 0.72168 11.0406 0.72168C16.711 0.72168 21.3014 5.28318 21.3014 10.9022Z" stroke="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.8916 10.902C4.8916 7.53631 7.64967 4.79883 11.0406 4.79883C14.4316 4.79883 17.1897 7.53631 17.1897 10.902C17.1897 14.2677 14.4316 17.0051 11.0406 17.0051C7.64967 17.0051 4.8916 14.2677 4.8916 10.902ZM5.90644 10.902C5.90644 13.7126 8.20892 15.9979 11.0406 15.9979C13.8724 15.9979 16.1748 13.7126 16.1748 10.902C16.1748 8.09139 13.8724 5.80609 11.0406 5.80609C8.20892 5.80609 5.90644 8.09139 5.90644 10.902ZM13.2339 8.0698V8.99854L10.6314 12.5023H13.2339V13.7343H11.5562V14.7551H10.525V13.7343H8.84722V12.8056L11.4471 9.3018H8.84722V8.0698H10.525V7.04629H11.5562V8.0698H13.2339Z" fill="white"/>
                </svg>
            </div>

            <div class="element_pick cl2 cl_right">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                    <path d="M21.3683 11.0144L21.3683 11.016C21.3753 16.5824 16.8284 21.194 11.1093 21.194C5.39065 21.194 0.843185 16.5791 0.846682 11.0084C0.850179 5.43737 5.39045 0.833008 11.113 0.833008C16.8354 0.833008 21.3788 5.45147 21.3683 11.0144Z" stroke="white"/>
                    <path d="M19.3794 12.3415C19.361 12.3051 19.3757 12.276 19.3757 12.2468C19.4381 11.6129 19.0306 11.0518 18.414 10.9206C18.0102 10.8368 17.6504 10.9498 17.3421 11.2121C16.9677 11.5291 16.6116 11.8679 16.2592 12.2104C15.8297 12.6294 15.4088 13.0556 14.9965 13.4892C14.7065 13.7952 14.3688 14.0321 13.965 14.1705C12.8271 14.5567 11.5827 13.9519 11.1495 12.9026C11.0981 12.7751 11.1018 12.7496 11.2046 12.6622C11.4432 12.4545 11.6855 12.2505 11.9241 12.0428C11.9314 12.0355 11.9387 12.0319 11.9461 12.0246C11.9755 12.0064 11.9975 11.9626 12.0342 11.9809C12.0709 11.9991 12.0489 12.0391 12.0525 12.0683C12.067 12.35 12.1802 12.6178 12.3726 12.8253C12.565 13.0329 12.8244 13.1672 13.106 13.205C13.6897 13.2852 14.2733 12.9318 14.4495 12.378C14.6588 11.7222 14.3101 11.07 13.6346 10.8551C13.2235 10.7239 12.8491 10.8113 12.5224 11.0809C12.2544 11.2995 11.9975 11.5291 11.7369 11.7586C11.5643 11.9116 11.3918 12.0683 11.2156 12.2177C11.1484 12.2749 11.103 12.3534 11.0871 12.4399C10.9476 13.1431 10.5512 13.6677 9.9235 14.0138C9.53041 14.2314 9.07872 14.3218 8.63139 14.2725C8.1449 14.2312 7.68504 14.0343 7.32093 13.7114C7.0635 13.4873 6.86238 13.2066 6.73361 12.8917C6.72591 12.8766 6.71976 12.8607 6.71526 12.8443C6.70234 12.8177 6.69931 12.7874 6.7067 12.7587C6.71408 12.73 6.73141 12.7049 6.75564 12.6877C6.84006 12.6184 6.92082 12.5492 7.00525 12.48C7.17777 12.3306 7.3503 12.1812 7.5265 12.0355C7.55586 12.01 7.58523 11.9663 7.62194 11.9809C7.65864 11.9954 7.64396 12.0464 7.64763 12.0829C7.65613 12.3578 7.75676 12.6221 7.93361 12.834C8.11045 13.0458 8.35342 13.193 8.62405 13.2524C8.93006 13.3171 9.24942 13.2634 9.51687 13.1022C9.78431 12.941 9.97966 12.6846 10.063 12.3853C10.2832 11.5801 9.64085 10.7858 8.80392 10.8259C8.54886 10.8334 8.30405 10.9272 8.11015 11.0919C7.87155 11.2886 7.63662 11.4926 7.40536 11.6967C7.16676 11.9043 6.93183 12.1157 6.69323 12.3233C6.66124 12.3492 6.63567 12.3821 6.61849 12.4194C6.6013 12.4566 6.59297 12.4973 6.59412 12.5383V14.1195C6.59412 14.2689 6.5721 14.2907 6.4216 14.2871C6.28016 14.287 6.1404 14.2567 6.01182 14.1983C5.88323 14.1398 5.76884 14.0545 5.67643 13.9483C5.60302 13.8645 5.58834 13.8645 5.48923 13.9191C5.12582 14.1195 4.74039 14.2288 4.3256 14.2142C3.47398 14.1851 2.82426 13.8025 2.38377 13.0775C2.17639 12.7358 2.06957 12.3433 2.07542 11.9444C2.07582 11.4208 2.26162 10.914 2.60034 10.5126C2.94539 10.0936 3.38588 9.82034 3.92548 9.7329C4.64495 9.61995 5.30569 9.75111 5.85997 10.2503C6.03609 10.4096 6.18925 10.5923 6.31515 10.7931C6.3332 10.8335 6.36417 10.8668 6.40324 10.8878C6.43016 10.8707 6.45211 10.8469 6.46692 10.8188C6.48173 10.7907 6.48888 10.7592 6.48767 10.7275C6.484 10.3668 6.48767 10.0061 6.48767 9.64181C6.48767 8.82205 6.48645 8.00351 6.484 7.18618C6.484 7.02587 6.50235 7.00766 6.66754 7.00766C6.91112 7.00795 7.14606 7.09727 7.32752 7.25855C7.50898 7.41984 7.62424 7.6418 7.6513 7.88207C7.65863 7.94008 7.6623 7.99848 7.66231 8.05695V9.96971C7.66598 10.0572 7.68434 10.0681 7.76509 10.028C8.00108 9.90396 8.25691 9.82137 8.52127 9.7839C9.17834 9.69282 9.76566 9.85677 10.2869 10.2648C10.4614 10.404 10.6136 10.5686 10.7384 10.753C10.7457 10.766 10.7543 10.7782 10.7641 10.7895C10.7898 10.8259 10.8118 10.866 10.8595 10.8733C10.8852 10.8769 10.9587 10.7822 10.9623 10.7421C10.9685 10.6926 10.971 10.6426 10.9697 10.5927V8.03144C10.9697 7.50316 11.3 7.10603 11.825 7.00766C11.8827 6.99421 11.9419 6.98809 12.0011 6.98944C12.0782 6.99308 12.1113 7.02223 12.1296 7.0951C12.1418 7.15256 12.1467 7.21131 12.1443 7.26998V9.96243C12.1516 10.0098 12.1663 10.0244 12.2141 10.0061C12.2765 9.98064 12.3389 9.9515 12.4013 9.92599C13.2822 9.57623 14.2697 9.78754 14.9084 10.4652C15.1227 10.6944 15.2899 10.963 15.4003 11.2558L15.4223 11.3214C15.459 11.4161 15.47 11.4198 15.5471 11.3505L16.5822 10.4434C16.8724 10.1808 17.2247 9.99532 17.6064 9.90413C18.1421 9.77962 18.7051 9.85063 19.1924 10.1042C19.6797 10.3577 20.0588 10.7768 20.2603 11.285C20.2814 11.3265 20.2879 11.3739 20.2785 11.4195C20.2692 11.4651 20.2447 11.5063 20.209 11.5364C19.9557 11.7841 19.7097 12.0355 19.4565 12.2869C19.4349 12.3102 19.4086 12.3289 19.3794 12.3415Z" fill="white"/>
                    <path d="M18.3847 13.3285C18.3838 13.3424 18.3797 13.3558 18.3727 13.3678C18.3657 13.3798 18.3559 13.3901 18.3443 13.3977C18.0763 13.6637 17.8084 13.9297 17.5441 14.1993C17.5225 14.2244 17.4933 14.2419 17.4609 14.2491C17.4284 14.2563 17.3945 14.2529 17.3642 14.2393C16.7328 14.0062 16.2862 13.5823 16.0244 12.9678C15.984 12.8767 15.9913 12.8476 16.0648 12.7856C16.3254 12.5598 16.5897 12.3339 16.8503 12.1116C16.8668 12.0933 16.8886 12.0806 16.9127 12.0752C16.9384 12.1007 16.9311 12.1335 16.9347 12.1626C16.9479 12.334 16.9914 12.5017 17.0632 12.6581C17.2357 13.0152 17.5294 13.2192 17.9075 13.3103C17.9881 13.3285 18.0708 13.3359 18.1534 13.3321C18.2268 13.3249 18.3039 13.3285 18.3847 13.3285Z" fill="white"/>
                    <path d="M5.59237 11.9739C5.61072 12.6225 5.05277 13.1872 4.37368 13.1945C4.04923 13.1961 3.73733 13.0702 3.50619 12.8442C3.27506 12.6182 3.14351 12.3105 3.14031 11.9885C3.12929 11.3254 3.65421 10.757 4.37368 10.7425C5.03809 10.7279 5.59604 11.2671 5.59237 11.9739Z" fill="#1E2F41"/>
                </svg>
            </div>

        </section>

        <section class="box-4">

            <div class="box-4_content">
                <div class="container">
                    <div>
                        <h1>
                            Working with us is
                        </h1>
                    </div>
                    <div >
                        <p class= "flex gap-3 items-center mb-8">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                viewBox="0 0 9 9" fill="none">
                                <circle cx="4.5" cy="4.5" r="4.5" fill="white" fill-opacity="0.3" />
                                <path d="M7 4.5L3.25 2.33494L3.25 6.66506L7 4.5Z" fill="white" fill-opacity="0.8" />
                            </svg>Every day we get better for you
                        </p>
                    </div>

                </div>
                <div id="static_block" class="row image ">
                    <img  src="assets/images/static.svg" alt="s">
                </div>
                <div id="static_block1" class="row image ">
                    <img class=" static_image" src="assets/images/block_static1.svg">
                    <img class=" static_image" src="assets/images/block_static2.svg">
                    <img class=" static_image" src="assets/images/block_static3.svg">
                </div>

            </div>


        </section>
        <section class="box-5">
            <div id="counter_block" class="row">
                <div>
                    <h1>
                        Create your crypto account and begin trading
                    </h1>
                </div>
                <div class="elements_counter">
                    <div class="element_counter">
                        <img src="assets/images/1.svg" alt="">
                        <div>
                            <h3>Privacy Protection</h3>
                            <p class="description">
                                We integrate a privacy-first approach in all our products and services
                            </p>
                        </div>
                    </div>
                    <div class="element_counter">
                        <img src="assets/images/2.svg" alt="">
                        <div>
                            <h3>Secure Asset Fund for Users</h3>
                            <p class="description">
                                We stores 10% of all trading fees in a secure asset fund to protect a share of user
                                funds
                            </p>
                        </div>
                    </div>
                    <div class="element_counter">
                        <img src="assets/images/3.svg" alt="">
                        <div>
                            <h3>Advanced Data Protection</h3>
                            <p class="description">
                                The data is encrypted using innovative technologies. Your funds are always safe
                            </p>
                        </div>
                    </div>
                </div>
                <div class="counter_button text-center">
                    <a href="/wallet" class=" btn-shadow w-100 flex text-white">Get started now</a>
                </div>
            </div>
            <div class="row image" id="notebook_image">
                <img class="phone_image" src="assets/images/notebook.png" alt="s">
            </div>
        </section>
        <section class="box-6">
            <img class="line_image scale-y-250" src="assets/images/line.svg" alt="">
        </section>
        <section class="box-7">
            <div class="flex ">
                <h2 class="">
                    Don't miss new opportunities
                </h2>
                <a href="" class="text-gray-400"> See All Markets → </a>
            </div>
            <div class="pretable">

                <table class="table">

                    <tr class="line"></tr>

                    <tr class="heading__table ">
                        <th>Token</th>
                        <th>Last price (USDT)</th>
                        <th>Change</th>
                        <th>24h Vol</th>
                        <th>Markets</th>
                    </tr>

                    <tr class="line"></tr>

                    <tr>
                        <td><img src="assets/images/icons/star-one.svg" class="star mr-2" alt="">
                            <img src="assets/images/icons/crypto/Bitcoin (BTC).png" class="mr-2" alt="">
                            BTC
                        </td>
                        <td><?=number_format($BTC['lastPrice'], 2)?></td>
                        <td><?=$BTC['priceChangePercent']?>%</td>
                        <td><?=$BTC['quoteVolume']?></td>
                        <td><img src=" assets/images/schedule.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td><img src="assets/images/icons/star-one.svg" class="star mr-2" alt="">
                            <img src="assets/coin_icons/etc.svg" class="mr-2" alt="">
                            ETH
                        </td>
                        <td><?=number_format($ETH['lastPrice'], 2)?></td>
                        <td><?=$ETH['priceChangePercent']?>%</td>
                        <td><?=$ETH['quoteVolume']?></td>
                        <td><img src=" assets/images/schedule.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td><img src="assets/images/icons/star-one.svg" class="star mr-2" alt="">
                            <img src="assets/coin_icons/doge.svg" class="mr-2" alt="">
                            DOGE
                        </td>
                        <td><?=number_format($DOGE['lastPrice'], 2)?></td>
                        <td><?=$DOGE['priceChangePercent']?>%</td>
                        <td><?=$DOGE['quoteVolume']?></td>
                        <td><img src=" assets/images/schedule.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td><img src="assets/images/icons/star-one.svg" class="star mr-2" alt="">
                            <img src="assets/coin_icons/trx.svg" class="mr-2" alt="">
                            TRX
                        </td>
                        <td><?=number_format($TRX['lastPrice'], 2)?></td>
                        <td><?=$TRX['priceChangePercent']?>%</td>
                        <td><?=$TRX['quoteVolume']?></td>
                        <td><img src=" assets/images/schedule.svg" alt="">
                        </td>
                    </tr>

                </table>
                <div class="footer_table flex text-center">
                    <a href="/wallet" class="px-25 flex gap-3 btn-shadow text-white"> <img class="h-4"
                            src="assets/images/icons/log.svg" alt=""> Open a portfolio</a>
                    <div class="vertical-line"></div>
                    <span class="porfolio_text">Sign up now to create your one portfolio for free
                    </span>
                </div>
            </div>
        </section>
        <section class="box-8">
            <div class="row">
                <div class="title_box8">
                    <h1>
                        Our advantages
                    </h1>
                    <p>
                        These features will help you achieve results
                    </p>
                </div>
                <div>
                    <div class="flex our_advantages">
                        <div class="table_our_advant">

                            <div class="info-card">
                                <div class="flex space-beetween info-card_item">
                                    <h3>Copy
                                        Trading</h3>
                                    <span class=" info-card_counter">01</span>
                                </div>
                                <div class="info-card_line"></div>
                                <div class="info-card-description__block">
                                    <p class="info-card-description__text">
                                        Repeat the trades of
                                        the best traders
                                        and get profit
                                    </p>
                                </div>

                                <div class="flex justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="36" viewBox="0 0 47 36" fill="none">
                                        <ellipse cx="1.46875" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                      </svg>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="flex space-beetween info-card_item">
                                    <h3>Trading
                                        Bots</h3>
                                    <span class=" info-card_counter">02</span>
                                </div>
                                <div class="info-card_line"></div>
                                <div class="info-card-description__block">
                                    <p class="info-card-description__text">
                                        Use a trading bots to
                                        diversify your asset
                                        management
                                    </p>
                                </div>
                                <div class="flex justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="36" viewBox="0 0 47 36" fill="none">
                                        <ellipse cx="1.46875" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                      </svg>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="flex space-beetween info-card_item">
                                    <h3>DeFi
                                        Staking</h3>
                                    <span class=" info-card_counter">03</span>
                                </div>
                                <div class="info-card_line"></div>
                                <div class="info-card-description__block">
                                    <p class="info-card-description__text">
                                        Get profit by investing in
                                        reliable project
                                    </p>
                                </div>
                                <div class="flex justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="36" viewBox="0 0 47 36" fill="none">
                                        <ellipse cx="1.46875" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                      </svg>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="flex space-beetween info-card_item">
                                    <h3>Personal
                                        Manager</h3>
                                    <span class=" info-card_counter">04</span>
                                </div>
                                <div class="info-card_line"></div>
                                <div class="info-card-description__block">
                                    <p class="info-card-description__text">
                                        Personal manager
                                        will advise on any
                                        question 24/7
                                    </p>
                                </div>
                                <div class="flex justify-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="36" viewBox="0 0 47 36" fill="none">
                                        <ellipse cx="1.46875" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="23.5104" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="1.46875" cy="34.5304" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="12.4899" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="12.4844" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="23.5" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="34.5156" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                        <ellipse cx="45.5312" cy="1.46939" rx="1.46875" ry="1.46939" fill="#A1A1B8" fill-opacity="0.1"/>
                                      </svg>
                                </div>
                            </div>



                        </div>
                        <div class="flex items-center from_any_device">
                            <div>
                                <h2 class="mb-0">Work from any device</h2>
                                <p class="mb-8">
                                    Our platform is adepted to any device, switching is 100% seamless
                                </p>
                                <a href="/wallet" class="btn w-52 flex justify-center">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="box-9">
            <div class="box9_content">
            <h3 class="font-normal ">Processing transactions on 80+ networks</h3>
            <div class="logos_table">
                <img src="assets/images/icons/crypto/full_logos/logo_eth.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_solana.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_arbitrum.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_celo.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_zilliqa.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_fantom.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_near.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_avalanche.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_vels.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_polkadot.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_harmony.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_polygon.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_binance.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_ronin.svg" alt="">
                <img src="assets/images/icons/crypto/full_logos/logo_optimism.svg" alt="">

            </div>
        </div>
        </section>

    </main>
    <footer>
        <section class="footer_box1">
            <div class="footer-box__card">
                <div class="footer-box__content">
                    <h1 class="">
                        Trade anywhere and anytime with us
                    </h1>
                    <p>Enjoy the convenience of <span ><?=$domain_titleINIT?></span>’s crypto trading platform.
                        Make money on cryptocurrency anytime, anywhere as valuable.</p>
                    <div class="footer-box__button">
                        <a href="" class="btn">Get started now</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-links mb-6">
            <div class="footer-links__box max-w-xs">
                <div class="logo justify-start">
                    <img src="assets/images/logo.svg" class="logo_img" alt="logo">
                    <h3 class="logo_name" ><?=$domain_titleINIT?></h3>
                </div>
                <div class="footer_desc">
                    <p>
                        Innovative cryptocurrency exchange with
                        advanced financial services. We rely on
                        blockchain technology to provide
                        everything you need for wise trading and
                        investment.
                    </p>
                </div>
                <div class="footer_subscribe">
                    <p class="text-lg">Subscribe to our newsletter</p>
                    <div class="footer_enter">
                        <input type="text" placeholder="Enter email">
                        <button class="btn">Subscribe</button>
                    </div>

                </div>
            </div>
            <div class="footer-links__box">
                <h3>Products</h3>
                <ul>
                    <li><a href="/spot">Spot trading</a></li>
                    <li>Futures trading</li>
                    <li>Options trading</li>
                    <li><a href="/wallet">Wallet</a></li>
                    <li><a href="/swap">Instant swap</a></li>
                    <li><a href="/p2p">P2P trading</a></li>
                    <li><a href="/staking">DeFi Staking</a></li>
                    <li><a href="/future_payment"></a></li>
                </ul>
            </div>
            <div class="footer-links__box">
                <h3>Services</h3>
                <ul>
                    <li><a href="support">24/7 support chat</a></li>
                    <li><a href="copyTrading">Copy trading</a></li>
                    <li><a href="tradingBots">Trading bots</a></li>
                    <li><a href="participate">ETH 2.0 staking</a></li>
                    <li><a href="launchpad">Launchpad</a></li>
                    <li><a href="savings">Savings</a></li>
                    <li><a href="ventures"><span ><?=$domain_titleINIT?></span> ventures</a></li>
                    <li>Buy crypto</li>
                </ul>
            </div>
            <div class="footer-links__box">
                <h3>Information</h3>
                <ul>
                    <li><a href="fees">Fees</a></li>
                    <li><a href="status">Platform status</a></li>
                    <li>Wallet security</li>
                    <li><a href="moon">Token listing</a></li>
                    <li><a href="traveller">Referal system</a></li>
                    <li>Trading API</li>
                    <li>Buy Bountry</li>

                </ul>
            </div>
            <div class="footer-links__box">
                <h3>Legal</h3>
                <ul>
                    <li><a href="">Tearms of service</a></li>
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
                In acceding to or using the Platform and the Site, you represent and warrant that you are fully aware of
                the risks associated with the transactions involving Digital Assets or the use of Platform. You agree
                and understand that you are solely responsible
                for determining the nature, potential value, suitability, and appropriateness of these risks for
                yourself, and that the Company does not give advice or recommendations regarding any Digital Asset,
                including the suitability and appropriateness of, and
                investment strategies for, any Digital Asset. You agree and understand that you access and use the
                Platform and the Site at your own risk.
                <span ><?=$domain_titleINIT?></span> 2023 © All right reserved
            </p>
        </div>
    </footer>


</body>
<script src="assets/scripts/main.js"></script>

</html>