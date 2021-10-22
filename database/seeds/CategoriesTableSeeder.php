<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Category::create([
            'category_name' => 'mobile',
            'category_description' => 'mobile desc',
            'status' => '0',            
        ]);

        Category::create([
            'category_name' => 'television',
            'category_description' => 'television desc',
            'status' => '0', 
        ]);

        Category::create([
            'category_name' => 'laptop',
            'category_description' => 'laptop desc',
            'status' => '0', 
        ]);

        Category::create([
            'category_name' => 'fridge',
            'category_description' => 'fridge desc',
            'status' => '0', 
        ]);

    }
}
