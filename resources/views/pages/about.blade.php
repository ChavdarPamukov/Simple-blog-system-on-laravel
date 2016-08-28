@extends('main')

@section('title', '| About')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">About {{ $fullName }}</div>
                <p>Blog System - project for course &rdquo;Software Technologies&bdquo; in the <a href="https://softuni.bg/">SoftUni.</a></p>
            </div>
        </div>
    </div>
</div>
@endsection