<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lido;
use Illuminate\Http\Request;

class LidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $listLidi = Lido::all();

        return view('admin.lidi.index', compact('listLidi'));
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
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $listLidi = Lido::findOrFail($id);

        return view('admin.lidi.show', compact('listLidi'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $listLidi = Lido::findOrFail($id);
        return view('admin.lidi.edit', compact('listLidi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        //$data = $request->validated();
        //$beach_volley = 0;

        if($request['campo_beach_volley'] === 'Yes'){
            $beach_volley = 1;
        } else {
            $beach_volley = 0;
        }
        
        if($request['campo_calcio'] === 'Yes'){
            $calcio = 1;
        } else {
            $calcio = 0;
        }


        $listLidi = Lido::findOrFail($id);

        $listLidi->nome = $request['nome'];
        $listLidi->località = $request['località'];
        $listLidi->numero_ombrelloni = $request['numero_ombrelloni'];
        $listLidi->numero_lettini = $request['numero_lettini'];
        $listLidi->prezzo_ombrellone_giorno = $request['prezzo_ombrellone_giorno'];
        $listLidi->data_apertura = $request['data_apertura'];
        $listLidi->data_chiusura = $request['data_chiusura'];
        $listLidi->campo_beach_volley = $beach_volley;
        $listLidi->campo_calcio = $calcio;
        $listLidi->save();
        

        return redirect()->route('lidi.index', $listLidi->id)->with('updated', $listLidi->nome);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listLidi = Lido::findOrFail($id);
        $listLidi->delete();
        return redirect ()->route('lidi.index')->with('delete', $listLidi->nome);
    }
}

//add delete section
