
<?php

require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}

?><!DOCTYPE html>
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

</head>

<body>
  <?=render_header()?>
  <main class="mb-96 p-0">
    <section class="bg_dark  pt-10 pb-10">
      <div class="nft_header_block">
        <div class="nft_header_block_title">
          <h1 >Buy, sell and collect NFTs.</h1>
          <p class="">The world's largest digital marketplace for crypto collectibles and non-fungible
            tokens</p>
          <a href="" class="btn rounded-full w-40"
            style="box-shadow: 0px 0px 11px 0px rgba(255, 255, 255, 0.25);">Explore</a>
        </div>
        <div class="nft_header_img">
          <img class="" src="assets/images/bg/nft_header.png" alt="">
        </div>
      </div>
      <div class="text-center">
        <h1 class="mb-16" style="color: #FFF;
        text-align: center;
        font-family: Roboto;
        font-size: 40px;
        font-style: normal;
        font-weight: 900;
        line-height: 70px; /* 175% */">HOT OFFERS</h1>
      </div>
      <div class="header_nft_cards ">

          <div class="p-6 bg_light rounded-lg">
            <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
            <div class="flex justify-between items-center">
              <h3 class=" m-0 max-w-xs ">
                Pudgy Penguin #1005
              </h3>
              <span
                class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
                ETH</span>
            </div>
            <div>
              <p class="text-white">Last price: <b>4.6800 ETH</b></p>
            </div>
            <div>
              <a href="" class="text-blue-400 font-semibold">Buy now</a>
            </div>
          </div>
          <div class="p-6 bg_light rounded-lg">
            <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
            <div class="flex justify-between items-center">
              <h3 class=" m-0 max-w-xs ">
                Pudgy Penguin #1005
              </h3>
              <span
                class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
                ETH</span>
            </div>
            <div>
              <p class="text-white">Last price: <b>4.6800 ETH</b></p>
            </div>
            <div>
              <a href="" class="text-blue-400 font-semibold">Buy now</a>
            </div>
          </div>
          <div class="p-6 bg_light rounded-lg">
            <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
            <div class="flex justify-between items-center">
              <h3 class=" m-0 max-w-xs ">
                Pudgy Penguin #1005
              </h3>
              <span
                class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
                ETH</span>
            </div>
            <div>
              <p class="text-white">Last price: <b>4.6800 ETH</b></p>
            </div>
            <div>
              <a href="" class="text-blue-400 font-semibold">Buy now</a>
            </div>
          </div>

      </div>
    </section>
    <section class="p-10 ">
      <h1 class="text-center mb-10 top_collectioins_over_h1">Top collections over last <span class="text-blue-400">7 days</span></h1>
      <div class=" top_collectioins_over">
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">1</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Pudgy Penguins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">1</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Pudgy Penguins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">1</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Pudgy Penguins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">1</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Pudgy Penguins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">1</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Pudgy Penguins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">1</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Pudgy Penguins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
      </div>
    </section>
    <section class="p-10 bg_dark">
      <section class="flex justify-between">

      </section>
      <div class="highest_profits nft_profits">
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
              Pudgy Penguin #1005
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.6800 ETH</b></p>
          </div>
          <div>
            <a href="" class="text-blue-400 font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
              Pudgy Penguin #1005
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.6800 ETH</b></p>
          </div>
          <div>
            <a href="" class="text-blue-400 font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
              Pudgy Penguin #1005
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.6800 ETH</b></p>
          </div>
          <div>
            <a href="" class="text-blue-400 font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
              Pudgy Penguin #1005
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.6800 ETH</b></p>
          </div>
          <div>
            <a href="" class="text-blue-400 font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
              Pudgy Penguin #1005
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.6800 ETH</b></p>
          </div>
          <div>
            <a href="" class="text-blue-400 font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="assets/images/product/nft_product.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
              Pudgy Penguin #1005
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.6800 ETH</b></p>
          </div>
          <div>
            <a href="" class="text-blue-400 font-semibold">Buy now</a>
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

  var swiperContainer = document.querySelector('.mySwiper');


  function updateSlidesPerView() {
    var windowWidth = window.innerWidth;


    var slidesPerView;
    if (windowWidth >= 1700) {
      slidesPerView = 5;
    }
    else if (windowWidth >= 1450) {
      slidesPerView = 4;
    }
    else if (windowWidth >= 1000) {
      slidesPerView = 3;
    } else if (windowWidth >= 700) {
      slidesPerView = 2;
    }
    else {
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