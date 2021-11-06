<?php

namespace App\Http\Controllers;

use App\Models\Doador;
use App\Models\EntidadeColetora;
use Illuminate\Http\Request;

class EntidadeColetoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entidades = EntidadeColetora::all();

        return View('entidadeColetora.index')->with('varView',$entidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('entidadeColetora.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EntidadeColetora::create($request->all());
        return redirect("/entidadeColetora");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntidadeColetora  $entidadeColetora
     * @return \Illuminate\Http\Response
     */
    public function show(EntidadeColetora $entidadeColetora)
    {
        return View('entidadeColetora.show')->with('e',$entidadeColetora);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntidadeColetora  $entidadeColetora
     * @return \Illuminate\Http\Response
     */
    public function edit(EntidadeColetora $entidadeColetora)
    {
        return View('entidadeColetora.edit')->with('dep',$entidadeColetora);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EntidadeColetora  $entidadeColetora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntidadeColetora $entidadeColetora)
    {
        $entidadeColetora->update($request->all());

        return redirect('/entidadeColetora');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntidadeColetora  $entidadeColetora
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntidadeColetora $entidadeColetora)
    {
        $entidadeColetora->delete();

        return redirect('/entidadeColetora');
    }
}
