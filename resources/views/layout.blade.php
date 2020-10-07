<html>
<head>
<style>
.header{
    color: white;
    background-color: black;

}

</style>
</head>
<title> @yield('title') page</title>
<body>
    <div class="header">
    @section('header')
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, harum. Cupiditate animi blanditiis recusandae ea aspernatur ad, adipisci cum quis! Nulla, corrupti reprehenderit reiciendis illum magnam dignissimos quis sint voluptatem.</h1>
    @show    
    </div>
    <div class="sidebar">
    @section('sidebar')
    <h1>
        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
    </h1>   
     @show  
    </div>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>