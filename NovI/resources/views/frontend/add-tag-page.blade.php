@extends('frontend/layouts.template')

@section('header')
    Add Genre/Tag - Novel Inspiration
@endsection

@section('content')

<div class="container">
    <form method="POST" action="{{route('addtag.store')}}">
        @csrf
        @method('POST')
        <input type="hidden" name="title_id" value="{{$novel->id}}">
        <div class="col-lg-5 col-md-6 col-sm-3">
            <select class="selectpicker" data-style="btn btn-primary btn-round" name="tag_id" title="Single Select" data-size="7">
                <option disabled selected>Choose Tag</option>
                @foreach ($tag as $item)
                    <option value="{{$item->id}}">{{$item->tag_name}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
