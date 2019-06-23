<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Laravel AJAX CRUD</title>
    <link href="{{url('css/app.css')}}" rel="stylesheet">
</head>
 
<body style="margin-top: 60px" class="container">
 
@yield('content')
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{url('js/laracrud.js')}}"></script>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>