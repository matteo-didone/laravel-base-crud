@extends('layouts.app')

@section('title', 'Edit Lidi')

@section('main-section')

<h1 class="text-center m-5">OH NO, NON È IL TUO LIDO DEI SOGNI! CAMBIALO!</h1>

<div class="container">
    
        <div class="row">
            <div class="col-12">
            <form action="{{ route('lidi.update', $listLidi->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="lido" name="nome" value="{{$listLidi->nome}}">
                </div>
                <div class="mb-3">
                    <label for="località" class="form-label">Località</label>
                    <input type="text" class="form-control" id="località" name="località" value="{{$listLidi->località}}">
                </div>
                <div class="mb-3">
                    <label for="numero_ombrelloni" class="form-label">Numero Ombrelloni</label>
                    <input type="number" class="form-control" id="numero_ombrelloni" name="numero_ombrelloni" value="{{$listLidi->numero_ombrelloni}}">
                </div>
                <div class="mb-3">
                    <label for="numero_lettini"  class="form-label">Numero Lettini</label>
                    <input type="number" class="form-control" id="numero_lettini" name="numero_lettini" value="{{$listLidi->numero_lettini}}">
                </div>
                <div class="mb-3">
                    <label for="prezzo_ombrellone_giorno" class="form-label">Prezzo al Giorno</label>
                    <input type="text" class="form-control" id="prezzo_ombrellone_giorno" name="prezzo_ombrellone_giorno" value="{{$listLidi->prezzo_ombrellone_giorno}}">
                </div>
                <div class="mb-3">
                    <label for="data_apertura" class="form-label">Data Apertura</label>
                    <input type="date" class="form-control" id="data_apertura" name="data_apertura" value="{{$listLidi->data_apertura}}">
                </div>
                <div class="mb-3">
                    <label for="data_chiusura" class="form-label">Data Chiusura</label>
                    <input type="date" class="form-control" id="data_chiusura" name="data_chiusura"  value="{{$listLidi->data_chiusura}}">
                </div>
                <div class="mb-3">
                    <label for="campo_beach_volley" class="form-label">Campo Beach Volley</label>
                    <input type="text" class="form-control" id="campo_beach_volley" name="campo_beach_volley" value="{{ (($listLidi->campo_beach_volley) ? 'Yes' : 'No') }}">
                </div>
                <div class="mb-3">
                    <label for="campo_calcio" class="form-label">Campo Calcio</label>
                    <input type="text" class="form-control" id="campo_calcio" name="campo_calcio" value="{{ (($listLidi->campo_calcio) ? 'Yes' : 'No') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> 
</div>

</div>
@endsection