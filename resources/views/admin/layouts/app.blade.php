<!DOCTYPE html>
<html lang="en">
<head>
    
        @include('admin.layouts.head')
</head>
<body id="page-top">
        
                    
                @include('admin/layouts.header')
               
                <div id="wrapper">
                @include('admin/layouts/sidebar')

                @section('main-content')

                        @show

              
                </div>    
                    
                @include('admin/layouts.footer')
            
    
</body>
</html>