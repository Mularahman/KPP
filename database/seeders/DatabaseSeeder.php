<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'member'
        ]);
        DB::table('kategoris')->insert([
            'nama_barang' => 'UMPC',

        ]);
        DB::table('kategoris')->insert([
            'nama_barang' => 'CCTV',

        ]);
        DB::table('kategoris')->insert([
            'nama_barang' => 'WIFI',

        ]);
        DB::table('kategoris')->insert([
            'nama_barang' => 'WIRELESS',

        ]);

    }
}
