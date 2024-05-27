@extends('layouts.app')

@section('title','Treni')
@section('content')
    <div class="container text-center">
        <h2>Treni</h2> 
    </div>
    <div class="container">
        <table class='table'>
            <thead>
                <tr>
                    <th>Treno</th>
                    <th>Partenza</th>
                    <th>Destinazione</th>
                    <th>Data Partenza</th>
                    <th>Data Arrivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{$train -> train_code}}</td>
                        <td>{{$train -> departure}}</td>
                        <td>{{$train -> destination}}</td>
                        <td>{{$train -> departure_time}}</td>
                        <td>{{$train -> arrival_time}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection