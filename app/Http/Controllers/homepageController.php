<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $trains = Train::select('*')
        ->where("departure_time","LIKE",date_format(date_create(), "Y-m-d")."%") // dove la departure_date è LIKE la data di oggi
        ->orderBy('departure_time', 'asc')
        ->get();

        return view('homepage', compact('trains'));
    }
}
