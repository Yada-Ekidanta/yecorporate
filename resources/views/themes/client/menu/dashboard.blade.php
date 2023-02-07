<!--begin:Menu item-->
<div data-kt-menu-trigger="click" class="menu-item {{request()->is('dashboard') || request()->is('dashboard-ecommerce') || request()->is('dashboard-project') || request()->is('dashboard-marketing') || request()->is('dashboard-analytic') || request()->is('dashboard-finance') ? 'here show' : ''}} menu-accordion" data-no-swup>
    <!--begin:Menu link-->
    <span class="menu-link" data-no-swup>
        <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-title">Dashboards</span>
        <span class="menu-arrow"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{request()->is('dashboard') ? 'active' : ''}}" href="{{route('client.dashboard.index')}}">
                <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Default</span>
            </a>
            <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="../../demo1/dist/dashboards/bidding.html">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">CRM</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        </div>
    </div>
    <!--end:Menu sub-->
</div>
<!--end:Menu item-->
