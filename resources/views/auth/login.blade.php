<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ url('assets') }}/frontend/images/rasheed_logo.png">
    <!-- Page Title  -->
    <title>{{ trans('admin.login_page') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('assets') }}/dashboard/css/dashlite.rtl.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="{{ url('assets') }}/dashboard/css/theme.css?ver=2.9.1">
    <!-- jQuery -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
</head>

<body class="nk-body bg-white pg-auth">

    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="javascript:;" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="{{url('assets')}}/frontend/images/rasheed_logo.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="{{url('assets')}}/frontend/images/rasheed_logo.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">تسجيل الدخول</h4>
                                        <div class="nk-block-des">
                                            <!--p>Access the DashLite panel using your email and passcode.</p-->
                                        </div>
                                    </div>
                                </div>
                                <form method="post" action="{{url('/login')}}" class="form-validate is-alter" dir="rtl">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">{{ trans('admin.email') }}</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" name="email" class="form-control form-control-lg" id="default-01" placeholder="{{ trans('admin.email') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">{{ trans('admin.password') }}</label>
                                            <!--a class="link link-primary link-sm" href="{{url('/forgot-password')}}">نسيت كلمة المرور؟</a-->
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg" required id="password" placeholder="{{ trans('admin.password') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">{{ trans('admin.login') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer bg-lighter nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="nk-block-content text-center text-lg-center">
                                        <p class="text-soft">&copy; 2024.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>

    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('assets') }}/dashboard/js/bundle.js?ver=2.9.1"></script>
    <script src="{{ url('assets') }}/dashboard/js/scripts.js?ver=2.9.1"></script>
    <!-- select region modal -->

    <script src="{{ url('assets') }}/dashboard/js/example-toastr.js?ver=2.9.1"></script>

    @include('admin.layouts.messages')

</html>



