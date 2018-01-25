@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="row">
        <col-md-12>
            <h1>
                Contact Me
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for="" name="email">Email:</label>
                        <input id="email" type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="" name="subject">Subject:</label>
                        <input id="subject" type="text" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="" name="message">Message:</label>
                        <textarea id="message" type="text" name="message" class="form-control">Type your message here...</textarea>
                    </div>
                    <input type="submit" value="Send Message" class="btn btn-success">

                </form>
            </h1>
        </col-md-12>
    </div>
@endsection

