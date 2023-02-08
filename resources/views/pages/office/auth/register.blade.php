<x-auth-layout title="Create an Account">
    <!--begin::Header-->
    <div class="d-flex flex-stack py-2">
        <!--begin::Back link-->
        <div class="me-2">
            <a href="{{route('office.auth.index')}}" class="btn btn-icon bg-light rounded-circle ye-anima-link">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr002.svg-->
                <span class="svg-icon svg-icon-2 svg-icon-gray-800">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
                        <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </a>
        </div>
        <!--end::Back link-->
        <!--begin::Sign Up link-->
        <div class="m-0">
            <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Already a member ?</span>
            <a href="{{route('office.auth.index')}}" class="link-primary fw-bold fs-5 ye-anima-link" data-kt-translate="sign-up-head-link">Sign In</a>
        </div>
        <!--end::Sign Up link=-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="py-20">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="form_register" data-redirect-url="{{route('office.auth.index')}}" action="{{route('office.auth.doregister')}}">
            <!--begin::Heading-->
            <div class="text-start mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-up-title">Create an Account</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Create impact with each line of code</div>
                <!--end::Link-->
            </div>
            <!--end::Heading-->
            <!--begin::Input group-->
            <div class="row fv-row mb-7">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="First Name" name="first_name" autocomplete="off" data-kt-translate="sign-up-input-first-name" />
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Last Name" name="last_name" autocomplete="off" data-kt-translate="sign-up-input-last-name" />
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="tel" maxlength="13" placeholder="Phone Number" name="phone" autocomplete="off" data-kt-translate="sign-up-input-phone" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-up-input-email" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-up-input-password" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <!--end::Input wrapper-->
                    <!--begin::Meter-->
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                    <!--end::Meter-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Hint-->
                <div class="text-muted" data-kt-translate="sign-up-hint">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                <!--end::Hint-->
            </div>
            <!--end::Input group=-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" data-kt-translate="sign-up-input-confirm-password" />
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="d-flex flex-stack">
                <!--begin::Submit-->
                <button id="tombol_register" onclick="handle_post('#tombol_register','#form_register');" class="btn btn-primary" data-kt-translate="sign-up-submit">
                    <!--begin::Indicator label-->
                    <span class="indicator-label">Submit</span>
                    <!--end::Indicator label-->
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    <!--end::Indicator progress-->
                </button>
                <!--end::Submit-->
                <!--begin::Social-->
                <div class="d-flex align-items-center d-none">
                    <div class="text-gray-400 fw-semibold fs-6 me-6">Or</div>
                    <!--begin::Symbol-->
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                        <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/google-icon.svg')}}" class="p-4" />
                    </a>
                    <!--end::Symbol-->
                    <!--begin::Symbol-->
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                        <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/facebook-3.svg')}}" class="p-4" />
                    </a>
                    <!--end::Symbol-->
                    <!--begin::Symbol-->
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                        <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/apple-black.svg')}}" class="theme-light-show p-4" />
                        <img alt="Logo" src="{{asset('metronic/media/svg/brand-logos/apple-black-dark.svg')}}" class="theme-dark-show p-4" />
                    </a>
                    <!--end::Symbol-->
                </div>
                <!--end::Social-->
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Body-->
</x-auth-layout>
