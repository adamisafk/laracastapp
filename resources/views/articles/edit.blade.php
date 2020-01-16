@extends('layout')
@include('partials.menu')

@section('content')
    @yield('menu')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="title">
                <h2>Update article</h2>
            </div>
            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$article->title}}">
                </div>
                <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <input type="text" class="form-control" id="excerpt" placeholder="Enter excerpt" name="excerpt" value="{{$article->excerpt}}">
                </div>
                <div class="form-group">
                    <label for="body">body</label>
                    <input type="text" class="form-control" id="body" placeholder="Enter body" name="body" value="{{$article->body}}">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection
