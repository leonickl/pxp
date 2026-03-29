<?php

namespace App\Controllers;

use PXP\Http\Controllers\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
