<?php

namespace App\Http\Controllers;

use App\Map;
use function compact;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function index()
    {
        $maps = Map::all();

        return view('maps', compact('maps'));
    }

    public function show($id)
    {
        $map = Map::findOrFail($id);

        return view('map', compact('map'));
    }
}