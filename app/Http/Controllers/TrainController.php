<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

    public function store()
    {
        $train = new Train();

        $train->name = request('name');
        $train->type = request('type');
        $train->catering = request('catering');
        $train->cars = request('cars');

        $train->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $train = Train::findOrFail($id);
        $train->delete();

        return redirect('/trains');
    }
}
