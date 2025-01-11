<?php

return [
    'apis' => [
        'pushover' => [
            'nidavellir' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR'),
            'nidavellir_cronjobs' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_CRONJOBS'),
            'nidavellir_positions' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_POSITIONS'),
            'nidavellir_orders' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_ORDERS'),
            'nidavellir_users' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_USERS'),
            'nidavellir_errors' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_ERRORS'),
            'nidavellir_warnings' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_WARNINGS'),
            'nidavellir_monitor' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_MONITOR'),
            'nidavellir_rate_limit' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_RATELIMIT'),
            'nidavellir_symbols' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_SYMBOLS'),
            'nidavellir_profit' => env('PUSHOVER_APPLICATION_TOKEN_NIDAVELLIR_PROFIT'),
        ],
    ],
];
