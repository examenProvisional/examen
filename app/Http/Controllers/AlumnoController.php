<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos =Alumno::all();

        $campos =$alumnos[0]->getAttributes();
        $campos =array_keys($campos);
        $campos =json_encode($campos);
        $alumnos =json_encode($alumnos);
        return view ("crud/alumnos",["alumnos"=>$alumnos, "campos"=>$campos, "nombre"=>"Alumnos"]);
        //
    }//fin de index
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('alumnos.create');

        //return view("crud/create");

    }//fin de create
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlumnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumnoRequest $request)
    {
        $alumno =new Alumno($request->input());
        $alumno->saveOrFail();

        $alumnos =Alumno::all();
        return redirect(route("alumnos.index"));
        //return view("crud/alumnos",["alumnos"=>$alumnos]);
    }//fin de store

}

