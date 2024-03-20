<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User;
use App\SessionGuardAdmin as Guard;

class HomesController extends Controller
{
    public function __construct()
    {
        if (!(Guard::isAdminLoggedIn())) {
            redirect('/signin');
        }

        parent::__construct();
    }
    public function index()
    {
        $this->sendPage('admin/index', [
        ]);
    }
    public function destroy()
    {
        Guard::logout();
        redirect('/signin');
    }

}