<?php

namespace App\Http\Controllers;

use App\Medium;

use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    public function create() {

        $medium = Medium::all();
        return view('converse', compact('medium'));

    }

    public function store() {

        dd(request());
    }
}
