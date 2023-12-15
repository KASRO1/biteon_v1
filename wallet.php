<?php 



require($_SERVER['DOCUMENT_ROOT'].'/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if(!get_user_info($auth_token)){
    header("Location: /login");
}

$user_info = get_user_info($auth_token);
$total_balance = get_total_balance();
$static_procent = get_procent_to_balance($total_balance);
$static_procent_display = "";
if($static_procent['BTC'] == 0 && $static_procent['ETH'] == 0 && $static_procent['Other'] == 0){
    $static_procent_display = "100";

}
else{
    $static_procent_display = $static_procent['BTC'].",".$static_procent['ETH'].",". $static_procent['Other'];
}

?>
<!DOCTYPE html>
<html lang="en">

<?= render_head("Wallet overview") ?>

<style>
        .subtitle{
        justify-content: center;
    }
</style>
<body class="swap">
    <?=render_header()?>
    <section class="subtitle">
        <div class="subtitle_content">
            <div class="subtitle_box">
                <img src="assets/images/subtitle_logo.svg" alt="">
                <div id="subtitle_box">
                    <h1>Wallet overview</h1>
                    <p>Manage your digital assets</p>
                </div>
            </div>
            <div class="subtitle_buttons">
                <button onclick="window.location.href='/deposit'" class="btn-dark"><img src="assets/images/icons/deposit.svg" alt="">Deposit</button>
                <button onclick="window.location.href='/withdraw'" class="btn-dark"><img src="assets/images/icons/withdraw.svg" alt="">Withdraw</button>
                <button onclick="window.location.href='/transfer'" class="btn-dark"><img src="assets/images/icons/transfer.svg" alt="">Transfer</button>
                <a class="btn-dark"><img src="assets/images/icons/history.svg" alt="">History</a>
            </div>
        </div>



    </section>
    <main class="wallet_overview">
        <section class="swap_cards_info">
            <div class="swap_card">
                <div class="swap_card_balance">
                    <h3>Total balance <span class="swap_card_balance_arrow"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 4 3" fill="none">
                        <path d="M1.6123 2.32849C1.78461 2.62694 2.21539 2.62694 2.3877 2.32849L3.34435 0.671511C3.51666 0.373062 3.30128 0 2.95666 0H1.04334C0.698724 0 0.483337 0.373062 0.655647 0.671512L1.6123 2.32849Z" fill="white" fill-opacity="0.8"/>
                      </svg></span></h3>
                    <h2><?=$total_balance?> $</h2>
                    <span>~ <?=number_format(convertCryptoPrice($total_balance, 192, 189), 2)?> BTC</span>
                </div>
                <div class="swap_card_chart">

                    <div class="swap_card_chart__chart">
                        <canvas id="doughnut-chart" ></canvas>

                    </div>
                    <div class="swap_card_chart__chart_static">
                        <h3>BTC <?=$static_procent['BTC']?>%</h3>
                        <h3>ETH <?=$static_procent['ETH']?>%</h3>
                        <h3>Others <?=$static_procent['Other']?>%</h3>
                    </div>
                </div>
            </div>
            <div class="swap_card">
                <div class="swap_card_avatar">
                    <img src="<?=$user_info['avatar']?>" alt="" srcset="">
                </div>
                <div class="swap_card_profile_info">
                    <div class="swap_card_profile_info_content">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 12 12" fill="none">
                                <path d="M6.46155 7.84608C7.99096 7.84608 9.23078 6.60625 9.23078 5.07685C9.23078 3.54744 7.99096 2.30762 6.46155 2.30762C4.93215 2.30762 3.69232 3.54744 3.69232 5.07685C3.69232 6.60625 4.93215 7.84608 6.46155 7.84608Z" stroke="white" stroke-width="0.692308" stroke-miterlimit="10"/>
                                <path d="M2.26398 10.2684C2.68956 9.53174 3.30149 8.92007 4.03831 8.49482C4.77513 8.06956 5.61089 7.84569 6.46162 7.8457C7.31235 7.84571 8.1481 8.0696 8.88491 8.49487C9.62172 8.92014 10.2336 9.53182 10.6592 10.2685" stroke="white" stroke-width="0.692308" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <?=$user_info['username']?>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                <g clip-path="url(#clip0_170_1906)">
                                  <path d="M2.15395 2.23047H10.7693C11.3616 2.23047 11.8463 2.71508 11.8463 3.30739V9.76893C11.8463 10.3612 11.3616 10.8459 10.7693 10.8459H2.15395C1.56164 10.8459 1.07703 10.3612 1.07703 9.76893V3.30739C1.07703 2.71508 1.56164 2.23047 2.15395 2.23047Z" stroke="white" stroke-width="1.07692" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M11.8463 3.30762L6.46164 7.07685L1.07703 3.30762" stroke="white" stroke-width="1.07692" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_170_1906">
                                    <rect width="12.9231" height="12.9231" fill="white" transform="translate(0 0.0771484)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            <?=$user_info['email']?>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                <path d="M7.56925 7.7233H9.78463M7.56925 9.93869H9.78463M7.56925 3.29253H9.78463M7.56925 5.50792H9.78463M1.75386 1.07715H11.1693C11.6281 1.07715 12 1.4491 12 1.90792V11.3233C12 11.7821 11.6281 12.1541 11.1693 12.1541H1.75386C1.29504 12.1541 0.923096 11.7821 0.923096 11.3233V1.90792C0.923096 1.4491 1.29504 1.07715 1.75386 1.07715ZM3.13848 3.29253H5.35387V5.50792H3.13848V3.29253ZM3.13848 7.7233H5.35387V9.93869H3.13848V7.7233Z" stroke="white" stroke-width="1.10769" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              ID: <?=$user_info['ref_code']?>
                        </div>
                        <div>
                            <span>Last activity time:</span>
                            <span><?=$user_info['last_online']?></span>
                        </div>
                    </div>
                    <div class="swap_card_profile_tags">
                            <?php if($user_info['kyc'] == 1):?>
                                <h3 class="red_tag_full"><  class="red_tag"><svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 3 4" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.07773 1.54682L0.0621246 2.56731L0.572484 3.07523L1.58809 2.05473L2.60913 3.07088L3.11704 2.56052L2.096 1.54437L3.11206 0.523429L2.6017 0.0155137L1.58565 1.03646L0.565244 0.020945L0.057329 0.531304L1.07773 1.54682Z" fill="white"/>
                          </svg></span>UNVERIFIED</h3>
                            <?php else:?>
                                <h3 style="border: 2px solid #0E9B35; color: #0E9B35" class="red_tag_full"><span style="background: #0E9B35; " class="red_tag"><svg style="position: relative; top: 2px" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 3 4" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.07773 1.54682L0.0621246 2.56731L0.572484 3.07523L1.58809 2.05473L2.60913 3.07088L3.11704 2.56052L2.096 1.54437L3.11206 0.523429L2.6017 0.0155137L1.58565 1.03646L0.565244 0.020945L0.057329 0.531304L1.07773 1.54682Z" fill="white"/>
                          </svg></span>VERIFIED</h3>
                            <?php endif;?>
                          <h3 class="red_tag_full"><span class="red_tag"><svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 3 4" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.07773 1.54682L0.0621246 2.56731L0.572484 3.07523L1.58809 2.05473L2.60913 3.07088L3.11704 2.56052L2.096 1.54437L3.11206 0.523429L2.6017 0.0155137L1.58565 1.03646L0.565244 0.020945L0.057329 0.531304L1.07773 1.54682Z" fill="white"/>
                          </svg></span>PREMIUM</h3>
                        <h3 class="red_tag_full"><span class="red_tag"><svg xmlns="http://www.w3.org/2000/svg"viewBox="0 0 3 4" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.07773 1.54682L0.0621246 2.56731L0.572484 3.07523L1.58809 2.05473L2.60913 3.07088L3.11704 2.56052L2.096 1.54437L3.11206 0.523429L2.6017 0.0155137L1.58565 1.03646L0.565244 0.020945L0.057329 0.531304L1.07773 1.54682Z" fill="white"/>
                          </svg></span>V.I.P</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class=" wallet_overview_box-7">
            <div class="table_header_wallet_over">
                <div class="inpt_search">
                    <input type="text" oninput="search_coins()" placeholder="Search">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="none">
                        <path d="M6.34513 10.3855C8.57551 10.3855 10.3836 8.57744 10.3836 6.34705C10.3836 4.11667 8.57551 2.30859 6.34513 2.30859C4.11475 2.30859 2.30667 4.11667 2.30667 6.34705C2.30667 8.57744 4.11475 10.3855 6.34513 10.3855Z" stroke="white" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.22943 9.23145L12.0771 12.0791" stroke="white" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </div>
                <div class="wallet_overview_checkboxes">
                    <input onchange="hide_zero_balance(this)" type="checkbox" style="--border: #fff;" id="hide_balance" >
                    <label for="hide_balance">Hide zero balances</label>
                </div>
            </div>
            <div class="wallet_overview_box-7_content">
                
            
            <div class="flex ">

                
            </div>
            <div class="opportunitiew_table">

                <table id="coinTable" class="table">

                 

                    <tr class="heading__table ">
                        <th>Coin</th>
                        <th>Total</th>
                        <th>In orders</th>
                        <th id="equivalentHeader">Equivalent, USD</th>
                        <th>Actions</th>
                    </tr>

                

                    
                        <?=render_wallet_overview()?>
                    


                </table>

            </div>
        </div>
        </section>
    </main>
    <div class="mobile_settings">
        <ul>
            <li class="active">
                <a href="/deposit" "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M12.1651 12.8652H7.99841" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.0817 10.832V14.9987" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.8302 2.0978L10.8052 2.15614L8.38858 7.76447H6.01358C5.44691 7.76447 4.90524 7.88114 4.41357 8.08947L5.87191 4.60614L5.90524 4.5228L5.96358 4.38947C5.98024 4.33947 5.99691 4.28947 6.02191 4.2478C7.11358 1.7228 8.34691 1.1478 10.8302 2.0978Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.3219 7.931C14.9469 7.81433 14.5469 7.76433 14.1469 7.76433H8.38855L10.8052 2.156L10.8302 2.09766C10.9552 2.13933 11.0719 2.19766 11.1969 2.24766L13.0385 3.02266C14.0635 3.44766 14.7802 3.88933 15.2135 4.42266C15.2969 4.52266 15.3635 4.61433 15.4219 4.72266C15.4969 4.83933 15.5552 4.956 15.5885 5.081C15.6219 5.156 15.6469 5.231 15.6635 5.29766C15.8885 5.99766 15.7552 6.856 15.3219 7.931Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.215 11.8323V13.4573C18.215 13.624 18.2066 13.7906 18.1983 13.9573C18.04 16.8656 16.415 18.3323 13.3316 18.3323H6.83167C6.63167 18.3323 6.43167 18.3156 6.24 18.2906C3.58999 18.1156 2.17332 16.699 1.99832 14.049C1.97332 13.8573 1.95667 13.6573 1.95667 13.4573V11.8323C1.95667 10.1573 2.97333 8.71563 4.42333 8.09063C4.92333 7.88229 5.45666 7.76562 6.02332 7.76562H14.1566C14.565 7.76562 14.965 7.82395 15.3316 7.93228C16.99 8.44062 18.215 9.99063 18.215 11.8323Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.8719 4.60742L4.41357 8.09076C2.96357 8.71576 1.9469 10.1574 1.9469 11.8324V9.39076C1.9469 7.02409 3.63023 5.04909 5.8719 4.60742Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.2124 9.39037V11.832C18.2124 9.9987 16.9957 8.44037 15.3291 7.94037C15.7624 6.85703 15.8874 6.00703 15.6791 5.2987C15.6624 5.2237 15.6374 5.1487 15.6041 5.08203C17.1541 5.88203 18.2124 7.5237 18.2124 9.39037Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                    <span>Deposit</span></a>
            </li>
            <li><a href="/withdraw""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                <path d="M11.8851 12.8652H7.71838" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.5502 2.0978L10.5252 2.15614L8.10855 7.76447H5.73355C5.16688 7.76447 4.62521 7.88114 4.13354 8.08947L5.59188 4.60614L5.62521 4.5228L5.68355 4.38947C5.70021 4.33947 5.71688 4.28947 5.74188 4.2478C6.83355 1.7228 8.06689 1.1478 10.5502 2.0978Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.0419 7.931C14.6669 7.81433 14.2669 7.76433 13.8669 7.76433H8.10852L10.5252 2.156L10.5502 2.09766C10.6752 2.13933 10.7919 2.19766 10.9169 2.24766L12.7585 3.02266C13.7835 3.44766 14.5002 3.88933 14.9335 4.42266C15.0169 4.52266 15.0835 4.61433 15.1419 4.72266C15.2169 4.83933 15.2752 4.956 15.3085 5.081C15.3419 5.156 15.3669 5.231 15.3835 5.29766C15.6085 5.99766 15.4752 6.856 15.0419 7.931Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.935 11.8323V13.4573C17.935 13.624 17.9266 13.7906 17.9183 13.9573C17.76 16.8656 16.135 18.3323 13.0516 18.3323H6.55164C6.35164 18.3323 6.15164 18.3156 5.95997 18.2906C3.30997 18.1156 1.8933 16.699 1.7183 14.049C1.6933 13.8573 1.67664 13.6573 1.67664 13.4573V11.8323C1.67664 10.1573 2.6933 8.71563 4.1433 8.09063C4.6433 7.88229 5.17664 7.76562 5.7433 7.76562H13.8766C14.285 7.76562 14.685 7.82395 15.0516 7.93228C16.71 8.44062 17.935 9.99063 17.935 11.8323Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.59187 4.60742L4.13354 8.09076C2.68354 8.71576 1.66687 10.1574 1.66687 11.8324V9.39076C1.66687 7.02409 3.3502 5.04909 5.59187 4.60742Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.9324 9.39037V11.832C17.9324 9.9987 16.7157 8.44037 15.0491 7.94037C15.4824 6.85703 15.6074 6.00703 15.3991 5.2987C15.3824 5.2237 15.3574 5.1487 15.3241 5.08203C16.8741 5.88203 17.9324 7.5237 17.9324 9.39037Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
                <span>Withdraw</span></a></li>
            <li><a href="/transfer"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                <path d="M7.5002 18.3327H12.5002C16.6669 18.3327 18.3335 16.666 18.3335 12.4993V7.49936C18.3335 3.33269 16.6669 1.66602 12.5002 1.66602H7.5002C3.33354 1.66602 1.66687 3.33269 1.66687 7.49936V12.4993C1.66687 16.666 3.33354 18.3327 7.5002 18.3327Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.292 11.5156L11.7587 14.0489" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.70862 11.5156H14.292" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.70862 8.4845L8.24195 5.95117" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.292 8.48438H5.70862" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
                <span>Transfer</span></a></li>
            <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                <path d="M18.5603 5.83269V14.166C18.5603 16.666 17.3103 18.3327 14.3937 18.3327H7.72697C4.8103 18.3327 3.5603 16.666 3.5603 14.166V5.83269C3.5603 3.33269 4.8103 1.66602 7.72697 1.66602H14.3937C17.3103 1.66602 18.5603 3.33269 18.5603 5.83269Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.1437 3.75V5.41667C13.1437 6.33333 13.8937 7.08333 14.8103 7.08333H16.477" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.72693 10.834H11.0603" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.72693 14.166H14.3936" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
                <span>History</span></a></li>
        </ul>
    </div>
   
