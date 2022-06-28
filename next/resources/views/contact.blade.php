@extends('loyauts.loyauts')
@section('title')
    Contact
@endsection
@section('content')
    <h1>Contact page</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="name">Write your name</label>
        <input type="text" name="name" placeholder="Write name" class="form-control" id="name">
    </div>

    <div class="form-group">
        <label for="email">Write your email</label>
        <input type="text" name="email" placeholder="Write email" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="message">Write your message</label>
        <textarea name="message" id="message" class="form-control"></textarea>
    </div>

        <button type="submit" class="btn btn-success">Send</button>
        </form>
@endsection
