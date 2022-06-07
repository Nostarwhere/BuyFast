<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('admins')->insert([

            'name' => Str::random(10),
            'email' => Str::random(10).'@admin.com',
            'password' => bcrypt('admin123'),

        ]);

        DB::table('users')->insert([

            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),

        ]);

        DB::table('products')->insert([

            'product_name' => Str::random(10),
            'product_model' => Str::random(10),
            'product_description' => Str::random(10),
            'price' => Str::random(10),

        ]);
    }
}
