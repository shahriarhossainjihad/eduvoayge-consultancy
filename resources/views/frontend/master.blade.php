<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eduvoyage Education Consultancy</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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