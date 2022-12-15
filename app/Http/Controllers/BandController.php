<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function index()
    {
        return view('bands.index', [
            'bands' => Band::latest()->filter(request('genre'))->get(),
        ]);
    }

    public function show(Band $band)
    {
        return view('bands.show', [
            'band' => $band
        ]);
    }
}
