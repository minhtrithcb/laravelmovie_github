<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Raven</title>
    <base href="{{asset('/')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="icon" href="img/logo2.png" type="image" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css" />
     <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/detail.css" />
    <link rel="stylesheet" href="css/movie.css" />
    <link rel="stylesheet" href="css/showall.css" />
</head>
<body>

    <!-- === opening header === -->
    @include('inc.header')
    <!-- === close header === -->

    <!-- === opening content === -->
    @yield('content')
    <!-- === close content === -->
   
    <!-- -----opening footer -----  -->
    @include('inc.footer')
    <!-- -----close footer -----  -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script src="js/app.js"></script> --}}
{{-- <script src="js/detail.js"></script> --}}
{{-- <script src="js/showall.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
$(document).ready(function () {
    
    let eto = true;
    $(".btnswich").click(function () { 
        if (eto == true) {
            $(".logincontent").css({left: "0%", opacity: "0", zIndex: 1});
            $(".signupcontent").css({opacity: "1", zIndex: 2, width: "45%"});
            $(".overlay-content2").css({opacity: "1"});
            $(".overlay-content1").css({opacity: "0"});
            $("#imgoverlay").css({left: "45%", width: "55%"});
            $("#imgoverlay img").attr("src", "../img/ani2.gif");
            $("#btnswich").text("Login");
            eto = false;
        } else {
            $(".logincontent").css({left: "60%", opacity: "1", zIndex: 2});
            $(".signupcontent").css({opacity: "0" ,zIndex: 1, width: "40%"});
            $(".overlay-content2").css({opacity: "0"});
            $(".overlay-content1").css({opacity: "1"});
            $("#imgoverlay").css({left: "0%", width: "60%"});
            $("#imgoverlay img").attr("src", "../img/ani1.gif");
            $("#btnswich").text("Sign in");
            eto = true;
        }
    });
});
</script>
</html>