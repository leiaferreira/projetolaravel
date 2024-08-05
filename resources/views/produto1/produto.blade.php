@extends('layouts.main') 
@section('title','Produtos') 

@section('content')
@if($id != null)
    <h1>exibindo produto id : {{ $id }}</h1>
@endif


@endsection