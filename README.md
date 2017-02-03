# laravel-qrcode
A laravel plugin to simplify QRcode generation.

# Installation
Install it via composer
    composer require utkarsh/laravel-qrcode

Then add the `QrCodeServiceProvider` to the `providers` array in `config/app.php`.
    Utkarsh\QrCode\Providers\QrCodeServiceProvider::class,

then add the `QrCode` alias to the aliases array in the same file.
    `'QrCode' => Utkarsh\QrCodeServiceProvider\Facades\QRcode::class,`

# Usage
Coming Soon!
