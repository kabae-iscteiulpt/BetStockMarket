<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Microsoft Corporation',
            'International Business Machines Corporation',
            'Apple Inc.',
            'Amazon.com, Inc',
            'Schlumberger Limited',
            'Forward Industries, Inc.',
            'Uber Technologies, Inc. ',
            'McDonalds Corporation',
            'Verizon Communications Inc.',
            'Hertz Global Holdings, Inc. ',
            'Carver Bancorp, Inc.',
            'eBay Inc.',
            'Bayer Aktiengesellschaft'

        ];
    
        $symbols = [
            'MSFT',
            'IBM',
            'AAPL',
            'AMZN',
            'SLB',
            'FORD',
            'UBER',
            'MCD',
            'VZ',
            'HTZ',
            'CARV',
            'EBAY',
            'BAYRY'
        ];

        for($i=0; $i<count($names); $i++){
            DB::table('stocks')->insert([
                'name' => $names[$i],
                'symbol' => $symbols[$i],
                'stockvaluebefore' => 0,
                'currentstockvalue' => 0,
            ]);
        }
    }
}
