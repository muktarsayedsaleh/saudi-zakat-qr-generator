A PHP package that implements the e-invoice QR code signature requirements as designed by the Zakat authority of Saudi Arabia.

## How to install?
```
composer require muktar-sayedsaleh/zakat-tlv-generator
```

## How to use?

```php
use MuktarSayedSaleh\ZakatTlv\Encoder;

$encoder = new Encoder();
$qr_signature = $encoder->encode(
    "Axis Inspection - Sparehub",
    "1234567890",
    null,
    10000,
    150
);

// Use the signature to render your QR image!
```

Notes:
1. If you pass the third parameter as null, the package will assume that we're passing the current time stamp. Otherwise you may pass your own timestamp as a string.