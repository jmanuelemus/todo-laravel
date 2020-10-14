<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApiKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_keys')->insert([
            [
                '_str'           => Str::random(64),
                'date_published' => Carbon::now()->toDateTimeString(),
                'name'           => 'todo-0.1dev',
                '_created_at'    => Carbon::now()->toDateTimeString(),
            ],
        ]);
    }
}
