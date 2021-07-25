
<div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <!-- your logo here -->
      <div class="logo">
        <a href="{{ route('index') }}" class="simple-text logo-mini">
          NovI
        </a>
        <a href="{{ route('index') }}" class="simple-text logo-normal">
          Novel Inspiration
        </a>
      </div>
      <!-- your sidebar here -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('index') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('creator.index') }}">
              <i class="material-icons">content_paste</i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('title.index') }}">
              <i class="material-icons">library_books</i>
              <p>Title</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('chapter.index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Chapter</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('genre.index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Genre</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('tag.index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Tag</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('titleg.index') }}">
              <i class="material-icons">library_books</i>
              <p>Title-Genre</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('titlet.index') }}">
              <i class="material-icons">library_books</i>
              <p>Title-Tag</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Admin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('carousel.index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Carousel</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
