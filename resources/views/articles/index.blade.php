@extends('layout.master')

@section('title','All Article')

@section('content')
<div class="row">
    <?php $count = 1;
    $skipped = ($articles->currentPage() * $articles->perPage()) - $articles->perPage(); ?>
    @foreach ($articles as $article)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <p>
                    <strong>{{ $loop->iteration + $skipped }}. </strong>
                    <a href="{{route('articles.show', $article)}}"> {{$article->title}}</a>

                </p>
                <p>{{$article->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{$articles->links()}}



@endsection