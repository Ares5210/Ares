<!DOCTYPE html>
<html>
  <head>
    <title>Ares App - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
		<div class="col-md-offset-1 col-md-10">
      @include('shared._message')
			@yield('content')
			<div class="col-md-12">
				@include('layouts._footer')
			</div>      	
		</div>
    </div>

    <script src="/js/app.js"></script>
  </body>
</html>