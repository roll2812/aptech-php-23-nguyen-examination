@extends('layout.master')
@section('content')
@component('layout.component.title')
create page
@endcomponent
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <form action="{{route('articles.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                <label class="text-uppercase font-weight-bold" for="title">Title</label>
                <input class="form-control rounded-0" type="text" name="title" id="title">
                </div>
                <div class="form-group">
                <label class="text-uppercase font-weight-bold" for="description">Description</label>
                <input class="form-control rounded-0" type="text" name="description" id="description">
                </div>
                <div class="form-group">
                <label class="text-uppercase font-weight-bold" for="content">Content</label>
                <input class="form-control rounded-0" type="text" name="content" id="content">
                </div>
                <button class="btn btn-danger text-uppercase rounded-0" type="submit">Create</button>
            </form>
        </div>
    </div>
</div>

@endsection