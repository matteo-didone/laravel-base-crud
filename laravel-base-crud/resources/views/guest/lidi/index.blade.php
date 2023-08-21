@extends('layouts.app')

@section('title', 'Elenco Lidi')

@section('main-section')

<h1 class="text-center m-5">CERCA IL TUO LIDO DEI SOGNI!!</h1>

<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Località</th>
                    <th scope="col">Numero Ombrelloni</th>
                    <th scope="col">Numero Lettini</th>
                    <th scope="col">Prezzo Ombrelloni per Giorno</th>
                    <th scope="col">Data Apertura</th>
                    <th scope="col">Data Chiusura</th>
                    <th scope="col">Campo Beach Volley</th>
                    <th scope="col">Campo Calcio</th>
                    <th scope="col">Show Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listLidi as $lido)
                <tr>
                    <th scope="row">{{ $lido->id }}</th>
                    <td>{{ $lido->nome }}</td>
                    <td>{{ $lido->località }}</td>
                    <td>{{ $lido->numero_ombrelloni }}</td>
                    <td>{{ $lido->numero_lettini }}</td>
                    <td>{{ $lido->prezzo_ombrellone_giorno }}</td>
                    <td>{{ $lido->data_apertura }}</td>
                    <td>{{ $lido->data_chiusura }}</td>
                    <td>{{ (($lido->campo_beach_volley) ? 'Yes' : 'No') }}</td>
                    <td>{{ (($lido->campo_calcio) ? 'Yes' : 'No') }}</td>
                    <td class="">
                        <a class="btn btn-xs btn-primary m-2" href="{{ route('guestShow', $lido->id) }}">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

</div>
@endsection