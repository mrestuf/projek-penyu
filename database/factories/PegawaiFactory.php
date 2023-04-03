<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        return [
          'name' => fake()->name(),
          'email' => fake()->unique()->safeEmail(),
          'email_verified_at' => now(),
          'jabatan' => 'J1',
          'Divisi' => 'Marketing',
          'password' => Hash::make('password'),
        ];
    }
}
