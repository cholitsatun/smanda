<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterVoteController extends Controller
{
    public function index() {
        return view ('suara.aftervote');
    }
}
