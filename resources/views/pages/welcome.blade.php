@extends('main')

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
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dolorum ea iusto maiores nam reiciendis repellendus rerum unde voluptatem. Cupiditate dolor id molestias neque, pariatur praesentium quia quos reiciendis voluptas!...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dolorum ea iusto maiores nam reiciendis repellendus rerum unde voluptatem. Cupiditate dolor id molestias neque, pariatur praesentium quia quos reiciendis voluptas!...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dolorum ea iusto maiores nam reiciendis repellendus rerum unde voluptatem. Cupiditate dolor id molestias neque, pariatur praesentium quia quos reiciendis voluptas!...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dolorum ea iusto maiores nam reiciendis repellendus rerum unde voluptatem. Cupiditate dolor id molestias neque, pariatur praesentium quia quos reiciendis voluptas!...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="col-md3 col-md-offset-1">
            <h2>Sidebar</h2>

        </div>
    </div>
@endsection