<?php

namespace App\Controllers;

class ProductDetailsController2 extends Controller
{
    public function index()
    {
        $this->sendPage('product-detail2', []);
    }

}