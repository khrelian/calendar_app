<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar App</title>
    
    {{-- stylesheets --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fullcalendar/bootstrap/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fullcalendar/core/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fullcalendar/daygrid/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fullcalendar/timegrid/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fullcalendar/list/main.min.css') }}" rel="stylesheet">

</head>
<body class="bg-dark">

    <div class="container">
        <div class="notifications" style="position:fixed;right:10px;top:10px;z-index:100">
            <div class="toast bg-danger" id='error-toast' data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                <strong class="mr-auto">Unable to save event </strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="toast-body" id="error-msg" >
                </div>
            </div>
        </div>
        <div class="notifications" style="position:fixed;right:10px;top:10px;z-index:100">
            <div class="toast bg-success" id='success-toast' data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                <strong class="mr-auto">New Event Saved!</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
        </div>
        
        @include('sections.navigation')
        @yield('content')
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/core/main.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/bootstrap/main.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/daygrid/main.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/timegrid/main.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/list/main.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/9f6c3cf9ae.js" crossorigin="anonymous"></script>

    @yield('js')
</body>
</html>