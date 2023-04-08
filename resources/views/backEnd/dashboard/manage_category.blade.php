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
                                <th>Action</th>
                            </tr>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $category['name'] }}</td>
                                <td>
                                    <img src="{{ $category['image'] }}" style="width:80px;height:80px;" alt="">
                                </td>
                                <td>
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
