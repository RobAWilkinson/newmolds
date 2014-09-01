<html>
  <head>
  {{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
  {{ HTML::style('packages/bootstrap/css/bootstrap-theme.css') }}
  {{ HTML::script('js/jquery-1.11.1.min.js') }}
  {{ HTML::script('packages/bootstrap/js/bootstrap.js') }}
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
