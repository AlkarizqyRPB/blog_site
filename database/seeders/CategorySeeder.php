<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category::factory(3)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web Design',
            'color' => 'red',
            'text_color' => 'primary'
        ]);

        Category::create([
            'name' => 'Web develovment',
            'slug' => 'Web develovment',
            'color' => 'blue',
            'text_color' => 'rose'
        ]);
    }
}
