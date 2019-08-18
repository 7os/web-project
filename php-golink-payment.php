<?php
namespace TymFrontiers;
require_once __DIR__ . "/base.init.php";
require_once "/Users/SIRLOUIS/Sites/GIT/tymfrontiers-private/php-golink-user/src/User.php";
require_once "/Users/SIRLOUIS/Sites/GIT/tymfrontiers-private/php-golink-payment/src/Payment.php";

// $pay = new GoLink\Payment([
//   "payer" => "190814149516",
//   "item" => "golink.spotlight.5d",
//   "remark" => "Payment for GoLink 5 Days link spotlight",
//   "amount" => 350000.00
// ],"NGN");
// \var_dump($pay);
$pay = new GoLink\Payment("GLPMT.08619.82721");
// $pay->register();
// $pay->setMethod(GoLink\Payment::WITH_USSD);
// $pay->paid(400,"pmy7735564k.487577","AUTO");
// $pay = new GoLink\Payment("GLPMT.24000.34537");
echo " <tt> <pre>";
\print_r($pay);
echo "</pre></tt>";
\var_dump($pay->changeCurrency("NGN","CARD"));
echo " <tt> <pre>";
\print_r($pay);
echo "</pre></tt>";
