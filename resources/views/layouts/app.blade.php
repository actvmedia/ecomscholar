<html>
    <head>
        <title>EcomScholar - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    </head>
    <body>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="/img/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @if (Auth::check())
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/home">Dashboard</a>
                    </li>

                    <?php if(Auth::user()->user_type == 2) { ?>
                    <!-- Admin -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/courses">Courses</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/videos">Videos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/users">Users</a>
                      </div>
                    </li>
                    <!-- -->
                    <?php } ?>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php
                        $courses = DB::table('courses')->get();
                        $courseCount = count($courses);
                        $i = 0;
                        foreach($courses as $course):
                        $i++;
                      ?>
                          <a class="dropdown-item" href="/courses/view/<?php echo $course->id; ?>"><?php echo $course->name; ?></a>
                          <?php if ($i != $courseCount): ?>
                            <div class="dropdown-divider"></div>
                          <?php endif; ?>
                      <?php endforeach; ?>
                      </div>
                    </li>

                    <!--<li class="nav-item">
                      <a class="nav-link" href="/resources">Resources</a>
                    </li>-->
                    <li class="nav-item dropdown login-item">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/account">Account Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Logout</a>
                      </div>
                    </li>
                  </ul>
              @else
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/mentorship">Mentorship</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/results">Results</a>
                </li>
                <li class="nav-item login-item">
                  <a class="nav-link" href="/login">Login</a>
                </li>
              </ul>
            @endif
            </div>
        </nav>
      </div>

        <!-- Page content -->
        @yield('content')
        <!-- -->

        @if (!Auth::check())
      <div class="page-footer">
          <div class="container">
              <div class="row">
                    <div class="col-md-8">
                      <ul class="footer-links">
                          <li><a href="/about">About Us</a></li>
                          <li><a href="/mentorship">Mentorship</a></li>
                          <li><a href="/results">Results</a></li>
                          <li><a href="#">Terms</a></li>
                          <li><a href="#">Privacy</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 text-right">
                      <p>&copy; 2020 EcomScholar</p>
                    </div>
              </div>
          </div>
        </div>
        @endif

        <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="{{ asset('js/site.js') }}" type="text/javascript"></script>
    </body>
</html>
