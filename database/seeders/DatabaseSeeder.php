<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;
use App\Models\payment;
use App\Models\User;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
       Category::factory(10)->create();
       Item::factory(50)->create();
       payment::factory(10)->create();
       User::factory(10)->create();
       Order::factory(10)->create();
       
    }
}

