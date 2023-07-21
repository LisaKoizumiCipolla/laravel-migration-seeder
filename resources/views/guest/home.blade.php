@extends('layouts.app')

@section('title', 'Home')

@section('main-section')

    <h1>Welcome</h1>
    <a href=" {{ route('guest.train.index') }} ">>> Click here to check trains <<</a>

@endsection