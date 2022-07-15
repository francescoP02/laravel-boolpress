@extends('layouts.dashboard')

@section('content')

    <h1>Your Posts' List</h1>

    <div class="row row-cols-3">

        @foreach ($posts as $post)

            {{-- Single post --}}
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    @if ($post->cover)
                        <img class="card-img-top" src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Read post</a>
                    </div>
                </div>
            </div>
            {{-- /Single post --}}
            
        @endforeach

    </div>

@endsection
