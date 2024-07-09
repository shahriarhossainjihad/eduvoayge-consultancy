<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css import  -->
    @include('frontend.body.css')
</head>


<body>
    <div class="boxed_wrapper">
        <div class="preloader"></div>
        <!-- navbar here  -->
        @include('frontend.body.navbar')

        <!-- main area  -->

        @yield('frontend.main')

        <!-- footer here  -->
        @include('frontend.body.footer')
    </div>

    <!-- Javascript  -->
    @include('frontend.body.javascript')
</body>

</html>
