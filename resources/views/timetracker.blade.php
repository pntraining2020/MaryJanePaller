<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div>
                        <form method="get" action="{{route('names')}}">
                            <select name="names">
                                <option value="kiray">Kiray</option>
                                <option value="yubert">Yubert</option>
                                <option value="serat">Serat</option>
                                <option value="laure">Laure</option>
                            </select>
                        </form>
                    <div>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                <!--  -->
                </div>
                <div class="col-sm-8">
                    <div>
                        <div>
                           
                            <div id="div1">
                                <p>Current Real Time</p>
                                <center>
                                <p style="margin-top:-5%; color:red; font-weight:5px; font-size:20px;" id="time"></p>
                                </center>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <form method="get" action="{{route('clockin')}}">
                                @csrf
                                <button onclick="myFunction()" style="width:20%;" class="btn btn-primary">Clock in</button>
                                <input style="width:50%; margin-top:-5%; margin-left:21%;" class="form-control" type="time" id="clockin" value="" name="clockin">
                            </form>
                        </div>
                        <hr>
                        <div>
                            <p>Break</p>
                            <button  style="width:20%;" class="btn btn-primary">Start</button>
                            <input style="width:50%; margin-top:-5%; margin-left:21%;" class="form-control" type="time" id="clokin" name="clockin">
                            <br>
                            <button  style="width:20%;" class="btn btn-primary">End</button>
                            <input style="width:50%; margin-top:-5%; margin-left:21%;" class="form-control" type="time" name="clockin">
                        </div>
                        <hr>
                        <hr>
                        <div>
                            <button  style="width:20%;" class="btn btn-primary">Clock out</button>
                            <input style="width:50%; margin-top:-5%; margin-left:21%;" class="form-control" type="time" name="clockin">
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                <!--  -->
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
<script>
    window.setInterval(ut, 1000);

    function ut() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
    }

    function myFunction() {
    var x = document.getElementById("clockin");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }
</script>
</html>
