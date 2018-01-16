@extends('layout')
@section('content')
    
    <div class="saturs" id="saturs">
    <h2>Līgas</h2>
    @foreach($league as $lea)
    <div id="league-thumb"><a href = "/leagues/{{$lea->id}}">
        <div><img src="images/{{$lea->sim}}-thumb.jpg" alt="Sim-Logo"></div>
        <p>{{$lea->name}}</p></a>
    </div>
    @endforeach
    </div>
@stop

