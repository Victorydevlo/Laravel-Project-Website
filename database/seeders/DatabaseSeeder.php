<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductTypeSeeder::class);
        $this->call(ProductSeeder::class);


        // User::factory()->create([
        //     'name' => 'SignorJ',
        //     'email' => 'ex@gmail.com',
        // ]);
    
    }
}
