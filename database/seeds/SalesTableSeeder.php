<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Sales::create([
        'nama' => 'Sales 1',
        'email' => 'sales@gmail.com',
        'password' => bcrypt('12345'),
        'alamat' => 'Indonesia',
        'tanggal_lahir' => '1990-12-12',
        'jenis_kelamin' => 'L'
      ]);
    }
}
