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
                        <form action="{{ route('create_category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
