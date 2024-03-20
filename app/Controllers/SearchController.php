<?php

namespace App\Controllers;

use App\Models\Product;

class SearchController extends Controller
{
    public function index()
    {
        // Xử lý dữ liệu tìm kiếm nếu có
        $searchResults = [];
        if (isset($_GET['q']) && !empty($_GET['q'])) {
            $searchQuery = $_GET['q'];
            $searchResults = $this->searchProducts($searchQuery);
        } else {
            // Nếu không có từ khóa tìm kiếm, hiển thị thông báo
            $this->sendPage('search', ['searchResults' => [], 'emptyQuery' => true]);
            return;
        }

        // Pass the search results to the view
        $this->sendPage('search', ['searchResults' => $searchResults]);
    }

    // Chuyển hàm searchProducts thành phương thức protected để có thể sử dụng trong class con
    protected function searchProducts($query)
    {
        $query = strtolower($query);

        // Sử dụng Eloquent để truy vấn cơ sở dữ liệu
        $results = Product::whereRaw('LOWER(tensp) LIKE ?', ['%' . $query . '%'])
            ->orWhereRaw('LOWER(motasp) LIKE ?', ['%' . $query . '%'])
            ->get();

        return $results->toArray();
    }
}

