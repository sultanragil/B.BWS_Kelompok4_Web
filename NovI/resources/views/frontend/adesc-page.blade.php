@extends('frontend/layouts.template')

@section('header')
    Author Description - Novel Inspiration
@endsection
@section('content')
<div class="container">
    <div class="about-description text-center">
        <div class="about-team team-1">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="title">Author Description</h2>
                <h5 class="description">This is the page for the detailed particular Author. You can see all of their's story in here!</h5>
            </div>
        </div>
        <div class="about-description text-center">
            <div class="card card-profile card-plain">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="{{ asset('images/'.$user->foto) }}" />
                    </a>
                </div>

                <div class="card-content">
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <!--<h6 class="category text-muted">CEO / Co-Founder</h6>-->

                    <p class="card-description">
                        {{ $user->deskripsi }}
                    </p>
                    <div class="footer">
                        {{ $user->email }}
                    </div>
                </div>
            </div>
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
