<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function list()
    {
        return view('admin.home');
    }
}
