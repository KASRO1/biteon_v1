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

  </head>

  <body>
    <header>
      <div class="logo">
        <img src="assets/images/logo.svg" class="logo_img" alt="logo" />
        <h3 data-title></h3>
      </div>
      <div class="menu">
        <ul>
          <li class="has-submenu">
            <a href="#">Buy crypto</a>
            <ul class="submenu">
              <li>
                <a href="pages/contact.php">Credit / debit card</a>
                <span>Quick purchase of crypto</span>
              </li>
              <li>
                <a href="pages/contact.php">P2P trade</a>
                <span>Trade with real users</span>
              </li>
              <li>
                <a href="pages/contact.php">Refill with cryptocurrency</a>
                <span>Deposit in minutes</span>
              </li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="#">Trade</a>
            <ul class="submenu">
              <li>
                <a href="pages/contact.php">Spot Trading</a>
                <span>Buy and hold crypto</span>
              </li>
              <li>
                <a href="pages/contact.php">Futures Trading</a>
                <span>Perpetual contracts settled in crypto</span>
              </li>
              <li>
                <a href="pages/contact.php">Options Trading</a>
                <span>Trade European-style options</span>
              </li>
            </ul>
          </li>
          <li><a href="pages/contact.php">Swap</a></li>
          <li><a href="pages/contact.php">Support</a></li>
        </ul>
      </div>
      <div class="login_block">
        <a href="pages/login.php" class="login">Log in</a>
        <a href="pages/register.php" class="register">Open Free Account</a>
        <a href=""><img src="assets/images/burger.svg" alt="" /></a>
      </div>
    </header>
    <main class="mb-96 p-0">
      <section class="box-header box-header_tradingbots">
        <div class="flex justify-center">
          <h3 class=" mb-4"><span data-title></span> Trading Bots</h3>
        </div>
        <div class="flex justify-center">
          <p class="trading_bots_p">
            Intelligent pre-built trading bots help you auto-trade and earn
            all-day-long
          </p>
        </div>

        <div class="box-header__static">
          <div class="box-header__static_el">
            <h3>252,410</h3>
            <p>Global bot traders</p>
          </div>
          <div class="box-header__static_el">
            <h3>$45.40M</h3>
            <p>Bot trading earnings</p>
          </div>
          <div class="box-header__static_el">
            <h3>4.12M</h3>
            <p>Bots created worldwide</p>
          </div>
        </div>
      </section>
      <section class="box-about">
        <div class="box-about_info">
          <h3>What is a trading bot?</h3>
          <div class="box-about_info__elements  gap-5">
            <div class="box-about_info__elements_el">
              <img
                src="assets/images/icons/bot_trading_static.svg"
                alt=""
              /><span>Buy low sell high</span>
            </div>
            <div class="box-about_info__elements_el">
              <img src="assets/images/icons/bot_trading_graf.svg" alt="" /><span
                >Volatile markets</span
              >
            </div>
            <div class="box-about_info__elements_el">
              <img src="assets/images/icons/bot_trading_coin.svg" alt="" /><span
                >Cyclic arbitrage</span
              >
            </div>
          </div>
          <div class="box-about_info__el">
            <p>
              Grid bot is a simple strategy of buying low and selling high. This
              strategy seeks to capitalize on normal price volatility in an
              underlying asset by placing buy and sell orders at certain regular
              intervals above and below predefined price ranges.
            </p>
          </div>
        </div>
        <div class="box-about_buttons">
          <div class="box-about_buttons__el">
            <div class="gap-3 flex">
              <img src="assets/images/icons/spot_grid.svg" alt="" /><span
                >Spot grid</span
              >
            </div>
            <a class="btn-primary_dark" href="#">Create</a>
          </div>
          <div class="box-about_buttons__el">
            <div class="gap-3 flex">
              <img src="assets/images/icons/moon_grid.svg" alt="" /><span
                >Moon grid</span
              >
            </div>
            <a class="btn-primary_dark" href="">Create</a>
          </div>
          <div class="box-about_buttons__el">
            <div class="gap-3 flex">
              <img src="assets/images/icons/futures_grid.svg" alt="" /><span
                >Futures grid</span
              >
            </div>
            <a class="btn-primary_dark" href="">Create</a>
          </div>
        </div>
      </section>
      <section class="marketplace">
        <div class="marketplace_cards mb-10">
          <div class="marketplace_card">
            <div class="marketplace_card__header mb-5">
              <div class="marketplace_card__header_el">
                <img src="assets/images/icons/book.svg" alt="" />
                <span class=" font-bold">BTCUSDT Perp</span>
              </div>
              <div class="marketplace_card__header_el justify-between flex">
                <div class="marketplace_card_header_tags">
                  <span class="text-xs tag">Futures grid</span>
                  <span class="text-xs tag">Long</span>
                  <span class="text-xs tag"
                    ><span class="text-xs tag">Long</span></span
                  >
                </div>
                <div class="people_counter">
                  <img src="assets/images/icons/people.svg" alt="" />
                  <span>749</span>
                </div>
              </div>
            </div>
            <div class="marketplace_card__content">
              <div class="marketplace_card__content_el mb-3">
                <div class="marketplace_card__content_el__header">
                  <div class="marketplace_card__content_el__header_el">
                    <h3 class="text-green-400 mb-0">+667.38 %</h3>
                    <span class="text-gray-300  m-0">PnL%</span>
                  </div>
                  <div class="marketplace_card__content_el__header_el">
                    <img src="assets/images/icons/grapich_static.svg" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between "
              >
                <div class="grid">
                  <span class="text-white ">16 days 7 hrs</span
                  ><span class="text-gray-300 ">Run time</span>
                </div>
                <div class="grid">
                  <span class="text-white ">37.03%</span
                  ><span class="text-gray-300 ">Max drawdown</span>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between mb-3"
              >
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/crypto/btc.svg" alt="" /><span
                    class="text-gray-300 "
                    >BTC/USDT</span
                  >
                </div>
              </div>
              <div class="marketplace_card_content_el flex justify-between mb3">
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/avatar.svg" alt="" /><span
                    class="text-gray-300 "
                    >***om</span
                  >
                </div>
                <a href="" class="btn-primary_dark">Copy</a>
              </div>
            </div>
          </div>
          <div class="marketplace_card">
            <div class="marketplace_card__header mb-5">
              <div class="marketplace_card__header_el">
                <img src="assets/images/icons/book.svg" alt="" />
                <span class=" font-bold">BTCUSDT Perp</span>
              </div>
              <div class="marketplace_card__header_el justify-between flex">
                <div class="marketplace_card_header_tags">
                  <span class="text-xs tag">Futures grid</span>
                  <span class="text-xs tag">Long</span>
                  <span class="text-xs tag"
                    ><span class="text-xs tag">Long</span></span
                  >
                </div>
                <div class="people_counter">
                  <img src="assets/images/icons/people.svg" alt="" />
                  <span>749</span>
                </div>
              </div>
            </div>
            <div class="marketplace_card__content">
              <div class="marketplace_card__content_el mb-3">
                <div class="marketplace_card__content_el__header">
                  <div class="marketplace_card__content_el__header_el">
                    <h3 class="text-green-400 mb-0">+667.38 %</h3>
                    <span class="text-gray-300  m-0">PnL%</span>
                  </div>
                  <div class="marketplace_card__content_el__header_el">
                    <img src="assets/images/icons/grapich_static.svg" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between "
              >
                <div class="grid">
                  <span class="text-white ">16 days 7 hrs</span
                  ><span class="text-gray-300 ">Run time</span>
                </div>
                <div class="grid">
                  <span class="text-white ">37.03%</span
                  ><span class="text-gray-300 ">Max drawdown</span>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between mb-3"
              >
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/crypto/btc.svg" alt="" /><span
                    class="text-gray-300 "
                    >BTC/USDT</span
                  >
                </div>
              </div>
              <div class="marketplace_card_content_el flex justify-between mb3">
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/avatar.svg" alt="" /><span
                    class="text-gray-300 "
                    >***om</span
                  >
                </div>
                <a href="" class="btn-primary_dark">Copy</a>
              </div>
            </div>
          </div>
          <div class="marketplace_card">
            <div class="marketplace_card__header mb-5">
              <div class="marketplace_card__header_el">
                <img src="assets/images/icons/book.svg" alt="" />
                <span class=" font-bold">BTCUSDT Perp</span>
              </div>
              <div class="marketplace_card__header_el justify-between flex">
                <div class="marketplace_card_header_tags">
                  <span class="text-xs tag">Futures grid</span>
                  <span class="text-xs tag">Long</span>
                  <span class="text-xs tag"
                    ><span class="text-xs tag">Long</span></span
                  >
                </div>
                <div class="people_counter">
                  <img src="assets/images/icons/people.svg" alt="" />
                  <span>749</span>
                </div>
              </div>
            </div>
            <div class="marketplace_card__content">
              <div class="marketplace_card__content_el mb-3">
                <div class="marketplace_card__content_el__header">
                  <div class="marketplace_card__content_el__header_el">
                    <h3 class="text-green-400 mb-0">+667.38 %</h3>
                    <span class="text-gray-300  m-0">PnL%</span>
                  </div>
                  <div class="marketplace_card__content_el__header_el">
                    <img src="assets/images/icons/grapich_static.svg" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between mb-3"
              >
                <div class="grid">
                  <span class="text-white ">16 days 7 hrs</span
                  ><span class="text-gray-300 ">Run time</span>
                </div>
                <div class="grid">
                  <span class="text-white ">37.03%</span
                  ><span class="text-gray-300 ">Max drawdown</span>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between mb-3"
              >
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/crypto/btc.svg" alt="" /><span
                    class="text-gray-300 "
                    >BTC/USDT</span
                  >
                </div>
              </div>
              <div class="marketplace_card_content_el flex justify-between mb3">
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/avatar.svg" alt="" /><span
                    class="text-gray-300 "
                    >***om</span
                  >
                </div>
                <a href="" class="btn-primary_dark">Copy</a>
              </div>
            </div>
          </div>
          <div class="marketplace_card">
            <div class="marketplace_card__header mb-5">
              <div class="marketplace_card__header_el">
                <img src="assets/images/icons/book.svg" alt="" />
                <span class=" font-bold">BTCUSDT Perp</span>
              </div>
              <div class="marketplace_card__header_el justify-between flex">
                <div class="marketplace_card_header_tags">
                  <span class="text-xs tag">Futures grid</span>
                  <span class="text-xs tag">Long</span>
                  <span class="text-xs tag"
                    ><span class="text-xs tag">Long</span></span
                  >
                </div>
                <div class="people_counter">
                  <img src="assets/images/icons/people.svg" alt="" />
                  <span>749</span>
                </div>
              </div>
            </div>
            <div class="marketplace_card__content">
              <div class="marketplace_card__content_el mb-3">
                <div class="marketplace_card__content_el__header">
                  <div class="marketplace_card__content_el__header_el">
                    <h3 class="text-green-400 mb-0">+667.38 %</h3>
                    <span class="text-gray-300  m-0">PnL%</span>
                  </div>
                  <div class="marketplace_card__content_el__header_el">
                    <img src="assets/images/icons/grapich_static.svg" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between mb-3"
              >
                <div class="grid">
                  <span class="text-white ">16 days 7 hrs</span
                  ><span class="text-gray-300 ">Run time</span>
                </div>
                <div class="grid">
                  <span class="text-white ">37.03%</span
                  ><span class="text-gray-300 ">Max drawdown</span>
                </div>
              </div>
              <div
                class="marketplace_card_content_el flex justify-between mb-3"
              >
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/crypto/btc.svg" alt="" /><span
                    class="text-gray-300 "
                    >BTC/USDT</span
                  >
                </div>
              </div>
              <div class="marketplace_card_content_el flex justify-between mb3">
                <div class="flex items-center gap-2">
                  <img src="assets/images/icons/avatar.svg" alt="" /><span
                    class="text-gray-300 "
                    >***om</span
                  >
                </div>
                <a href="" class="btn-primary_dark">Copy</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pageNav">
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link text-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="10"
                height="10"
                viewBox="0 0 5 10"
                fill="none"
              >
                <path d="M4.5 9.5L1 5L4.5 0.5" stroke="#E3E3E3" />
              </svg>
            </a>
          </div>
          <div class="pageNav__el active">
            <a href="" class="pageNav__el__link">1</a>
          </div>
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link">2</a>
          </div>
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link">3</a>
          </div>
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link">4</a>
          </div>
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link">5</a>
          </div>
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link">...</a>
          </div>
          <div class="pageNav__el">
            <a href="" class="pageNav__el__link">242</a>
          </div>

          <div class="pageNav__el">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="10"
              height="10"
              viewBox="0 0 6 10"
              fill="none"
            >
              <path d="M1 9.5L4.5 5L1 0.5" stroke="#E3E3E3" />
            </svg>
          </div>
        </div>
      </section>
      <section class="supercharge-box">
        <h3 class=" mb-16">Supercharge your trading with trading bots</h3>
        <div class="supercharge__elements">
          <div class="supercharge_el">
            <img src="assets/images/save_secure.png" alt="" /><span class="font-bold"
              >Safe & Secure</span
            ><span class="text-gray-400">Protect and secure your assets anytime, anywhere</span>
          </div>
          <div class="supercharge_el">
            <img src="assets/images/exact_arb.png" alt="" /><span class="font-bold"
              >Exact arbitrage</span
            ><span class="text-gray-400"
              >24/7 automate your trading strategies and auto-arbitrage</span
            >
          </div>
          <div class="supercharge_el">
            <img src="assets/images/easy_profit.png" alt="" /><span class="font-bold"
              >Easy profit</span
            ><span class="text-gray-400"
              >Make profitable investments with powerful algorithmic trading
              bots</span
            >
          </div>
        </div>
      </section>
      <section class="faq-box grid justify-center text-center p-3">
        <h3 class="">FAQ</h3>
        <div id="accordion" class="accordion mb-24" style=" margin: 1rem auto;">
            <div class="accordion__item">
              <div class="accordion__header">
                Is <span data-title> </span>  API free?
              </div>
              <div class="accordion__body">
                <div class="accordion__content">
                    A customizable crypto bot helps traders to create various automated trading strategies. Compared with traditional manual trading, trading bot can execute orders at a lower risk and costs, and grasp the best trading timings.
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
                Is <span data-title></span> Trading Bot free?
              </div>
              <div class="accordion__body">
                <div class="accordion__content">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta pariatur dolore consectetur perferendis libero
                  nam sit magni voluptatibus voluptates autem nesciunt, praesentium quidem deserunt ipsa totam esse ullam? Quod,
                  maiores!
                </div>
              </div>
            </div>
          </div>
      </section>
      <section class="users-saying">
        <div class="users-saying__container">
            <div class="users-saying__title">
                What Bitlirex users are saying
            </div>
            <div class="users-saying__slider">
                <div class="users-saying__slider-track" id="users-saying-track-one" style="column-gap: 40px; --x: -1788px;">
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><img src="assets/images/person/user-one.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Adria
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    Singapore
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                Bitlirex trading bot is easy to set up and it automatically
                                places the orders for me to buy low and sell high so that
                                I don't need to watch the market all the time. The grid
                                bot is the best tool for volatile markets!
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-two.webp" type="image/webp"><picture><source srcset="assets/images/person/user-two.webp" type="image/webp"><img src="assets/images/person/user-two.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Brad Mustorf
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    United States
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                A really helpful tool for people who don't have time to
                                monitor the market in real time and it automates the
                                "buy low sell high" action perfectly.
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-three.webp" type="image/webp"><picture><source srcset="assets/images/person/user-three.webp" type="image/webp"><img src="assets/images/person/user-three.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Matthew
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    United States
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                I’ve seen a very nice part of Bitlirex bot, the trading bot
                                drives the level improvement of regular users.
                                With using martingale bot, and quite plain formulas,
                                I could automatically decrease my average costs, and
                                get inspirations from other enthusiasts.
                            </div>
                        </div>
                    </div>

                    <!--duplicated elements for loop animation (not delete)-->
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><img src="assets/images/person/user-one.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Adria
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    Singapore
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                Bitlirex trading bot is easy to set up and it automatically
                                places the orders for me to buy low and sell high so that
                                I don't need to watch the market all the time. The grid
                                bot is the best tool for volatile markets!
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-two.webp" type="image/webp"><picture><source srcset="assets/images/person/user-two.webp" type="image/webp"><img src="assets/images/person/user-two.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Brad Mustorf
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    United States
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                A really helpful tool for people who don't have time to
                                monitor the market in real time and it automates the
                                "buy low sell high" action perfectly.
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-three.webp" type="image/webp"><picture><source srcset="assets/images/person/user-three.webp" type="image/webp"><img src="assets/images/person/user-three.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Matthew
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    United States
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                I’ve seen a very nice part of Bitlirex bot, the trading bot
                                drives the level improvement of regular users.
                                With using martingale bot, and quite plain formulas,
                                I could automatically decrease my average costs, and
                                get inspirations from other enthusiasts.
                            </div>
                        </div>
                    </div>
                    <!--duplicated elements for loop animation (not delete)-->
                </div>
                <div class="users-saying__slider-track" id="users-saying-track-two" style="column-gap: 40px; --x: -1788px;">
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><img src="assets/images/person/user-one.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Thomas
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    Turkey
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                Bitlirex offers many types of trading bots suitable
                                for any type of market, bullish or bearish,
                                and it is very easy for beginners with its bot
                                marketplace copy trading feature.
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-four.webp" type="image/webp"><picture><source srcset="assets/images/person/user-four.webp" type="image/webp"><img src="assets/images/person/user-four.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Aleksandr
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    Russia
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                Мне нравится использовать трейдинговых ботов.
                                Биржа Bitlirex предоставляет самые популярные боты,
                                такие как боты сетки и DCA. Кроме того,
                                они абсолютно бесплатны для всех!
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-five.webp" type="image/webp"><picture><source srcset="assets/images/person/user-five.webp" type="image/webp"><img src="assets/images/person/user-five.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Nabhivarsha
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    India
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                I like the bot marketplace feature from Bitlirex trading bot.
                                I don't need to learn all the technical analysis and I
                                can copy bot parameters from other traders and help me
                                make profits. It's easy for beginners!
                            </div>
                        </div>
                    </div>

                    <!--duplicated elements for loop animation (not delete)-->
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><picture><source srcset="assets/images/person/user-one.webp" type="image/webp"><img src="assets/images/person/user-one.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Thomas
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    Turkey
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                Bitlirex offers many types of trading bots suitable
                                for any type of market, bullish or bearish,
                                and it is very easy for beginners with its bot
                                marketplace copy trading feature.
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-four.webp" type="image/webp"><picture><source srcset="assets/images/person/user-four.webp" type="image/webp"><img src="assets/images/person/user-four.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Aleksandr
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    Russia
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                Мне нравится использовать трейдинговых ботов.
                                Биржа Bitlirex предоставляет самые популярные боты,
                                такие как боты сетки и DCA. Кроме того,
                                они абсолютно бесплатны для всех!
                            </div>
                        </div>
                    </div>
                    <div class="users-saying__slide">
                        <div class="users-saying__slide-img">
                            <picture><source srcset="assets/images/person/user-five.webp" type="image/webp"><picture><source srcset="assets/images/person/user-five.webp" type="image/webp"><img src="assets/images/person/user-five.jpg" alt=""></picture></picture>
                        </div>
                        <div class="users-saying__slide-wrapper">
                            <div class="users-saying__slide-box">
                                <div class="users-saying__slide-name">
                                    Nabhivarsha
                                </div>
                                <div class="users-saying__slide-location">
                                    <div class="users-saying__slide-icon">
                                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.2896 3.95L12.306 4.00469C12.729 5.21568 12.729 6.53432 12.306 7.74531L12.2896 7.8C11.8904 8.90032 11.1628 9.85139 10.2051 10.5244C9.24747 11.1974 8.10612 11.5598 6.93565 11.5625C5.76481 11.5613 4.62274 11.1996 3.66479 10.5264C2.70684 9.85315 1.97951 8.9012 1.58174 7.8L1.56533 7.74531C1.14228 6.53432 1.14228 5.21568 1.56533 4.00469L1.58174 3.95C1.97951 2.8488 2.70684 1.89685 3.66479 1.22364C4.62274 0.550436 5.76481 0.188651 6.93565 0.1875C8.10649 0.188651 9.24856 0.550436 10.2065 1.22364C11.1645 1.89685 11.8918 2.8488 12.2896 3.95ZM5.54112 3.6875H8.33018C8.04994 2.81758 7.57271 2.02407 6.93565 1.36875C6.29858 2.02407 5.82135 2.81758 5.54112 3.6875ZM5.31143 4.5625C5.14376 5.42947 5.14376 6.32053 5.31143 7.1875H8.55987C8.64313 6.75495 8.68524 6.31549 8.68565 5.875C8.6855 5.4345 8.64339 4.99501 8.55987 4.5625H5.31143ZM2.12315 5.875C2.12408 6.31862 2.18478 6.76009 2.30362 7.1875H4.42002C4.27419 6.31858 4.27419 5.43142 4.42002 4.5625H2.30362C2.18478 4.98991 2.12408 5.43138 2.12315 5.875ZM8.33018 8.0625H5.54112C5.82135 8.93242 6.29858 9.72593 6.93565 10.3813C7.57271 9.72593 8.04994 8.93242 8.33018 8.0625ZM9.45127 7.1875H11.5677C11.8084 6.32905 11.8084 5.42095 11.5677 4.5625H9.45127C9.59711 5.43142 9.59711 6.31858 9.45127 7.1875ZM11.2231 8.0625H9.2544C8.99126 8.98381 8.54278 9.8417 7.93643 10.5836C8.63655 10.4324 9.29446 10.1279 9.86278 9.69198C10.4311 9.25604 10.8957 8.69953 11.2231 8.0625ZM5.93487 10.5836C5.32852 9.8417 4.88004 8.98381 4.6169 8.0625H2.64815C2.97559 8.69953 3.4402 9.25604 4.00852 9.69198C4.57684 10.1279 5.23474 10.4324 5.93487 10.5836ZM2.64815 3.6875H4.6169C4.88004 2.76618 5.32852 1.9083 5.93487 1.16641C5.23431 1.31649 4.57593 1.62058 4.00745 2.05664C3.43898 2.49269 2.97466 3.04977 2.64815 3.6875ZM7.93643 1.16641C8.54278 1.9083 8.99126 2.76618 9.2544 3.6875H11.2231C10.8966 3.04977 10.4323 2.49269 9.86384 2.05664C9.29537 1.62058 8.63699 1.31649 7.93643 1.16641Z" fill="white"></path>
                                        </svg>
                                    </div>
                                    India
                                </div>
                            </div>
                            <div class="users-saying__slide-text">
                                I like the bot marketplace feature from Bitlirex trading bot.
                                I don't need to learn all the technical analysis and I
                                can copy bot parameters from other traders and help me
                                make profits. It's easy for beginners!
                            </div>
                        </div>
                    </div>
                    <!--duplicated elements for loop animation (not delete)-->
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
    new ItcAccordion(document.querySelector('.accordion'), {
      alwaysOpen: false
    });
    (() => {
  "use strict";
  const e = document.querySelectorAll(".users-saying__slider-track"),
    t = document.getElementById("users-saying-track-one"),
    n = document.getElementById("users-saying-track-two");
  function o({ element: e, columnGap: t }) {
    let n = 0;
    for (const o of e.children) n += o.scrollWidth + t;
    !(function (e, t) {
      e.style.setProperty("--x", `-${t}px`);
    })(e, n / 2);
  }
  !(function () {
    for (const t of e) t.style.columnGap = "40px";
  })(),
    setTimeout(o, 100, { element: t, columnGap: 40 }),
    setTimeout(o, 100, { element: n, columnGap: 40 }),
    window.addEventListener("resize", () => {
      setTimeout(o, 100, { element: t, columnGap: 40 }),
        setTimeout(o, 100, { element: n, columnGap: 40 });
    });
})();

  </script>
</html>
