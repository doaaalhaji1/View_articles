<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>

        @foreach ($articles as $article)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">title:{{ $article->title }}</h5>
                    <p class="card-text">content :{{ $article->content }}</p>

                    <p class="card-text"><small class="text-muted">Published at: {{ $article->published_at }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
