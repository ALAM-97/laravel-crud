<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('prodotti');

        foreach($products as $product) {
            $newProduct = new Product();
            $newProduct->title = $product['titolo'];
            $newProduct->type = $product['tipo'];
            $newProduct->cooking_time = $product['cottura'];
            $newProduct->weight = $product['peso'];
            $newProduct->description = $product['descrizione'];
            $newProduct->image = $product['src'];
            $newProduct->save();
        }
    }
}
