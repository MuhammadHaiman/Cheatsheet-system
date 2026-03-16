@extends('layouts.app-layout')
@section('content')

search logic

Cheatsheet::where('title','LIKE',"%$q%")->orWhere('command','LIKE',"%$q%")->get();

@endsection