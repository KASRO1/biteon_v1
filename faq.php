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
    <link rel="stylesheet" href="/assets/DataTables/datatables.css" />
    <script src="/assets/DataTables/datatables.js"></script>
</head>

<body>
    <?=render_header()?>
    <main class="mb-96 p-0">
        <section class="preotecting_your_assets_sec">
            <div class="preotecting_your_assets">
                <div class="preotecting_your_assets__content">
                    <div class="preotecting_your_assets__content_line"></div>
                    <h1 >Protecting your assets</h1>
                    <p>
                        We protect the daily security of your assets by using secure
                        online/offline storage systems with multisig protection and
                        multiple backups. For times when things are out of your control,
                        we have our Biteon Risk Shield.
                    </p>

                </div>
                <div class="preotecting_your_assets__img">
                    <img src="assets/images/protecting.png" alt="" />
                    <div class="preotecting_your_assets__content_line_img"></div>
                </div>
            </div>
        </section>
        <section class="preotecting_your_assets_content">
            <div>
                <h2>What is Biteon Risk Shield?</h2>
                <p>To safeguard our users' assets, Biteon has created an asset risk reserve fund committed to continually allocating a percentage of our
                    earnings to guarantee and protect assets from crypto security risks. Biteon Risk Shield now stands at approximately more than $700
                    million.</p>
            </div>
            <div>
                <h2>Why do we need this fund?</h2>
                <p>To create a safe, secure, and accountable crypto trading environment for all users as crypto adoption becomes widely encouraged. This
                    fund, in addition to our leading asset security risk control system, will provide new and existing users with strong protection to safeguard
                    their assets.</p>
            </div>
            <div>
                <h2>Secure offline storage design</h2>
                <p>Cryptocurrencies are innovative digital assets. They're a great way to participate in trustless financial ecosystems. However, asset security
                    that's based on cryptographic functions and data protection is one of the major challenges for the industry. Cryptography leverages
                    extensively tested and widely accepted encryption standards (SHA-256 hash and ECDSA encryption). But data security, including private
                    keys and passwords, remains the weak link. Offline asset storage, also known as cold wallet systems, (not connected to the internet at all)
                    are designed to counter these concerns.</p>
                <h5>
                    How does our cold wallet system work?
                </h5>
                <p>Our security program encompasses all aspects: platform, assets, data, and access security. We are transparent and public with our
                    protocols that guarantee complete protection of funds on Biteon. Multiple backups, bank vaults, and storage limits are only some of the
                    measures we take. Explore our approach and see for yourself that your crypto is safe with us.</p>
                <ul>
                    <li>10,000 cold wallet addresses with private keys are generated on an offline computer.</li>
                    <li>All private keys are encrypted on the offline computer using Advanced Encryption Standard (AES).</li>
                    <li>Original keys are deleted, leaving only the encrypted versions.</li>
                    <li>The two AES password owners are prohibited from traveling together or using the same vehicle.</li>
                    <li>The addresses and their encrypted private keys on the offline computer are only accessible via QR codes.</li>
                    <li>The QR code of an address is scanned using another computer in order to retrieve the corresponding cold wallet address. This address
                        then receives deposits from our hot wallet. Each cold wallet address is used only once.</li>
                    <li>The QR code for the encrypted key is printed and stored inside a bank vault. The code remains secure because the bank vault requires in-
                        person access.</li>
                    <li>Additional backups of the QR code are created and stored in bank vaults in separate locations: one is in China and another is in a city on
                        the East Coast of the USA.</li>
                    <li>Two authorized employees are granted access to vaults with backup QR codes.</li>
                    <li>Similar to the AES password owners, authorized employees for bank vaults are prohibited from traveling together or using the same
                        vehicle.</li>
                    <li>Employees who own the AES password and those with access to bank vaults are all different people.</li>

                </ul>
            </div>
            <div>
                <h2>Secure online storage design</h2>
                <p>Offline asset storage - cold wallets - are the safest vaults for cryptocurrency. But crypto exchanges require ready access to some funds to
                    deposit and withdraw funds for users. It's possible thanks to online storage known as hot wallets. Since hot wallet systems are connected to
                    the internet, operating them safely is a bigger challenge. We created our own semi-offline multi-signature mechanism. It supports quick,
                    secure, and convenient deposits and withdrawals.</p>
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
    new ItcAccordion(document.querySelector('.accordion'), {
        alwaysOpen: false
    });
</script>

</html>