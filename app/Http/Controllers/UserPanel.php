<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanel extends Controller
{
    public function index() {
        echo view('index');
    }
}
