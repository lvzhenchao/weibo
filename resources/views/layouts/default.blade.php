<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    {{--头部文件--}}
    @include('layouts._header')

    <div class="container">
        {{--提示语--}}
        @include('shared._messages')

        {{--内容--}}
        @yield('content')

        {{--尾部子视图--}}
        @include('layouts._footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>