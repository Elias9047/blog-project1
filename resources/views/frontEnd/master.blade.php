


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.codevibrant.com/html/kavya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 13:12:25 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('frontAsset') }}/assets/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontAsset') }}/assets/css/bootstrap.min.css" />

    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="{{  asset('frontAsset') }}/assets/css/all.css" />

    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('frontAsset') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ 'frontAsset' }}/assets/css/slick-theme.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontAsset') }}/assets/css/preloader.css" />
    <link rel="stylesheet" href="{{ asset('frontAsset') }}/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontAsset') }}/assets/css/responsive.css" />
    <link rel="stylesheet" href="{{ asset('frontAsset') }}/assets/css/dark.css" />

    <title>Kavya - Minimal Blog Template</title>
</head>

<body>
<!-- Preloader -->
<div class="preloader-wrapper">
    <div class="preloader">
        <div class="preloader-circle" id="status">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader end -->

<!-- Header -->
@include('frontEnd.include.header')
<!-- header end -->

@yield('content')

<!-- Footer section -->
@include('frontEnd.include.footer');
<!-- Footer section end -->

<!-- Scroll to top -->
<div id="stop" class="scroll-to-top">
    <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
</div>
<!-- Scroll to top end -->

<!-- Javascript -->
<script src="{{ asset('frontAsset') }}/assets/js/jquery-3.4.1.min.js"></script>
<script src="{{ asset('frontAsset') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('frontAsset')}}/assets/js/slick.min.js"></script>
<script src="{{ asset('frontAsset') }}/assets/js/jquery.sticky.js"></script>
<script src="{{ asset('frontAsset')}}/assets/js/ResizeSensor.min.js"></script>
<script src="{{ asset('frontAsset') }}/assets/js/theia-sticky-sidebar.min.js"></script>
<script src="{{ asset('frontAsset') }}/assets/js/main.js"></script>
</body>


<!-- Mirrored from demo.codevibrant.com/html/kavya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 13:12:47 GMT -->
</html>

