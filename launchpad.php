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

</head>

<body>
  <?=render_header()?>
  <main class="mb-96 p-0">
    <section class=" box-header-launchpad_bg ">
      <div class=" box-header-launchpad p-10"> 
      <div class="flex justify-start">
        <p class="text-lg m-0 text-white"> Discover new, high-quality projects around the world</p>
      </div>
      <div class="flex justify-start">
        <h3 class="text-6xl mb-4 mt-2 text-blue-400"><span class="text-white" ><?=$domain_titleINIT?></span> Launchpad</h3>
      </div>
      <div class="flex justify-start">
        <p class=" ">
          Launchpad offers our users easy access to new, high-quality crypto projects.
          Invest in new gems now!
        </p>
      </div>

      <div class="box-header__static  ">
        <div class="box-header__static_el">
          <h3>1,508,424</h3>
          <p>Followers</p>
        </div>
        <div class="box-header__static_el">
          <h3>$ 122,424,470,150</h3>
          <p>Amount</p>
        </div>
        <div class="box-header__static_el">
          <h3>32</h3>
          <p>Projects</p>
        </div>
      </div>
    </div>
      <div class="launchpad_header_img">
        <img src="assets/images/launchpad.png" alt="">
      </div>
    </section>
    <section class="grid justify-center p-10">
      <h3 class="">Previous projects</h3>
      <div class="news_cards grid  gap-8 mb-16 ">
        <div class="news_card ">
          <div class="news_card__header_img" style="background-image: url(assets/images/product/img.png);">
            <span class="news_card_tag">On sale</span>
          </div>
          <div class="new_card_content">
            <div class="new_card_content_header">
              <h3 class=" m-0">TAKI </h3>
              <span class="text-gray-400 text-xs items-end flex">Taki</span>
            </div>
            <div class="news_card_content_text">
              Taki is a global social network where anyone can
              earn social crypto tokens simply by participating
              within the community. Users can earn $TAKI, the
              basic social crypto token on the Taki
            </div>
            <div class="news_card_content_static">
              Highest Historical Yield <span class="text-green-500"> +747%</span>
            </div>
            <div class="news_card_content_static">
              Total reward 9,000,000 TAKI
            </div>
          </div>

        </div>
        <div class="news_card ">
          <div class="news_card__header_img" style="background-image: url(assets/images/product/img.png);">
            <span class="news_card_tag">On sale</span>
          </div>
          <div class="new_card_content">
            <div class="new_card_content_header">
              <h3 class=" m-0">TAKI </h3>
              <span class="text-gray-400 text-xs items-end flex">Taki</span>
            </div>
            <div class="news_card_content_text">
              Taki is a global social network where anyone can
              earn social crypto tokens simply by participating
              within the community. Users can earn $TAKI, the
              basic social crypto token on the Taki
            </div>
            <div class="news_card_content_static">
              Highest Historical Yield <span class="text-green-500"> +747%</span>
            </div>
            <div class="news_card_content_static">
              Total reward 9,000,000 TAKI
            </div>
          </div>

        </div>
        <div class="news_card ">
          <div class="news_card__header_img" style="background-image: url(assets/images/product/img.png);">
            <span class="news_card_tag">On sale</span>
          </div>
          <div class="new_card_content">
            <div class="new_card_content_header">
              <h3 class=" m-0">TAKI </h3>
              <span class="text-gray-400 text-xs items-end flex">Taki</span>
            </div>
            <div class="news_card_content_text">
              Taki is a global social network where anyone can
              earn social crypto tokens simply by participating
              within the community. Users can earn $TAKI, the
              basic social crypto token on the Taki
            </div>
            <div class="news_card_content_static">
              Highest Historical Yield <span class="text-green-500"> +747%</span>
            </div>
            <div class="news_card_content_static">
              Total reward 9,000,000 TAKI
            </div>
          </div>

        </div>
        <div class="news_card ">
          <div class="news_card__header_img" style="background-image: url(assets/images/product/img.png);">
            <span class="news_card_tag">On sale</span>
          </div>
          <div class="new_card_content">
            <div class="new_card_content_header">
              <h3 class=" m-0">TAKI </h3>
              <span class="text-gray-400 text-xs items-end flex">Taki</span>
            </div>
            <div class="news_card_content_text">
              Taki is a global social network where anyone can
              earn social crypto tokens simply by participating
              within the community. Users can earn $TAKI, the
              basic social crypto token on the Taki
            </div>
            <div class="news_card_content_static">
              Highest Historical Yield <span class="text-green-500"> +747%</span>
            </div>
            <div class="news_card_content_static">
              Total reward 9,000,000 TAKI
            </div>
          </div>

        </div>
        <div class="news_card ">
          <div class="news_card__header_img" style="background-image: url(assets/images/product/img.png);">
            <span class="news_card_tag">On sale</span>
          </div>
          <div class="new_card_content">
            <div class="new_card_content_header">
              <h3 class=" m-0">TAKI </h3>
              <span class="text-gray-400 text-xs items-end flex">Taki</span>
            </div>
            <div class="news_card_content_text">
              Taki is a global social network where anyone can
              earn social crypto tokens simply by participating
              within the community. Users can earn $TAKI, the
              basic social crypto token on the Taki
            </div>
            <div class="news_card_content_static">
              Highest Historical Yield <span class="text-green-500"> +747%</span>
            </div>
            <div class="news_card_content_static">
              Total reward 9,000,000 TAKI
            </div>
          </div>

        </div>
        <div class="news_card ">
          <div class="news_card__header_img" style="background-image: url(assets/images/product/img.png);">
            <span class="news_card_tag">On sale</span>
          </div>
          <div class="new_card_content">
            <div class="new_card_content_header">
              <h3 class=" m-0">TAKI </h3>
              <span class="text-gray-400 text-xs items-end flex">Taki</span>
            </div>
            <div class="news_card_content_text">
              Taki is a global social network where anyone can
              earn social crypto tokens simply by participating
              within the community. Users can earn $TAKI, the
              basic social crypto token on the Taki
            </div>
            <div class="news_card_content_static">
              Highest Historical Yield <span class="text-green-500"> +747%</span>
            </div>
            <div class="news_card_content_static">
              Total reward 9,000,000 TAKI
            </div>
          </div>

        </div>
      </div>
      <div>
        <a href="" class="btn-shadow max-w-sm m-auto">View more</a>
      </div>
    </section>
    <section class="join_launchpad">
      <div class="join_launchpad__box">
        <div class="join_launchpad__box_content  ">
          <h3 class="">Join <span ><?=$domain_titleINIT?></span> Launchpad</h3>
          <p class="text-white ">
            If you are a developer of innovative blockchain projects, apply below to launch your projects on launchpad & reach out to millions of potential investors!
          </p>
          <div class="join_launchpad__box_content_button">
            <a href="" class="btn">Apply to join</a>
          </div>
          <div class="join_about flex  gap-12">
            <div class="join_about_el">
              <img class="" src="assets/images/icons/eye.svg" alt=""><span class="">High exposure</span><span>Millions of visits</span>
            </div>
            <div class="join_about_el">
              <img class="" src="assets/images/icons/transfer_block.svg" alt=""><span class=" ">High exposure</span><span>Millions of visits</span>
            </div>
            <div class="join_about_el">
              <img class="" src="assets/images/icons/trust_black.svg" alt=""><span class=" ">High exposure</span><span>Millions of visits</span>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="faq-box grid bg-transparent justify-center text-center p-3">
      <h3 class="">FAQ</h3>
      <div id="accordion" class="accordion mb-24" style=" margin: 1rem auto;">
        <div class="accordion__item">
          <div class="accordion__header">
            Is <span ><?=$domain_titleINIT?></span> API free?
          </div>
          <div class="accordion__body">
            <div class="accordion__content">
              A customizable crypto bot helps traders to create various automated trading strategies. Compared with
              traditional manual trading, trading bot can execute orders at a lower risk and costs, and grasp the best
              trading timings.
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__header">
            What’s spot grid bot?
          </div>
          <div class="accordion__body">
            <div class="accordion__content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dignissimos a autem perspiciatis sit eum
              exercitationem expedita omnis ipsam voluptate veritatis dolores similique eligendi, earum quasi officia in
              facilis dolorum!
            </div>
          </div>
        </div>
        <div class="accordion__item">
          <div class="accordion__header">
            Is <span ><?=$domain_titleINIT?></span> Trading Bot free?
          </div>
          <div class="accordion__body">
            <div class="accordion__content">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta pariatur dolore consectetur perferendis
              libero
              nam sit magni voluptatibus voluptates autem nesciunt, praesentium quidem deserunt ipsa totam esse ullam?
              Quod,
              maiores!
            </div>
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
<script>
  new ItcAccordion(document.querySelector('.accordion'), {
    alwaysOpen: false
  });
</script>

</html>