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
    <link href="assets/styles/itc-slider.css" rel="stylesheet" />
</head>

<body>
    <?=render_header()?>
    <main class="mb-96 p-0">
        <section class="box-header_travellar p-5">
            <div class="block box-header_travellar_content">
                <div>
                    <h3 class=" mb-4 ">
                        <span data-title></span> Space Traveller Earn with your referral code!
                    </h3>
                </div>
                <div>
                    <p class=" mb-5 text-white">
                        Up to 60% commission waiting for you to unlock!
                    </p>
                </div>
                <div class="block__button w-80">
                    <a href="" class="btn">Join us now!</a>
                </div>
            </div>
            <img class="h-fit" src="assets/images/person/cosmonauts.png" alt="" />
        </section>
        <section class="supercharge-box bg-transparent">
            <h3 class=" mb-16">Get commission easily</h3>
            <div class="supercharge__elements">
                <div class="supercharge_el">
                    <img src="assets/images/share_code.png" alt="" /><span class="font-bold">Share your code</span><span
                        class="text-gray-400">Share your referral code/link to your friends or the
                        community.</span>
                </div>
                <div class="supercharge_el">
                    <img src="assets/images/referral_signup.png" alt="" /><span class="font-bold">Referral sign up for
                        trading</span><span class="text-gray-400">Earn from every sign up through your referral for
                        trading.</span>
                </div>
                <div class="supercharge_el">
                    <img src="assets/images/start_earning.png" alt="" /><span class="font-bold">Start
                        earning</span><span class="text-gray-400">Up to 60% commission waiting for you to unlock while
                        your friends
                        enjoy 10% rebate.</span>
                </div>
            </div>
        </section>
        <section class="grid justify-center">
            <h2 class="travaller_card_h2 text-center">Space Traveller Tiers</h2>
            <div class="traveller_cards">
                <div class="travaller_card rounded-lg">
                    <p class="">Mars Adventurer</p>
                    <img class="m-auto" src="assets/images/person/cosmonaut-1.png" alt="" />
                    <div class="travaller_card_statics">
                        <div class="travaller_card_static">
                            <span>Commission</span>
                            <span class="text-blue-300">50%</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Referrals</span>
                            <span>≥20</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Activation Rate</span>
                            <span>≥20%</span>
                        </div>
                    </div>
                </div>
                <div class="travaller_card rounded-lg">
                    <p class="">Mars Adventurer</p>
                    <img class="m-auto" src="assets/images/person/cosmonaut-2.png" alt="" />
                    <div class="travaller_card_statics">
                        <div class="travaller_card_static">
                            <span>Commission</span>
                            <span class="text-blue-300">50%</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Referrals</span>
                            <span>≥20</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Activation Rate</span>
                            <span>≥20%</span>
                        </div>
                    </div>
                </div>
                <div class="travaller_card rounded-lg">
                    <p class="">Mars Adventurer</p>
                    <img class="m-auto" src="assets/images/person/cosmonaut-3.png" alt="" />
                    <div class="travaller_card_statics">
                        <div class="travaller_card_static">
                            <span>Commission</span>
                            <span class="text-blue-300">50%</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Referrals</span>
                            <span>≥20</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Activation Rate</span>
                            <span>≥20%</span>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="travaller_card rounded-lg">
                    <p class="">Mars Adventurer</p>
                    <img class="m-auto" src="assets/images/person/cosmonaut-4.png" alt="" />
                    <div class="travaller_card_statics">
                        <div class="travaller_card_static">
                            <span>Commission</span>
                            <span class="text-blue-300">50%</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Referrals</span>
                            <span>≥20</span>
                        </div>
                        <div class="travaller_card_static">
                            <span>Activation Rate</span>
                            <span>≥20%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex justify-center">
            <div class="p-10 ">
                <h3 class="font-normal text-center">Requirements</h3>
                <p class="max-w-7xl text-color_req leading-6">
                    In order to get a higher commission better than 20%, please fill out Space Traveller Application
                    Form to
                    apply.
                    Every <span data-title></span> user, KOLs, bloggers, community managers and influencers are welcomed
                    to promote <span data-title></span>
                    and
                    become a Space Traveller.
                    Activation rate = number of activated referrals / total number of referrals. Activated referrals are
                    those who trade more than $50 on <span data-title></span>.
                    <span data-title></span> will evaluate your performance and adjust your Space Traveller tier every
                    month. The referral
                    data will be reset monthly.
                    Sun Captains enjoy 50% commission from the referrals’ trading fee and 10% commission from
                    sub-referrals’.
                </p>
                <div class=" flex justify-center">
                    <a href="#" class="btn max-w-xs">View more ></a>
                </div>
            </div>
        </section>
        <section class="grid justify-center">
            <h2 class=" text-center">More Benefits</h2>
            <div class="benefits_cards">
                <div class="benefits_card rounded-lg p-5">
                    <div class="flex justify-between mb-10">
                        <h3>Exclusive Bonus</h3>
                        <img src="assets/images/icons/bonus.svg" alt="">
                    </div>
                    <p>Besides referral commission, <span data-title></span> will hold exclusive
                        events for Space Travellers and you could win NFT,
                        Futures trial fund and more.</p>

                </div>
                <div class="benefits_card rounded-lg p-5">
                    <div class="flex justify-between mb-10">
                        <h3>Special Events</h3>
                        <img src="assets/images/icons/events.svg" alt="">
                    </div>
                    <p>Space Travellers could gain exclusive access to online
                        and offline events and crypto industry lectures hosted
                        by <span data-title></span>.</p>

                </div>
                <div class="benefits_card rounded-lg p-5">
                    <div class="flex justify-between mb-10">
                        <h3>Build <span data-title></span> Together</h3>
                        <img src="assets/images/icons/together.svg" alt="">
                    </div>
                    <p>Space Traveller could help us build and grow the
                        <span data-title></span> ecosystem by providing direct input for our
                        products and marketing initiatives.
                    </p>

                </div>

            </div>
        </section>
        <section class="faq-box grid justify-center bg-transparent text-center p-3">
            <h3 class="">FAQs</h3>
            <div id="accordion" class="accordion mb-24" style=" margin: 1rem auto;">
                <div class="accordion__item">
                    <div class="accordion__header">
                        What’s the benefits for the invitees as new users?
                    </div>
                    <div class="accordion__body">
                        <div class="accordion__content">
                            A customizable crypto bot helps traders to create various automated trading strategies.
                            Compared with traditional manual trading, trading bot can execute orders at a lower risk and
                            costs, and grasp the best trading timings.
                        </div>
                    </div>
                </div>
                <div class="accordion__item">
                    <div class="accordion__header">
                        Where can I see my referral rewards? How often will the rewards be distributed?
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
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta pariatur dolore consectetur
                            perferendis libero
                            nam sit magni voluptatibus voluptates autem nesciunt, praesentium quidem deserunt ipsa totam
                            esse ullam? Quod,
                            maiores!
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center text-center m-auto  max-w-md"><a href="#" class="btn w-48">View more ></a></div>
        </section>
        <section class=" px-32 flex ">
            <div class="banner_traveller  justify-between w-100">
                <div class="block p-8">
                    <h2 class="mb-0 ">Biteon Space Traveller</h2>
                    <p class="text-white mt-2">Up to <span class="text-yellow-500">60% commission</span> waiting for you to unlock!</p>
                </div>
                <div class="items-center flex mr-5">
                    <a href="#" class="btn-white font-bold">Join us now!</a>
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
</script>

</html>