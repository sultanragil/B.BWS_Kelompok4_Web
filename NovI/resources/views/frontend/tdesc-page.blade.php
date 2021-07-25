@extends('frontend/layouts.template')

@section('header')
    Tag Description - Novel Inspiration
@endsection
@section('content')
<div class="container">
    <div class="section text-left">
        <div class="col-md-8">
            <h3>{{$tdesc->tag_name}}</h3>
            <br>
            <p>
                {{$tdesc->tag_desc}}
            </p>
            <br>
        </div>
    </div>
    @foreach ($list as $t)
 <div class="card card-plain card-blog">
    <div class="row">
        <div class="col-md-2">
            <div class="card-image">
                <img class="img img-raised" src="{{ asset('images/'.$t->cover)  }}" width="100px" height="300px"/>
            </div>
        </div>
        <div class="col-md-6">
            <!--<h6 class="category text-info">Enterprise</h6>-->
            <h4 class="card-title">
                <a href="{{ url('ftitle/' . $t->id) }}">{{$t->name}}</a>
            </h4>
            <p class="card-description">
                {{Str::limit($t->sinopsis,400)}} <a href="{{ url('ftitle/' . $t->id) }}"> Read More </a>
            </p>

        </div>
    </div>
</div>
 @endforeach
</div>
@endsection
