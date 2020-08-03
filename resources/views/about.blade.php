@extends('layout/main')
@section('title', '.: about me')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">About this...</h1>
                <h2 class="mt-1"> <?php echo $p1; ?> </h2>
                <h3 class="mt-1"> {{ $p1 }} </h3>
            </div>
        </div>
    </div>
@endsection
