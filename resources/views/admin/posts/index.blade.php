@extends('layouts.admin')
@section('content')
    <h1>All posts</h1>
    <h2>Aantal posts {{$aantal}}</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Owner</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Post link</th>
            <th scope="col">Comments</th>
            <th scope="col">Created at</th>
            <th scope="col">updated at</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @if ($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        <img height="62" src="{{$post->photo ? asset($post->photo->file) : 'http://place-hold.it/62x62'}}" alt="">
                    </td>
                    <td><a href="{{route('posts.edit', $post->slug)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>Post link</td>
                    <td>Comments</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{route('posts.edit', $post->id)}}"><i class="fas fa-edit btn btn-success"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$posts->links()}}//links of render (voor oudere versies)
        </div>
    </div>
@stop
