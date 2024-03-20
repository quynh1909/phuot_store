<?php

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use App\SessionGuard as Guard;
use App\SessionGuardAdmin as GuardAdmin;


class SignInController extends Controller
{
    public function create()
    {
        if (GuardAdmin::isAdminLoggedIn()) {
            redirect('/index');
        }
        if (Guard::isUserLoggedIn()) {
            redirect('/');
        }

        $messages = session_get_once('messages');
        $oldValues = $this->getSavedFormValues();
        $errors = session_get_once('errors');

        $data = [
            'messages' => $messages ?? [],
            'old' => $oldValues ?? [],
            'errors' => $errors ?? [],
        ];

        $this->sendPage('sign-in', $data);
    }

    public function store()
    {
        $userCredentials = $this->filterUserCredentials($_POST);

        $errors = [];
        $user = User::where('email', $userCredentials['email'])->first();
        if (!$user) {
            // User does not exist...
            $errors['email'] = 'Invalid email or password.';
        } else if (GuardAdmin::loginAdmin($user, $userCredentials)) {
            // die(print_r((Guard::login($user, $user_credentials)), true));
            redirect('/index');
        } else if (Guard::loginUser($user, $userCredentials)) {
            // die(print_r((Guard::loginA($user, $user_credentials)), true));
            redirect('/');
        } else {
            // Incorrect password...
            $errors['password'] = 'Invalid email or password.';
        }

        // Unsuccessful login: save values in the form, excluding password
        $this->saveFormValues($_POST, ['password']);
        redirect('/signin', ['errors' => $errors]);
    }

    public function destroy()
    {
        Guard::logout();
        redirect('/signin');
    }

    protected function filterUserCredentials(array $data)
    {
        $email = isset($data['email']) ? filter_var($data['email'], FILTER_VALIDATE_EMAIL) : null;
        $password = $data['password'] ?? null;

        return [
            'email' => filter_var($data['email'], FILTER_VALIDATE_EMAIL),
            'password' => $data['password'] ?? null

        ];
    }
}
