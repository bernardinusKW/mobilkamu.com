<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title',!empty($title) ? $title : '')</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">        
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">        
        <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}">        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">        
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    </head>
    <body class="hold-transition sidebar-mini layout-navbar-fixed">        
        <div class="wrapper">            
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>      
                </ul>                  
            </nav>            