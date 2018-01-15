@extends('layout')
@section('content')
    
    <div class="saturs" id="saturs">
    <h2>Līgas</h2>
    @foreach($league as $lea)
    <div id="league-thumb">
        <h2>{{$lea->title}}</h2>
        <p>{{$lea->text}}</p>
    </div>
    @endforeach
    </div>
@stop