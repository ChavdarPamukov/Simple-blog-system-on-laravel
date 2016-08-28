@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('ccs/parsley.css') !!}

@endsection
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('body', 'Post Content:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lb btn-block btn-h1-spacing')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection