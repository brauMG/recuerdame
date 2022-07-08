<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostMentionsController extends Controller
{
    public function index() {
        return view('pages.admin.mentions.index');
    }
}
