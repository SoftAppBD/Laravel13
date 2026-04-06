<head>
    <meta charset="UTF-8">
    <title>@yield('title') | 𝓐𝓭𝓶𝓲𝓷 𝓒𝓸𝓷𝓽𝓻𝓸𝓵 𝓟𝓪𝓷𝓮𝓵</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('/backend/assets/libs/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/backend/assets/libs/select2/css/select2-bootstrap4.min.css') }}">
    <link href="{{ asset('/backend/css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{ asset('/backend/assets/libs/summernote/summernote-lite.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://softappbd.com/public/assets/img/favicon.png" rel="icon">
    @yield('third_party_stylesheets')
    @stack('page_css')
    @yield('style')
</head>
