@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-10">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                <div class="card">
                    <div class="card-header ">
                        Create Post
                    </div>

                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method = "POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <textarea cols="30" class="form-control" name="description" id=""></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <button for="" class="btn btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
