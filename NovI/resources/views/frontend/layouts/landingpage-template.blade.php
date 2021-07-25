<!doctype html>
<html lang="en">
<head>
	@include('frontend/layouts/header')
</head>

<body class="landing-page">
    <nav class="navbar navbar-danger navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	@include('frontend/layouts/navbar')
    	</div>
    </nav>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg1.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <h1 class="title">Carousel 1</h1>
                                    <h4>Short Text 1</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg2.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <h1 class="title">Carousel 2</h1>
                                    <h4>Short Text 2</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('frontend/assets/img/dg3.jpg') }}');">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-5 text-right">
                                    <h1 class="title">Carousel 3</h1>
                                    <h4>Short Text 3</h4>
                                    <br />

                                    <div class="buttons">
                                        <a href="#pablo" class="btn btn-primary btn-lg">
                                            Read More
                                        </a>
                                        <!--<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>-->
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <i class="material-icons">keyboard_arrow_left</i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
    </div>

</div>

	<div class="main main-raised">
		@yield('content')
	</div>

    @include('frontend/layouts/footer')

</body>
	@include('frontend/layouts/js')
</html>
