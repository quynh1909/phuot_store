<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
    {
        protected $table = 'orders';

        // Các trường có thể được gán
        protected $fillable = ['id_sanpham', 'soluong', 'tongtien', 'id_khachhang'];
        public function user()
        {
            return $this->belongsTo(User::class,'id_khachhang');
        }
    }
    

?>
