@extends('layout')
@include('partials.menu')

@section('content')
    @yield('menu')

    <div id="wrapper">
        <div id="page" class="container">
            <ul class="style1" style="width: 100%; text-align: center;">
                @foreach($articles as $article)
                    <a href="#">
                        <li>
                            <h3>{{$article->title}}</h3>
                            <p>{{$article->excerpt}}</p>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
