@extends('layout')

@section('content')
<div>
    <h2>{{$league->name}}</h2>
    <p>{{$league->text}}</p>
    <small>{{$league->User->name}}</small>
</div>
@stop