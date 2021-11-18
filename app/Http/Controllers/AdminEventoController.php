<?php

namespace App\Http\Controllers;

use App\Models\AdminEvento;
use App\Models\CalendarioEvento;
use App\Models\Administrador;
use Illuminate\Http\Request;

class AdminEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminsEventos = AdminEvento::all();
        $administradores = Administrador::all();
        $eventos = CalendarioEvento::all();
        return View('adminEvento.index')->with('varView',$adminsEventos)->with('administradores',$administradores)->with('eventos',$eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Administrador::all();
        $eventos = CalendarioEvento::all();
        return View('adminEvento.create')->with('admins', $admins)->with('eventos', $eventos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdminEvento::create($request->all());
        return redirect("/adminEvento");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminEvento  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(AdminEvento $adminEvento)
    {
        $administrador = Administrador::where('id',$adminEvento->id_admin)->first();
        $evento = CalendarioEvento::where('id',$adminEvento->id_evento)->first();
        return View('adminEvento.show')->with('e',$adminEvento)->with('administrador',$administrador)->with('evento',$evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminEvento  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminEvento $adminEvento)
    {
        $administrador = Administrador::where('id',$adminEvento->id_admin)->first();
        $evento = CalendarioEvento::where('id',$adminEvento->id_evento)->first();
        $admins = Administrador::all();
        $eventos = CalendarioEvento::all();
        return View('adminEvento.edit')->with('dep',$adminEvento)->with('admin',$administrador)->with('admins', $admins)->with('eventos', $eventos)->with('evento', $evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminEvento  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminEvento $adminEvento)
    {
        $adminEvento->update($request->all());
       
       return redirect('/adminEvento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminEvento  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminEvento $adminEvento)
    {
        $adminEvento->delete();

        return redirect('/adminEvento');
    }
}
