@extends('layout')

@section('title')
Category
@endsection

@section('content1')
<div class="container-fluid">
    <h2 class="p-5">{{$subjects->subject}}</h2>
</div>
@endsection

@section('content2')
@foreach ($subjectall as $item)
<div class="row justify-content-center p-2">
    <div class="col-md-2">
        <img src="{{asset('images/2.jpeg')}}" style="height: 8rem" alt="">
    </div>
    <div class="col-md-8">
        <h3>{{$item->subject}}</h3>
        <H6> | Author</H6>
        <h5>Article</h5>
        <a class="btn btn-dark text-light" href="#" role="button">read more</a>
    </div>
</div>
@endforeach

@endsection