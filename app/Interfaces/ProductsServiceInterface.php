<?php

namespace App\Interfaces;

use App\Models\Product;

interface ProductsServiceInterface
{
    function getProducts();
    function createProduct(string $name,float $price): Product;
}