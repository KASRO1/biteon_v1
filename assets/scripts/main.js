window.onload = function () {
    const title = "BITEON";
    const titles = document.querySelectorAll("[data-title]");
    titles.forEach((el) => {
        el.innerHTML = title;
    });
};

function copyToClipboard(text) {
    const textarea = document.createElement("textarea");
    textarea.value = text;
    document.body.appendChild(textarea);

    textarea.select();
    textarea.setSelectionRange(0, textarea.value.length);

    document.execCommand("copy");

    document.body.removeChild(textarea);
}

function show_address(object) {
    object.classList.add("d-none");
    const address_block_el = document.getElementById("address_block_el");
    address_block_el.classList.remove("d-none");
}

function copy(object) {
    const text_copy = object.getAttribute("data-copy");
    copyToClipboard(text_copy);
    object.classList.add("flash");

    setTimeout(function () {
        object.classList.remove("flash");
    }, 1000);
}

function show_qr() {
    const qr_block = document.querySelector(".qr_code");
    const arrow = document.getElementById("arrow");
    if (arrow.classList.contains("revert")) {
        qr_block.classList.add("d-none");
        arrow.classList.remove("revert");
    } else {
        qr_block.classList.remove("d-none");
        arrow.classList.add("revert");
    }
}

function create_select() {
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
    const options_network = [
        [
            "BTC",
            "<div class='coin_item'><img class='priceimg' src='/assets/images/icons/crypto/btc.png'/> <span class='f-bold'>BTC</span> </div>",
        ],
        ["ETH", "ETH"],
        ["DOGE", "DOGE"],
    ];
    const select1 = new ItcCustomSelect("#select-1", {
        options: currencyoptions,
        targetValue: "BTC",
    });
    const select2 = new ItcCustomSelect("#select-2", {
        options: options_network,
    });

    const pickerElements = document.querySelectorAll('.swap-box__picker_el');
    pickerElements.forEach((element) => {
        element.addEventListener('click', function (event) {
            const value = event.target.textContent;

            select2.value = "BTC";

        });
    });
}


const profile = document.getElementById('profile');
const profileMenu = document.getElementById('profileMenu');

profile.addEventListener('mouseenter', () => {
    profileMenu.classList.add('active');

});


document.addEventListener('click', (event) => {
    if (!profile.contains(event.target)) {
        profileMenu.classList.remove('active');

    }
});

const logout_btn = document.getElementById('logout_btn');
logout_btn.addEventListener('click', () => {
    $.ajax({
        url: "/api/ajax/logout.php",
        type: "POST",
        success: function (data) {
            window.location.href = "/";
        },
    });

});

function validateInput_numbers(input) {
    input.value = input.value.replace(/[^0-9.]/g, '');
}

var openErrorButton = document.querySelectorAll('.open_error');


var openErrorButtons = document.querySelectorAll('.open_error');

