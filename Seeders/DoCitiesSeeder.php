<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actual_date = now();
        $dr_cities = [
            ['name' => 'Distrito Nacional', 'code' => 'DN', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Santo Domingo', 'code' => 'SD', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Santiago', 'code' => 'STI', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Azua', 'code' => 'AZ', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Bahoruco', 'code' => 'BAH', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Barahona', 'code' => 'BAR', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Dajabon', 'code' => 'DA', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Duarte', 'code' => 'DU', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Elias Piña', 'code' => 'EP', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'El Seibo', 'code' => 'ES', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Espaillat', 'code' => 'ESP', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Hato Mayor', 'code' => 'HM', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Hermanas Mirabal', 'code' => 'HMB', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Independencia', 'code' => 'IN', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'La Altagracia', 'code' => 'LA', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'La Romana', 'code' => 'LR', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'La Vega', 'code' => 'LV', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Maria Trinidad Sanchez', 'code' => 'MTS', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Moseñor Nouel', 'code' => 'MN', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Monte Cristi', 'code' => 'MC', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Monte Plata', 'code' => 'MP', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Pedernales', 'code' => 'PED', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Peravia', 'code' => 'PER', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Puerto Plata', 'code' => 'POP', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Samana', 'code' => 'SAM', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Sanchez Ramirez', 'code' => 'SRA', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'San Cristobal', 'code' => 'SC', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'San Jose de Ocoa', 'code' => 'SJO', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'San Juan', 'code' => 'SJ', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'San Pedro de Macoris', 'code' => 'SPM', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Santiago Rodriguez', 'code' => 'SRO', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            ['name' => 'Valverde', 'code' => 'VA', 'countries_id' => 65, 'created_at' => $actual_date, 'updated_at' => $actual_date ],
        ];

        DB::table('cities')->insert($dr_cities);
    }
}
