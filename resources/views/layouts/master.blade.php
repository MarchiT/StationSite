<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Station Site</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="/css/blog.css" rel="stylesheet"> -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    
    <div id="app">
    
    <header>
      @include('layouts.nav')

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Custom PC Builds</h1>
          <p class="lead blog-description">Station Site is the place to post and look at clear photographs of desktop battlestation setups.</p>
          <hr>
        </div>
      </div>
    </header>

    <main role="main" class="container">
        <div class="row">
            @yield ('content')

            @include ('layouts.sidebar')
        </div>
    </main>

    @include ('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  
    </div>
    
  </body>
</html>
