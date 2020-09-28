@extends('layout.master')

@section('title','Home')

@section('content')
<div class="row">
    @foreach ($articles as $article)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <p>
                    <strong>{{$loop->iteration}}. </strong>
                    <a href="{{route('articles.show', $article)}}"> {{$article->title}}</a>

                </p>
                <p>{{$article->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<a href="{{route('articles.index')}}" class="btn btn-danger">View more &raquo;</a>



@endsection