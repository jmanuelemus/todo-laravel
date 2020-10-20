<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                '_type'       => 'Person',
                '_obj'        => 1,
                'verified_at' => Carbon::now()->toDateTimeString(),
                'name'        => 'juanma',
                'password'    => '$2y$10$24QZ/uHtc5RxZXMIOYv6LeahttbCpkwmR4at/8JikkRrgwrNVrs.2',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
