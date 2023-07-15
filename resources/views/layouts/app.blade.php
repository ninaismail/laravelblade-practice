<!-- app.blade.php -->
@include('partials._head')
<body>
    @include('partials._nav')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @yield('content')
            </div>
        </div>
    </div>
    @include('partials._footer')
</body>
</html>
