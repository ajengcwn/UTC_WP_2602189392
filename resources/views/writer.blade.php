@extends('layout')

@section('title')
Writer
@endsection

@section('content1')
<div class="container-fluid">
    <h2 class="p-5">Our Writer :</h2>
</div>
@endsection

@section('content2')
@foreach ($publishers as $item)
<div class="card" style="width: 18rem;">
    <img src="{{asset('images/4.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
        <p class="card-text"></p>
    </div>
</div>
@endforeach

@endsection