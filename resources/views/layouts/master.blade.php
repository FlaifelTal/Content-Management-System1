{{-- will be used for the static section //header//footer --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Main Page</title> --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    {{-- <style>
        /* Set min height of the content area to fill the remaining space */
        html,
        body {
            height: 100%;
        }

        .content {
            flex: 1;
        }
    </style> --}}
</head>

<body class="d-flex flex-column">
    <!-- Header include a subveiw -->
  @include('layouts.header')

    <!-- Main Content -->
    {{--  the content in the other pages will be rendered here --}}
    @yield('content')
    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS (optional, only needed if you use Bootstrap JS components) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
