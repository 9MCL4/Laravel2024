@extends('layouts.default')

@section('title','Usuário')

@section('content')
    <h1>Usuário</h1>
    {{$user->name}}<br/>
    {{$user->email}}<br/>
@endsection