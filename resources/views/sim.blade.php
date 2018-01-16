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
        @foreach($league as $lea)
            @if($lea->sim==$sim)
                <div id="league-thumb">
                <div><img src="images/{{$lea->sim}}-thumb.jpg" alt="Sim-Logo"></div>
                <p><a href = "">{{$lea->name}}</a></p>
                </div>
            @endif
        @endforeach
    </div>
</div>
@stop
