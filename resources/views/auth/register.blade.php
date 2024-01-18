<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ url('assets') }}/images/favicon.png">
    <!-- Page Title  -->
    <title>{{ trans('admin.register_page') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ url('assets') }}/dashlite/css/dashlite.rtl.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="{{ url('assets') }}/dashlite/css/theme.css?ver=2.9.1">
    <!-- jQuery -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<style>
    .dropdown-toggle{
        height: 40px;
        width: 400px !important;
    }
</style>
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
                                <img class="logo-light logo-img logo-img-lg" src="{{ it()->url(setting()->logo) }}" srcset="{{ it()->url(setting()->logo) }} 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ it()->url(setting()->logo) }}" srcset="{{ it()->url(setting()->logo) }} 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">{{ trans('admin.register_page') }}</h5>
                                        <div class="nk-block-des">
                                            <!--p>Access the DashLite panel using your email and passcode.</p-->
                                        </div>
                                    </div>
                                </div>
                                <form dir="rtl" action="{{url('vendor/register')}}" method="post" enctype="multipart/form-data" class="nk-wizard nk-wizard-simple is-alter">

                                    {!! csrf_field() !!}

                                    <div class="nk-wizard-head">
                                        <h5>المعلومات الشخصية</h5>
                                    </div>
                                    <div class="nk-wizard-content">
                                        <div class="row gy-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">اسم المتجر</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required" class="form-control required" id="name" name="name" value="{{old('name')}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="mobile">رقم الجوال</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required" class="form-control required" id="mobile" name="mobile" value="{{old('mobile')}}" placeholder="0512345678" minlength="10" maxlength="10" pattern="\d{10}" title="من فضلك أدخل الجوال بشكل صحيح" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-wizard-content">
                                        <div class="row gy-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="email">البريد الالكتروني</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" data-msg="Required" data-msg-email="Wrong Email" class="form-control required email" value="{{old('email')}}" id="email" name="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="customCheck">الأقسام</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-control select" data-msg="Required" id="customCheck" name="category_id[]" multiple data-live-search="true" required>
                                                            <option value="" disabled>اختر الأقسام</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name_ar}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>   
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="form-label" for="location">الموقع</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" id="searchTextField" class="form-control" required>
                                                        <input type="hidden" class="form-control" id="address" name="address" value="{{old('address')}}">
                                                        <input type="hidden" class="form-control" id="latitude" name="latitude" value="{{old('latitude')}}">
                                                        <input type="hidden" class="form-control" id="longitude" name="longitude" value="{{old('longitude')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-wizard-head">
                                        <h5>Step 2</h5>
                                    </div>
                                    <div class="nk-wizard-content">
                                        <div class="row gy-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="password">كلمة المرور</label>
                                                    <div class="form-control-wrap">
                                                        <input type="password" data-msg="Required" class="form-control required" id="password" name="password" required>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="password_confirmation">تأكيد كلمة المرور</label>
                                                    <div class="form-control-wrap">
                                                        <input type="password" data-msg="Required" class="form-control required" id="password_confirmation" name="password_confirmation" required>
                                                    </div>
                                                </div>
                                            </div><!-- .col -->
                                            <div class="nk-wizard-content">
                                                <div class="row gy-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="year_founded">سنة التأسيس</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" data-msg="Required" class="form-control required" id="year_founded" name="year_founded" value="{{old('year_founded')}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="employees_number">عدد الموظفين</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" data-msg="Required" class="form-control required" id="employees_number" name="employees_number" value="{{old('employees_number')}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--div class="nk-wizard-content">
                                                <div class="row gy-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="about_company">نبذة عن المصنع</label>
                                                            <div class="form-control-wrap">
                                                                <textarea name="about_company" class="form-control required" id="about_company" cols="60" rows="10">{{old('about_company')}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div-->
                                            <div class="row gy-3">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="form-label" for="Commercial_registration_type">نوع التسجيل التجاري</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" data-msg="Required" class="form-control required" id="Commercial_registration_type" name="Commercial_registration_type" value="{{old('Commercial_registration_type')}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-06">صورة السجل التجاري</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" name="commercial_register" class="custom-file-input" id="commercial_register" required>
                                                                <label class="custom-file-label" for="commercial_register">اختر السجل التجاري</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="form-label" for="tax_number">الرقم الضريبي</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" data-msg="Required" class="form-control required" id="tax_number" name="tax_number" value="{{old('tax_number')}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <label class="form-label" for="default-06">صورة الشهادة الضريبية</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" name="tax_certificate" class="custom-file-input" id="tax_certificate" required>
                                                                <label class="custom-file-label" for="tax_certificate">اختر الشهادة الضريبية</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gy-3">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="fw-policy">* مسموح بالملفات من نوع صورة أو ملف PDF فقط</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" data-msg="Required" class="custom-control-input required" name="fw-policy" id="fw-policy" required>
                                                    <label class="custom-control-label" for="fw-policy">أوافق على الشروط والأحكام</label>
                                                </div>
                                            </div>
                                        </div><!-- .row -->
                                    </div>
                                    <div class="row gy-3">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">تسجيل</button>
                                            </div>
                                        </div>
                                    </div><!-- .row -->
                                </form><!-- form -->                                
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer bg-lighter nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="nk-block-content text-center text-lg-center">
                                        <p class="text-soft">&copy; 2022 {{ setting()->{l('sitename')} }}.</p>
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
    <script src="{{ url('assets') }}/dashlite/js/bundle.js?ver=2.9.1"></script>
    <script src="{{ url('assets') }}/dashlite/js/scripts.js?ver=2.9.1"></script>
    <!-- select region modal -->

    <script src="{{ url('assets') }}/dashlite/js/example-toastr.js?ver=2.9.1"></script>

    @include('admin.layouts.messages')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCII75uUvnbkKy7MccwRLhTlBch6VHklpo" type="text/javascript"></script>
    <script>
        function initialize() {
            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('address').value = place.name;
                document.getElementById('latitude').value = place.geometry.location.lat();
                document.getElementById('longitude').value = place.geometry.location.lng();
                //alert("This function is working!");
                //alert(place.name);
            // alert(place.address_components[0].long_name);

            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        function get_sub_category(category_id) {
            $.get("{{url('get-sub-categories/')}}/"+category_id, function(response) {
                $("#category_id").html(response);
            });
        }

    </script>

    <!-- Initialize the plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').selectpicker();
        });
    </script>


</html>



