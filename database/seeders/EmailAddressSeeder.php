<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;

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
                '_type'       => 'Person',
                '_obj'        => 1,
                'verified_at' => Carbon::now()->toDateTimeString(),
                'name'        => 'github@jmanuelemus.com',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
