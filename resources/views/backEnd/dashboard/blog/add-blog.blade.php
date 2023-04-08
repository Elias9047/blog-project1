@extends('backEnd.dashboard.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Add Blog</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new.blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Author Name</label>
                                <select name="author_name" class="form-control" id="">
                                    @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->author_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Category</label>
                                <select name="category" id="" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{  $category->id }}">{{ $category->name  }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" id="" cols="10" rows="5"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success" value="Add_Blog">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
