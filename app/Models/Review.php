<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ['danhgia', 'user_id', 'id_baiviet'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
    public static function validate(array $data)
    {
        $errors = [];
        if (!$data['danhgia']) {
            $errors['danhgia'] = 'Bình luận không được để trống.';
        }
        return $errors;
    }
}