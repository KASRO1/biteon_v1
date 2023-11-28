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
  <link href="assets/styles/itc-slider.css" rel="stylesheet">
  <script src="assets/scripts/10_swiper-element-bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<style>
    .slick-slide{
        height: auto;
    }
</style>
<body>
  <?=render_header()?>
  <main class="mb-96 p-0">
    <section class="ventures">
      <div class="ventures__box">
        <div class="ventures__content">
          <div class="ventures__header">
            <h1><?=$domain_titleINIT?>s Ventures</h1>
            <p class="mb-24">
              <span ></span> With an initial capital of $100 million, <?=$domain_titleINIT?> <br>
              Ventures is a fund focused on exploring high- <br>
              quality <?=$domain_titleINIT?>s with great potential.
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
          <p><?=$domain_titleINIT?> Ventures will focus on the discoveries and investments in various aspects, including <br>
            blockchain basic infrastructures, Layer2, DeFi, WEB3.0, NFT and Metaverse.</p>
          <p>Our mission is to explore and invest on the innovative blockchain <?=$domain_titleINIT?>s worldwide and <br>
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
                <img src="assets/images/company_logo/big-time-studios.webp" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Big Time Studios</h3>
                <p >Big Time is a Free to Play fast-action paced cooperative RPG where you can play with up to 6 people and to earn cosmetic NFTs.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/arbitrum.webp" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Arbitrum
                </h3>
                <p >Arbitrum is a Layer 2 scaling solution for Ethereum developed by Offchain Labs. Being EVM-compatible to the bytecode level, there are vast dApps and NFTs.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/gods-unchained.webp" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">Gods Unchained</h3>
                <p >Gods Unchained is a free-to-play tactical card game that gives players true ownership of their in-game items.</p>
              </div>
  
            </div>
            <div class="ventures_el">
              <div class="ventures_el__img">
                <img src="assets/images/company_logo/zksync.webp" alt="">
              </div>
              <div class="ventures_el__desc">
                <h3 class="">zkSync</h3>
                <p >zkSync is the first EVM-Compatible ZK Rollup with an off-chain data availability extension that offers 1-3 cent transaction fees.</p>
              </div>
  
            </div>

          </div>

        </div>
        <div id="ventures_elements1" class="ventures_elements ">
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/clover.webp" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Clover</h3>
              <p >Clover Finance is substrate-based, EVM-compatible blockchain infrastructure platform, focus on multi- and cross-chain compatibility for DeFi applications and interoperability between different
              </p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/1.png" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Efinity</h3>
              <p >Efinity is a next-generation blockchain for NFTs developed by Enjin on Polkadot.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/bit-country.webp" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Bit.country</h3>
              <p >Bit.Country & Metaverse.Network is the Platform for User-created Metaverses & Games with Opportunities to Earn.</p>
            </div>

          </div>
          <div class="ventures_el">
            <div class="ventures_el__img">
              <img src="assets/images/company_logo/realy.webp" alt="">
            </div>
            <div class="ventures_el__desc">
              <h3 class="">Realy</h3>
              <p >Realy Metaverse is the first Live-to-Earn metaverse on Solana, and will be a virtual city with 3A graphics.</p>
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
            <p>We provide strong support for investment <?=$domain_titleINIT?>s. <?=$domain_titleINIT?>s with our in-depth participation and
              investment will be recommended to <?=$domain_titleINIT?> and have the opportunity to access numerous
              <?=$domain_titleINIT?> products, services, publicity resources, users, and brand endorsement. From the initial
              stage of the launch, a detailed scheme is formulated according to the characteristics of the
              <?=$domain_titleINIT?>, and all the advantages of this <?=$domain_titleINIT?> will be displayed to the users of <?=$domain_titleINIT?> and users
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
  <?=render_footer()?>
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