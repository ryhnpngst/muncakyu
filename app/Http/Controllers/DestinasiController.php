<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        $items = Destination::with(['galleries'])->get();
        return view('pages.destinasi', [
            'items' => $items,
        ]);
    }
}
