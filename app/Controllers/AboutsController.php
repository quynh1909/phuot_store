<?php

namespace App\Controllers;

class AboutsController extends Controller
{
    public function index()
    {
        $this->sendPage('about', []);
    }
}