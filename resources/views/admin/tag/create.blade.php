@extends('admin.template.main')

@section('title')
    Add Tag
@endsection

@section('page')
    Add Tag
@endsection

@section('breadcrumb')
    Add Tag
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Tag</h3>
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
                <form action="{{route('tag.store')}}" method="POST" role="form">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Tag Name">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success w-100">Save Tag</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection
