@extends('layout.master')
@section('content')
@component('layout.component.title')
show page
@endcomponent
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <th>{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td>{{$article->content}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection