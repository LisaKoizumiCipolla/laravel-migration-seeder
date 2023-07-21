@extends('layouts.app')

@section('title', 'Trains')

@section('main-section')

    <h1>Beware Trenitalia</h1>

    @foreach($trainDataList as $train)

        <table class="table">
            <thead>
                <tr>
                <th scope="col">company</th>
                <th scope="col">departure_station</th>
                <th scope="col">arrival_station</th>
                <th scope="col">departure_time</th>
                <th scope="col">arrival_time</th>
                <th scope="col">train_code</th>
                <th scope="col">number_train_carriage</th>
                <th scope="col">on_time</th>
                <th scope="col">cancelled</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{$train->departure_time}}</td>
                <td>{{$train->arrival_time}}</td>
                <td>{{$train->train_code}}</td>
                <td>{{$train->number_train_carriage}}</td>
                <td>{{$train->on_time}}</td>
                <td>{{$train->cancelled}}</td>
                </tr>
                
            </tbody>
        </table>
    @endforeach
@endsection