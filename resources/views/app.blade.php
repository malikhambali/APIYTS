<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>
    YTS API
  </title>
    <link rel="shortcut icon" href="{{ url('img/movie.jpg') }}"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link href="{{ url('style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  @yield('head')
</head>
<body>
  <nav class="indigo darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">YTS API</a>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  @yield('content')

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">



        </div>


      </div>
    </div>
    <div class="footer-copyright">

      <div class="container">
      Created by Malik Hambali
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script type="text/javascript">
    (function($){
      $(function(){
        $('.button-collapse').sideNav();
      });
    })(jQuery);
  </script>

  @yield('script')

  </body>
</html>
