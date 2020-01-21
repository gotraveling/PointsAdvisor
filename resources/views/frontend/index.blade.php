@extends('layouts.app')

@section('content')
    <div class="container">

        @include('frontend._search')

        <div class="row">

            <div class="col-md-12">
                @isset ($category)
                <p><b>Category : {{ $category }}</b></p>
                @endisset 
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $post->title }} - <small>by {{ $post->user->name }}</small>

                            <span class="pull-right">
                                {{ $post->created_at->toDayDateTimeString() }}
                            </span>
                        </div>

                        <div class="panel-body">
                            <p>{!! str_limit(trim(strip_tags($post->body, "<b><strong>")), 200) !!}</p>
                            <p>
                                Tags:
                                @forelse ($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @empty
                                    <span class="label label-danger">No tag found.</span>
                                @endforelse
                            </p>
                            <p>
                                <a 
                                @if($post->slug)
                                href="{{ url("/posts/{$post->slug}") }}"
                                @else
                                href="{{ url("/posts/{$post->id}") }}"
                                @endif 
                                class="btn btn-sm btn-primary">See more</a>
                                
                                @foreach ($post->categories as $c)
                                <a href="{{ url("/categories/{$c->name}") }}" class="btn btn-sm btn-success">{{ $c->name }}</a>
                                @endforeach
                                <span class="btn btn-sm btn-info">Comments <span class="badge">{{ $post->comments_count }}</span></span>
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
                @endforelse

                <div align="center">
                    {!! $posts->appends(['search' => request()->get('search')])->links() !!}
                </div>

            </div>

        </div>
    </div>
@endsection
