
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>PhotoShow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
  </head>
  <body>
    @include('albums.navbar')
   <div class="container">
    <div class="row">
      <div class="col-md-13 col-lg-13">

        @yield('content')
      </div>
    </div>
    </div>

<footer id="footer" class="text-center">
  <p>Copyright 2019 &copy; Rony</p>
</footer>
</body>
</html>
