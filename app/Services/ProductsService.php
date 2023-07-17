<?php

namespace App\Services;

use App\Interfaces\ProductsServiceInterface;
use App\Models\Product;

class ProductsService implements ProductsServiceInterface
{
    function getProducts()
    {
        return Product::all();
    }

    function createProduct(string $name,float $price): Product
    {
        $product = Product::create([
            'name' => $name,
            'price' => $price
        ]);

        return $product;
    }
}