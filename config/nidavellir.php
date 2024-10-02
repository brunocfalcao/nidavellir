<?php

return [

    'system' => [

        'job_poller' => [

            'queue_name' => env('JOB_POLLER_QUEUE_NAME', gethostname()),

            'max_parallel_jobs' => env('MAX_PARALLEL_JOBS', 1),

        ],

        'taapi' => [
            /**
             * The minimum percentage amplitude between each MA28 and MA56.
             * The higher this number, the more the system will wait to
             * confirm the price direction trend. You should keep it
             * between 1 and 2.
             */
            'ma_min_amplitude_percentage' => 0.1,

            /**
             * Indicator candle size.
             */
            'interval' => '1h',
        ],

        'api' => [

            'params' => [

                'kucoin' => [
                    'plan' => 'VIP0',
                ],

                'binance' => [
                    // Max weight per minute.
                    'weight_limit' => 2400,

                    'http_errors_to_skip' => [
                        // Skip token unnecessary margin updates.
                        '400' => ['-4046'],
                    ],
                ],

                'coinmarketcap' => [
                    'plan' => 'free',
                ],

                'taapi' => [
                    'plan' => 'pro',
                ],
            ],

            'credentials' => [
                // CoinmarketCap
                'coinmarketcap' => [
                    'api_key' => env('COINMARKETCAP_API_KEY'),
                ],

                // Binance
                'binance' => [
                    'api_key' => env('BINANCE_API_KEY'),
                    'secret_key' => env('BINANCE_SECRET_KEY'),
                ],

                'taapi' => [
                    'api_key' => env('TAAPI_API_KEY'),
                ],

                // Coinbase (TODO)
            ],
        ],
    ],

    'symbols' => [

        /**
         * These are the symbols that each day the jobs will run to
         * update information for the next trades. These are the
         * active symbols, the ones that will be used to
         * compute trades.
         */
        'included' => [
            'ARK', // -- Revolutionary.
            'BNX',
            'BNB',
            'TRX',
            'ICP',
            'ARB',
            'LINK',
            'BCH',
            'NEAR',
            'FET',
            //'ADA', // -- Just for testing (SHORT)
        ],
    ],

    'positions' => [

        /**
         * The absolutely minimum amount that the trader needs
         * to have for a trade. If not, the position will not
         * be opened.
         */
        'minimum_trade_amount' => 100,

        /**
         * The total amount traded on a position. This will be
         * based on the current available portfolio before
         * each trade. As example, if we have 10.000 on our
         * portfolio, and 4.5% amount percentage, then
         * our maximum portfolio investement in the sum
         * of all the orders will be 450.
         */
        'amount_percentage_per_trade' => 5,

        /**
         * The current orders ratio configuration.
         * We can have several and later decide to
         * change them to check if there is more
         * profitable ratios or not. And also add
         * more entries or decrease entries.
         */
        'current_order_ratio_group' => 'configuration_1',

        /**
         * The default leverage that we should apply. In
         * case this leverage cannot be applied, then
         * the system will decrease the leverage to
         * the possible total trade amount that
         * can be used on the maximum possible
         * leverage (leverage bracketing).
         */
        'planned_leverage' => 25,
    ],

    'orders' => [

        'configuration_1' => [
            /**
             * The ratio is composed by 2 values:
             * The percentage ratio compared to the market
             * mark price.
             *
             * The amount division, so we can place the orders
             * in a laddered strategy, on this case with an
             * amount scale of increasing exponential.
             */
            'ratios' => [
                'MARKET' => [0, 32],

                'LIMIT' => [
                    [7.493, 16],
                    [14.976,  8],
                    [22.470,  4],
                    [29.953,  2],
                ],

                'PROFIT' => [0.305, 1],
            ],
        ],
    ],
];