</body>
<script src="assets/scripts/main.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js
"></script>
<script>
    $(document).ready(function() {
        // Функция для сортировки таблицы по столбцу
        function sortTable(columnIndex, descending) {
            var table = $('#coinTable');
            var rows = table.find('.balance_overview_element').toArray();

            rows.sort(function(a, b) {
                var aValue = parseFloat($(a).data('balance'));
                var bValue = parseFloat($(b).data('balance'));
                return descending ? (bValue - aValue) : (aValue - bValue);
            });

            // Удаляем существующие строки из таблицы
            table.find('.balance_overview_element').remove();

            // Вставляем строки в отсортированном порядке
            $.each(rows, function(index, row) {
                table.append(row);
            });
        }

        // Вызываем функцию сортировки при загрузке страницы
        sortTable(3, true);
    });
</script>
<script>
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {

      datasets: [
        {

          backgroundColor: ["#69acf3","#b2ebff","#4565da"],
          data: [<?=$static_procent_display?>],
          borderWidth: 0,
         
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
function search_coins(){
    const input = document.querySelector('.inpt_search input');
    const value = input.value;
    const elements = document.querySelectorAll('.balance_overview_element');
    elements.forEach(element => {
        const coin = element.getAttribute('data-coin');
        if(coin.toLowerCase().includes(value.toLowerCase())){
            element.style.display = 'table-row';
        }
        else{
            element.style.display = 'none';
        }
    });

}
function hide_zero_balance(this_el){
    const elements = document.querySelectorAll('.balance_overview_element');
    if(this_el.checked){
        elements.forEach(element => {
            const balance = parseInt(element.getAttribute('data-balance'));
            if(balance == 0){
                element.style.display = 'none';
            }
        });

    }
    else{
        elements.forEach(element => {
            element.style.display = 'table-row';
        });
        search_coins()
    }
    
}

</script>

</html>