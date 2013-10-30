<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Test</title>
  <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">
  <style>
  .box{
    width:500px;
    margin: 40px auto;
    background-color: #eee;
    padding: 80px; 
  }
  </style>
</head>
<body>
  <header class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Laravel Test</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
          @section("nav")
          <li>
          @if (Auth::check())
            <a href="{{ URL::route('logout') }}">Logout</a>
          @else
            <a href="{{ URL::route('login') }}">Login</a>
          @endif
          </li>
          @show
        </ul>
      </nav>
    </div>
  </header>

  <div id="wrapper">
    <div class="container">
      @yield('content')
    </div>
  </div>

</body>
</html>