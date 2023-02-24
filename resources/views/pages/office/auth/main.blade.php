<x-auth-layout title="Sign In">
    <!--begin::Header-->
    <div class="d-flex flex-stack py-2">
        <!--begin::Back link-->
        <div class="me-2"></div>
        <!--end::Back link-->
        <!--begin::Sign Up link-->
        <div class="m-0 d-none">
            <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">Wanna join us?</span>
            <a href="{{route('office.auth.register')}}" class="link-primary fw-bold fs-5 ye-anima-link" data-kt-translate="sign-in-head-link">Sign Up</a>
        </div>
        <!--end::Sign Up link=-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="py-20">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="form_login" data-redirect-url="dashboard" action="{{route('office.auth.dologin')}}">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Heading-->
                <div class="text-start mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Create impact with each line of code</div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input type="email" placeholder="Email" id="email" name="email" autocomplete="on" data-kt-translate="sign-in-input-email" class="form-control form-control-solid" data-login="1" data-validation="The email field is required" data-format="The email must be a valid email address" />
                    <!--end::Email-->
                </div>
                <!--end::Input group=-->
                <div class="fv-row mb-7">
                    <!--begin::Password-->
                    <input type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid" data-login="2"  data-validation="The password field is required" data-format="The password must be at least 8 characters" />
                    <!--end::Password-->
                </div>
                <!--end::Input group=-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                    <div></div>
                    <!--begin::Link-->
                    <a href="{{route('office.auth.forgot')}}" class="link-primary ye-anima-link" data-kt-translate="sign-in-forgot-password">Forgot Password ?</a>
                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack">
                    <!--begin::Submit-->
                    <button id="tombol_login" onclick="handle_post('#tombol_login','#form_login');" class="btn btn-primary me-2 flex-shrink-0">
                        <!--begin::Indicator label-->
                        <span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">
                            <span data-kt-translate="general-progress">Please wait...</span>
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Submit-->
                    <!--begin::Social-->
                    <div class="d-flex align-items-center d-none">
                        <div class="text-gray-400 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
                        <!--begin::Symbol-->
                        <a href="javascript:;" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                            <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/google-icon.svg')}}" class="p-4" />
                        </a>
                        <!--end::Symbol-->
                        <!--begin::Symbol-->
                        <a href="javascript:;" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                            <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/facebook-3.svg')}}" class="p-4" />
                        </a>
                        <!--end::Symbol-->
                        <!--begin::Symbol-->
                        <a href="javascript:;" class="symbol symbol-circle symbol-45px w-45px bg-light">
                            <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/apple-black.svg')}}" class="theme-light-show p-4" />
                            <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/apple-black-dark.svg')}}" class="theme-dark-show p-4" />
                        </a>
                        <!--end::Symbol-->
                    </div>
                    <!--end::Social-->
                </div>
                <!--end::Actions-->
            </div>
            <!--begin::Body-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Body-->
    @section('custom_js')
        <script>
            $("#email").focus();
        </script>
    @endsection
</x-auth-layout>
