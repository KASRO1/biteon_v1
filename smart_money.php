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
    <script src="assets/scripts/10_swiper-element-bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
<?= render_header() ?>
<main class="mb-96 p-0">
    <section class="bg_dark smart_money_header p-10">
        <div class="flex mb-20 smart_money_content">
            <div class="smart_money_content_block">
                <h1 class=" font-bold " style="line-height: 3.5rem !important">Where smart
                    money moves</h1>
                <p class="text-base mb-10"><?= $domain_titleINIT ?> offers the world's most
                    powerful suite of institutional
                    crypto trading solutionsThe world's largest digital marketplace for crypto collectibles and
                    non-fungible
                    tokens</p>

            </div>
            <div class="justify-center flex w-100">
                <img src="assets/images/bg/smart_moves.png" alt="">
            </div>
        </div>

    </section>
    <section class="top_tradersROI slider_smart_money_">
        <section class="flex justify-between">
            <div class="w-100 text-center slider_smart_money_h3">
                <h3 class=" ">Why institutions choose <?= $domain_titleINIT ?></h3>
            </div>

        </section>
        <div class="reviews-box__slider ">
            <div class="mySwiper" slides-per-view="3" space-between="100" grab-cursor="true">

                <div>
                    <div class="institutions_elements">
                        <div class="institutions_el">
                            <div class="institutions_elements__img">
                                <img src="assets/images/institutions/1.png" alt="">
                            </div>
                            <div class="institutions_elements__desc">
                                <h3 class="">Trust and transparency</h3>
                                <ul>
                                    <li>Regulatory-compliant</li>
                                    <li>Frequent 1:1 Proof of Reserves (PoR)</li>
                                    <li>Zero-breach security record</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="institutions_elements">
                        <div class="institutions_el">
                            <div class="institutions_elements__img">
                                <img src="assets/images/institutions/2.png" alt="">
                            </div>
                            <div class="institutions_elements__desc">
                                <h3 class="">
                                    Competitive fees
                                </h3>
                                <ul>
                                    <li>Dynamic low-fee tier structures</li>
                                    <li>Up to 0% maker/taker VIP fees</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="institutions_elements">
                        <div class="institutions_el">
                            <div class="institutions_elements__img">
                                <img src="assets/images/institutions/performance.webp" alt="">
                            </div>
                            <div class="institutions_elements__desc">
                                <h3 class="">
                                    Unparalleled performance
                                </h3>
                                <ul>
                                    <li>5ms REST and WebSocket API</li>
                                    <li>400,000 requests per second order</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="institutions_elements">
                        <div class="institutions_el">
                            <div class="institutions_elements__img">
                                <img src="assets/images/institutions/liquidity.webp" alt="">
                            </div>
                            <div class="institutions_elements__desc">
                                <h3 class="">Deep liquidity</h3>
                                <ul>
                                    <li>
                                        2nd largest platform in global trading
                                    </li>
                                    <li>26B USD in peak daily trading volume</li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>



        </div>
    </section>

    <section class="powerful_crypto">
        <div class="powerful_crypto_info">
            <h2>The world's most powerful crypto trading solutions</h2>
            <span>Whether you’re a trading firm, asset manager, family office, or broker — we have the right solution for
          you.</span>
        </div>
        <div class="powerful_crypto_content">
            <div>
                <h2>Products</h2>
                <img src="assets/images/pc_fiolet.png" alt="">
            </div>
            <div class="powerful_crypto_block">
                <div>
                    <h3><?= $domain_titleINIT ?> Exchange order book</h3>
                    <ul>
                        <li>350+ tokens</li>
                        <li>730 spot trading pairs</li>
                        <li>280 derivatives instruments</li>
                        <li>1,000 options instruments</li>
                    </ul>
                    <a href="#">Start trading →</a>
                </div>
                <div>
                    <h3>Liquid Marketplace</h3>
                    <ul>
                        <li>On-demand liquidity network <br>
                            with multiple brokers
                        </li>
                        <li>Instantly trade spot OTC, future <br>
                            spreads, and options strategies <br>
                            at the price you want
                        </li>
                        <li>No impact on the orderbook</li>

                    </ul>
                    <a href="#">Start trading →</a>
                </div>
            </div>
            <div class="powerful_crypto_block">
                <div>
                    <h3>Yield and structured products</h3>
                    <ul>
                        <li>Customizable trading
                            strategies
                        </li>
                        <li>Top-tier DeFi protocols access</li>
                        <li>Earn yield by providing liquidity
                            or staking
                        </li>

                    </ul>

                </div>
                <div>
                    <h3>Advanced execution algos</h3>
                    <ul>
                        <li>Use sophisticated time- <br>
                            weighted average price (TWAP) <br>
                            and iceberg execution <br>
                            algorithms to split up large <br>
                            orders and reduce slippage.
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="powerful_crypto">

        <div class="powerful_crypto_content">
            <div>
                <h2>Services</h2>
                <img src="assets/images/services.png" alt="">
            </div>
            <div class="powerful_crypto_block">
                <div>
                    <h3>VIP Loan pools</h3>
                    <ul>
                        <li>Dedicated low-interest-rate
                            lending pools
                        </li>

                    </ul>

                </div>

            </div>
            <div class="powerful_crypto_block">
                <div>
                    <h3>ETH 2.0 Staking</h3>
                    <ul>
                        <li>Low barriers to entry</li>
                        <li>Flexible exit policy</li>


                    </ul>
                    <a href="#">Learn more →</a>
                </div>
            </div>
        </div>
    </section>
    <section class="powerful_crypto">

        <div class="powerful_crypto_content">
            <div>
                <h2>Programs</h2>
                <img src="assets/images/programs.png" alt="">
            </div>
            <div class="powerful_crypto_block">
                <div>
                    <h3>Market maker program</h3>
                    <ul>
                        <li>Enjoy competitive rebates by <br>
                            providing liquidity for our spot <br>
                            and derivative markets on both <br>
                            our order books and Liquid <br>
                            Marketplace.
                        </li>

                    </ul>

                </div>

            </div>
            <div class="powerful_crypto_block">
                <div>
                    <h3>Broker program</h3>
                    <ul>
                        <li>Tailored broker solutions</li>
                        <li>Competitive commissions</li>
                        <li>Top-tier liquidity and market
                            depth
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="our_reviews">
        <h2>Here’s what our
            clients have to
            say</h2>
        <div class="our_reviews-box__slider ">

            <div class="mySwiper1" navigation="true" space-between="20" grab-cursor="true">

                <div class="our_reviews_slide ">
                    <h3 style="max-width: 520px;">“<?= $domain_titleINIT ?> has always been one of the most user-friendly
                        exchanges for institutional traders like ourselves, with
                        features like portfolio margin providing greater capital
                        efficiency. <?= $domain_titleINIT ?>’s Liquid Marketplace opens up additional
                        opportunities for us to quote sophisticated, multi-instrument
                        strategies, without the counterparty having to worry about
                        slippage or execution.”</h3>
                    <div class="flex items-center gap-10">
                        <h4>Clément Florentin, CEO, <br>
                            Darley Technologies</h4>
                        <img class="h-min  " src="assets/images/company_logo/darley.webp" alt="">
                    </div>
                </div>
                <div class="our_reviews_slide ">
                    <h3 style="max-width: 520px;">“<?= $domain_titleINIT ?> has always been one of the most user-friendly
                        exchanges for institutional traders like ourselves, with
                        features like portfolio margin providing greater capital
                        efficiency. <?= $domain_titleINIT ?>’s Liquid Marketplace opens up additional
                        opportunities for us to quote sophisticated, multi-instrument
                        strategies, without the counterparty having to worry about
                        slippage or execution.”</h3>
                    <div class="flex items-center gap-10">
                        <h4>Clément Florentin, CEO, <br>
                            Darley Technologies</h4>
                        <img class="h-min  " src="assets/images/floating_point.png" alt="">
                    </div>
                </div>


            </div>

        </div>
        <div class="arrow_next_block">
            <svg class="arrow_next" xmlns="http://www.w3.org/2000/svg" width="16" height="30" viewBox="0 0 16 30"
                 fill="none">
                <path d="M3 27.77L12 14.77L3 1.77002" stroke="white" stroke-width="5"/>
            </svg>
        </div>
    </section>
    <section class="bg_dark commitment ">
        <h2>Our commitment to transparency</h2>
        <h3 class="mb-10">We hold 1:1 reserves of all our customers assets and give you full transparency over our
            reserves and your funds.</h3>
        <div>
            <a  class="btn open_error">View Proof of Reverves</a>
        </div>
    </section>
    <section class="industry">
        <h3 class="mb-16">Industry-leading, since 2017</h3>
        <div class="industry_elements">
            <div class="industry_el">
                <div>$6.2B</div>
                <h3>Assets on <br>
                    platform</h3>
            </div>
            <div class="industry_el">
                <div>$21T</div>
                <h3>Total traded</h3>
            </div>
            <div class="industry_el">
                <div>99.95%</div>
                <h3>Uptime record</h3>
            </div>
            <div class="industry_el">
                <div>800+</div>
                <h3>Trading
                    instruments</h3>
            </div>
            <div class="industry_el">
                <div>$26B</div>
                <h3>Peak daily <br>
                    trading volume</h3>
            </div>
            <div class="industry_el">
                <div>20M+</div>
                <h3>Users worldwide</h3>
            </div>
        </div>
        <div class="flex justify-center">
            <a  class="btn open_error">Get started</a>
        </div>
    </section>
