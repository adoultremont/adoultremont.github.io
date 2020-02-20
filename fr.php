<?php

return [
  'Country' => [
    'code' => 'FR',
    'phone_extension' => '33',
    'vat' => 0.21,
    'bank_account_number' => env('BANK_ACCOUNT_NUMBER', 'BE85 0689 0512 4306'),
    'company' => env('COMPANY_NAME', 'POPJOB SPRL'),
    'company_address' => env('COMPANY_ADDRESS', 'Wolfshaegen 2A'),
    'company_city' => env('COMPANY_CITY', "3040 Huldenberg, Belgique"),
    'phone' => env('PHONE', "07 57 93 59 24"),
    'vetchefPhone' => env('PHONE', "07 57 93 59 24"),
    'phone_extension' => "33",
    'email' => 'hello@dogchef.fr',
    'founderEmail' => 'alex@dogchef.fr',
    'supportEmail' => 'community@dogchef.fr',
    'domain' => 'www.dogchef.fr',
    'vetchefDomain' => 'www.vetchef.fr'
  ]
];

 ?>
