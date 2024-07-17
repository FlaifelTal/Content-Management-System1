@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header ">
                    Show posts
                    <a class="btn btn-success me-2" href="{{route('post.create')}}">Create</a>
                    <a class="btn btn-dark" href="">Trashed</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                           
                            {{-- <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>
                                    <img src="{{asset($post->image)}}" alt="Post Image">
                                </td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->category_id}}</td>
                                <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                                <td>
                                    <a class="btn-sm btn-info" href="">Show</a>
                                    <a class="btn-sm btn-success" href="{{route('post.edit',$post->id)}}">Edit</a>
                                    <a class="btn-sm btn-warning" href="">Delete</a>
                                </td>
                            </tr>   --}}
                         <tr>
                            <td>ID</td>
                            <td>{{$post->id}}</td>
                         </tr>
                         <tr>
                            <td>Image</td>
                            <td><img width = "300"src="{{asset($post->image)}}" alt=""></td>
                         </tr>
                         <tr>
                            <td>Title</td>
                            <td>{{$post->title}}</td>
                         </tr>
                         <tr>
                            <td>Description</td>
                            <td>{{$post->description}}</td>
                         </tr>
                         <tr>
                            <td>Category</td>
                            <td>{{$post->category_id}}</td>
                         </tr>
                         <tr>
                            <td>Publish Date</td>
                            <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                         </tr>
                        </tbody>
                    </table>
                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
