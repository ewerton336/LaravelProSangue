<?php

namespace App\Http\Controllers;

use App\Models\Doador;
use Illuminate\Http\Request;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doadores = Doador::all();

        return View('doador.index')->with('varView',$doadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('doador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Doador::create($request->all());
        return redirect("/doador");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function show(Doador $doador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function edit(Doador $doador)
    {
        return View('doador.edit')->with('dep',$doador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doador $doador)
    {
        $doador->update(  $request->all()  );

        return redirect('/doador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doador  $doador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doador $doador)
    {
        //
    }
}
