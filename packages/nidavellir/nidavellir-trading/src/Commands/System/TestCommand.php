<?php

namespace Nidavellir\Trading\Commands\System;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Nidavellir\Trading\Models\Symbol;
use Nidavellir\Trading\Models\Trader;
use Nidavellir\Trading\Models\Exchange;
use Nidavellir\Trading\Models\ExchangeSymbol;
use Nidavellir\Trading\Jobs\Symbols\UpsertElligibleSymbolsJob;

class TestCommand extends Command
{
    protected $signature = 'nidavellir:test';

    protected $description = 'Just a test command';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        /*
        DB::table('positions')->truncate();

        $symbol = Symbol::firstWhere('token', 'SOL');
        $exchange = Exchange::find(1);

        $exchangeSymbol = ExchangeSymbol::where('exchange_id', $exchange->id)
            ->where('symbol_id', $symbol->id)
            ->first();

        // Open position.
        Trader::find(1)->positions()->create([
            'exchange_symbol_id' => $exchangeSymbol->id,
        ]);
        */

        UpsertElligibleSymbolsJob::dispatch();

        $this->info('All good.');
    }
}
