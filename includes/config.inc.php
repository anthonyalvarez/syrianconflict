<?php
/*
 * config.inc.php
 *
 * PHP Toolkit for PayPal v0.50
 * http://www.paypal.com/pdn
 *
 * Copyright (c) 2004 PayPal Inc
 *
 * Released under Common Public License 1.0
 * http://opensource.org/licenses/cpl.php
 *
*/

//remove accented characters from application
function removeaccents($txt) {
	return strtr($txt,
	 "\xe1\xc1\xe0\xc0\xe2\xc2\xe4\xc4\xe3\xc3\xe5\xc5".
	 "\xaa\xe7\xc7\xe9\xc9\xe8\xc8\xea\xca\xeb\xcb\xed".
	 "\xcd\xec\xcc\xee\xce\xef\xcf\xf1\xd1\xf3\xd3\xf2".
	 "\xd2\xf4\xd4\xf6\xd6\xf5\xd5\x8\xd8\xba\xf0\xfa".
	 "\xda\xf9\xd9\xfb\xdb\xfc\xdc\xfd\xdd\xff\xe6\xc6\xdf",
	 "aAaAaAaAaAaAacCeEeEeEeEiIiIiIiInNoOoOoOoOoOoOoouUuUuUuUyYyaAs");
}

//Configuration Settings

//$paypal[business]="testrb2@test.com";
$paypal[business] = "all@worldpeacesociety.org";
$paypal[site_url]="http://www.worldpeacesociety.org/";
$paypal[image_url]="logo_paypal.gif";
$paypal[success_url]="success.php";
$paypal[cancel_url]="error.php";
$paypal[notify_url]="ipn/ipn.php";
$paypal[return_method]="2"; //1=GET 2=POST
$paypal[currency_code]="USD"; //[USD,GBP,JPY,CAD,EUR]
$paypal[lc]="US";

//$paypal[url]="http://www.paypal.com/cgi-bin/webscr";
$paypal[url]="https://www.paypal.com/cgi-bin/webscr";
//$paypal[url]="https://www.sandbox.paypal.com/cgi-bin/webscr";
$paypal[post_method]="libCurl"; //fso=fsockopen(); curl=curl command line libCurl=php compiled with lib