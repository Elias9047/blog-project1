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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($authors as $key=>$author)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $author['author_name'] }}</td>
                                    <td>
                                        <img src="{{ $author['image'] }}" style="width:80px;height:80px;" alt="">
                                    </td>
                                    <td>{{ $author->status == 1 ? 'Active':'De_Active' }}</td>
                                    <td>
                                        <a href="{{ route('author.edit',['id'=>$author->id]) }}" class="btn btn-primary btn-sm">Edit||</a>
                                        @if($author->status == 1)
                                        <a href="{{ route('status',['id'=>$author->id]) }}" class="btn btn-success btn-sm">Active</a>
                                        @else
                                        <a href="{{ route('status',['id'=>$author->id]) }}" class="btn btn-warning btn-sm">De_Active</a>
                                        @endif
                                        <a onclick="event.preventDefault();document.getElementById('delete').submit();return confirm('Are you sure delete this??')" class="btn btn-danger">Delete</a>
                                        <form id="delete" action="{{ route('delete.author') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $author->id }}">
                                        </form>

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
