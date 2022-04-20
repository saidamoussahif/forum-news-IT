<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/dash.css') }}" rel="stylesheet">
    <title>sideBar</title>
</head>

<body> 
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <!-- <ion-icon name="train-outline" class="nav__toggle" id="nav-toggle"></ion-icon> -->
                    <ion-icon name="receipt-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">Talking about</a>
                </div>
                <div class="nav__list">
                    <a href="{{ \URL::to('/dashboard') }}" class="nav__link">
                        <ion-icon name="list-outline"></ion-icon>
                        <span class="nav__name">Categories</span>
                    </a>
                    <a href="{{ \URL::to('/post') }}" class="nav__link">
                        <ion-icon name="layers-outline"></ion-icon>
                        <span class="nav__name">Posts</span>
                    </a>

                    <a href="{{ \URL::to('/comment') }}" class="nav__link">
                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        <span class="nav__name">Comments</span>
                    </a>


                    <!-- <a href="{{ \URL::to('/user/index') }}" class="nav__link">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="nav__name">Users</span>
                    </a> -->
                </div>
            </div>

            <a href="{{ \URL::to('/index') }}" class="nav__link">
                <ion-icon name="power-outline"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
   
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="color:black;">
    © 2022 Copyright:
    <a class="text-dark" href="https://Talking-about.com/">Talking about.com</a>
  </div>
  <!-- Copyright -->
</footer>


    <!-- Scripts -->
    <script src="{{ asset('js/dash.js') }}"></script>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>