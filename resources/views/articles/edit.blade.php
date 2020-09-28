@extends('layout/master')

@section('title','Create')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>
                    EDIT : {{$article->title}}
                </strong>
            </div>
            <div class="card-body">
                <form action="{{route('articles.update',$article)}}" method="POST">
                    @include('articles.partials.form',[
                    'submit'=>'Edit'
                    ])
                </form>

            </div>
        </div>
    </div>
</div>
@endsection