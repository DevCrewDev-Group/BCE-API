<?php

$price_json = file_get_contents('http://api.1bcoin.me/bce');

$decoded_json = json_decode($price_json, true);

foreach($decoded_json as $key => $value) {
     $name[] = $decoded_json[$key]["bid_by"];
     $max_bid[] = $decoded_json[$key]["price"];

    }

$maxprice = max($max_bid);

echo "Akutelles Höchstgebot $maxprice €";

?>