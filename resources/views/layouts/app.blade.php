<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Animation library for notifications   -->
            <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
            <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
            <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
        <!--  Fonts and icons     -->
            <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
            <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
            <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
        </head>
        <body>
            <div class="wrapper">
                @if (Auth::guest())
                    @yield('content')
                @else
                    @include('navigation')
                    <div id="appa" class="main-panel">
                        @yield('content')
                    </div>
                @endif
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
            <script src="{{ asset('js/jquery.js') }}"></script>
    	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    	<!--  Checkbox, Radio & Switch Plugins -->
    	    <script src="{{ asset('js/bootstrap-checkbox-radio.js') }}"></script>
    	<!--  Charts Plugin -->
    	    <script src="{{ asset('js/chartist.min.js') }}"></script>
        <!--  Notifications Plugin    -->
            <script src="{{ asset('js/bootstrap-notify.js') }}"></script>
        <!--  Google Maps Plugin    -->
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    	   <script src="{{ asset('js/paper-dashboard.js') }}"></script>
    	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    	   <script src="{{ asset('js/demo.js') }}"></script>
    	      <script type="text/javascript">
        	     $(document).ready(function(){
            	        demo.initChartist();
            	           $.notify({
                	              icon: 'ti-gift',
                	                 message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

                                 },{
                                     type: 'success',
                                     timer: 4000
                                 });
        	    });
    	        </script>
        </body>
