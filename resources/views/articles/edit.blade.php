@extends('layout.master')
@section('content')
@component('layout.component.title')
home page
@endcomponent
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <form action="{{route('articles.update', $article->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label class="font-weight-bold" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{$article->description}}">
            </div>
            <div class="form-group">
                <label class="font-weight-bold" for="content">Content</label>
                <input class="form-control" type="text" name="content" id="content" value="{{$article->content}}">
            </div>
            <button class="btn btn-success text-uppercase" type="submit">update</button>
            </form> 
        </div>
    </div>
</div>

@endsection