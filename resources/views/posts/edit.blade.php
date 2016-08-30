@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')

    {!! Html::style('ccs/parsley.css') !!}

@endsection

@section('content')
    <main class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <article class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ['class' => 'form-control']) }}

            {{ Form::label('category_id', 'Category:', array('class' =>'form-spacing-top')) }}
            {{ Form::select('category_id', $cat, null, ['class' =>'form-control']) }}

            {{ Form::label('body', 'Post Content:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </article>

        <aside class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label><i>Created At:</i></label>
                    <p>{{ date('j M Y, H:i', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label><i>Last Update:</i></label>
                    <p>{{ date('j M Y, H:i', strtotime($post->updated_at)) }}</p>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>

                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </aside>
        {!! Form::close() !!}
    </main>
@endsection