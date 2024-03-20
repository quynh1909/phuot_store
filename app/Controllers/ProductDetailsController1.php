<?php

namespace App\Controllers;

class ProductDetailsController1 extends Controller
{
    public function index()
    {
        $this->sendPage('product-detail1', []);
    }

}