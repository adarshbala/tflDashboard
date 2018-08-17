<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.3.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"defer></script>
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
   
    
   
   
</head>
    <style>
        .responsiveIMG{
            width:60%;
            height: 40%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }  

        .navbar-brand{
            color: white;
        }

        .py-4{
            margin: auto;
            padding: 25px;
            max-width: 100%;
            height: 100%;   
        }

        .mainFooter{
            width: 100%;
            height: 100%;
        }

    </style>

    
   
</head>
<body style="background-color: skyblue;">
    <div id="container">
        <table class="table-responsive" style="background-color:royalblue;width:100%;" align="center">
            <tr>
                <td style="padding-right:10px;padding-left:10px;padding-top:20px;padding-bottom:20px;" >
                    <div style="background-color:white;"><img src="{{URL::to('/images/telecom-fiji-limited-logo.png')}}" alt="TFL Logo" class="responsiveIMG"></img></div>
                </td>
                <td style = "font-size:3.95vw; font-weight:bold">
                    <p style="color:white;text-align:center; outline:black">TELECOM FIJI - DNS MANAGEMENT PORTAL</p>
                </td>
            </tr>
        </table>

    </div>
    <div id="app">
        <main class="py-4">
             @yield('content') 
        </main>

    </div>
    <footer id="mainFooter">
        <p style="text-align:center; font-weight:bold">Telecom Fiji Limited © 2018</p>
    </footer>

    
</body>
</html>
