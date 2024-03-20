<?php

namespace App\Controllers;

use App\Models\User;
use App\SessionGuard as Guard;

class HomesController extends Controller
{
    public function index()
    {
        $this->sendPage('home', [
        ]);
    }
}