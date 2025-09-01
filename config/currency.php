<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Currency
    |--------------------------------------------------------------------------
    |
    | This value is the default currency that will be used throughout
    | the application when no specific currency is selected by the user.
    |
    */
    'default' => 'PHP',

    /*
    |--------------------------------------------------------------------------
    | Available Currencies
    |--------------------------------------------------------------------------
    |
    | This array contains all the currencies that are available for
    | selection in the inventory management system.
    |
    */
    'currencies' => [
        'PHP' => [
            'name' => 'Philippine Peso',
            'symbol' => '₱',
            'code' => 'PHP',
            'decimal_places' => 2,
        ],
        'USD' => [
            'name' => 'US Dollar',
            'symbol' => '$',
            'code' => 'USD',
            'decimal_places' => 2,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Exchange Rates
    |--------------------------------------------------------------------------
    |
    | Exchange rates relative to PHP (Philippine Peso)
    | You can update these manually or integrate with a currency API
    |
    */
    'exchange_rates' => [
        'PHP' => 1.0,        // Base currency
        'USD' => 0.018,      // 1 PHP = 0.018 USD (approximately 56 PHP = 1 USD)
    ],
]; 