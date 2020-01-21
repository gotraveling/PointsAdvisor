@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 post-{{ $post->slug }}">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }} - <small>by {{ $post->user->name }}</small>

                        <span class="pull-right">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <p>{!! $post->body !!}</p>
                        {!! $post->add_html !!}
                        <div class="clearfix"></div>
                        <p>&nbsp;</p>
                        <p>
                            <div style="float:left;margin-right: 10px;">Category: </div>@foreach($categories as $column) 
                                <div class="label label-success" style="float:left; margin-right: 3px;">@foreach($column as $c){{ $c->name }}<br>@endforeach</div> 
                            @endforeach
                            <div class="clearfix"></div>
                            <br>
                            Tags:
                            @forelse ($post->tags as $tag)
                                <span class="label label-default">{{ $tag->name }}</span>
                            @empty
                                <span class="label label-danger">No tag found.</span>
                            @endforelse
                        </p>
                    </div>
                </div>

                @includeWhen(Auth::user(), 'frontend._form')

                @include('frontend._comments')

            </div>

        </div>
    </div>
@endsection
