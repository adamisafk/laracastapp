@extends('layout')
@include('partials.menu')

@section('content')
    @yield('menu')

    <div id="wrapper">
        <div id="page" class="container">
                <a href="/articles/create" class="btn btn-primary">Create New Article</a>

            <ul class="style1" style="width: 100%; text-align: center;">
                @foreach($articles as $article)
                    <a href="#">
                        <li>
                            <a href="{{route('articles.show', $article)}}"><h3>{{$article->title}}</h3></a>
                            <a href="{{route('articles.show', $article)}}"><p>{{$article->excerpt}}</p></a>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
