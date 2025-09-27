<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProceduresTableSeeder extends Seeder
{
    public function run(): void
    {
        $procedures = [
            ['name' => 'Consulta médica', 'cost' => 120.00],
            ['name' => 'Exame de sangue', 'cost' => 60.00],
            ['name' => 'Raio-X', 'cost' => 150.00],
            ['name' => 'Ultrassonografia', 'cost' => 200.00],
            ['name' => 'Eletrocardiograma', 'cost' => 80.00],
            ['name' => 'Tomografia', 'cost' => 600.00],
            ['name' => 'Ressonância magnética', 'cost' => 1200.00],
            ['name' => 'Vacinação', 'cost' => 50.00],
            ['name' => 'Curativo', 'cost' => 40.00],
            ['name' => 'Cirurgia ambulatorial', 'cost' => 2500.00],
            ['name' => 'Endoscopia', 'cost' => 700.00],
            ['name' => 'Colonoscopia', 'cost' => 900.00],
            ['name' => 'Fisioterapia', 'cost' => 100.00],
            ['name' => 'Consulta odontológica', 'cost' => 80.00],
            ['name' => 'Exame de urina', 'cost' => 45.00],
        ];
        foreach ($procedures as $procedure) {
            DB::table('procedures')->insert([
                'name' => $procedure['name'],
                'cost' => $procedure['cost'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
