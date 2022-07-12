

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    <title>@yield('title')</title>
</head>
<body class="user-select-none ">
    <style>
        .nav-item
        {
            padding: 0px 5px;
        }
.head-nav .nav-link
{
    color: rgb(202, 202, 202);
    padding-bottom: 0;
}

.nav-link:hover
{
    border-bottom: 1px rgb(216, 216, 216) solid ;
  
    color: white;
}
        .btn-download
        {
            background-color: rgb(180, 9, 9);
            padding: 15px 0;
            width:200px;
            color: white;
            font-size:1.4em;
        }
        
        .btn-download:hover
        {
            background-color: rgb(202, 30, 30);
            color: white;
        }

        body
        {
            background: linear-gradient(rgb(204, 204, 204),white);
        }
         
    </style>
    @yield("style")
@include('widgets.navbar') 
   @yield('content') 

   <footer class="bg-dark  p-3 text-center fixed-bottom text-light">
    <span>powered  by elodream &copy;</span>
   </footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

