<?php

namespace App\Http\Controllers;

use App\Formulario;
use App;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuariosAgregar = new Formulario;
        $usuariosAgregar->nombre = $request->nombre;
        $usuariosAgregar->apellido = $request->apellido;
        $usuariosAgregar->direccion = $request->direccion;
        $usuariosAgregar->correo = $request->correo;
        $usuariosAgregar->telefono = $request->telefono;
        $usuariosAgregar->save();
        return redirect()->route('formulario')
                        ->with('success','Gracias por su informacion.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
