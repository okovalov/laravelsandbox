<htmL>
<body>
    @include('partials.menu')
    
    @yield('content')
    
    @section('sidebar')
        <h2>Links</h2>
    @show
</body>
</html>