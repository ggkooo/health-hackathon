<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BillingProceduresTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $billingIds = DB::table('billings')->pluck('id')->toArray();
        $procedureIds = DB::table('procedures')->pluck('id')->toArray();
        foreach ($billingIds as $billingId) {
            $usedProcedures = $faker->randomElements($procedureIds, rand(1, 2));
            foreach ($usedProcedures as $procedureId) {
                $cost = DB::table('procedures')->where('id', $procedureId)->value('cost');
                DB::table('billing_procedures')->insert([
                    'billing_id' => $billingId,
                    'procedure_id' => $procedureId,
                    'procedure_cost' => $cost,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
