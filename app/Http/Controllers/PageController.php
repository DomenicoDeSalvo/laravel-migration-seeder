<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_time',today())->get();

        return view('welcome', compact('trains'));
    }
}
