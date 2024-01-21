<!DOCTYPE html>
<html lang="ar" class="js" dir="rtl">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ url('assets') }}/frontend/images/rasheed_logo.png">
    <!-- Page Title  -->
    <title>{{!empty($title)?$title:trans('admin.dashboard')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('assets') }}/dashboard/css/dashlite.rtl.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="{{ url('assets') }}/dashboard/css/theme.css?ver=2.9.1">
    <link rel="stylesheet" href="{{ url('assets') }}/dashboard/css/editors/tinymce.css?ver=2.9.1">
    <!-- jQuery -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}" defer></script-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    @media print
    {
        .no-print
        {
            display: none !important;
        }
        .print
        {
            display: inline !important;
        }
    }
    </style>

</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div id="app" class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('admin.layouts.menu')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('admin.layouts.navbar')

                <!-- main header @e -->
                <!-- content @s -->
                    @yield('content')

                    <div class="modal fade" id="order-popup-modal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <center>
                                                <h4 style="color: rgba(96,96,96,0.68)">
                                                    <i class="tio-shopping-cart-outlined"></i>  <span class="not_title"></span> <span class="order_not_id"></span>
                                                </h4>
                                                <hr>
                                                <a href="#" id="order_not_link" class="btn btn-primary">عرض</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> {{ date('Y') }} - نظام السحوبات
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

<audio id="myAudio">
    <source src="{{asset('assets/sound/notification.mp3')}}" type="audio/mpeg">
</audio>

<script>
    var audio = document.getElementById("myAudio");

    function playAudio() {
        audio.play();
    }

    function pauseAudio() {
        audio.pause();
    }

    function notify(title, id, link) {
        playAudio();
        $('.not_title').html(title)
        $('.order_not_id').html(id)
        $('#order_not_link').attr('href', link)
        $('#order-popup-modal').appendTo("body").modal('show');
    }
</script>

<script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>

<script src="{{ url('assets') }}/dashboard/js/bundle.js?ver=2.9.1"></script>
<script src="{{ url('assets') }}/dashboard/js/scripts.js?ver=2.9.1"></script>
<script src="{{ url('assets') }}/dashboard/js/charts/chart-ecommerce.js?ver=2.9.1"></script>
<script src="{{ url('assets') }}/dashboard/js/libs/editors/tinymce.js?ver=2.9.1"></script>
<script src="{{ url('assets') }}/dashboard/js/editors.js?ver=2.9.1"></script>
<script src="{{ url('assets') }}/dashboard/js/example-toastr.js?ver=2.9.1"></script>

<script>

    function get_sub_category(category_id, selected_id) {
        $.ajax({
            method: 'GET',
            url: "{{url('get-sub-categories/')}}/"+category_id,
            data: "selected_id="+selected_id,
            success: function(response) {
                $("#category_id").html(response);
            }
        });
    }
</script>

@include('admin.layouts.messages')

@stack('js')

</body>
</html>
