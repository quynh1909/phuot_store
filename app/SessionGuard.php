<?php

namespace App;

use App\Models\User;

class SessionGuard
{
    protected static $user;

    public static function loginUser(User $user, array $credentials)
    {
        $verified = password_verify($credentials['password'], $user->password);
        // die(print_r(($verified && $user->role === 'admin'), true));
        if ($verified && $user->role === 'customer') {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['role'] = 'customer';
        }
        return $verified && $user->role === 'customer';
    }

    public static function user()
    {
        if (!static::$user && static::isUserLoggedIn()) {
            static::$user = User::find($_SESSION['user_id']);
        }

        return static::$user;
    }

    public static function isUserLoggedIn()
    {
        return isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] === 'customer';
    }

    public static function logout()
    {
        static::$user = null;
        session_unset();
        session_destroy();
    }
}
