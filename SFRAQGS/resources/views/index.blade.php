<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    @section('style')
    @yield('style')
    <link rel="stylesheet" href="css/dashboard.css">
    @show
    <title>Document</title>
</head>
<!------ Include the above in your HEAD tag ---------->

<body>
    @section('main')
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>

    <div id="wrapper">

        <!-- Navigation -->
        @section('navbar')
        @include('partials.navbar')
        @show

    @section('editable')
    @yield('editable')
    <div class="container-fluid">
    <div class="row text-center">
    <div class="col-md-12 dashhead">
    <h1> Welcome To My ProFile</h1>
    </div>
    </div>
    </div>
    @show
    </div>
    @show
    <!-- /#wrapper -->
    @section('script')
    @include('partials.script')
    @show
</body>
</html>