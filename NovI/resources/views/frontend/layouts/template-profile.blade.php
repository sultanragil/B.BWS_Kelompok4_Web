<!doctype html>
<html lang="en">
<head>
	@include('frontend/layouts/header')
</head>

<body class="profile-page">
	<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	@include('frontend/layouts/navbar')
    	</div>
    </nav>


	<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/examples/city.jpg') }}');"></div>

	<div class="main main-raised">
        <div class="profile-content">
            <div class="container">

                {{-- <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            @if(Auth::user()->foto)
                            <div class="avatar">
                                <img src="{{ Auth::user()->foto}}" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            @else
                            <div class="avatar">
                                <img src="{{ asset('frontend/assets/img/faces/avatar.jpg') }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            @endif
                            <div class="name">
                                <h3 class="title">{{ Auth::user()->name }}</h3>
                                <br>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 follow">
                        <button class="btn btn-fab btn-primary" rel="tooltip" title="Add New Story">
                            <i class="material-icons">add</i>
                        </button>
                        <a href="{{route('profu.edit',Auth::user()->id)}}">
                            <button class="btn btn-fab btn-primary" rel="tooltip" title="Edit Profile">
                                <i class="material-icons">build</i>
                            </button>
                        </a>
                    </div>
                </div>


                <div class="description text-center">
                    <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                </div> --}}

                @yield('content')
            </div>
        </div>
    </div>

    @include('frontend/layouts/footer')

</body>
@include('frontend/layouts/js')
</html>
