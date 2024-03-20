<?php

namespace App\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu bằng model
        $products = Product::all();

        // Truyền dữ liệu vào view và gửi trang
        $this->sendPage(
            'product',
            [
                'products' => $products
            ]
        );
    }
}

