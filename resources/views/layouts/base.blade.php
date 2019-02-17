<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- fullcalendar -->
    <link href="css/fullcalendar/fullcalendar.min.css" rel="stylesheet">
    <script src="js/fullcalendar/moment.min.js"></script>
    <script src="js/fullcalendar/fullcalendar.min.js"></script>
    <script src="js/fullcalendar/locale/ja.js"></script>
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    {{--<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">One to One</a>--}}
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">One to One</a>
    {{--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">
                            <span data-feather="home"></span>
                            ホーム <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mock_1') }}?p=1">
                            <span data-feather="file"></span>
                            作業一覧
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mock_2') }}">
                            <span data-feather="shopping-cart"></span>
                            注文管理
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mock_3') }}">
                            <span data-feather="users"></span>
                            処方管理
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mock_4') }}">
                            <span data-feather="bar-chart-2"></span>
                            製品規格メンテ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mock_5') }}">
                            <span data-feather="layers"></span>
                            生産計画
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mock_6') }}">
                            <span data-feather="layers"></span>
                            マスタメンテ
                        </a>
                    </li>
                </ul>

                {{--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">--}}
                    {{--<span>Saved reports</span>--}}
                    {{--<a class="d-flex align-items-center text-muted" href="#">--}}
                        {{--<span data-feather="plus-circle"></span>--}}
                    {{--</a>--}}
                {{--</h6>--}}
                {{--<ul class="nav flex-column mb-2">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">--}}
                            {{--<span data-feather="file-text"></span>--}}
                            {{--Current month--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">--}}
                            {{--<span data-feather="file-text"></span>--}}
                            {{--Last quarter--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">--}}
                            {{--<span data-feather="file-text"></span>--}}
                            {{--Social engagement--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">--}}
                            {{--<span data-feather="file-text"></span>--}}
                            {{--Year-end sale--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="flex:0 0 93%; max-width: 90%;">
        {{--<main role="main" class="col-3 ml-sm-auto col-10 px-4">--}}
            {{--<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">--}}
                {{--<h1 class="h2">Dashboard</h1>--}}
                {{--<div class="btn-toolbar mb-2 mb-md-0">--}}
                    {{--<div class="btn-group mr-2">--}}
                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>--}}
                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>--}}
                    {{--</div>--}}
                    {{--<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">--}}
                        {{--<span data-feather="calendar"></span>--}}
                        {{--This week--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>--}}

            {{--<h2>Section title</h2>--}}

            {{--<div class="table-responsive">--}}
            {{--</div>--}}

@yield('content')

        </main>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
{{--<!-- Placed at the end of the document so the pages load faster -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>--}}
{{--<script src="../../assets/js/vendor/popper.min.js"></script>--}}
{{--<script src="../../dist/js/bootstrap.min.js"></script>--}}

{{--<!-- Icons -->--}}
{{--<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>--}}
{{--<script>--}}
    {{--feather.replace()--}}
{{--</script>--}}

{{--<!-- Graphs -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>--}}
{{--<script>--}}
    {{--var ctx = document.getElementById("myChart");--}}
    {{--var myChart = new Chart(ctx, {--}}
        {{--type: 'line',--}}
        {{--data: {--}}
            {{--labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],--}}
            {{--datasets: [{--}}
                {{--data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],--}}
                {{--lineTension: 0,--}}
                {{--backgroundColor: 'transparent',--}}
                {{--borderColor: '#007bff',--}}
                {{--borderWidth: 4,--}}
                {{--pointBackgroundColor: '#007bff'--}}
            {{--}]--}}
        {{--},--}}
        {{--options: {--}}
            {{--scales: {--}}
                {{--yAxes: [{--}}
                    {{--ticks: {--}}
                        {{--beginAtZero: false--}}
                    {{--}--}}
                {{--}]--}}
            {{--},--}}
            {{--legend: {--}}
                {{--display: false,--}}
            {{--}--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}

</body>
</html>
