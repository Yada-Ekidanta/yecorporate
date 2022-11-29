<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('office/profile') ? 'active' : ''}}" href="{{route('office.profile.index')}}">Overview</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('office/profile/setting') ? 'active' : ''}}" href="{{route('office.profile.setting')}}">Settings</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.security')}}">Security</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.activity')}}">Activity</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.billing')}}">Billing</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.statement')}}">Statements</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.referral')}}">Referrals</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.apikey')}}">API Keys</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item mt-2">
        <a class="nav-link text-active-primary ms-0 me-10 py-5 {{request()->is('profile') ? 'active' : ''}}" href="{{route('office.profile.log')}}">Logs</a>
    </li>
    <!--end::Nav item-->
</ul>