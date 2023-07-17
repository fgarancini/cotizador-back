<?php

namespace App\Http\Controllers;

use App\Interfaces\ProductsServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductsController extends Controller
{
    /** @var ProductsServiceInterface $productsService  */
    protected $productsService = null;

    public function __construct(ProductsServiceInterface $productsService)
    {
        $this->productsService = $productsService;
    }

    function getProducts()
    {
        return response()->json(ProductResource::collection($this->productsService->getProducts()), 200);
    }
    function createProduct(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:70'],
            'price' => ['required', 'numeric']
        ]);

        $this->productsService->createProduct($request->name, $request->price);

        return response()->json();
    }
}
