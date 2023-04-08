@extends('backEnd.dashboard.master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Add Category</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>SI</th>
                                <th>title</th>
                                <th>Author Name</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $key=>$blog)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $blog['title'] }}</td>
                                    <td>{{ $blog->author_relation->author_name }}</td>
                                    <td>{{ $blog->category_relation->name}}</td>
                                    <td>{{ $blog['slug'] }}</td>
                                    <td>{{ $blog['description'] }}</td>
                                    <td>
                                        <img src="{{ $blog['image'] }}" style="width:80px;height:80px;" alt="">
                                    </td>
                                    <td>{{ $blog->status == 1 ?'Active':'De_active' }}</td>
                                    <td>
                                        @if($blog->status==1)
                                        <a href="{{ route('blog.status',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm">Active</a>
                                        @else
                                        <a href="{{ route('blog.status',['id'=>$blog->id]) }}" class="btn btn-warning btn-sm">De_active</a>
                                        @endif
                                        <a href="#" class="btn btn-success btn-sm">Edit||</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
