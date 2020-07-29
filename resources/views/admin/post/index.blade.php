@extends('admin.template.main')

@section('title')
Post
@endsection

@section('page')
Post
@endsection

@section('breadcrumb')
Post
@endsection

@section('content')

<a href="{{route('post.create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus"> Add Post</i></a>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table Post</h3>
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
                    <th>Judul</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post->p as $hasil)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$hasil->judul}}</td>
                    <td>{{$hasil->category->name}}</td>
                    <td>
                        @foreach ($hasil->tags as $tag)
                        <ul>
                            <li>{{$tag->name}}</li>
                        </ul>
                        @endforeach
                    </td>
                    <td>{{$hasil->content}}</td>
                    <td><img src="{{asset($hasil->image)}}" class="img-fluid" width="100px"></td>
                    <td class="row justify-content-center">
                        <a href="{{route('post.edit', $hasil->id)}}" class="btn btn-warning text-white mr-sm-3"><i
                                class="fas fa-edit"></i> edit</a>
                        <form action="{{route('post.destroy', $hasil->id)}}" method="POST">
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
