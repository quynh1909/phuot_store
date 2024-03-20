<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use App\SessionGuard as Guard;

class SignUpController extends Controller
{
    const CUSTOMER = 'customer';

    public function create()
    {
        $data = [
            'old' => $this->getSavedFormValues(),
            'errors' => session_get_once('errors')
        ];

        $this->sendPage('sign-up', $data);
    }

    public function store()
    {
        $this->saveFormValues($_POST, ['password', 'password_confirmation']);

        $data = $this->filterUserData($_POST);
        $model_errors = User::validate($data);

        if (empty($model_errors)) {
            $this->createUser($data);

            $messages = ['success' => 'Người dùng đã tạo hãy đăng nhập.'];
            redirect('/signin', ['messages' => $messages]);
        }

        // If there are errors, redirect back to the sign-up page with the error messages
        $messages = ['error' => 'Nhập hãy kiểm tra thông tin nhập.'];
        redirect('/signup', ['errors' => $model_errors]);
    }


    protected function filterUserData(array $data)
    {
        return [
            'name' => $data['name'] ?? null,
            'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
            'password' => $data['password'] ?? null,
            'password_confirmation' => $data['password_confirmation'] ?? null,
            'sdt' => $data['sdt'] ?? null,
            'address' => $data['address'] ?? null,
            'role' => SignUpController::CUSTOMER,
        ];
    }

    protected function createUser($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'role' => $data['role'],
            'sdt' => $data['sdt'],
            'address' => $data['address']
        ]);
    }
}
