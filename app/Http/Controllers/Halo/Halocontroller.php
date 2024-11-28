<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Halocontroller extends Controller
{
    public function index()
    {

        return '<h1> Halo dari controller</h1>';
    }
}
