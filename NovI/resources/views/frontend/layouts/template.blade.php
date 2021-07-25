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


    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('frontend/assets/img/bg8.jpg') }}');">
        <div class="container">
            <div class="row">
				<div class="col-md-6">
					<h1 class="title">Your Story Starts With Us.</h1>
                    <h4>Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                    <br />
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
						<i class="fa fa-play"></i> Watch video
					</a>
				</div>
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
