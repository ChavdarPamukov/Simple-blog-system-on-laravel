@extends('main')

@section('title', '| View Post')

@section('content')
    <main class="row">
        <article class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </article>

        <aside class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt><i>Create At:</i></dt>
                    <dd>{{ date('j M Y, H:i', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt><i>Last Update:</i></dt>
                    <dd>{{ date('j M Y, H:i', strtotime($post->updated_at)) }}</dd>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>

                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </aside>
    </main>
@endsection