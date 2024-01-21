  <!-- sidebar @s -->
  <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
      <div class="nk-sidebar-element nk-sidebar-head">
          <div class="nk-sidebar-brand">
              <a href="{{url('dashboard')}}" class="logo-link nk-sidebar-logo">
                    <img class="logo-light logo-img" style="width: 50px;" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="{{url('assets')}}/frontend/images/rasheed_logo.png 2x" alt="logo">
                    <img class="logo-dark logo-img" style="width: 50px;" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="{{url('assets')}}/frontend/images/rasheed_logo.png 2x" alt="logo-dark">
                    <img class="logo-small logo-img logo-img-small" src="{{url('assets')}}/frontend/images/rasheed_logo.png" srcset="{{url('assets')}}/frontend/images/rasheed_logo.png 2x" alt="logo-small">
      </a>
          </div>
          <div class="nk-menu-trigger mr-n2">
              <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
              <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
          </div>
      </div><!-- .nk-sidebar-element -->
      <div class="nk-sidebar-element">
          <div class="nk-sidebar-content">
              <div class="nk-sidebar-menu" data-simplebar>
                  <ul class="nk-menu">
                      <li class="nk-menu-item">
                          <a href="{{url('dashboard')}}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                              <span class="nk-menu-text">لوحة التحكم</span>
                          </a>
                      </li>

                      <!-- .nk-menu-item -->
                      <li class="nk-menu-item has-sub">
                          <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                <span class="nk-menu-text">المستخدمين</span>
                          </a>
                          <ul class="nk-menu-sub">
                              <li class="nk-menu-item">
                                  <a href="{{url('users')}}" class="nk-menu-link"><span class="nk-menu-text">عرض</span></a>
                              </li>
                              <li class="nk-menu-item">
                                  <a href="{{url('users/create')}}" class="nk-menu-link"><span class="nk-menu-text">إضافة</span></a>
                              </li>
                          </ul><!-- .nk-menu-sub -->
                      </li><!-- .nk-menu-item -->

                      <li class="nk-menu-item">
                          <a href="{{url('winners')}}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                              <span class="nk-menu-text">الفائزين</span>
                          </a>
                      </li>

                      <li class="nk-menu-item">
                        <a href="{{url('withdraw')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-gift"></em></span>
                            <span class="nk-menu-text">السحب</span>
                        </a>
                    </li>

                  </ul><!-- .nk-menu -->
              </div><!-- .nk-sidebar-menu -->
          </div><!-- .nk-sidebar-content -->
      </div><!-- .nk-sidebar-element -->
  </div>
  <!-- sidebar @e -->
