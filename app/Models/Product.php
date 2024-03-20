<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['tensp', 'hinhanh', 'motasp', 'giatien', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function admin()
    {
        return $this->belongsTo(User::class);
    }
    public static function validate(array $data)
    {
        $errors = [];

        if (!$data['tensp']) {
            $errors['tensp'] = 'Tên sản phẩm không được để trống.';
        }
        // $validPhone = preg_match(
        //     '/^(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})\b$/',
        //     $data['phone']
        // );
        if (strlen($data['motasp']) < 1) {
            $errors['motasp'] = 'Mô tả sản phẩm không được để trống.';
        }
        if (!($data['giatien'])) {
            $errors['giatien'] = 'giatien > 0';
        }

        return $errors;
    }
}
