@extends("layouts.public")

@include("partials.header")

@section("title", "Trains Departures")

@section("content")
    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <div class="box">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Data partenza</th>
                            <th scope="col">Stazione partenza</th>
                            <th scope="col">Stazione arrivo</th>
                            <th scope="col">Orario partenza</th>
                            <th scope="col">Orario arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">Numero Carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>                      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $trains as $singleTrain)  
                            
                                    @if ( $singleTrain->data_partenza >= date('Y-m-d'))
                                        <tr>
                                        <th scope="row">#</th>
                                        <td>{{$singleTrain->azienda}}</td>
                                        <td>{{$singleTrain->data_partenza}}</td>                           
                                        <td>{{$singleTrain->stazione_partenza}}</td>                           
                                        <td>{{$singleTrain->stazione_arrivo}}</td>                           
                                        <td>{{$singleTrain->orario_partenza}}</td>                           
                                        <td>{{$singleTrain->orario_arrivo}}</td>                           
                                        <td>{{$singleTrain->codice_treno}}</td>                           
                                        <td>{{$singleTrain->numero_carrozze}}</td>                           
                                        <td>{{($singleTrain->in_orario)? "SI" : "No"}}</td>                           
                                        <td>{{($singleTrain->cancellato)? "Si" : "No"}}</td>                           
                                        </tr>                                                           
                                        
                                    @endif
                            @endforeach     
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection



