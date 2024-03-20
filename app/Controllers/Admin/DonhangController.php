<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User;
use App\SessionGuardAdmin as Guard;

class DonhangController extends Controller
{
    public function index()
    {
        $this->sendPage('admin/donhang/index', [
        ]);
    }
}