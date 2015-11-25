<!-- Stored in resources/views/layouts/master.blade.php -->
<!--这是文件的目录-->

<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>