<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => '1',
            'product_name' => 'Nokia 1501',
            'product_description' => 'Nokia 150 desc1',
            'product_image'=>'1634142114.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '2',
            'product_name' => 'samsung',
            'product_description' => 'samsung tv',
            'product_image'=>'1634147430.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'Nokia 150 red',
            'product_description' => 'Nokia 150 red',
            'product_image'=>'1634632029.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '3',
            'product_name' => 'Dell Laptop',
            'product_description' => 'Dell Laptop',
            'product_image'=>'1634632261.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '3',
            'product_name' => 'Hp',
            'product_description' => 'Hp Laptop',
            'product_image'=>'1634632283.jpeg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '3',
            'product_name' => 'Lenova',
            'product_description' => 'Lenova Laptop',
            'product_image'=>'1634632301.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '2',
            'product_name' => 'sony bravia 1',
            'product_description' => 'sony bravia 1',
            'product_image'=>'1634657273.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '2',
            'product_name' => 'sony bravia 2',
            'product_description' => 'sony bravia 2',
            'product_image'=>'1634657298.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'realme smart phone',
            'product_description' => 'realme smart phone',
            'product_image'=>'1634657352.jpeg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'redmi note 8',
            'product_description' => 'redmi note 8',
            'product_image'=>'1634657387.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'redmi note 8',
            'product_description' => 'redmi note 8',
            'product_image'=>'1634657387.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'redmi note 9',
            'product_description' => 'redmi note 9',
            'product_image'=>'1634657417.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'vivo iqoo',
            'product_description' => 'vivo iqoo',
            'product_image'=>'1634657451.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'moto 5g',
            'product_description' => 'moto 5g',
            'product_image'=>'1634657486.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'oneplus nord',
            'product_description' => 'oneplus nord',
            'product_image'=>'1634657526.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'oppo a31',
            'product_description' => 'oppo a31',
            'product_image'=>'1634657550.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '1',
            'product_name' => 'oppo f19',
            'product_description' => 'oppo f19',
            'product_image'=>'1634657576.jpg',
            'status' => '0', 
        ]);

        Product::create([
            'category_id' => '4',
            'product_name' => 'Whirlpool Fridge',
            'product_description' => 'Whirlpool Fridge',
            'product_image'=>'1634671836.jpg',
            'status' => '0', 
        ]);
    }
}
