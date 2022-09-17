<?php

namespace App\Http\Controllers;

use App\Models\Figure;
use Illuminate\Http\Request;

class FigureController extends Controller
{
    public function index()
    {
        return view('index', [
           'figures' => Figure::all()
        ]);
    }
}
