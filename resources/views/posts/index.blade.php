@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Posts <small>({{ $posts->count() }})</small>
            </div>
            <div class="card-body">
                <form action="{{ url('search') }}" method="get">
                    <div class="form-group">
                        <input
                            type="text"
                            name="q"
                            class="form-control"
                            placeholder="Search..."
                            value="{{ request('q') }}"
                        />
                    </div>
                </form>
                @forelse ($posts as $post)
                    <div class="mb-3">
                        <h2>{{ $post->title }}</h2>

                        <p class="m-0">{{ $post->body }}</body>

                        <div>
                            @foreach ($post->tags as $tag)
                                <span class="badge badge-light">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p>No posts found</p>
                @endforelse
            </div>
        </div>
    </div>
@stop