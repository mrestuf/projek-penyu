<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $jabatan = ['Sil1', 'Sil2', 'Sil3', 'Sil4', 'Sil5', 'Sil6', 'Sil7', 'Sil8', 'Sil9', 'Sil10'];
      $divisi = ['Marketing', 'Development', 'Research', 'Product', 'Manager', 'Analyst', 'QC', 'HR', 'ABC', 'CDE'];

      for ($i=0; $i < 10; $i++) { 
        DB::table('pegawais')->insert([
          'name' => fake()->name(),
          'jabatan' => $jabatan[$i],
          'divisi' => $divisi[$i],
          'password' => Hash::make('password'),
          'created_at' => Date::now(),
          'updated_at' => Date::now()
        ]);
      }

    }
}
