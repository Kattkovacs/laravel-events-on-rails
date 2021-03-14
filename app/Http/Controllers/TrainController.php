<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = [
            ['type' => 'steam houled', 'catering' => 'on diner', 'passengers' => 120],
            ['type' => 'steam houled', 'catering' => 'no catering', 'passengers' => 250],
            ['type' => 'steam houled', 'catering' => 'on diner', 'passengers' => 80]
        ];

        $name = request('name');

        return view('trains', [
            'trains' => $trains,
            'name' => $name,
            'age' => request('age')
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
