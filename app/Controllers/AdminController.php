<?php

namespace App\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        $this->sendPage('admin/index', []);
    }
}