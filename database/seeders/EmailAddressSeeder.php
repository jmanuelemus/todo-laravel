<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emails')->insert([
            [
                '_type'           => 'Person',
                '_obj'            => 1,
                'verified_at'     => Carbon::now()->toDateTimeString(),
                'additional_type' => 'Work',
                'name'            => 'github@jmanuelemus.com',
                '_created_at'     => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
