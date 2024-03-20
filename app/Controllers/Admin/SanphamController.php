<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User;
use App\SessionGuardAdmin as Guard;
use App\Models\Product;


class SanphamController extends Controller
{
    public function __construct()
    {
        if (!Guard::isAdminLoggedIn()) {
            redirect('/signin');
        }

        parent::__construct();
    }

    public function index()
    {
        $this->sendPage('admin/sanpham/index', [
            'products' => Guard::admin()->products
        ]);
    }
    public function create()
    {
        $this->sendPage('admin/sanpham/create', [
            'errors' => session_get_once('errors'),
            'old' => $this->getSavedFormValues()
        ]);
    }
    public function store()
    {
        define("IMAGE_DIR", "C:/xampp/htdocs/project/public/images/product/");
        $data = $this->filterProductData($_POST, $_FILES);
        $model_errors = Product::validate($data);

        // Kiểm tra có lỗi không
        if (empty($model_errors)) {
            $image_name = $data['hinhanh'];
            $image_path = IMAGE_DIR . $image_name;
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], $image_path);
            $product = new Product();
            $product->fill($data);
            $product->user()->associate(Guard::admin());
            $product->save();
            redirect('/sanpham');
        }

        // Nếu có lỗi, lưu giá trị của form và chuyển hướng về trang thêm sản phẩm
        $this->saveFormValues($_POST);
        redirect('/sanpham/add', ['errors' => $model_errors]);
    }
    protected function filterProductData(array $data, array $files)
    {
        return [
            'tensp' => $data['tensp'] ?? '',
            'motasp' => $data['motasp'] ?? '',
            'giatien' => $data['giatien'] ?? '',
            'hinhanh' => basename($files['hinhanh']['name']) ?? '',
        ];
    }

    public function edit($productsId)
    {
        $products = Guard::admin()->products->find($productsId);
        if (!$products) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $data = [
            'errors' => session_get_once('errors'),
            'product' => (!empty($form_values)) ?
                array_merge($form_values, ['id' => $products->id]) :
                $products->toArray()

        ];
        $this->sendPage('admin/sanpham/edit', $data);
    }
    public function update($productsId)
    {
        define("IMAGE_DIR", "C:/xampp/htdocs/project/public/images/product/");
        $products = Guard::admin()->products->find($productsId);
        if (!$products) {
            $this->sendNotFound();
        }
        $data = $this->filterProductData($_POST, $_FILES);
        $model_errors = Product::validate($data);
        if (empty($model_errors)) {
            $image_name = $data['hinhanh'];
            $image_path = IMAGE_DIR . $image_name;
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], $image_path);
            $products->fill($data);
            $products->save();
            redirect('/sanpham');
        }
        $this->saveFormValues($_POST);
        redirect('/sanpham/edit/' . $productsId, [
            'errors' => $model_errors
        ]);
    }
    public function destroy($productsId)
    {
        $products = Guard::admin()->products->find($productsId);
        if (!$products) {
            $this->sendNotFound();
        }
        $products->delete();
        redirect('/sanpham');
    }
}