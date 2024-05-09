<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
            "nom"=>"Alali",
            "prenom"=>"Mohamed",
            "email"=>"mohammed@gmail.com",
            "password"=>Hash::make("123"),
            "solde" =>9000],

            ["nom"=>"Naimi",
            "prenom"=>"Marwane",
            "email"=>"marouane@gmail.com",
            "password"=>Hash::make("123"),
            "solde" =>10000
            ]
        ]);
        DB::table("employers")->insert([
            "nom"=>"Aghbalou",
            "prenom"=>"Idriss",
            "email"=>"idriss@gmail.com",
            "password"=>Hash::make("123"),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
