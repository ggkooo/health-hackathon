<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');
        $genders = ['male', 'female', 'other'];
        $bloodTypes = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
        $maritalStatus = ['single', 'married', 'divorced', 'widowed'];

        for ($i = 1; $i <= 50; $i++) {
            $gender = $faker->randomElement($genders);
            DB::table('patients')->insert([
                'insurance_number' => $faker->numerify('##########'),
                'insurance_company' => $faker->company,
                'name' => $faker->name($gender),
                'birth_date' => $faker->date('Y-m-d', '-18 years'),
                'address' => $faker->address,
                'cpf' => $faker->numerify('###.###.###-##'),
                'rg' => $faker->numerify('##.###.###-#'),
                'gender' => $gender,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->cellphoneNumber,
                'responsible' => $faker->name,
                'emergency_contact' => $faker->cellphoneNumber,
                'marital_status' => $faker->randomElement($maritalStatus),
                'blood_type' => $faker->randomElement($bloodTypes),
                'allergies' => $faker->optional()->words(2, true),
                'observations' => $faker->optional()->sentence,
                'admission_date' => $faker->optional()->date('Y-m-d', 'now'),
                'discharge_date' => $faker->optional()->date('Y-m-d', 'now'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

