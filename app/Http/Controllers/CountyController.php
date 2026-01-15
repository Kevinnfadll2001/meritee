<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function riverside() {
        return view('counties.riverside');
    }

    public function sanBernardino() {
        return view('counties.sanbernardino');
    }

    public function orange() {
        return view('counties.orange');
    }

    public function losAngeles() {
        return view('counties.losangeles');
    }
}

