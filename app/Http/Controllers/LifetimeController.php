<?php

namespace App\Http\Controllers;

class LifetimeController extends Controller
{
    public function index() {
        return view('pages.admin.lifetime.index');
    }

    public function add() {
        return view('pages.admin.lifetime.add');
    }
}
