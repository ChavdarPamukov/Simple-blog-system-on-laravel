@extends('main')

@section('title', '| Homepage')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Proba blog</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular postr</a></p>
        </div>
    </div>
</div>
<div class="row">
    <article class="col-md-8">
        <div class="post">
            <h3>Post title</h3>
            <p>Nulla urna urna; vehicula non laoreet vitae, faucibus id est. Nullam elementum justo in magna malesuada,
                a dictum nulla consectetur. Fusce quis quam in lorem ultrices efficitur. Maecenas eu massa....</p>
            <a class="btn btn-primary" href="#">Read More</a>
        </div>
        <div class="post">
            <h3>Post title</h3>
            <p>Nulla urna urna; vehicula non laoreet vitae, faucibus id est. Nullam elementum justo in magna malesuada,
                a dictum nulla consectetur. Fusce quis quam in lorem ultrices efficitur. Maecenas eu massa....</p>
            <a class="btn btn-primary" href="#">Read More</a>
        </div>
        <div class="post">
            <h3>Post title</h3>
            <p>Nulla urna urna; vehicula non laoreet vitae, faucibus id est. Nullam elementum justo in magna malesuada,
                a dictum nulla consectetur. Fusce quis quam in lorem ultrices efficitur. Maecenas eu massa....</p>
            <a class="btn btn-primary" href="#">Read More</a>
        </div>
    </article>

    <aside class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
    </aside>
</div>
@endsection