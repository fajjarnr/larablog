@extends('admin.template.main')

@section('title')
    Category
@endsection

@section('page')
    Category
@endsection

@section('breadcrumb')
    Category
@endsection

@section('content')

<a href="{{route('category.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus"> Add Category</i></a>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Table Catagory</h3>
    </div>
    <div class="container mt-3">
        @if(count($errors)>0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session('success')}}
            </div>
        @endif
        </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Category</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($category as $c)
            <tr>
              <td>{{$c->id}}</td>
              <td>{{$c->name}}</td>
              <td class="row justify-content-center">
                <a href="{{route('category.edit', $c->id)}}" class="btn btn-warning text-white mr-sm-3"><i class="fas fa-edit"></i> edit</a>
                <form action="{{route('category.destroy', $c->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> delete</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
