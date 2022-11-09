<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'name' => $faker->name(),
            'nip' => mt_rand(0000001, 9999999),
            'jabatan' => $faker->name(),
            'pangkat' => $faker->name(),
            'golongan' => $faker->name(),
        ];
    }
}
