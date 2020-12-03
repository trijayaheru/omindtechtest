@extends('main')
@section('title')
    Create New
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/book') }}">Manage Book</a></li>
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
        {!! Form::model($model, ['route' => 'book_edit', 'method' => 'patch']) !!}
        {!! Form::hidden('id') !!}
    @else
        {!! Form::open(['route' => 'book_add', 'method' => 'post']) !!}
    @endif
    <div class="form-group">
        <label for="inputBookName">Name</label>
        {!! Form::text('name', (isset($model) ? $model->name : ''), ['id' => 'inputBookName', 'class' => 'form-control', 'placeholder' => 'Name', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputBookDescription">Description</label>
        {!! Form::text('description', (isset($model) ? $model->description : ''), ['id' => 'inputBookDescription', 'class' => 'form-control', 'placeholder' => 'Description', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputBookPublishedDate">Published Date</label>
        {!! Form::date('published_date', (isset($model) ? $model->published_date : ''), ['id' => 'inputBookPublishedDate', 'class' => 'form-control', 'placeholder' => 'Published Date', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputBookAuthor">Author</label>
        {!! Form::select('author_id', \App\Models\Author::getList(), (isset($model) ? $model->author_id : ''), ['id' => 'inputBookAuthor', 'class' => 'form-control', 'empty' => '-- Status --', 'required' => true]) !!}
    </div>
    <div class="form-group">
        <label for="inputBookStatus">Status</label>
        {!! Form::select('status', \App\Models\Book::getStatus(), (isset($model) ? $model->status : ''), ['id' => 'inputBookStatus', 'class' => 'form-control', 'empty' => '-- Status --', 'required' => true]) !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    {!! Form::close() !!}
@endsection
