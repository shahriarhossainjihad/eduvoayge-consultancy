<!DOCTYPE html>
<html lang="en">
<!-- css import  -->
 @import('frontend.body.css')
<body>
<div class="boxed_wrapper">
<div class="preloader"></div>
<!-- navbar here  -->
@import('frontend.body.navbar')

    <!-- main area  -->
     @yield('frontend.main')  
      
<!-- footer here  -->
@import('frontend.body.footer')
</div>

<!-- Javascript  -->
@import('frontend.body.javascript')
</body>
</html>