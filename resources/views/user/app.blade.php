<!doctype html>
<html lang="en">

<head>
   @include('user/layouts/head')

<body>
    <!--::header part start::-->
    
        @include('user.layouts.header')
    <!-- Header part end-->

    <!-- banner part start-->
        @include('user.layouts.banner')
    <!-- banner part start-->

   @section('main-content')
         
   @show
   
    <!-- footer part -->
        @include('user.layouts.footer')   

</body>

</html>