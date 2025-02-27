<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Summernote -->
    <link href="{{asset('/')}}admin/assets/summernote/vendor/summernote/summernote.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}admin/assets/images/favicon.png">
    

    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{asset('/')}}admin/assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/helper.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{asset('/')}}admin/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />



</head>

<body>

@include('admin.include.left-sidebar')
<!-- /# sidebar -->

@include('admin.include.header')
<div class="content-wrap">
    <div class="main">
@yield('body')
    </div>
</div>

<!-- Required vendors -->
<script src="{{asset('/')}}admin/assets/summernote/vendor/global/global.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/quixnav-init.js"></script>
<script src="{{asset('/')}}admin/assets/js/custom.min.js"></script>


<!-- Summernote -->
<script src="{{asset('/')}}admin/assets/summernote/vendor/summernote/js/summernote.min.js"></script>
<!-- Summernote init -->
<script src="{{asset('/')}}admin/assets/js/plugins-init/summernote-init.js"></script>


<!-- jquery vendor -->
<script src="{{asset('/')}}admin/assets/js/lib/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="{{asset('/')}}admin/assets/js/lib/menubar/sidebar.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->

<!-- bootstrap -->

<script src="{{asset('/')}}admin/assets/js/lib/calendar-2/moment.latest.min.js"></script>
<!-- scripit init-->
<script src="{{asset('/')}}admin/assets/js/lib/calendar-2/semantic.ui.min.js"></script>
<!-- scripit init-->
<script src="{{asset('/')}}admin/assets/js/lib/calendar-2/prism.min.js"></script>
<!-- scripit init-->
<script src="{{asset('/')}}admin/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
<!-- scripit init-->
<script src="{{asset('/')}}admin/assets/js/lib/calendar-2/pignose.init.js"></script>
<!-- scripit init-->


<script src="{{asset('/')}}admin/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/weather/weather-init.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/circle-progress/circle-progress-init.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/chartist/chartist.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/chartist/chartist-init.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/sparklinechart/sparkline.init.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="{{asset('/')}}admin/assets/js/scripts.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/select2/select2.full.min.js"></script>

<!-- bootstrap -->

<script src="{{asset('/')}}admin/assets/js/scripts.js"></script>
<!-- scripit init-->
<script src="{{asset('/')}}admin/assets/js/lib/data-table/datatables.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/buttons.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/buttons.flash.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/jszip.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/lib/data-table/datatables-init.js"></script>



</body>

</html>


