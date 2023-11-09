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
    <link href="assets/styles/itc-slider.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/DataTables/datatables.css" />
</head>
<style>
    #table_wrapper{
        margin: auto;
        max-width: 1400px;
    }
    tbody tr td:nth-child(3){
        
    }
</style>
<body>
    <header >
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
        <section class="savings_block">
            <div class="savings_block__card">
                <div class="savings_block__content">
                    <h1 class="">Biteon savings</h1>
                    <p class="leading-relaxed">
                        Low risk | Flexible terms.<br />
                        Savings allows users to earn hourly interests by funding
                        <span data-title></span> margin loans.
                    </p>
                    <img src="assets/images/savings.png" alt="" />
                </div>
            </div>
        </section>
        <section class="p-10">
            <table id="table" class="savings_table" >
                <thead>
                    <tr>
                        <th>Token</th>
                        <th>Est. APY</th>
                        <th>Term</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/usdt.png" alt=""><h3>USDT</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">10.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn ">Procced</a></td>

                    </tr>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/btc.svg" alt=""><h3>BTC</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">10.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn ">Procced</a></td>

                    </tr>
                    <tr >
                        <td class="flex items-center gap-3"><img src="assets/images/icons/crypto/eth.png" alt=""><h3>ETH</h3> <span class="text-gray-500 text-xs">Tether</span></td>
                        <td ><div class="flex items-center gap-2">5.00% <span class="tag_success">Bonus</span></div></td>
                        <td >Flexible</td>
                        <td ><a class="btn ">Procced</a></td>

                    </tr>

                </tbody>

            </table>
        </section>
        <section class="faq-box grid justify-center bg-transparent text-center p-3">
            <h3 class="">FAQs</h3>
            <div id="accordion" class="accordion mb-24" style="margin: 1rem auto">
                <div class="accordion__item">
                    <div class="accordion__header">
                        What’s the benefits for the invitees as new users?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            A customizable crypto bot helps traders to create various
                            automated trading strategies. Compared with traditional manual
                            trading, trading bot can execute orders at a lower risk and
                            costs, and grasp the best trading timings.
                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">
                        Where can I see my referral rewards? How often will the rewards be
                        distributed?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            How many times can a referral code be used?
                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">
                        How many times can a referral code be used?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta
                            pariatur dolore consectetur perferendis libero nam sit magni
                            voluptatibus voluptates autem nesciunt, praesentium quidem
                            deserunt ipsa totam esse ullam? Quod, maiores!
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-center m-auto max-w-md">
                <a href="#" class="btn w-48">View more ></a>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer_box1">
            <div class="footer-box__card">
                <div class="footer-box__content">
                    <h1 class="">Trade anywhere and anytime with us</h1>
                    <p>
                        Enjoy the convenience of <span data-title></span>’s crypto trading
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
                and the Site at your own risk. <span data-title></span> 2023 © All
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
    new ItcAccordion(document.querySelector(".accordion"), {
        alwaysOpen: false,
    });
    $("#table").DataTable({
        language: {
        "search": "",
        "searchPlaceholder": 'Search crypto',
        },
        paging: false,
        
    })
</script>

</html>