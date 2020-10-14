<?php

namespace Database\Seeders;

use App\AdministrativeDivision;

use Carbon\Carbon;

use Illuminate\Database\Seeder;

class AdministrativeDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrative_divisions')->insert([
            [
                '_type'       => 'Country',
                'identifier'  => 'GT',
                'name'        => 'Guatemala',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
        ]);

        DB::table('administrative_divisions')->insert([
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-AV',
                'name'        => 'Alta Verapaz',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-BV',
                'name'        => 'Baja Verapaz',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-CM',
                'name'        => 'Chimaltenango',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-CQ',
                'name'        => 'Chiquimula',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-PR',
                'name'        => 'El Progreso',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-ES',
                'name'        => 'Escuintla',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-GU',
                'name'        => 'Guatemala',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-HU',
                'name'        => 'Huehuetenango',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-IZ',
                'name'        => 'Izabal',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-JA',
                'name'        => 'Jalapa',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-JU',
                'name'        => 'Jutiapa',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-PT',
                'name'        => 'Petén',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-QZ',
                'name'        => 'Quetzaltenango',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-QC',
                'name'        => 'Quiché',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-RE',
                'name'        => 'Retalhuleu',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-SA',
                'name'        => 'Sacatepéquez',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-SM',
                'name'        => 'San Marcos',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-SR',
                'name'        => 'Santa Rosa',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-SO',
                'name'        => 'Sololá',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-SU',
                'name'        => 'Suchitepéquez',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-TO',
                'name'        => 'Totonicapán',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 1,
                '_type'       => 'Department',
                'identifier'  => 'GT-ZA',
                'name'        => 'Zacapa',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
        ]);

        DB::table('administrative_divisions')->insert([
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1614',
                'postal_code' => '16014',
                'name'        => 'Chahal',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1613',
                'postal_code' => '16013',
                'name'        => 'Chisec',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1601',
                'postal_code' => '16001',
                'name'        => 'Cobán',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1615',
                'postal_code' => '16015',
                'name'        => 'Fray Bartolomé de las Casas',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1616',
                'postal_code' => '16016',
                'name'        => 'La Tinta',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1611',
                'postal_code' => '16011',
                'name'        => 'Lanquín',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1607',
                'postal_code' => '16007',
                'name'        => 'Panzós',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1617',
                'postal_code' => '16026',
                'name'        => 'Raxruhá',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1603',
                'postal_code' => '16003',
                'name'        => 'San Cristobal Verapaz',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1610',
                'postal_code' => '16010',
                'name'        => 'San Juan Chamelco',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1606',
                'postal_code' => '16006',
                'name'        => 'San Miguel Tucurú',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1609',
                'postal_code' => '16009',
                'name'        => 'San Pedro Carchá',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1602',
                'postal_code' => '16002',
                'name'        => 'Santa Cruz Verapaz',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1612',
                'postal_code' => '16012',
                'name'        => 'Santa María Cahabón',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1608',
                'postal_code' => '16008',
                'name'        => 'Senahú',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1604',
                'postal_code' => '16004',
                'name'        => 'Tactic',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
            [
                '_sup'        => 2,
                '_type'       => 'Municipality',
                'identifier'  => 'GT-1605',
                'postal_code' => '16005',
                'name'        => 'Tamahú',
                '_created_at' => Carbon::now()->toDateTimeString(),
            ],
        ]);

        AdministrativeDivision::fixTree();
    }
}
