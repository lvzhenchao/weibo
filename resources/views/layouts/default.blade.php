<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    {{--头部文件--}}
    @include('layouts._header')

    <div class="container">
        @yield('content')

        {{--尾部子视图--}}
        @include('layouts._footer')
    </div>

</body>

</html>