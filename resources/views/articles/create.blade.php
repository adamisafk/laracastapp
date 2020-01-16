@extends('layout')
@include('partials.menu')

@section('content')
    @yield('menu')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="title">
                <h2>Create a new article</h2>
            </div>

            <form method="POST" action="/articles">
                @csrf
                <div class="form-group" style="padding-bottom: 20px">
                    @if ($errors->has('title'))
                        <p>{{$errors->first('title')}}</p>
                    @endif
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title')}}">

                </div>
                <div class="form-group" style="padding-bottom: 20px">
                    @if ($errors->has('excerpt'))
                        <p>{{$errors->first('excerpt')}}</p>
                    @endif
                    <input type="text" class="form-control" id="excerpt" placeholder="Enter excerpt" name="excerpt" value="{{old('excerpt')}}">
                </div>
                <div class="form-group" style="padding-bottom: 20px">
                    @if ($errors->has('body'))
                        <p>{{$errors->first('body')}}</p>
                    @endif
                    <div>
                        <textarea type="text" class="form-control" id="body" placeholder="Enter body" name="body">{{old('body')}}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection
