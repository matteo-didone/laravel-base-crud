@extends('layouts.app')

@section('title', 'Elenco Lidi')

@section('main-section')

<h1 class="text-center m-5">IL LIDO DEI SOGNI!!</h1>

<div class="container">
    
        <div class="row">
            <div class="col-12">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nome: {{ $listLidi->nome }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Località: {{ $listLidi->località }}</li>
                    <li class="list-group-item">Numero Ombrelloni: {{ $listLidi->numero_ombrelloni }}</li>
                    <li class="list-group-item">Numero Lettini: {{ $listLidi->numero_lettini }}</li>
                    <li class="list-group-item">Prezzo Ombrellone per Giorno: {{ $listLidi->prezzo_ombrellone_giorno }}€</li>
                    <li class="list-group-item">Data Apertura: {{ $listLidi->data_apertura }}</li>
                    <li class="list-group-item">Data Chiusura: {{ $listLidi->data_chiusura }}</li>
                    <li class="list-group-item">Campo Beach Volley: {{ (($listLidi->campo_beach_volley) ? 'Yes' : 'No') }}</li>
                    <li class="list-group-item">Campo Calcio: {{ (($listLidi->campo_calcio) ? 'Yes' : 'No') }}</li>
                </ul>
            </div>
        </div> 
</div>

</div>
@endsection