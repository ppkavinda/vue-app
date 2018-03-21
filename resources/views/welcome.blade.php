<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link rel="stylesheet" href="css/app.css"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    </head>
    <body>

        <div class="content">

          <div id="app">

            <nav-bar></nav-bar>

            <div class="jumbotron">
                <div class="container">
                  <h1 class="display-4">My Blog</h1>
                  <p class="lead">Welcome to the most awesome blogging site in the Whole UNIVERS!.</p>
                  <hr class="my-4">
                </div>
            </div>

            <div class="container">
                <router-view></router-view>
            </div>
            
          </div>
          
        </div>

        <script src="js/manifest.js"></script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
