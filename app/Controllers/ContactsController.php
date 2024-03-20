<?php

namespace App\Controllers;

class ContactsController extends Controller
{
    public function index()
    {
        $this->sendPage('contact', []);
    }
}