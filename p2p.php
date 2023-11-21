<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if (!get_user_info($auth_token)) {
    header("Location: /login");
}
$user_info = get_user_info($auth_token);

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
  <link href="assets/styles/itc-slider.css" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/DataTables/datatables.css" />
  <link rel="stylesheet" href="assets/styles/custom-select.css">

  <script src="assets/scripts/custom-select.js"></script>
</head>
<style>
  .itc-select__toggle {
    width: fit-content !important;
  }
  #select-payment .itc-select__toggle, #select-p2p .itc-select__toggle{
    height: 40px;


  }
  #select-p2p{
    margin-right: 45px;
  }
  @media (max-width: 767px) {

    #select-p2p .itc-select__toggle {
      border-radius: 5px;
      border: 1px solid rgba(192, 192, 192, 0.10);
      background: #243B54;

      border: 1px solid rgba(192, 192, 192, 0.40);
    }

    .p-10 {
      padding: 1.25rem !important;
    }

    .itc-select__toggle {
      border: 1px solid rgba(192, 192, 192, 0.40) !important;
      border-radius: 4px !important;
    }

    #select-payment {
      width: fit-content !important;
      margin: auto;
    }

    #select-p2p .itc-select__toggle {
      border-radius: 0px 4px 4px 0px;
      padding: 7.3px !important;
      border-left: 0;

      border: 1px solid rgba(192, 192, 192, 0.40);

    }
  }
</style>

<body>
  <?=render_header()?>
  <main class="mb-96  p-0">
    <section class="subtitle_p2p">
      <div class="subtitle_box_p2p">
        <svg width="59" height="46" viewBox="0 0 59 46" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_170_11769)">
            <path d="M52.4746 8.85645L31.3562 39.0257" stroke="#47FF70" stroke-width="12" stroke-linecap="round" />
            <path d="M29.4746 8.85645L8.3562 39.0257" stroke="#30ACFF" stroke-width="12" stroke-linecap="round" />
          </g>
          <defs>
            <clipPath id="clip0_170_11769">
              <rect width="59" height="45" fill="white" transform="translate(0 0.5)" />
            </clipPath>
          </defs>
        </svg>

        <div>
          <h1>P2P trading</h1>
          <p>Find the best offer below and buy and sell crypto with Your Preferred Payment Methods today</p>
        </div>
      </div>
    </section>
    <div class="m-auto main_p2p">
      <section class="p2p_content_sec">

        <div class="p2p_buy_sell bg_p2p ">
          <div class="flex p2p_buttons_buy_sell gap-5 ">
            <button class="btn-dark px-7">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                <path d="M16.5544 3.65527L4.8877 17.072" stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.5544 13.4969V3.65479H7.99609" stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M3.63623 21.3833H17.8029" stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Buy
            </button>
            <button class="btn-dark px-7">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                <path d="M4.32617 17.0695L15.9929 3.65283" stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4.32617 7.22803V17.0701H12.8845" stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M3.07617 21.3833H17.2429" stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Sell
            </button>
          </div>
          <div class="p2p_inputs_amount">
            <input type="text" placeholder="Enter amount" class="bg_dark_blue">
            <div id="select-p2p"></div>
            <div>
              <div id="select-payment"></div>
            </div>
          </div>
          <div>
            <button style="padding: 12px 30px; color: #FFF;
font-family: Roboto;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 19px; /* 118.75% */" class="btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
                <path d="M9.81314 16.6248C14.1854 16.6248 17.7298 13.2576 17.7298 9.10403C17.7298 4.95039 14.1854 1.58319 9.81314 1.58319C5.44089 1.58319 1.89648 4.95039 1.89648 9.10403C1.89648 13.2576 5.44089 16.6248 9.81314 16.6248Z" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18.5632 17.4166L16.8965 15.8332" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Search
            </button>
          </div>

        </div>



        <section class="p2p_table_wrapper">
          <table id="table_p2p">
            <thead>
              <tr>
                <th>Trader</th>
                <th>Payment method</th>
                <th>Price</th>
                <th>Limits</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
            <?=render_p2p_users()?>


            </tbody>

          </table>
        </section>
      </section>
    </div>
  </main>
  <footer>
    <section class="footer_box1">
      <div class="footer-box__card">
        <div class="footer-box__content">
          <h1 class="">Trade anywhere and anytime with us</h1>
          <p>
            Enjoy the convenience of <span ><?=$domain_titleINIT?></span>’s crypto trading
            platform. Make money on cryptocurrency anytime, anywhere as
            valuable.
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
        and the Site at your own risk. <span ><?=$domain_titleINIT?></span> 2023 © All
        right reserved
      </p>
    </div>
  </footer>
