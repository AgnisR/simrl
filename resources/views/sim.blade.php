@extends('layout')

@section('content')
<div>
    <h2>{{$sim}}</h2>
    <div id="sim-logo">
        <img src="images/{{$sim}}-logo.jpg" alt="Sim-Logo">
    </div>
    <div id="sim-studio">
        studio
    </div>
    <div id="leagues">
        leagues
    </div>
</div>
@stop
