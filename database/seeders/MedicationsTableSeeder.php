<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('medications')->insert([
            ['name' => 'Aspirina', 'cost' => 5.99],
            ['name' => 'Ibuprofeno', 'cost' => 7.49],
            ['name' => 'Paracetamol', 'cost' => 4.99],
            ['name' => 'Dipirona', 'cost' => 3.50],
            ['name' => 'Amoxicilina', 'cost' => 12.00],
            ['name' => 'Omeprazol', 'cost' => 10.00],
            ['name' => 'Losartana', 'cost' => 15.00],
            ['name' => 'Simvastatina', 'cost' => 18.00],
            ['name' => 'Metformina', 'cost' => 8.00],
            ['name' => 'Azitromicina', 'cost' => 20.00],
        ]);
    }
}
