<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BillingMedicationsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $billingIds = DB::table('billings')->pluck('id')->toArray();
        $medicationIds = DB::table('medications')->pluck('id')->toArray();
        foreach ($billingIds as $billingId) {
            $usedMedications = $faker->randomElements($medicationIds, rand(1, 3));
            foreach ($usedMedications as $medicationId) {
                $cost = DB::table('medications')->where('id', $medicationId)->value('cost');
                DB::table('billing_medications')->insert([
                    'billing_id' => $billingId,
                    'medication_id' => $medicationId,
                    'medication_cost' => $cost,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

