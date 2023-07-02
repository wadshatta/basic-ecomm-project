<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecomm Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  </head>
  <body>

    {{View::make('header')}}

    @yield('content')
    {{View::make('footer')}}
    <script
			  src="https://code.jquery.com/jquery-3.7.0.min.js"
			  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
			  crossorigin="anonymous"></script>
  
</body>
<style>
    .custom-login{
        height: 500px;
    }
    .slider-img{
      height: 400px !important;
    }
    .custom-product{
      height: 600px;
    }
    .trending-img{
      height: 100px;
    }
    .trending-item{
      float: left;
      width: 20%;
    }
    .trending-wrapper{
      margin: 30px;
    }
    .detail-img{
      height: 300px;
    }
</style>
</html>