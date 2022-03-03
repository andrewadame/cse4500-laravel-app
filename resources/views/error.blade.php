@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="D7770E21lx3HOEgGdPRTiEB1ZrEfTxszJP97qtja">

    
    
    
    <title>
                Page not found            </title>

    
    
    
            <link rel="stylesheet" href="https://cse4500-laravel9.herokuapp.com//vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://cse4500-laravel9.herokuapp.com//vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
            
                            
        <link rel="stylesheet" href="https://cse4500-laravel9.herokuapp.com//vendor/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    
    
    
            
    
    
</head>

<body class="sidebar-mini" >

    
        <div class="wrapper">

        
                    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">

    
    <ul class="navbar-nav">
        
        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
                        >
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
        
        
        
            </ul>

    
    <ul class="navbar-nav ml-auto">
        
        
        
        <li class="nav-item">

    
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>

    
    <div class="navbar-search-block">
        <form class="form-inline" action="#" method="get">
            <input type="hidden" name="_token" value="D7770E21lx3HOEgGdPRTiEB1ZrEfTxszJP97qtja">

            <div class="input-group">

                
                <input class="form-control form-control-navbar" type="search"
                                        name="adminlteSearch"
                    placeholder="search"
                    aria-label="search">

                
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
        </form>
    </div>

</li>

<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>


        
        
        
            </ul>

</nav>
        
        
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    
            <a href="https://cse4500-laravel9.herokuapp.com/admin"
            class="brand-link "
    >

    
    <img src="https://cse4500-laravel9.herokuapp.com//vendor/adminlte/dist/img/AdminLTELogo.png"
         alt="AdminLTE"
         class="brand-image img-circle elevation-3"
         style="opacity:.8">

    
    <span class="brand-text font-weight-light ">
        <b>Admin</b>LTE
    </span>

</a>
    
    
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >
                
                <li>

    <div class="form-inline my-2">
        <div class="input-group" data-widget="sidebar-search" data-arrow-sign="&raquo;">

            
            <input class="form-control form-control-sidebar" type="search"
                                placeholder="search"
                aria-label="search">

            
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-fw fa-search"></i>
                </button>
            </div>

        </div>
    </div>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="https://cse4500-laravel9.herokuapp.com/todos"        >

        <i class="far fa-fw fa-list-alt "></i>

        <p>
            To Do&#039;s

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="https://cse4500-laravel9.herokuapp.com/calendar"        >

        <i class="fas fa-fw fa-calendar-alt "></i>

        <p>
            Calendar

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="https://cse4500-laravel9.herokuapp.com/board"        >

        <i class="fas fa-fw fa-columns "></i>

        <p>
            Board

                    </p>

    </a>

</li>

            </ul>
        </nav>
    </div>

</aside>
        
        
                    <div class="content-wrapper ">

    
            <div class="content-header">
            <div class="container-fluid">
                    <h1>Error</h1>
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">
            <div class="error-page">
<h2 class="headline text-warning"> 404</h2>
<div class="error-content">
<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
<p>
 We could not find the page you were looking for.
Meanwhile, you may <a href="/">return to dashboard</a> or try using the search form.
</p>
<form class="search-form">
<div class="input-group">
<input type="text" name="search" class="form-control" placeholder="Search">
<div class="input-group-append">
<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
</button>
</div>
</div>

</form>
</div>

</div>
        </div>
    </div>

</div>
        
        
        
        
        
    </div>
@stop

@section('content')
    <p>Content here</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
