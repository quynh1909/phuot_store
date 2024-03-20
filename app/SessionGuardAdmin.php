<?php

namespace App;

use App\Models\User;

class SessionGuardAdmin
{
    protected static $user;

    public static function loginAdmin(User $user, array $credentials)
    {
        $verified = password_verify($credentials['password'], $user->password);
        // die(print_r(($verified && $user->role === 'admin'), true));
        if ($verified && $user->role === 'admin') {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['role'] = 'admin';
        }
        return $verified && $user->role === 'admin';
    }

    public static function admin()
    {
        if (!static::$user && static::isAdminLoggedIn()) {
            static::$user = User::find($_SESSION['user_id']);
        }
        return static::$user;
    }

    public static function isAdminLoggedIn()
    {
        return isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
    }
    public static function logout()
    {
        static::$user = null;
        session_unset();
        session_destroy();
    }
}
