@extends('layout.master')
@section('content')
@component('layout.component.title')
home page
@endcomponent
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
        <table class="table table-hover table-bordered">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->description}}</td>
        <td class="d-flex justify-content-around align-items-center">
        <form action="{{route('articles.show', $article->id)}}" method="GET">
        <button class="btn btn-sm btn-success rounded-0" type="submit">Show</button>
        </form>
        <form action="{{route('articles.edit', $article->id)}}" method="GET">
            <button class="btn btn-warning btn-sm rounded-0" type="submit">Edit</button>
        </form>
        <form action="{{route('articles.destroy', $article->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-sm btn-danger rounded-0" type="submit">Delete</button>
        </form>
        </td>
        </tr>
    
    @endforeach
    </tbody>
</table>
        </div>
    </div>
</div>
@endsection