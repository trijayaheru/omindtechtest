@extends('main')
@section('title')
    Dashboard
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <h2>Welcome {{ Auth::user()->name }}</h2>
@endsection
