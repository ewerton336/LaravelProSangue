<?php

namespace App\Http\Controllers;

use App\Models\CalendarioEvento;
use App\Models\CedenteLocal;
use App\Models\EntidadeColetora;
use Illuminate\Http\Request;

class CalendarioEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendario = CalendarioEvento::all();
        $entidadecoletora = EntidadeColetora::all();
        $cedenteLocal = CedenteLocal::all();
        return view('calendarioEvento.index')->with('varView', $calendario)->with('entidadecoletora', $entidadecoletora)->with('cedenteLocal', $cedenteLocal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidadescoletoras = EntidadeColetora::all();
        $cedentesLocal = CedenteLocal::all();
        return View('calendarioEvento.create')->with('entidadescoletoras', $entidadescoletoras)->with('cedentesLocal', $cedentesLocal);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CalendarioEvento::create($request->all());
        return redirect("/calendarioEvento");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CalendarioEvento  $calendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarioEvento $calendarioEvento)
    {
        return View('calendarioEvento.show')->with('e',$calendarioEvento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CalendarioEvento  $calendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarioEvento $calendarioEvento)
    {
        $entidadecoletora = EntidadeColetora::all();
        $cedenteLocal = CedenteLocal::all();
        return view('calendarioEvento.edit')->with('dep', $calendarioEvento)->with('entidadecoletora', $entidadecoletora)->with('cedenteLocal', $cedenteLocal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CalendarioEvento  $calendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarioEvento $calendarioEvento)
    {
        $calendarioEvento->update($request->all());
        return redirect('/calendarioEvento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CalendarioEvento  $calendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarioEvento $calendarioEvento)
    {
        $calendarioEvento->delete();

        return redirect('/calendarioEvento');
    }


    
}
