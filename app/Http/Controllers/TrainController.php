<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        // $trains = Train::orderBy('type')->get();
        // $trains = Train::where('type', 'steam-powered')->get();
        $trains = Train::latest()->get();

        return view('trains.index', [
            'trains' => $trains
        ]);
    }

    public function show($id)
    {
        $train = Train::findOrFail($id);
        return view('trains.show', ['train' => $train]);
    }

    public function create()
    {
        return view('trains.create');
    }
}
