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

        return view('trains', [
            'trains' => $trains
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
