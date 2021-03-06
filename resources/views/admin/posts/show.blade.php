@extends('layouts.dashboard')

@section('content')
    <h1>{{ $post->title }}</h1>

    @if ($post->cover)
        <img src="{{ asset('storage/' . $post->cover) }}" alt="">
    @endif
    
    <p>Slug: {{$post->slug}}</p>
    <p>Category: {{$category ? $category->name : 'No Category'}}</p>
    <p><strong>Tags:</strong>
        
        @forelse ($post->tags as $tag)
            {{$tag->name}} {{$loop->last ? '' : ', '}}
        @empty
            nessun tag
        @endforelse

    </p>
    <p>{{$post->content}}</p>

    <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modify</a>

    <form class="d-inline-block" action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" onClick="return confirm('Confirm delete');" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>


@endsection