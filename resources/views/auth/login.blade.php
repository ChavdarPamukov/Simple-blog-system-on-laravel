@extends('main')

@section('title', '| Login')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Login</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
                {{ Form::label('email', 'Email:', ['class' => 'form-spacing-top']) }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}

                {{ Form::label('password', 'Password:', ['class' => 'form-spacing-top']) }}
                {{ Form::password('password', ['class' => 'form-control']) }}

                {{ Form::label('remember', 'Remember Me:', ['class' => 'form-spacing-top']) }}
                {{ Form::checkbox('remember') }}

                {{ Form::submit('Login', ['class' => 'btn btn-success btn-lb btn-block btn-h1-spacing']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection