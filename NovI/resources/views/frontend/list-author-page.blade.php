@extends('frontend.layouts/list-template-page')
@section('header')
    Author List - Novel Inspiration
@endsection
@section('content')
<div class="section text-center">
    <h2 class="title">Author List</h2>

    <div class="team">
        <div class="row">
            @foreach ($author as $item)
            <div class="col-md-6">
                <div class="card card-profile card-plain">
                    <div class="col-md-5">
                        <div class="card-image">
                            <a href="{{ url('adesc/' .$item->id) }}">
                                <img class="img" src="{{ asset('images/'.$item->foto) }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-content">
                            <h4 class="card-title"><a href="{{ url('adesc/' .$item->id) }}">{{$item->name}}</a></h4>
                            <p>{{Str::limit($item->deskripsi,100)}}<p>
                            <!--<h6 class="category text-muted">Number of Work : 6</h6>
                            <h6 class="category text-muted">Views : 100</h6>
                            <h6 class="category text-muted">Likes : 150</h6>
                            <div class="footer">
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        {!! $author->links() !!}
    </div>

</div>
@endsection
