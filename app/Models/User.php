<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'role'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_khachhang');
    }
    public static function validate(array $data)
    {
        $errors = [];

        if (!$data['email']) {
            $errors['email'] = 'Invalid email.';
        } elseif (static::where('email', $data['email'])->count() > 0) {
            $errors['email'] = 'Email already in use.';
        }

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        } elseif ($data['password'] != $data['password_confirmation']) {
            $errors['password'] = 'Password confirmation does not match.';
        }

        return $errors;
    }
}
