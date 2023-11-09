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
function create_select(){
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
    element.addEventListener('click', function(event) { 
      const value = event.target.textContent;

      select2.value  = "BTC";

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
