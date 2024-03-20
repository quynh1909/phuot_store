<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['tenbv', 'noidungbv', 'hinhanhbv', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_baiviet');
    }

    public static function validate(array $data)
    {
        $errors = [];

        if (!$data['tenbv']) {
            $errors['tenbv'] = 'tenbv is required.';
        }

        if (strlen($data['noidungbv']) < 1) {
            $errors['noidungbv'] = 'Nội dung bài viết không được để tr';
        }

        // Kiểm tra nếu có tệp tin được tải lên
        if (isset($data['hinhanhbv']['tmp_name']) && $data['hinhanhbv']['tmp_name'] !== '') {
            $imageInfo = getimagesize($data['hinhanh']['tmp_name']);

            // Kiểm tra xem tệp tin có phải là hình ảnh không
            if ($imageInfo === false) {
                $errors['hinhanhbv'] = 'Invalid image file.';
            }
        }
        return $errors;
    }

}