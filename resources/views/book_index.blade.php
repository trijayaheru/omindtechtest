@extends('main')
@section('title')
    Manage Book
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Manage Book</li>
@endsection

@section('content')
    @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message', '') }}
        </div>
    @endif
    <div class="text-right">
        <a href="{{ url('/book/create') }}" class="btn btn-primary">
            <i class="fa fa-plus-circle"></i>
            Create New
        </a>
    </div>
    <div class="mt-1">
        <table id="datagrid-table" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published Date</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($model as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->author->name }}</td>
                    <td>{{ \App\Helpers\DateHelper::formatDate($data->published_date) }}</td>
                    <td class="text-center">
                        <a href="{{ url('/book/update/id/'.$data->id) }}" class="btn btn-primary">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        {{ Form::open([ 'method'  => 'DELETE', 'route' => [ 'book_delete', $data->id ], 'style' => 'display: inline;' ])}}
                        {{ Form::hidden('id', $data->id) }}
                        {{ Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'style' => 'display: inline;')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $('#datagrid-table').DataTable({"paging": true, "lengthChange": false, "ordering": true, "info": true, "autoWidth": false, "responsive": true,});
        })
    </script>
@endsection
