<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Landing Page - Novel Inspiration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/material-kit.css?v=1.2.1') }}" rel="stylesheet"/>
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
                @foreach ($carousel as $item)
                    <div class="item {{$item->id == 1 ? 'active' : '' }}">
                        <div class="page-header header-filter" style="background-image: url('{{ asset('images/'.$item->image) }}');">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <h1 class="title">{{$item->title}}</h1>
                                        <h4>{{$item->text}}</h4>
                                        <br />

                                        <div class="buttons">
                                            <a href="{{ url($item->link) }}" class="btn btn-primary btn-lg">
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
                @endforeach
                <!--<div class="item active">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('images/carousel1.jpg') }}');">

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
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('images/carousel2.jpg') }}');">

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
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="item">
                    <div class="page-header header-filter" style="background-image: url('{{ asset('images/carousel3.jpg') }}');">

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
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
                                            <i class="fa fa-get-pocket"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>-->

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
		<div class="container">
            <div class="section text-center">
                <h2 class="title">Popular Series</h2>

				<div class="features">
						<div class="row">
                            @foreach ($popular->take(3) as $item)
                            <div class="col-md-6 col-lg-4">
								<div class="rotating-card-container">
									<div class="card card-rotate card-background">
										<div class="front front-background" style="background-image: url('{{ asset('images/'.$item->cover)  }}');">
											<div class="card-content">
												<h6 class="category text-info">Popular Series</h6>
												<a href="#pablo">
													<h3 class="card-title">{{$item->name}}</h3>
												</a>
												<p class="card-description">
													{{Str::limit($item->sinopsis,50)}}
												</p>
											</div>
										</div>

										<div class="back back-background" style="background-image: url('{{ asset('images/'.$item->cover)  }}');">
											<div class="card-content">
												<h5 class="card-title">
													Read More
												</h5>
												<p class="card-description">Click Button to Series Page.</p>
												<div class="footer text-center">
													<a href="{{ route('ftitle.show',$item->id) }}" class="btn btn-rose btn-round">
														<i class="material-icons">subject</i> Read
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
	    					</div>
                            @endforeach



					</div>
				</div>

            </div>

	    	<div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Latest Update</h2>
                        <h5 class="description">This is where all new chapter listed. Click button to read more !</h5>
                    </div>
                </div>

				<div class="features">
					<div class="row">
                        @foreach ($latest as $item)
                        <div class="col-md-4">
                            <div class="card card-blog card-plain">
                                <div class="card-image">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('images/'.$item->cover) }}" style="width:300px;height:400px" />
                                    </a>
                                </div>

                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="{{ url('fchapter/' . $item->chapterId) }}">{{ $item->chapter_title}}</a>
                                    </h4>
                                    <p class="card-description">
                                        {{Str::limit(strip_tags($item->chapter_text,40))}}
                                    </p>
                                    <div class="footer">
                                        <div class="author">
                                            <a href="{{ url('ftitle/' . $item->titleId) }}">
                                               <span>{{$item->name}}</span>
                                            </a>
                                        </div>
                                       <div class="stats">
                                            <i class="material-icons">schedule</i> {{$item->created_at}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach

	                </div>
                    {!! $latest->links() !!}
				</div>
            </div>


        </div>
	</div>

    @include('frontend/layouts/footer')

</body>
	@include('frontend/layouts/js')
</html>
