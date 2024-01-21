<div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1 no-print">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="javascript:;" class="logo-link">
                                    <img class="logo-light logo-img" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="{{url('assets')}}/dashboard/images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="/images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <!--div class="nk-header-search ml-3 ml-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div--><!-- .nk-header-news -->
                            <div class="nk-header-tools no-print">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm" style="display: none">
                                                    @if(!empty(auth()->user()->photo_profile))
                                                    <img src="" class="img-circle elevation-2" alt="{{ auth()->user()->name }}">
                                                    @else
                                                    <img src="{{ url('assets') }}/dashboard/images/avatar5.png" class="img-circle elevation-2" alt="{{ auth()->user()->name }}">
                                                    @endif
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ url('profile') }}"><em class="icon ni ni-setting-alt"></em><span>تعديل البيانات</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="javascript:;" onclick="$('#logoutForm').submit();"><em class="icon ni ni-signout"></em><span>تسجيل خروج</span></a></li>
                                                    <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
