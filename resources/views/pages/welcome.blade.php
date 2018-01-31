@extends('main')
@section('title', '| Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog</h1>
                <p class="lead">Thank you for visiting. This is my test website with Laravel. Please read my polular post!  </p>
                <p><a href="#" class="btn btn-primary btn-lg" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- end of .row  -->

    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)



                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 200 ? "..." : "" }}</p>
                    {{--<a href="{{ route('pages.single', $post->id) }}" class="btn btn-primary">Read More</a>--}}
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
            @endforeach
        </div>

        <div class="col-md3 col-md-offset-1">
            <h2>Sidebar</h2>

        </div>
    </div>
@endsection


