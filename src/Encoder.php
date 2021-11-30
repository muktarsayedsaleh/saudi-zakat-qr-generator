<?php

namespace MuktarSayedSaleh\ZakatTlv;

use DateTime;

use MuktarSayedSaleh\ZakatTlv\Tag;

class Encoder {

    public function encode(
        string $seller_name,
        string $seller_vat_number,
        string $timestamp=null,
        float $total_amount,
        float $vat_amount
    ) {
        $now = new DateTime("now");
        $timestamp = $timestamp ?? $now->format('Y-m-dTH:i:sP');

        $components = [];

        $index=0;
        foreach([
            $seller_name,
            $seller_vat_number,
            $timestamp,
            $total_amount,
            $vat_amount
        ] as $value){
            $components[] = strval(
                new Tag(++$index, $value)
            );
        }

        return base64_encode(
            implode($components)
        );
    }
}