@extends('main')

@section('title', '| Homepage')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
        </div>
    </div>
</div>
<div class="row">
    <article class="col-md-8">
        <h2>Recent Posts</h2>
        @foreach($posts as $post)

            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                <a class="btn btn-primary" href="{{ route('blog.single', $post->slug) }}">Read More</a>
            </div>

            <hr>
        @endforeach
    </article>

    <aside class="col-md-3 col-md-offset-1">
        <h2>Tags</h2>
        @foreach($tags as $tag)
                <p></p><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></p>
        @endforeach
    </aside>
</div>
@endsection