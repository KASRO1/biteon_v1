<?php
require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
$auth_token = $_COOKIE['auth_token'];
if (!get_user_info($auth_token)) {
    header("Location: /log-in");
}
$user_info = get_user_info($auth_token);

?>
<!DOCTYPE html>
<html lang="en">
<?= render_head("Crypto market cap") ?>

<body class="swap">
    <?= render_header() ?>
	<div class="container-fluid mtb15">
    <div class="row">
      <div class="col-md-12">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container" style="width: 100%; height: 900px;">
          <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A900%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%2C%22TRY%22%2C%22SEK%22%2C%22NOK%22%2C%22DKK%22%2C%22ZAR%22%2C%22HKD%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22dark%22%2C%22utm_source%22%3A%22bitlirex.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22bitlirex.com%2Fcross-rates%22%7D" title="forex cross-rates TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: 900px; width: 100%;"></iframe>
          
        <style>
	.tradingview-widget-copyright {
		font-size: 13px !important;
		line-height: 32px !important;
		text-align: center !important;
		vertical-align: middle !important;
		/* @mixin sf-pro-display-font; */
		font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
		color: #B2B5BE !important;
	}

	.tradingview-widget-copyright .blue-text {
		color: #2962FF !important;
	}

	.tradingview-widget-copyright a {
		text-decoration: none !important;
		color: #B2B5BE !important;
	}

	.tradingview-widget-copyright a:visited {
		color: #B2B5BE !important;
	}

	.tradingview-widget-copyright a:hover .blue-text {
		color: #1E53E5 !important;
	}

	.tradingview-widget-copyright a:active .blue-text {
		color: #1848CC !important;
	}

	.tradingview-widget-copyright a:visited .blue-text {
		color: #2962FF !important;
	}
	</style></div>
        <!-- TradingView Widget END -->
      </div>
    </div>
  </div>
    <?= render_footer() ?>
</body>

</html>