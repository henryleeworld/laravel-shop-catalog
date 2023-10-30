<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        $categories = ProductCategory::all();

        foreach($categories as $category) {
            for($i = 1; $i <= 10; $i++) {
                $product = $category->products()->create([
                    'name'        => $faker->sentence(2),
                    'price'       => rand(99, 9999) / 10,
                    'description' => $faker->paragraph,
                ]);

                $product->addMediaFromUrl(url('images/product.jpg'))->toMediaCollection('photo');
            }
        }
    }
}
