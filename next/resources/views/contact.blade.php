@extends('loyauts.loyauts')
@section('title')
    Contact
@endsection
@section('content')
    <h1>Contact page</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('contact-button')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="name">Write your name</label>
        <input type="text" name="name" placeholder="Write name" class="form-control" id="name">
    </div>

        <div class="form-group">
            <label for="subject">Write your subject</label>
            <input type="text" name="subject" placeholder="Write subject" class="form-control" id="subject">
        </div>

    <div class="form-group">
        <label for="email">Write your email</label>
        <input type="text" name="email" placeholder="Write email" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="message">Write your message</label>
        <textarea name="message" id="message" class="form-control" placeholder="write please"></textarea>
    </div>

        <button type="submit" class="btn btn-success">Send</button>
        </form>
@endsection
