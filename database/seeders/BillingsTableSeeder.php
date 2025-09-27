<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BillingsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $patientIds = DB::table('patients')->pluck('id')->toArray();
        for ($i = 1; $i <= 100; $i++) {
            $patientId = $faker->randomElement($patientIds);
            DB::table('billings')->insert([
                'patient_id' => $patientId,
                'other_costs' => $faker->randomFloat(2, 0, 500),
                'total_cost' => 0, // será atualizado depois
                'description' => $faker->optional()->sentence(),
                'billing_date' => $faker->date('Y-m-d', 'now'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

