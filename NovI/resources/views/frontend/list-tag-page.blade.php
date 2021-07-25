@extends('frontend.layouts/list-template-page')
@section('header')
    Tag List - Novel Inspiration
@endsection
@section('content')
<div class="section text-center">
    <h2 class="title">Tag List</h2>

    <div class="section text-left">
        @foreach ($ftag as $item)
        <div class="col-md-3">
            <a href="{{ route('tdesc.show', $item->id) }}">{{$item->tag_name}}</a>
        </div>
        @endforeach

    </div>


    </div>

</div>
@endsection
