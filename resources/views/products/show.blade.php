@extends('layout.base')

@section('pageContent')
<h1>{{$product['title']}}</h1>
<h3>Tempo di cottura: {{$product['cooking_time']}}</h3>
<p>{!!$product['description']!!}</p>

@endsection