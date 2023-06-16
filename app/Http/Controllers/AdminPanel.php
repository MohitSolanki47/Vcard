<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    Public function index() {
        echo view('Admin\dashboard');
    }
}
