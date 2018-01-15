@extends('layout')

@section('content')
<div>
    <div class="article-thumb">
        <h2>{{$article->title}}</h2>
        <p>{{$article->text}}</p>
    </div>
    <div class="article-thumb">
        <h2>{{$article->title}}</h2>
        <p>{{$article->text}}</p>        
    </div>
</div>
@endsection
