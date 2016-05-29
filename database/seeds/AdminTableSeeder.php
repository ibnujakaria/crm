<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('admin')->truncate();
      Admin::create([
        'nama' => 'Admin',
        'email' => 'admin@gmail.com',
        'tanggal_lahir' => '1990-10-10',
        'password' => bcrypt('12345')
      ]);
    }
}
