@extends('layouts.app')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div clas="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact site owner.</p></div>

        <div class="card-body">
            <form action="{{route('contact.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Name ">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection