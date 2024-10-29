<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    // Index
    public function index() {
        $trains_list = Train::all();
        return view('trains.index', compact('trains_list'));
    }
}
