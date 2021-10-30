<?php

namespace App\Http\Controllers;

use App\Models\CedenteLocal;
use App\Models\Doador;
use Illuminate\Http\Request;

class CedenteLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cedente = CedenteLocal::all();

        return View('cedenteLocal.index')->with('varView', $cedente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('cedenteLocal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CedenteLocal::create($request->all());
        return redirect("/cedenteLocal");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CedenteLocal  $cedenteLocal
     * @return \Illuminate\Http\Response
     */
    public function show(CedenteLocal $cedenteLocal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CedenteLocal  $cedenteLocal
     * @return \Illuminate\Http\Response
     */
    public function edit(CedenteLocal $cedenteLocal)
    {
        return View('cedenteLocal.edit')->with('dep', $cedenteLocal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CedenteLocal  $cedenteLocal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CedenteLocal $cedenteLocal)
    {
        $cedenteLocal->update($request->all());
        return redirect('/cedenteLocal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CedenteLocal  $cedenteLocal
     * @return \Illuminate\Http\Response
     */
    public function destroy(CedenteLocal $cedenteLocal)
    {
        //
    }
}
