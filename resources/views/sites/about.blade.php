@extends('app')
@section('content')
    <h3>People Name</h3>
    @if(count($people)>0)
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
@stop