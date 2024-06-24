@extends('layout')

@section('title')
Home
@endsection

@section('content1')
<img src="{{asset('images/10.jpeg')}}" height="600rem" alt="">
@endsection

@section('content2')
@foreach ($categories as $item)
<div class="row justify-content-center p-2">
    <div class="col-md-2">
        <img src="{{asset('images/2.jpeg')}}" style="height: 8rem" alt="">
    </div>
    <div class="col-md-8">

        <h3>{{$item->category}}</h3>

        <H6> Date| Author</H6>
        <h5>Article</h5>
        <a class="btn btn-dark text-light" href="#" role="button">read more</a>

    </div>
</div>
@endforeach

@endsection