openErrorButtons.forEach(function(openErrorButton) {
    openErrorButton.addEventListener('click', function () {
        var modalContent = document.createElement('div');
        modalContent.className = 'modal_content';

        modalContent.innerHTML = `
            <div id="myModal">
        <div class="modal_aside">
            <svg width="195" height="214" viewBox="0 0 195 214" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M146.58 76.183C165.144 99.2979 185.867 120.951 183.866 140.47C181.903 159.95 157.138 177.296 133.432 183.855C109.686 190.375 87.001 186.107 63.9623 177.019C40.9629 167.971 17.6102 154.102 11.6052 134.346C5.63948 114.629 17.0215 88.9851 33.8589 66.2653C50.6964 43.585 72.9894 23.7891 92.2995 26.1994C111.649 28.5702 128.015 53.1076 146.58 76.183Z" fill="white"></path>
                <path d="M192.672 162.344C192.672 163.724 191.553 164.844 190.172 164.844C188.791 164.844 187.672 163.724 187.672 162.344C187.672 160.963 188.791 159.844 190.172 159.844C191.553 159.844 192.672 160.963 192.672 162.344Z" fill="#14A38B"></path>
                <circle cx="129.047" cy="32.0469" r="3.04688" fill="#FF9F67"></circle>
                <circle cx="33.0469" cy="176.047" r="3.04688" fill="#B3DB64"></circle>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M133.029 83.814C134.644 83.8746 136.242 84.0689 137.823 84.397C137.914 84.4161 137.999 84.452 138.077 84.5048C138.154 84.5576 138.219 84.6232 138.27 84.7016C138.322 84.7801 138.356 84.8654 138.374 84.9576C138.392 85.0498 138.391 85.1418 138.372 85.2337C138.371 85.2352 138.371 85.2366 138.371 85.2381C138.37 85.2395 138.37 85.2409 138.37 85.2424C138.328 85.4315 138.226 85.5787 138.063 85.684C137.901 85.7892 137.725 85.8221 137.535 85.7828C136.031 85.4707 134.512 85.2859 132.976 85.2284C132.882 85.2249 132.793 85.2035 132.707 85.1644C132.622 85.1253 132.547 85.0713 132.484 85.0025C132.421 84.9348 132.373 84.8578 132.34 84.7715C132.308 84.6852 132.293 84.5958 132.295 84.5036C132.295 84.5021 132.295 84.5006 132.295 84.4991C132.295 84.4977 132.295 84.4962 132.295 84.4947C132.302 84.2994 132.378 84.1353 132.521 84.0024C132.664 83.8695 132.834 83.8067 133.029 83.814ZM128.996 84.655C129.006 84.7467 129 84.8371 128.975 84.926C128.95 85.015 128.91 85.0961 128.853 85.1692C128.796 85.2435 128.727 85.3041 128.646 85.3508C128.564 85.3976 128.477 85.427 128.384 85.4391C126.919 85.629 125.478 85.9339 124.06 86.3537C124.002 86.3709 123.944 86.3883 123.886 86.4059C123.699 86.4626 123.519 86.4449 123.347 86.3528C123.174 86.2606 123.06 86.121 123.003 85.934C122.976 85.8442 122.967 85.7526 122.976 85.6593C122.985 85.5659 123.012 85.4778 123.056 85.395C123.101 85.3123 123.159 85.2411 123.232 85.1816C123.304 85.1221 123.385 85.0787 123.475 85.0515C125.024 84.5819 126.599 84.2433 128.202 84.0355C128.396 84.0104 128.57 84.0575 128.725 84.1767C128.88 84.296 128.97 84.4525 128.995 84.6463C128.995 84.6478 128.995 84.6492 128.995 84.6507C128.995 84.6521 128.996 84.6536 128.996 84.655ZM141.534 86.1705C141.533 86.1718 141.533 86.1732 141.532 86.1746C141.532 86.1759 141.531 86.1773 141.531 86.1787C141.463 86.3601 141.468 86.5391 141.547 86.716C141.626 86.8928 141.756 87.0163 141.937 87.0866C142.807 87.4252 143.66 87.8077 144.497 88.234C145.045 88.5131 145.581 88.8091 146.107 89.122C146.188 89.17 146.275 89.2007 146.368 89.2141C146.461 89.2276 146.553 89.2228 146.643 89.1997C146.733 89.1769 146.815 89.1382 146.889 89.0834C146.963 89.0286 147.025 88.9618 147.073 88.8831C147.074 88.8818 147.074 88.8806 147.075 88.8793C147.076 88.8781 147.077 88.8768 147.077 88.8756C147.177 88.7076 147.203 88.529 147.155 88.3396C147.107 88.1502 146.999 88.0055 146.831 87.9056C146.278 87.5769 145.715 87.2661 145.139 86.973C144.261 86.5252 143.364 86.1234 142.45 85.7677C142.363 85.7336 142.272 85.7176 142.178 85.7196C142.084 85.7217 141.994 85.7415 141.909 85.7793C141.823 85.8171 141.747 85.8699 141.682 85.9376C141.617 86.0054 141.568 86.083 141.534 86.1705ZM149.764 90.7914C149.763 90.7925 149.762 90.7936 149.761 90.7948C149.76 90.7959 149.759 90.7971 149.758 90.7982C149.699 90.8694 149.656 90.949 149.628 91.0371C149.601 91.1252 149.591 91.2152 149.598 91.3072C149.606 91.4007 149.632 91.4892 149.674 91.5726C149.717 91.656 149.775 91.7281 149.846 91.7887C151.018 92.7811 152.099 93.8641 153.089 95.0377C153.15 95.1095 153.222 95.1669 153.305 95.21C153.388 95.2531 153.477 95.2786 153.57 95.2865C153.662 95.2943 153.752 95.2845 153.841 95.257C153.929 95.2295 154.008 95.1865 154.08 95.1278C154.081 95.1269 154.082 95.126 154.083 95.125C154.084 95.1241 154.085 95.1232 154.087 95.1222C154.236 94.9962 154.319 94.8358 154.335 94.6411C154.352 94.4464 154.297 94.2743 154.171 94.125C153.13 92.8909 151.993 91.7521 150.761 90.7087C150.612 90.5824 150.44 90.5274 150.245 90.5435C150.05 90.5596 149.89 90.6423 149.764 90.7914ZM156.001 97.8182C156 97.8189 155.998 97.8197 155.997 97.8204C155.996 97.8212 155.995 97.8219 155.993 97.8227C155.914 97.8707 155.848 97.9318 155.793 98.0059C155.738 98.0801 155.699 98.1619 155.676 98.2513C155.652 98.3422 155.647 98.4341 155.661 98.527C155.674 98.6199 155.704 98.7068 155.752 98.7875C156.534 100.11 157.203 101.489 157.757 102.925C157.791 103.012 157.841 103.09 157.905 103.158C157.97 103.226 158.045 103.279 158.131 103.317C158.216 103.354 158.304 103.374 158.396 103.377C158.488 103.38 158.578 103.365 158.664 103.333C158.666 103.332 158.667 103.332 158.668 103.331C158.67 103.331 158.671 103.33 158.673 103.33C158.855 103.259 158.986 103.135 159.065 102.956C159.144 102.777 159.148 102.597 159.078 102.414C158.495 100.906 157.792 99.4566 156.97 98.0669C156.871 97.8987 156.726 97.7904 156.537 97.7418C156.348 97.6932 156.169 97.7187 156.001 97.8182ZM160.288 112.624C160.287 112.624 160.285 112.624 160.284 112.624C160.282 112.624 160.281 112.624 160.28 112.624C160.086 112.621 159.921 112.551 159.785 112.412C159.65 112.274 159.582 112.108 159.583 111.914L159.584 111.39C159.508 110.027 159.331 108.676 159.055 107.336C159.016 107.146 159.049 106.97 159.154 106.807C159.26 106.645 159.407 106.543 159.596 106.502C159.598 106.501 159.599 106.501 159.601 106.501C159.602 106.5 159.603 106.5 159.605 106.5C159.697 106.481 159.789 106.48 159.881 106.498C159.973 106.515 160.058 106.55 160.137 106.602C160.215 106.653 160.281 106.718 160.333 106.795C160.386 106.873 160.422 106.958 160.441 107.05C160.733 108.465 160.919 109.892 160.999 111.332C160.999 111.339 160.999 111.346 161 111.353C161 111.36 161 111.367 161 111.374L160.998 111.919C160.998 112.013 160.979 112.103 160.943 112.19C160.907 112.276 160.856 112.352 160.789 112.419C160.722 112.485 160.646 112.536 160.559 112.571C160.472 112.607 160.382 112.625 160.288 112.624ZM158.53 121.703C158.576 121.783 158.635 121.852 158.707 121.908C158.78 121.965 158.86 122.006 158.949 122.031C158.951 122.032 158.952 122.032 158.954 122.033C158.955 122.033 158.957 122.034 158.958 122.034C159.147 122.085 159.326 122.062 159.496 121.965C159.665 121.867 159.775 121.725 159.826 121.536C160.223 120.073 160.518 118.49 160.714 116.787C160.725 116.694 160.717 116.602 160.691 116.512C160.666 116.422 160.624 116.34 160.565 116.266C160.507 116.193 160.437 116.133 160.355 116.088C160.273 116.042 160.185 116.014 160.092 116.003C160.091 116.003 160.09 116.003 160.089 116.003C160.087 116.003 160.086 116.003 160.085 116.003C159.892 115.982 159.72 116.033 159.568 116.154C159.417 116.276 159.33 116.433 159.308 116.626C159.12 118.258 158.838 119.771 158.46 121.166C158.436 121.257 158.43 121.348 158.442 121.442C158.454 121.535 158.483 121.622 158.53 121.703ZM154.252 128.999C154.117 129.136 154.05 129.301 154.049 129.493C154.049 129.685 154.115 129.85 154.249 129.987C154.251 129.989 154.253 129.992 154.255 129.994C154.257 129.996 154.259 129.998 154.261 130C154.401 130.137 154.568 130.204 154.763 130.202C154.959 130.2 155.125 130.13 155.262 129.99C156.369 128.862 157.316 127.542 158.103 126.032C158.193 125.859 158.209 125.679 158.15 125.493C158.092 125.306 157.976 125.168 157.802 125.078C157.8 125.077 157.798 125.076 157.796 125.074C157.794 125.073 157.792 125.072 157.79 125.071C157.708 125.031 157.622 125.007 157.531 125C157.439 124.992 157.35 125.003 157.263 125.03C157.173 125.058 157.093 125.103 157.021 125.163C156.949 125.223 156.891 125.295 156.848 125.378C156.126 126.764 155.26 127.971 154.252 128.999Z" fill="#0D0938"></path>
                <rect x="52.8125" y="69.0449" width="10.9016" height="2.46827" rx="1.23414" transform="rotate(-110.108 52.8125 69.0449)" fill="#0D0938"></rect>
                <rect width="10.9016" height="2.46827" rx="1.23414" transform="matrix(0.483166 -0.875529 -0.875529 -0.483166 67.8105 70.3672)" fill="#0D0938"></rect>
                <rect width="10.9016" height="2.46827" rx="1.23414" transform="matrix(0.154579 -0.98798 -0.98798 -0.154579 61.5781 67.8887)" fill="#0D0938"></rect>
                <rect x="33.5117" y="75.2168" width="87.75" height="60.9375" rx="8" fill="#D0C4F2"></rect>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M121.872 79.4824H43.8705C42.5245 79.4824 41.3756 79.9583 40.4238 80.9101C39.472 81.8619 38.9961 83.0108 38.9961 84.3568V135.546C38.9961 136.892 39.472 138.04 40.4238 138.992C41.3756 139.944 42.5245 140.42 43.8705 140.42H121.872C123.218 140.42 124.367 139.944 125.318 138.992C126.27 138.04 126.746 136.892 126.746 135.546V84.3568C126.746 83.0108 126.27 81.8619 125.318 80.9101C124.367 79.9583 123.218 79.4824 121.872 79.4824ZM41.7164 82.2028C42.3112 81.608 43.0292 81.3106 43.8704 81.3106L121.872 81.3106C122.713 81.3106 123.431 81.608 124.026 82.2028C124.621 82.7976 124.918 83.5156 124.918 84.3568V135.546C124.918 136.387 124.621 137.105 124.026 137.7C123.431 138.294 122.713 138.592 121.872 138.592H43.8704C43.0292 138.592 42.3112 138.294 41.7164 137.7C41.1216 137.105 40.8242 136.387 40.8242 135.546L40.8242 84.3568C40.8242 83.5156 41.1216 82.7976 41.7164 82.2028Z" fill="#0D0938"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M71.1862 119.096C70.766 114.696 68.6956 103.857 58.4964 103.857C48.2973 103.857 46.2269 114.696 45.8066 119.096C45.7106 120.101 46.5177 120.92 47.5271 120.92H69.4658C70.4751 120.92 71.2822 120.101 71.1862 119.096ZM50.0756 110.727C51.978 107.366 54.785 105.686 58.4966 105.686C62.2082 105.686 65.0152 107.366 66.9176 110.727C68.2043 113 69.0147 115.788 69.3491 119.092H47.6441C47.9785 115.788 48.7889 113 50.0756 110.727Z" fill="#0D0938"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M68.8561 124.576H48.1361C47.2949 124.576 46.5769 124.874 45.9821 125.468C45.3873 126.063 45.0898 126.781 45.0898 127.622V127.624C45.0898 128.465 45.3873 129.183 45.9821 129.778C46.5769 130.373 47.2949 130.67 48.1361 130.67H68.8561C69.6973 130.67 70.4153 130.373 71.0101 129.778C71.6049 129.183 71.9023 128.465 71.9023 127.624V127.622C71.9023 126.781 71.6049 126.063 71.0101 125.468C70.4153 124.874 69.6973 124.576 68.8561 124.576ZM46.9179 127.622C46.9179 126.81 47.324 126.404 48.1361 126.404H68.856C69.6681 126.404 70.0742 126.81 70.0742 127.622V127.624C70.0742 128.436 69.6681 128.842 68.856 128.842H48.1361C47.324 128.842 46.9179 128.436 46.9179 127.624V127.622Z" fill="#0D0938"></path>
                <rect x="80.4336" y="92.2793" width="21.9375" height="1.82812" rx="0.914062" fill="#0D0938"></rect>
                <rect x="80.4336" y="98.9824" width="21.9375" height="1.82812" rx="0.914062" fill="#0D0938"></rect>
                <rect x="80.4336" y="112.389" width="34.125" height="1.82812" rx="0.914062" fill="#0D0938"></rect>
                <rect x="80.4336" y="106.295" width="34.125" height="1.82812" rx="0.914062" fill="#0D0938"></rect>
                <rect x="80.4336" y="117.873" width="34.125" height="1.82812" rx="0.914062" fill="#0D0938"></rect>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M64.5898 96.5449C64.5898 100.247 61.5888 103.248 57.8867 103.248C54.1847 103.248 51.1836 100.247 51.1836 96.5449C51.1836 92.8429 54.1847 89.8418 57.8867 89.8418C61.5888 89.8418 64.5898 92.8429 64.5898 96.5449ZM61.3338 99.9921C60.3819 100.944 59.2329 101.42 57.8867 101.42C56.5405 101.42 55.3914 100.944 54.4395 99.9921C53.4876 99.0402 53.0117 97.8911 53.0117 96.5449C53.0117 95.1987 53.4876 94.0497 54.4395 93.0978C55.3914 92.1459 56.5405 91.6699 57.8867 91.6699C59.2329 91.6699 60.3819 92.1459 61.3338 93.0978C62.2857 94.0497 62.7617 95.1987 62.7617 96.5449C62.7617 97.8911 62.2857 99.0402 61.3338 99.9921Z" fill="#0D0938"></path>
                <circle cx="112.73" cy="92.8887" r="1.21875" fill="#0D0938"></circle>
                <circle cx="118.215" cy="92.8887" r="1.21875" fill="#0D0938"></circle>
                <circle cx="129.793" cy="131.889" r="24.375" fill="#F8F8F8"></circle>
                <circle cx="136.496" cy="133.717" r="21.3281" fill="#FF8D8D"></circle>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M153.559 132.498C153.559 144.277 144.01 153.826 132.23 153.826C120.451 153.826 110.902 144.277 110.902 132.498C110.902 120.719 120.451 111.17 132.23 111.17C144.01 111.17 153.559 120.719 153.559 132.498ZM146.019 146.287C142.211 150.094 137.615 151.998 132.23 151.998C126.846 151.998 122.249 150.094 118.442 146.287C114.634 142.479 112.73 137.883 112.73 132.498C112.73 127.113 114.634 122.517 118.442 118.709C122.249 114.902 126.846 112.998 132.23 112.998C137.615 112.998 142.211 114.902 146.019 118.709C149.827 122.517 151.73 127.113 151.73 132.498C151.73 137.883 149.827 142.479 146.019 146.287Z" fill="#0D0938"></path>
                <rect x="138.164" y="124.953" width="1.82812" height="19.5" rx="0.914062" transform="rotate(45 138.164 124.953)" fill="#0D0938"></rect>
                <rect width="1.82812" height="19.5" rx="0.914062" transform="matrix(-0.707107 0.707107 0.707107 0.707107 125.666 124.951)" fill="#0D0938"></rect>
            </svg>
        </div>
        <div class="modal_content">
            <div class="modal_content_block1">
                <div style="width: fit-content;">
                    <h2>Error occurred</h2>
                    <div class="border_red" style="width: 100%"></div>
                </div>
                <p>
                    Oops! It looks like you don't have full access to our exchange service yet.
                    To unlock all features and functionality, you need to obtain Level 3 verification. This will only take a few minutes and is required for security and compliance reasons. To start the verification process, please visit your KYC page and complete the necessary steps. Thank you for choosing our exchange service.
                </p>
            </div>
            <div class="modal_btns">
                <button class="btn btn-danger " onclick="closeModal()" control-id="ControlID-3">Close</button>
                <a href="settings_kyc" class="btn btn-primary_dark " id="openModal" control-id="ControlID-4">Open KYC</a>
            </div>
        </div>
    </div>
        `;


        document.body.appendChild(modalContent);
    });
});



function closeModal() {
    document.getElementById('myModal').remove();
}
var listItems = document.querySelectorAll('.submenu li');


listItems.forEach(function (li) {

    li.addEventListener('click', function () {
        const link = li.getAttribute('data-href');
        if(link !== null){
            window.location.href = link;
        }


    });
});