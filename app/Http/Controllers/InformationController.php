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
        $fileName = time().'.'.$request->file->extension(); //nombre del archivo
        $request->file->move(public_path('images'), $fileName); //mover el archivo a la carpeta publica

      $information = new Information(); //crear un nuevo objeto
      $information->name = $request->name; //asignar el nombre
      $information->file_uri = $fileName; //asignar el nombre del archivo
      $information->save(); //guardar en la base de datos

      return redirect()->route('index');

    }
}