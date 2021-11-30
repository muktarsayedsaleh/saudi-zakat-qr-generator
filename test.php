<?php

require __DIR__ . '/vendor/autoload.php';

use MuktarSayedSaleh\ZakatTlv\Encoder;

$encoder = new Encoder();
$qr_signature = $encoder->encode(
    "Sparehub",
    "1234567890",
    null,
    10000,
    150
);

var_dump($qr_signature);