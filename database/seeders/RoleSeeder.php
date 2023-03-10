<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Администратор',
            ],
            [
                'id' => 2,
                'name' => 'Продавец',
            ],
            
        ]);
    }
}