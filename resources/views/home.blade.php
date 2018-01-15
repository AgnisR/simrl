@extends('layout')

@section('content')
<div>
    @foreach($article as $art)
    <div class="article-thumb">
        <h2>{{$art->title}}</h2>
        <p>{{$art->text}}</p>
    </div>
    @endforeach
</div>
@endsection
