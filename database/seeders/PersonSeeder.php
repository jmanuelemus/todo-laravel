<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            [
                'verified_at'    => Carbon::now()->toDateTimeString(),
                'given_name'     => 'Juan Manuel',
                'family_name'    => 'Lemus Ponciano',
                'alternate_name' => 'Juan Manuel',
                '_created_at'    => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
