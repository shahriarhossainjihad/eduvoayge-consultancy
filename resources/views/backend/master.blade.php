<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eduvoyage Education Consultancy Admin Dashboard</title>

    <!-- css here  -->
    @include('backend.body.css')
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('backend.body.sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('backend.body.navbar')
            <!-- partial -->

            <!-- page content here  -->
            <div class="page-content">
                @yield('admin')
            </div>

            <!-- footer here  -->
            @include('backend.body.footer')

        </div>
    </div>

    <!-- javascript here  -->
    @include('backend.body.javascript')

</body>

</html>