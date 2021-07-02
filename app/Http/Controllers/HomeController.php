<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Destination::with(['galleries'])->get();
        return view('pages.home', [
            'items' => $items,
        ]);
    }
}
