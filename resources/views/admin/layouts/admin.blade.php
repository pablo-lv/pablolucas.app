<!doctype html>
<html lang="es" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Paul Site Admin</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="../css/admin/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/admin/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="../../css/admin/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="../../css/admin/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="../../css/admin/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="../../css/admin/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="../../css/admin/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="../../css/admin/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="brand clearfix">
    <a href="index.html" class="logo"><img src="{{ asset('/img/logo.jpg') }}" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
        <li><a href="#">Help</a></li>
        <li><a href="#">Settings</a></li>
        <li class="ts-account">
            <a href="#"><img src="../../img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Edit Account</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">
            <li class="ts-label">Search</li>
            <li>
                <input type="text" class="ts-sidebar-search" placeholder="Search here...">
            </li>
            <li class="ts-label">Main</li>
            <li class="open"><a href="{{ route('pots.posts') }}"><i class="fa fa-dashboard"></i> Posts</a></li>
            <li class="open"><a href="{{ route('post.create') }}"><i class="fa fa-plus"></i> Create</a></li>


            <!-- Account from above -->
            <ul class="ts-profile-nav">
                <li><a href="#">Help</a></li>
                <li><a href="#">Settings</a></li>
                <li class="ts-account">
                    <a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Edit Account</a></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </ul>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Loading Scripts -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>
<script src="../js/Chart.min.js"></script>
<script src="../js/fileinput.js"></script>
<script src="../js/chartData.js"></script>
<script src="../js/main.js"></script>
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
{{--<script>--}}

    {{--window.onload = function(){--}}

        {{--// Line chart from swirlData for dashReport--}}
        {{--var ctx = document.getElementById("dashReport").getContext("2d");--}}
        {{--window.myLine = new Chart(ctx).Line(swirlData, {--}}
            {{--responsive: true,--}}
            {{--scaleShowVerticalLines: false,--}}
            {{--scaleBeginAtZero : true,--}}
            {{--multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",--}}
		{{--});--}}

		{{--// Pie Chart from doughutData--}}
		{{--var doctx = document.getElementById("chart-area3").getContext("2d");--}}
		{{--window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});--}}

		{{--// Dougnut Chart from doughnutData--}}
		{{--var doctx = document.getElementById("chart-area4").getContext("2d");--}}
		{{--window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});--}}

	{{--}--}}
	{{--</script>--}}
</body>

</html>