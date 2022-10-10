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

    public function figure($slug)
    {
        return view('figure', [
            'figure' => Figure::where('slug', $slug)->get()->first()
        ]);
    }
}
