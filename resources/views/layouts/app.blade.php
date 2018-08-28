<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="csrf-token" content="{!! csrf_token() !!}"> --}}


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.3.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"defer></script>
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/datatables.bootstrap.min.css') }}" rel="stylesheet">
    


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
   
    
   
   
</head>
    <style>
        .responsiveIMG{
            width:50%;
            height: auto;
            display: block;
            opacity:1.0;
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
            height: auto;
            position:fixed;
            bottom:0;
            background-color:azure;
        }

    </style>

    
   
</head>
<header class="fixed">
        <table class="table-responsive" style="background-color:darkgray;width:100%;" align="center">
                <tr>
                    <td style="padding-left:10px;">
                            <div><img src="{{URL::to('/images/telecom-fiji-limited-logo.png')}}" alt="TFL Logo" class="responsiveIMG"></img></div>
                    </td>
                    <td style="width:80%;text-align:center;">
                            <p style="color:darkslategray;font-size:3vw;">TFL DNS Management Portal</p> 
                    </td>
                    <td style="text-align:justify; color:darkslategray;font-size:0.7vw;">
                            Customer Care </br>
                            Central – 3304019 </br>
                            Western - 6650019 </br>
                            Northern – 8814019 </br>
                    </td>
                    {{-- <td style = "font-size:3.95vw; font-weight:bold">
                        <p style="color:white;text-align:center; outline:black">TELECOM FIJI - DNS MANAGEMENT PORTAL</p>
                    </td> --}}
                </tr>
    </table>
</header>
{{-- <table class="table-responsive" style="background-color:royalblue;width:100%;" align="center">
            <tr>
                <td style="padding-right:10px;padding-left:10px;padding-top:20px;padding-bottom:20px;" >
                    <div style="background-color:white;"><img src="{{URL::to('/images/telecom-fiji-limited-logo.png')}}" alt="TFL Logo" class="responsiveIMG"></img></div>
                </td>
                <td style = "font-size:3.95vw; font-weight:bold">
                    <p style="color:white;text-align:center; outline:black">TELECOM FIJI - DNS MANAGEMENT PORTAL</p>
                </td>
            </tr>
</table> --}}
<body style="background-color:lightgray;">
    <div id="container">
        

    </div>
    <div id="app">
        <main class="py-4">
             @yield('content') 
        </main>

    </div>
    <footer style="background-color:darkgray;line-height:300%;"class="fixed-bottom">
        <p style="text-align:center; font-weight:bold; color:darkslategray;">Telecom Fiji Limited © 2018</p>
    </footer>

    
</body>
</html>
