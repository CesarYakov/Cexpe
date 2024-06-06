@extends('layout')
@section('title','taller')
@section('content')
<h2>Talleres</h2>
<ul>
    @foreach($talleres as $item)
    <li>{{ $item['titulo']}}</li>
    @endforeach
</ul>
@endsection

