@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header ">
                    All posts
                    <a class="btn btn-success me-2" href="{{route('post.create')}}">Create</a>
                    <a class="btn btn-dark" href="{{route('post.trashed')}}">Trashed</a>
                </div>
                <div class="card-body">
                    @if(isset($posts) && $posts->count() > 0)

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 5%">#</th>
                                <th scope="col" style="width: 10%;">Image</th>
                                <th scope="col" style="width: 10%">Title</th>
                                <th scope="col" style="width: 30%">Description</th>
                                <th scope="col" style="width: 10%">Category</th>
                                <th scope="col" style="width: 15%">Publish Date</th>
                                <th scope="col" style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($posts as $post) --}}
                                {{-- <tr>
                                    <th scope="row">
                                        1
                                    </th>
                                    <td> <img src="" alt=""></td>
                                    <td>hi</td>
                                    <td>hi2</td>
                                    <td>hi3</td>
                                    <td>hi4</td>
                                    <td>
                                        <a class="btn-sm btn-info" href="">Show</a>
                                        <a class="btn-sm btn-success" href="">Edit</a>
                                        <a class="btn-sm btn-warning" href="">Delete</a>
                                    </td>
                                </tr>
                                --}}
                                    
                            {{-- @endforeach --}}
                            @foreach ($posts as $post )
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>
                                    <img src="{{URL::asset($post->image)}}" alt="Post Image" alt="{{$post->image}}">
                                    {{-- <img src="assets\img\pic1.jpg" alt="Post Image" alt="{{$post->image}}"> --}}

                                </td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                                <td>
                                    <a class="btn-sm btn-info" href="{{route('post.show',$post->id)}}">Show</a>
                                    <a class="btn-sm btn-success" href="{{route('post.edit',$post->id)}}">Edit</a>
                                    {{-- <a class="btn-sm btn-warning" href="">Delete</a> --}}
                                    <form action="{{route('post.destroy',$post->id)}}" method = "POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-sm btn-warning">Delete</button>
                                    </form>
                                </td>
                            </tr>  
                            @endforeach
                         
                        </tbody>
                    </table>
                    @else
                    <p>no posts </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
