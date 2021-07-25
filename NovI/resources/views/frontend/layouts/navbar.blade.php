<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ route('lpage.index') }}">NovI</a>
</div>

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">view_day</i> Novel
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">
                <li>
                    <a href="{{ route('ltitle.index') }}">
                        <i class="material-icons">dns</i> Novel List
                    </a>
                </li>
                <li>
                    <a href="{{ route('lauth.index') }}">
                        <i class="material-icons">people</i> Author List
                    </a>
                </li>
                <li>
                    <a href="{{ route('gdesc.index') }}">
                        <i class="material-icons">assignment</i> Genre List
                    </a>
                </li>
                <li>
                    <a href="{{ route('ltag.index') }}">
                        <i class="material-icons">chat</i> Tag List
                    </a>
                </li>
                <!--<li>
                    <a href="{{ route('sfinder.index') }}">
                        <i class="material-icons">art_track</i> Series Finder
                    </a>
                </li>-->


            </ul>
        </li>

        @if(Auth::check())
        <li class="dropdown activate">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">people</i> Profile
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">

                <li>
                    <a href="{{ route('profu.index')}}">
                        <i class="material-icons">account_circle</i> My Profile
                    </a>
                </li>
                <!--<li>
                    <a href="{{ route('bmark.index') }}">
                        <i class="material-icons">view_quilt</i> Bookmark
                    </a>
                </li>-->
            </ul>
        </li>
        <li class="activate dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">build</i> Options
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">
                <li>
                    {{-- <a href="{{ route('logout') }}">
                        <i class="material-icons">fingerprint</i> Logout
                    </a> --}}

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">fingerprint</i>{{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
        @else
        <li class="activate dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">build</i> Options
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-with-icons">
                <li>
                    <a href="{{ url('login') }}">
                        <i class="material-icons">fingerprint</i> Login Page
                    </a>
                </li>
                <li>
                    <a href="{{ url('register') }}">
                        <i class="material-icons">person_add</i> Register Page
                    </a>
                </li>
            </ul>
        </li>
        @endif

        <li>
            <a href="https://drive.google.com/drive/folders/1ZvueQ9p5q-ORQPy8MGy73a6OOPi5QJLI?usp=sharing" target="_blank" class="btn btn-white btn-simple">
                <i class="material-icons">unarchive</i> Download
            </a>
        </li>
        <form class="navbar-form navbar-right" method="GET" role="search" action="{{url ('query')}}">
            <div class="form-group form-white">
              <input type="text" class="form-control" placeholder="Search" name="search" required>
            </div>
            <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini"><i class="material-icons">search</i></button>
        </form>
    </ul>

</div>