</main>
<?=render_footer()?>
</body>

<script src="assets/scripts/main.js"></script>
<script src="assets/scripts/animated-accordion-2.js"></script>
<script defer src="assets/scripts/itc-slider.js"></script>

<script>

    $(document).ready(function () {
        // Инициализация Slick Slider
        var slickSlider = $('.mySwiper');

        function initSlick() {
            slickSlider.slick({
                dots: false,
                infinite: true,
                arrows: false,
                speed: 300,
                adaptiveHeight: true,
                slidesToShow: calculateSlidesToShow(), // Функция для определения количества отображаемых слайдов
            });
        }

        function calculateSlidesToShow() {
            var windowWidth = $(window).width();

            if (windowWidth >= 1200) {
                return 3; // Например, 3 слайда для широких экранов (>= 1200px)
            } else if (windowWidth >= 768) {
                return 2; // Например, 2 слайда для средних экранов (768px - 1199px)
            } else {
                return 1; // Например, 1 слайд для узких экранов (< 768px)
            }
        }

        // Инициализируйте Slick Slider при загрузке страницы
        initSlick();

        // Обновление Slick Slider при изменении размера окна
        $(window).on('resize', function () {
            slickSlider.slick('unslick'); // Удаляем текущую инициализацию
            initSlick(); // Повторно инициализируем Slick Slider
        });
    });

    $('.mySwiper1').slick({
        dots: false,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,

        adaptiveHeight: true
    });
    $(".arrow_next").click(function () {
        $(".mySwiper1").slick("slickNext");
    });

</script>

</html>