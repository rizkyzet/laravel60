@extends('layout/master')

@section('title','Create')
@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Create new Article</h1>
        <hr>
        <form action="{{route('articles.create')}}" method="POST">
            @include('articles/partials/form',[
            'article'=>new \App\Article,
            'submit'=>'Create'
            ])
        </form>
    </div>
</div>
@endsection