</body>

<script src="assets/scripts/main.js"></script>
<script src="assets/scripts/animated-accordion-2.js"></script>
<script defer src="assets/scripts/itc-slider.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


<script src="/assets/DataTables/datatables.js"></script>
<script>
  $("#table_p2p").DataTable({
    language: {
      "search": "",
      "searchPlaceholder": 'Search crypto',
    },
    paging: true,
    "lengthChange": false,
    searching: false,


  })

  const currencyoptions = [
    [
      "BTC",
      "<div class='coin_item'><img class='priceimg' src='/assets/images/icons/crypto/btc.png'/> BTC <div class='price-box-price'></div></div>",
    ],
    [
      "ETH",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/eth.png'/> ETH <div class='price-box-price'></div></div>",
    ],
    [
      "DOGE",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/doge.png'/> DOGE <div class='price-box-price'></div></div>",
    ],
    [
      "BNB",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/bnb.png'/> BNB <div class='price-box-price'></div></div>",
    ],
    [
      "TRX",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/trx.png'/> TRX <div class='price-box-price'></div></div>",
    ],
    [
      "LTC",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ltc.png'/> LTC <div class='price-box-price'></div></div>",
    ],
    [
      "CAKE",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/cake.png'/> CAKE <div class='price-box-price'></div></div>",
    ],
    [
      "AVAX",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/avax.png'/> AVAX <div class='price-box-price'></div></div>",
    ],
    [
      "XMR",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/xmr.png'/> XMR <div class='price-box-price'></div></div>",
    ],
    [
      "BCH",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/bch.png'/> BCH <div class='price-box-price'></div></div>",
    ],
    [
      "FTM",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ftm.png'/> FTM <div class='price-box-price'></div></div>",
    ],
    [
      "ADA",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ada.png'/> ADA <div class='price-box-price'></div></div>",
    ],
    [
      "DASH",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/dash.png'/> DASH <div class='price-box-price'></div></div>",
    ],
    [
      "SOL",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/sol.png'/> SOL <div class='price-box-price'></div></div>",
    ],
    [
      "BNB",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/bnb.png'/> BNB <div class='price-box-price'></div></div>",
    ],
    [
      "TETHER (TRC20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/usdt.png'/> TETHER (TRC20) <div class='price-box-price'>1</div>",
    ],
    [
      "TETHER (ERC20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/usdt.png'/> TETHER (ERC20) <div class='price-box-price'>1</div>",
    ],
    [
      "BINANCE USD (ERC20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/scysytw.png'/> BINANCE USD (ERC20) <div class='price-box-price'>1</div>",
    ],
    [
      "BINANCE USD (BEP20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/scysytw.png'/> BINANCE USD (BEP20) <div class='price-box-price'>1</div>",
    ],
    [
      "BINANCE USD (BEP2)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/scysytw.png'/> BINANCE USD (BEP2) <div class='price-box-price'>1</div>",
    ],
    [
      "USD COIN (ERC20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ustst.png'/> USD COIN (ERC20) <div class='price-box-price'>1</div>",
    ],
    [
      "USD COIN (BEP20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ustst.png'/> USD COIN (BEP20) <div class='price-box-price'>1</div>",
    ],
    [
      "USD COIN (POLYGON)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ustst.png'/> USD COIN (POLYGON) <div class='price-box-price'>1</div>",
    ],
    [
      "USD COIN (TRC20)",
      "<div class='coin_item'> <img class='priceimg' src='/assets/images/icons/crypto/ustst.png'/> USD COIN (TRC20) <div class='price-box-price'>1</div>",
    ],
  ];
  const payment_methods = [
    ["ALL", "All payment"],
    ["TINKOFF", "Tinkoff"]
  ]
  const select1 = new ItcCustomSelect("#select-p2p", {
    options: currencyoptions,
    targetValue: "BTC",
  });
  const select2 = new ItcCustomSelect("#select-payment", {
    options: payment_methods,
    "targetValue": "ALL"

  });
  const pickerElements = document.querySelectorAll('.swap-box__picker_el');
  pickerElements.forEach((element) => {
    element.addEventListener('click', function(event) {
      const value = event.target.textContent;
      console.log(select1.value);
      select2.value = "BTC";
      console.log(select1.value);
    });
  });
</script>
<script>
  $('.switch-btn').click(function() {
    $(this).toggleClass('switch-on');
    if ($(this).hasClass('switch-on')) {
      $(this).trigger('on.switch');
    } else {
      $(this).trigger('off.switch');
    }
  });
</script>

</html>