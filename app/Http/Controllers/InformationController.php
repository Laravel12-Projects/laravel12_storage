<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $informations = Information::get();
        return view('index', compact('informations'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(InformationRequest $request)
    {

        // $information = new Information();
        // $information->name = $request->name;
        // $information->file_uri = $request->file_uri;
        // $information->save();

        // return redirect()->route('index')->with('success', 'Information created successfully.');
    }
}
