<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index() {
        return view('pages.admin.select.index');
    }
}
