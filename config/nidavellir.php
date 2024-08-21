<?php

return [

    'global' => [

        /**
         * Percentage on the F&G index that will make nidavellir
         * open one less order, making the trade more profitable
         * but more dangerous for liquidation.
         *
         * At the moment not being used.
         */
        'fear_greed'=> [

            /**
             * F&G threshold where we consider a "greed" or
             * a "fear" DCA trading configuration.
             */
            'threshold' => 85,

            /**
             * On Fear trading configuration for bearish
             * market trend.
             */
            'on_fear' => [
                'trades' => 5,
                'take_profit_percentage' => 0.31
            ],

            /**
             * On Greed trading configuration for bullish
             * market trend.
             */
            'on_greed' => [
                'trades' => 4,
                'take_profit_percentage' => 0.33
            ]
        ]
    ],

    'symbols' => [

        /**
         * Symbols that will never be used for trading.
         */
        'excluded' => [

            /**
             * Token symbols excluded for any exchange, not
             * to be used on any trading.
             */
            'tokens' => [
                'USDT',
                'USDC',
                'BTC',
                'FDUSD',
            ],

            /**
             * The minimum token rank to be elligible for trading.
             * All the ones after this rank number will be
             * disabled.
             */
            'min_rank' => 20,
        ]
    ],

    'positions' => [

        /**
         * The total amount traded on a position. This will be
         * based on the current available portfolio before
         * each trade. As example, if we have 10.000 on our
         * portfolio, and 4.5% amount percentage, then
         * our maximum portfolio investement in the sum
         * of all the orders will be 450.
         */
        'amount_percentage_per_trade' => 4.5,

        /**
         * Nidavellir should open LONG or SHORT positions.
         * At the moment, it's only made for LONG trades.
         */
        'side' => 'buy',

        /**
         * The default leverage that we should apply. For
         * now we don't check the leverage rachet, but
         * later it's important to check before we
         * compute the position orders to avoid orders
         * being cancelled due to excessive leverage
         * for the respective total trade amount.
         */
        'margin_ratio' => 25,
    ],

    'orders' => [

        /**
         * The percentage that the next order will be from the
         * market order mark price. As example, if you have a
         * 7.31, then nidavellir will open a limit order 7.31%
         * distanced from the market order mark price. Each
         * entry will be a new order created.
         */
        'percentage_ratios' => [
            0,
            7.31,
            14.83,
            22.34,
            29.86,
        ],

        /**
         * Amount scale is the amount "n-plication" for each new
         * entry order. For instance, if we have amount scale=2
         * and 3 orders, and the order size will be 180, then
         * the first order will be 30,60,90.
         */
        'amount_scale' => 2,
    ],
];
