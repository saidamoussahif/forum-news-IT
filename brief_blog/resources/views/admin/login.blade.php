<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5 w-50 " >
        <div class="card-header">Login</div>
        <div class="card-body">
            @if($errors)
            @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
            @endforeach
            @endif

            @if(Session::has('error'))
            <p class="text-danger">{{session('error')}}</p>
            @endif

          <form method="post">
              @csrf
            <div class="form-group">
              <div class="form-label-group mb-2">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" />
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" />
              </div>
            </div>
            <input type="submit" class="btn btn-primary m-4 btn-block" style="width: 70% ;" />
          </form>
        </div>
      </div>
    </div>
  
  




</html>