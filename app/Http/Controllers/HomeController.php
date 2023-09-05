<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\ProductRepository;
// use App\Models\Product;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index()
    {
        $listProduct = $this->productRepository->all();
        $findProduct = $this->productRepository->find(4);
        // $findProduct = $this->productRepository->show(4);
        dd($findProduct);
        return view('clients.home', compact('listProduct'));
    }
}
