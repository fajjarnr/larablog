@extends('admin.template.main')

@section('title')
    Edit Category
@endsection

@section('page')
    Edit Category
@endsection

@section('breadcrumb')
    Edit Category
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Category</h3>
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
                <form action="{{route('category.update', $category->id)}}" method="POST" role="form">
                    @csrf
                    @method('patch')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" placeholder="Enter Category Name">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success w-100">Update Category</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
