<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A Laravel PHP framework 4.2 sample try out with login">
    <meta name="author" content="">


    <title>@yield('title')</title>
    @section('head')
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	@show
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Project name</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="{{ URL::to('/login')}}">Login</a></li>
            <li><a href="{{ URL::to('/securehome')}}">Secure page</a></li>
            <li><a href="{{ URL::to('/logout')}}">Logout</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Laravel stuff!</h1>
        <p class="lead">This is made using layouts and child pages to make it more fexible and easy.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>
	  <div>
	  	@yield('body')
	  </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>
