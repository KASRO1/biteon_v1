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

</head>

<body>
<?= render_header() ?>
<main class="mb-96 p-0">
    <section class=" box-header-launchpad_bg ">
        <div class=" box-header-launchpad p-10">
            <div class="flex justify-start">
                <p class="text-lg m-0 text-white"> Discover new, high-quality projects around the world</p>
            </div>
            <div class="flex justify-start">
                <h3 class="text-6xl mb-4 mt-2 text-blue-400"><span class="text-white"><?= $domain_titleINIT ?></span>
                    Launchpad</h3>
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

                        <div>
                            Total reward
                        </div>
                        <div>
                            9,000,000 TAKI
                        </div>
                    </div>
                </div>

            </div>
            <div class="news_card ">
                <div class="news_card__header_img" style="background-image: url(assets/images/company_logo/elt.webp);">
                    <span class="news_card_tag">On sale</span>
                </div>
                <div class="new_card_content">
                    <div class="new_card_content_header">
                        <h3 class=" m-0">ELT </h3>
                        <span class="text-gray-400 text-xs items-end flex">Element Black</span>
                    </div>
                    <div class="news_card_content_text">
                        Element Black (ELT) is a Social-Fi NFT Game development company dedicated to building an NFT
                        2.0/Create-To-Earn ecosystem. It strives to become the PUGC NFT distribution
                    </div>
                    <div class="news_card_content_static">
                        Highest Historical Yield <span class="text-green-500"> +2,189%</span>
                    </div>
                    <div class="news_card_content_static">
                        <div>
                            Total reward
                        </div>
                        <div>
                            40,000,000 ELT
                        </div>

                    </div>
                </div>

            </div>
            <div class="news_card ">
                <div class="news_card__header_img" style="background-image: url(assets/images/company_logo/BRWL.webp);">
                    <span class="news_card_tag">Mining</span>
                </div>
                <div class="new_card_content">
                    <div class="new_card_content_header">
                        <h3 class=" m-0">BRWL </h3>
                        <span class="text-gray-400 text-xs items-end flex">Blockchain Brawlers</span>
                    </div>
                    <div class="news_card_content_text">
                        Created by WAX Studios, Blockchain Brawlers is the rowdiest play-to-earn game in metaverse
                        history, featuring a hilarious and entertaining cast of NFT characters. We’re talking about a
                    </div>
                    <div class="news_card_content_static">
                        Highest Historical Yield <span class="text-green-500"> +14,344%</span>
                    </div>
                    <div class="news_card_content_static">
                        <div>
                            Total reward
                        </div>
                        <div>
                            60,000,000 BRWL
                        </div>

                    </div>
                </div>

            </div>
            <div class="news_card ">
                <div class="news_card__header_img" style="background-image: url(assets/images/company_logo/ORB.webp);">
                    <span class="news_card_tag">On sale</span>
                </div>
                <div class="new_card_content">
                    <div class="new_card_content_header">
                        <h3 class=" m-0">ORB </h3>
                        <span class="text-gray-400 text-xs items-end flex">KlayCity</span>
                    </div>
                    <div class="news_card_content_text">
                        KlayCity is a decentralized P2E (Play to Earn) game built on the Klaytn Blockchain. $ORB Tokens
                        can be used for exploring new Districts, or to upgrade existing Districts, and increase the
                    </div>
                    <div class="news_card_content_static">
                        Highest Historical Yield <span class="text-green-500"> +1,864%</span>
                    </div>
                    <div class="news_card_content_static">
                        <div>
                            Total reward
                        </div>
                        <div>
                            10,000,000 ORB
                        </div>

                    </div>
                </div>

            </div>
            <div class="news_card ">
                <div class="news_card__header_img" style="background-image: url(assets/images/company_logo/GARI.webp);">
                    <span class="news_card_tag">On sale</span>
                    <span class="news_card_tag">Regional Exclusive</span>
                </div>
                <div class="new_card_content">
                    <div class="new_card_content_header">
                        <h3 class=" m-0">GARI</h3>
                        <span class="text-gray-400 text-xs items-end flex">Gari Token</span>
                    </div>
                    <div class="news_card_content_text">
                        Chingari is the fastest growing video sharing app in India, combining the essences of blockchain and DAO, $Gari token will empower the creators and viewers through its social tools,
                    </div>
                    <div class="news_card_content_static">
                        Highest Historical Yield <span class="text-green-500"> +491%</span>
                    </div>
                    <div class="news_card_content_static">
                        <div>
                            Total reward
                        </div>
                        <div>
                            5,000,000 GARI
                        </div>

                    </div>
                </div>

            </div>
            <div class="news_card ">
                <div class="news_card__header_img" style="background-image: url(assets/images/company_logo/RAY.webp);">
                    <span class="news_card_tag">Mining</span>
                </div>
                <div class="new_card_content">
                    <div class="new_card_content_header">
                        <h3 class=" m-0">RAY  </h3>
                        <span class="text-gray-400 text-xs items-end flex">Raydium</span>
                    </div>
                    <div class="news_card_content_text">
                        Raydium is an automated market maker (AMM) built on the Solana blockchain which leverages the central order book of the Serum decentralized exchange (DEX) to enable lightning-
                    </div>
                    <div class="news_card_content_static">
                        Highest Historical Yield <span class="text-green-500"> +503%</span>
                    </div>
                    <div class="news_card_content_static">
                        <div>
                            Total reward
                        </div>
                        <div>
                            80,000 RAY
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div>
            <a class="btn-shadow max-w-sm m-auto open_error">View more</a>
        </div>
    </section>
    <section class="join_launchpad">
        <div class="join_launchpad__box">
            <div class="join_launchpad__box_content  ">
                <h3 class="">Join <span><?= $domain_titleINIT ?></span> Launchpad</h3>
                <p class="text-white ">
                    If you are a developer of innovative blockchain projects, apply below to launch your projects on
                    launchpad & reach out to millions of potential investors!
                </p>
                <div class="join_launchpad__box_content_button">
                    <a class="btn open_error">Apply to join</a>
                </div>
                <div class="join_about flex  gap-12">
                    <div class="join_about_el">
                        <img class="" src="assets/images/icons/eye.svg" alt=""><span class="">High exposure</span><span>Millions of visits</span>
                    </div>
                    <div class="join_about_el">
                        <img class="" src="assets/images/icons/transfer_block.svg" alt=""><span
                                class=" ">High exposure</span><span>Millions of visits</span>
                    </div>
                    <div class="join_about_el">
                        <img class="" src="assets/images/icons/trust_black.svg" alt=""><span
                                class=" ">High exposure</span><span>Millions of visits</span>
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
                    When does launchpad launch projects?
                </div>
                <div class="accordion__body">
                    <div class="accordion__content">
                        <?= $domain_titleINIT ?> launchpad will provide users with the opportunity to experience new
                        high-quality blockchain projects from time to time. For all events, <?= $domain_titleINIT ?>
                        will conduct warm-ups in advance and announce relevant rules for users to prepare for their
                        participation. You can keep an eye on the latest news and notifications
                        on <?= $domain_titleINIT ?>.
                    </div>
                </div>
            </div>
            <div class="accordion__item">
                <div class="accordion__header">
                    How can I participate in launchpad?
                </div>
                <div class="accordion__body">
                    <div class="accordion__content">
                        First, you need to create your <?= $domain_titleINIT ?> account or log in with your existing
                        account. Second, please make sure you have completed the Lv. 3 KYC verification. Last but not
                        least, you need to hold a certain amount of tokens for staking before participation. After
                        logging in, you can find [Launchpad] on our platform and find the homepage to view information
                        and details. Just click on the screen, and you can complete staking or unstaking your tokens.
                    </div>
                </div>
            </div>
            <div class="accordion__item">
                <div class="accordion__header">
                    What types of events does launchpad provide?
                </div>
                <div class="accordion__body">
                    <div class="accordion__content">
                        Currently, <?= $domain_titleINIT ?> launchpad provides two types of events - Mining and On Sale.
                        With token staking, the Mining model allows users to gain token rewards issued by relevant
                        projects. Every event has its own staking period and total staking limit, following on a "more
                        staking, more tokens" basis. The On Sale model adopts "Pledge + Draw" to distribute tokens. This
                        includes position census, pledging, reward census and reward distribution. Also, token is the
                        only token officially taken for pledging during the whole process. Both models are not
                        applicable for users in restricted countries/regions, and those allowed to participate should
                        refer to Project's announcements.
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?= render_footer() ?>
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