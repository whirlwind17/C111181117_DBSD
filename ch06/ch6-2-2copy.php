<?php
function rateEX(int $amount, float $rate): float {

   return $amount * $rate;
}

$amount = 1000;
$rate = 28.1;

$result = rateEX($amount, $rate);
echo "1000美金兌換新台幣=". $result ."元<br/>";

?>
