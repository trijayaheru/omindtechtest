@extends('main')
@section('title')
    Create New
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/author') }}">Manage Author</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message', '') }}
        </div>
    @endif
    @if(isset($model))
        {!! Form::model($model, ['route' => 'author_edit', 'method' => 'patch']) !!}
        {!! Form::hidden('id') !!}
    @else
        {!! Form::open(['route' => 'author_add', 'method' => 'post']) !!}
    @endif
    <div class="form-group">
        <label for="inputAuthorName">Name</label>
        {!! Form::text('name', (isset($model) ? $model->name : ''), ['id' => 'inputAuthorName', 'class' => 'form-control', 'placeholder' => 'Name', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputAuthorAddress">Address</label>
        {!! Form::text('address', (isset($model) ? $model->address : ''), ['id' => 'inputAuthorAddress', 'class' => 'form-control', 'placeholder' => 'Address', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputAuthorPhone">Phone Number</label>
        {!! Form::text('phone_number', (isset($model) ? $model->phone_number : ''), ['id' => 'inputAuthorPhone', 'class' => 'form-control', 'placeholder' => 'Phone Number', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputAuthorCity">City</label>
        {!! Form::text('city', (isset($model) ? $model->city : ''), ['id' => 'inputAuthorCity', 'class' => 'form-control', 'placeholder' => 'City', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputAuthorStatus">Status</label>
        {!! Form::select('status', \App\Models\Author::getStatus(), (isset($model) ? $model->status : ''), ['id' => 'inputAuthorStatus', 'class' => 'form-control', 'empty' => '-- Status --', 'required' => true]) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
@endsection
