@inject('player', 'Learner\Services\Videos\Video')
@inject('category', 'Learner\Services\Layouts\Category')

@extends('layouts.master')

@section('description')
{{ $video->description }}
@stop

@section('title')
{{ $video->title }}
@stop

@section('jumbotron')
<section class="page-jumbotron video-page-jumbotron">
    <div class="container">
        <h1>{{ $video->title }}</h1>
    </div>
</section>
@stop

@section('content')
<section class="series series--show">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-offset-0 col-md-9 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

            </div>

            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                @include('partials.categoryList')
            </div>
        </div>
    </div>
</section>
@stop