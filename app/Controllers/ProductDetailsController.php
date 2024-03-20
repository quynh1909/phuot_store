<?php

namespace App\Controllers;

use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function index($productId)
    {

        $product = Product::find($productId);

        if (!$product) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $data = [
            'errors' => session_get_once('errors'),
            'product' => (!empty($form_values)) ?
                array_merge($form_values, ['id' => $product->id]) :
                $product->toArray(),

        ];
        // die(print_r($data, true));
        $this->sendPage('product-detail', $data);

    }

}