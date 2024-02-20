@extends('layouts.main')

@section('title', 'blog')

@section('content')
<table class="table mt-2">
    <thead>
        <tr >
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
   
    <tbody> 
    <tr>
        <td> {{$user->id}} </td>
        <td>  {{$user->name}} </td>
        <td> {{$user->email}} </td>
        <td>   
            <a href="{{ route('users.edit', ['id'=>$user['id']], false) }}" class="btn btn-sm btn-secondary">Edit</a>
            <a href="" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
</tbody>
</table>


<h2 class="mt-5">Posts published:</h2>
<table class="table">
    <hr>

    <thead>
        <tr >
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Published at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
   
    <tbody> 
        @foreach ($posts as $post)
    <tr>
        
        <td> {{$post->id}} </td>
        <td>  {{$post->title}} </td>
        <td> {{$post->body}} </td>
        <td> {{$post->published_at}} </td>
        <td>   
            <a href="{{ route('posts.edit', ['id'=>$post['id']], false) }}" class="btn btn-sm btn-secondary">Edit</a>
            <a href="" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>


@endsection