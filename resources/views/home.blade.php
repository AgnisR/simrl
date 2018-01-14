@extends('layout')

@section('content')
<div>
    <div class="article-thumb">
        <h2>{{$article->title}}</h2>
        <p>{{$article->text}}</p>
    </div>
    <div class="article-thumb">
        <h2>Virsraksts</h2>
        <p>raksts</p>        
    </div>
</div>
@endsection
