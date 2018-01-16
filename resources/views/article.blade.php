@extends('layout')

@section('content')

<h1>{{ $articles->title }}</h1>
<p>{{ $articles->text }}</p>

@stop