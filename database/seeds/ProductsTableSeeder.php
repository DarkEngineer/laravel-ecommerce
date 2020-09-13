<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Super uber thing',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis',
                'units' => 5099,
                'price' => 1400.45,
                'image' => 'https://dummyimage.com/230x200/000/fff.png&text=Test+image',
                'created_at' => now(),
                'updated_at' => null
            ],
            [
                'name' => 'Old thingy',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.        Aenean massa. Cum sociis natoque penatibus et magnis',
                'units' => 30,
                'price' => 400.45,
                'image' => 'https://dummyimage.com/230x200/000/fff.png&text=Test+image',
                'created_at' => now(),
                'updated_at' => null
            ],
            [
                'name' => 'New thing',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.        Aenean massa. Cum sociis natoque penatibus et magnis',
                'units' => 10,
                'price' => 40.45,
                'image' => 'https://dummyimage.com/230x200/000/fff.png&text=Test+image',
                'created_at' => now(),
                'updated_at' => null
            ],
            [
                'name' => 'Test product',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.        Aenean massa. Cum sociis natoque penatibus et magnis',
                'units' => 16555,
                'price' => 44444.45,
                'image' => 'https://dummyimage.com/230x200/000/fff.png&text=Test+image',
                'created_at' => now(),
                'updated_at' => null
            ]
        ];

        DB::table('products')->insert($products);
    }
}
