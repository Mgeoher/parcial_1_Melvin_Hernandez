<html>
<head>
    <title>Layout- @yield('title')</title>
</head>
<body>
@section('sidebar')
    Texto de la vista principal
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
