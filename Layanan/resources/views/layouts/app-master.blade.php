<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Homepage Layanan Koperasi Mahasiswa</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .homepage-btn-custom {
        font-size: 100px;
        padding: 20px 24px;
        margin-right: 20px;
        margin-bottom: 10px;
        line-height: 1;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }

      .homepage-btn {
        font-size: 24px;
        padding: 30px 70px;
        margin-right: 10px; 
        margin-bottom: 10px;
      }
      .homepage-btn-custom a {
        flex: 1;
        margin: 10px;
      }

      .homepage-btn-row {
          
          font-size: 100px;
          padding: 20px 24px;
          margin-right: 20px;
          margin-bottom: 10px;
          line-height: 1;
          display: flex;
          justify-content: center;
      }

        .homepage-btn-row a {
          margin: 10px;
          flex: 1;

      }

      .homepage-btn-row .btn-custom:not(:last-child) {
                            margin-right: 50px;
      }

      .homepage-btn-custom .btn-custom:not(:last-child) {
                            margin-right: 50px;
      }
      
      .menu-btn-custom {
        font-size: 100px;
        padding: 20px 100px;
        margin-right: 20px;
        margin-bottom: 10px;
        line-height: 1;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }

      .menu-btn {
        font-size: 30px;
        padding: 60px 100px;
        margin-right: 10px; 
        margin-bottom: 10px;
      }
      .menu-btn-custom a {
        flex: 1;
        margin: 10px;
      }


      .navbar-brand {
        color: #fff;
        font-size: 26px;
        font-weight: 600;
        margin-left: 10px;
      }
      .sidenav {
          height: 100%; /* 100% Full-height */
          width: 0; /* 0 width - change this with JavaScript */
          position: fixed; /* Stay in place */
          z-index: 1; /* Stay on top */
          top: 0;
          left: 0;
          background-color: #111; /* Black*/
          overflow-x: hidden; /* Disable horizontal scroll */
          padding-top: 60px; /* Place content 60px from the top */
          transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
      }
      /* The navigation menu links */
      .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 20px;
          color: #818181;
          display: block;
          transition: 0.3s
      }
      /* When you mouse over the navigation links, change their color */
      .sidenav a:hover, .offcanvas a:focus{
          color: #f1f1f1;
      }
      /* Position and style the close button (top right corner) */
      .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body>
    
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
      
  </body>
</html>