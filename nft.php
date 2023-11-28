
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
  <title ><?=$domain_titleINIT?></title>
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
  <main class=" p-0">
    <section class="bg_dark  pt-10 pb-10">
      <div class="nft_header_block">
        <div class="nft_header_block_title">
          <h1 >Buy, sell and collect NFTs.</h1>
          <p class="">The world's largest digital marketplace for crypto collectibles and non-fungible
            tokens</p>

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
              <a  class="text-blue-400 open_error font-semibold">Buy now</a>
            </div>
          </div>
          <div class="p-6 bg_light rounded-lg">
            <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5f7de/f809825278d5d3b4a80bc99b3b4ef000c5c780edb54e51d242c9aac70b3822bec583f7bc83f1c8ea989d47a42191e71d4c83f24f11e9afa26939b06da350462a8eca2d262486f7a6d7d1055f6bddf9f047a4840e9720f7ec9c1b53b3df9ca5a9ae1109e651279_500_500.png" alt="">
            <div class="flex justify-between items-center">
              <h3 class=" m-0 max-w-xs ">
                Pudgy Penguin #1006
              </h3>
              <span
                class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">1.5000
                ETH</span>
            </div>
            <div>
              <p class="text-white">Last price: <b>1.5000 ETH</b></p>
            </div>
            <div>
                <a  class="text-blue-400 open_error font-semibold">Buy now</a>
            </div>
          </div>
          <div class="p-6 bg_light rounded-lg">
            <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5fb05/78f84146ef70edff658db71be21c7ae85c6416fd160cf7aa802ee0475519a888179cfd9703ca715461643fee0065166cf98007e96698cfd7be6fe277207ce8091b7f3f92de7987115753a4476900c189586ffb4fd517e5035b6a17593b0dabb3ef65e39a04eca_500_500.png" alt="">
            <div class="flex justify-between items-center">
              <h3 class=" m-0 max-w-xs ">
                Pudgy Penguin #1008
              </h3>
              <span
                class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">0.0540
                ETH</span>
            </div>
            <div>
              <p class="text-white">Last price: <b>0.0540 ETH</b></p>
            </div>
            <div>
              <a  class="text-blue-400 open_error font-semibold">Buy now</a>
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
          <div style="background-color: antiquewhite" class=" w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">2</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Mutant Ape Yacht Club</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div style="background-color: azure" class=" w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">3</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">DeGods</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div style="background-color: aqua !important;" class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">4</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Milady Maker</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div style="background-color: #a65dd5 !important;" class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">5</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Sproto Gremlins</h3>
            <p class="text-white font-light m-0">100 tokens</p>
          </div>
        </div>
        <div class="p-4 flex items-center bg_light rounded-xl">
          <div style="background-color: #0d6efd !important;" class="bg-yellow-300 w-12 h-12 rounded-lg flex items-center">
            <span class="bg-slate-700 border-2 h-5 w-5 relative  right-2 flex justify-center items-center border-solid rounded-full border-black">6</span>
          </div>
          <div class="ml-5">
            <h3 class=" m-0 mb-2">Otherdeed for Otherside</h3>
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
          <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5f503/977099c8303bb5c7009de3a109cbbfac1a42c60bffb0bdc9415b395b45935046c5f2a5f16dbf60792296d0accaca241bd1109503d60a521a512d32bc7292d7bdb5a3fbd5b75c5_500_500.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
                Mutant Ape Yacht Club #88
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">2.6973
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>2.6973 ETH</b></p>
          </div>
          <div>
            <a  class="text-blue-400 open_error font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5f10f/1d225a464a86475a9e0cb9ec0b7e24ffd0dbdea0dc165d1f3f4bfbf56068f71196c77bd3f82b7a0d2692f6375d5155700c397eac7d006cd8c135f5c6b5178981c3ef715e9b4d2_500_500.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
                Mutant Ape Yacht Club #89
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">2.6973
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>2.6973 ETH</b></p>
          </div>
          <div>
            <a  class="text-blue-400 open_error font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5f203/a5f689564300a60a21a47c2879f968da9a7ac5b3c379065725dfbb3863858cd31f698df20d3f6d226ef7bb432249bfe7f47e66f45375c73c26d909cbf6a264bf5d0352a6b0668_500_500.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
                Mutant Ape Yacht Club #90
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">16.6500
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>16.6500 ETH</b></p>
          </div>
          <div>
            <a  class="text-blue-400 open_error font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5f74c/0c4db771ccc9831e6ca1d726ff0b725df11030d105a0d460a1eafaeb2c05e07a281d949e21a3351f847a7199d85f622bfeaa2fc29b3590f712e2aa984765cf9ccc7f09eb1d811_500_500.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
                Mutant Ape Yacht Club #91
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">5.3667
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>5.3667 ETH</b></p>
          </div>
          <div>
            <a  class="text-blue-400 open_error font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5fe1f/eeddcb15ec478e9b85c43e4621287e5c9bb7deec970c1a7d32196c21afc59fea8ce81f1d1ca0fc331e69b9b573bb3cf3e885511fa7bf30d366c15a5b16eac877a8e3a8d0eb393_500_500.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
                Mutant Ape Yacht Club #92
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">22.8960
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>22.8960 ETH</b></p>
          </div>
          <div>
            <a  class="text-blue-400 open_error font-semibold">Buy now</a>
          </div>
        </div>
        <div class="p-6 bg_light rounded-lg">
          <img class="rounded-lg border w-100 mb-5" src="https://cdn.blockspan.com/53616c7465645f5fe5b/4edd1e492996997de8a1b5fbba00fb856a1dc66fe22a7a8333f0c78a664bcb1d460e1d225aeff5628a51d413014f1f156629bc1a3241a9ec5e739002a9286a4d44f90e054cd87_500_500.png" alt="">
          <div class="flex justify-between items-center">
            <h3 class=" m-0 max-w-xs ">
                Mutant Ape Yacht Club #93
            </h3>
            <span
              class="whitespace-nowrap text-green-600 border h-fit text-xs w-24 border-solid rounded-lg border-gray-500 px-4 py-2">4.6800
              ETH</span>
          </div>
          <div>
            <p class="text-white">Last price: <b>4.0472 ETH</b></p>
          </div>
          <div>
            <a  class="text-blue-400 open_error font-semibold">Buy now</a>
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