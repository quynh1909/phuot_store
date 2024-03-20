<?php

namespace App\Controllers;

use App\SessionGuard as Guard;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $this->sendPage('users/home', [
            'products' => $products
        ]);
    }

}
