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
  <title data-title>.</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/styles/main.css" />
  <link rel="stylesheet" href="assets/styles/output.css" />
  <link rel="stylesheet" href="assets/styles/checkbox.css" />
  <link rel="stylesheet" href="assets/styles/animated-accordion-2.css" />
  <link rel="stylesheet" href="assets/fonts/stylesheet.css" />
  <link href="assets/styles/itc-slider.css" rel="stylesheet">
  <script src="assets/scripts/10_swiper-element-bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
  <?=render_header()?>
  <main class="mb-96 p-0">
    <section class="ventures">
      <div class="ventures__box">
        <div class="ventures__content">
          <div class="ventures__header">
            <h1>Biteons Ventures</h1>
            <p class="mb-24">
              <span data-title></span> With an initial capital of $100 million, Biteon <br>
              Ventures is a fund focused on exploring high- <br>
              quality Biteons with great potential.
            </p>
          </div>
          <img src="assets/images/icons/arrow.png" alt="">
        </div>
        <img src="assets/images/pseudo.png" alt="">
      </div>
      <div class="ventures__box1">
        <div class="ventures__box1_content">
          <h3>
            About us
          </h3>
          <h3>
            Investment Focus
          </h3>
        </div>
        <div class="block">
          <p>Biteon Ventures will focus on the discoveries and investments in various aspects, including <br>
            blockchain basic infrastructures, Layer2, DeFi, WEB3.0, NFT and Metaverse.</p>
          <p>Our mission is to explore and invest on the innovative blockchain Biteons worldwide and <br>
            promote sustainable development across the entire industry globally. We look forward to <br>
            working and growing with passionate dreamers and founders to create value for the blockchain <br>
            industry, while sharing our global resources and historical experience with the founders.</p>
        </div>
      </div>
    </section>
    <section class="ventures_portfolio">
      <div class="ventures_portfolio_header">
        <h2>Portfolio</h2>
      </div>

      <div class="ventures_portfolio_content">
        <div id="ventures_elements" class="ventures_portfolio_content mb-12">

          <div class="ventures_elements">
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/1.png" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Deep liquidity</h3>
                <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                  mechanisms.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/1.png" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Deep liquidity</h3>
                <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                  mechanisms.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/1.png" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Deep liquidity</h3>
                <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                  mechanisms.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/1.png" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Deep liquidity</h3>
                <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                  mechanisms.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/1.png" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Deep liquidity</h3>
                <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                  mechanisms.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/1.png" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Deep liquidity</h3>
                <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                  mechanisms.</p>
              </div>
  
            </div>
          </div>
  
  
        </div>
        <div id="ventures_elements1" class="ventures_elements ">
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Deep liquidity</h3>
              <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                mechanisms.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Deep liquidity</h3>
              <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                mechanisms.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Deep liquidity</h3>
              <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                mechanisms.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Deep liquidity</h3>
              <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                mechanisms.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Deep liquidity</h3>
              <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                mechanisms.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Deep liquidity</h3>
              <p class="text-base">Access to deep liquidity pools and institutional-grade price discovery
                mechanisms.</p>
            </div>

          </div>
        </div>


      </div>
    </section>
    <section class="investment_support">
      <h1 class="text-center  mb-10">Post investment support</h1>
      <div class="investment_elements">
        <div class="investment_el">
          <img src="assets/images/Overseas_resources.png" alt="">
          <div class="investment_el_content">
            <h3>Overseas resources</h3>
            <p>We can provide entrepreneurs with overseas resources around the world. Whether in China,
              Silicon Valley, Japan, South Korea, or Southeast Asia, we have formed a resource network
              with local media and KOLs, which can help entrepreneurs from different perspectives, such
              as clarifying or improving products and services, assisting entrepreneurs in establishing
              strategic partnerships, and contacting potential customers, investors, acquirers, and
              business consultants.</p>
          </div>
        </div>
      </div>
      <div class="investment_elements">
        <div class="investment_el">
          <img src="assets/images/ecosystem_resources.png" alt="">
          <div class="investment_el_content">
            <h3>Ecosystem resources</h3>
            <p>We provide strong support for investment Biteons. Biteons with our in-depth participation and
              investment will be recommended to Biteon and have the opportunity to access numerous
              Biteon products, services, publicity resources, users, and brand endorsement. From the initial
              stage of the launch, a detailed scheme is formulated according to the characteristics of the
              Biteon, and all the advantages of this Biteon will be displayed to the users of Biteon and users
              of the global blockchain industry.</p>
          </div>
        </div>
      </div>
      <div class="investment_elements">
        <div class="investment_el">
          <img src="assets/images/development_plans.png" alt="">
          <div class="investment_el_content">
            <h3>Development plans</h3>
            <p>We have only one goal in mind: helping entrepreneurs to build a powerful company. Your
              success is our success. We understand that mutual trust is the key to success, so we
              promise always be open and honest with you.</p>
          </div>
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
            Enjoy the convenience of <span data-title></span>’s crypto trading platform. Make
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
          <h3 class="logo_name" data-title></h3>
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
          <li><span data-title></span> Visa Card</li>
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
          <li><span data-title></span> ventures</li>
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
        and the Site at your own risk. <span data-title></span> 2023 © All right reserved
      </p>
    </div>
  </footer>
</body>

<script src="assets/scripts/main.js"></script>
<script src="assets/scripts/animated-accordion-2.js"></script>
<script defer src="assets/scripts/itc-slider.js"></script>

<script>


function adjustSlickSlider() {
  var slidesToShow = 3;
  
  // Определение количества слайдов в зависимости от размера экрана
  if ($(window).width() < 768) {
    slidesToShow = 1;
  } else if ($(window).width() < 992) {
    slidesToShow = 2;
  }

  var slider = $('.ventures_elements');

  // Проверка, инициализирован ли слайдер
  if (slider.hasClass('slick-initialized')) {
    // Если инициализирован, перенастроим параметры
    slider.slick('unslick');
  }

  // Инициализация Slick Slider с новыми параметрами
  slider.slick({
    slidesToShow: slidesToShow,
    slidesToScroll: 2,
    infinite: true,
    fade: false,
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });
}

// Вызов функции при загрузке страницы и изменении размера окна
$(document).ready(function() {
  adjustSlickSlider();
});

$(window).resize(function() {
  adjustSlickSlider();
});


</script>


</html>