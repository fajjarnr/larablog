@extends('admin.template.main')

@section('title')
Add Post
@endsection

@section('page')
Add Post
@endsection

@section('breadcrumb')
Add Post
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Post</h3>
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
            <form action="{{route('post.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Enter Post Name">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Kategori</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="" holder>--- Pilih Kategori ---</option>
                            @foreach ($category as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tag</label>
                        <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Pilih Tag"
                            style="width: 100%;">
                            @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10"
                            placeholder="Masukan Content Anda"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thubnails">Thubnails</label>
                        <input type="file" class="form-control" id="thubnails" name="image">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success w-100">Save Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
