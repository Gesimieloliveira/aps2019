<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estagiario;

class HomeController extends Controller
{
    public function index()
    {
        $estagiarios = Estagiario::all();
        return view('home', compact('estagiarios'));
    }
}
