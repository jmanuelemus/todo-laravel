<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('urls')->insert([
            [
                '_type'           => 'Person',
                '_obj'            => 1,
                '_str'            => 'https://github.com/jmanuelemus',
                'additional_type' => 'GitHub',
                '_created_at'     => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
