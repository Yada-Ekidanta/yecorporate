<x-chat-layout title="Chat">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Layout Builder Notice-->
            <div class="card mb-10">
                <div class="card-body d-flex align-items-center p-5 p-lg-8">
                    <!--begin::Icon-->
                    <div class="d-flex h-50px w-50px h-lg-80px w-lg-80px flex-shrink-0 flex-center position-relative align-self-start align-self-lg-center mt-3 mt-lg-0">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs051.svg-->
                        <span class="svg-icon svg-icon-primary position-absolute opacity-15">
                            <svg class=". h-50px w-50px h-lg-80px w-lg-80px ." xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
                                <path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/coding/cod009.svg-->
                        <span class="svg-icon svg-icon-2x svg-icon-lg-3x svg-icon-primary position-absolute">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M22.0318 8.59998C22.0318 10.4 21.4318 12.2 20.0318 13.5C18.4318 15.1 16.3318 15.7 14.2318 15.4C13.3318 15.3 12.3318 15.6 11.7318 16.3L6.93177 21.1C5.73177 22.3 3.83179 22.2 2.73179 21C1.63179 19.8 1.83177 18 2.93177 16.9L7.53178 12.3C8.23178 11.6 8.53177 10.7 8.43177 9.80005C8.13177 7.80005 8.73176 5.6 10.3318 4C11.7318 2.6 13.5318 2 15.2318 2C16.1318 2 16.6318 3.20005 15.9318 3.80005L13.0318 6.70007C12.5318 7.20007 12.4318 7.9 12.7318 8.5C13.3318 9.7 14.2318 10.6001 15.4318 11.2001C16.0318 11.5001 16.7318 11.3 17.2318 10.9L20.1318 8C20.8318 7.2 22.0318 7.59998 22.0318 8.59998Z" fill="currentColor" />
                                <path d="M4.23179 19.7C3.83179 19.3 3.83179 18.7 4.23179 18.3L9.73179 12.8C10.1318 12.4 10.7318 12.4 11.1318 12.8C11.5318 13.2 11.5318 13.8 11.1318 14.2L5.63179 19.7C5.23179 20.1 4.53179 20.1 4.23179 19.7Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Icon-->
                    <!--begin::Description-->
                    <div class="ms-6">
                        <p class="list-unstyled text-gray-600 fw-semibold fs-6 p-0 m-0">The layout builder is to assist your set and configure your preferred project layout specifications and preview it in real time and export the HTML template with its includable partials of this demo. The downloaded version does not include the assets folder since the layout builder's main purpose is to help to generate the final HTML code without hassle.</p>
                    </div>
                    <!--end::Description-->
                </div>
            </div>
            <!--end::Layout Builder Notice-->
            <!--begin::Layout Builder Modal-->
            <div class="modal fade" id="kt_layout_builder_recaptcha_modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">reCaptcha Verification</h3>
                            <button class="btn btn-sm btn-icon btn-light btn-hover-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ki ki-close fs-4 text-muted"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form">
                                <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="6Lf92jMUAAAAANk8wz68r73rA2uPGr4_e0gn96BL"></div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary me-2" id="kt_layout_builder_verify">Submit</button>
                            <button type="button" class="btn btn-hover-light btn-text-muted fw-semibold" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Layout Builder Modal-->
            <!--begin::Card-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header card-header-stretch overflow-auto">
                    <!--begin::Tabs-->
                    <ul class="nav nav-stretch nav-line-tabs fw-semibold fs-6 border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_builder_main" role="tab">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_builder_layout" role="tab">Layout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_builder_sidebar" role="tab">Sidebar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#kt_builder_header" role="tab">Header</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_builder_toolbar" role="tab">Toolbar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_builder_footer" role="tab">Footer</a>
                        </li>
                        <li class="nav-item d-none">
                            <a class="nav-link" data-bs-toggle="tab" href="#kt_builder_engage" role="tab">Engage</a>
                        </li>
                    </ul>
                    <!--end::Tabs-->
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form class="form" method="POST" id="kt_layout_builder_form" action="/metronic8/demo1/index.php">
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="tab-content pt-3">
                            <!--begin::Tab pane-->
                            <div class="tab-pane" id="kt_builder_main">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 pe-lg-15">
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <!--begin::Heading-->
                                            <div class="mb-6">
                                                <h4 class="fw-bold text-dark">Theme Mode</h4>
                                                <div class="fw-semibold text-muted fs-7 d-block lh-1">Enjoy Dark & Light modes. 
                                                <a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/dark-mode" target="_blank">See docs</a></div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Options-->
                                            <div class="row" data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Option-->
                                                    <label class="form-check-image form-check-success">
                                                        <!--begin::Image-->
                                                        <div class="form-check-wrapper">
                                                            <img src="/metronic8/demo1/assets/media/preview/demos/demo1/light-ltr.png" class="mw-100" alt="" />
                                                        </div>
                                                        <!--end::Image-->
                                                        <!--begin::Check-->
                                                        <div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                            <input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light" />
                                                            <!--begin::Label-->
                                                            <div class="form-check-label text-gray-700">Light</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Check-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <!--begin::Option-->
                                                    <label class="form-check-image form-check-success">
                                                        <!--begin::Image-->
                                                        <div class="form-check-wrapper">
                                                            <img src="/metronic8/demo1/assets/media/preview/demos/demo1/dark-ltr.png" class="mw-100" alt="" />
                                                        </div>
                                                        <!--end::Image-->
                                                        <!--begin::Check-->
                                                        <div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                            <input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark" />
                                                            <!--begin::Label-->
                                                            <div class="form-check-label text-gray-700">Dark</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Check-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">RTL Mode</h4>
                                        <div class="fs-7 fw-semibold text-muted">Change Language Direction. 
                                        <a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/rtl" target="_blank">See docs</a></div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][general][rtl]" id="kt_builder_rtl" />
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column mb-4">
                                        <h4 class="fw-bold text-dark">Width Mode</h4>
                                        <div class="fs-7 fw-semibold text-muted">Page width options</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" value="default" id="kt_builder_page_width_default" name="layout-builder[layout][app][general][page-width]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_width_default">Default</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" checked="checked" value="fluid" id="kt_builder_page_width_fluid" name="layout-builder[layout][app][general][page-width]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_width_fluid">Fluid</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" value="fixed" id="kt_builder_page_width_fixed" name="layout-builder[layout][app][general][page-width]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_width_fixed">Fixed</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Menu Icon</h4>
                                        <div class="fs-7 fw-semibold text-muted">Sidebar menu icon options</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid me-7">
                                            <input class="form-check-input w-20px h-20px" type="radio" checked="checked" value="svg" id="kt_builder_icon_svg" name="layout-builder[layout][app][sidebar][default][menu][icon-type]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_icon_svg">SVG Duotone</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid me-7">
                                            <input class="form-check-input w-20px h-20px" type="radio" value="font" id="kt_builder_icon_font" name="layout-builder[layout][app][sidebar][default][menu][icon-type]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_icon_font">Font Icons</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Page Loader</h4>
                                        <div class="fs-7 fw-semibold text-muted">Display page loading indicator</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" value="none" id="kt_builder_page_loader_type_none" name="layout-builder[layout][app][page-loader][type]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_none">None</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" value="default" id="kt_builder_page_loader_type_default" name="layout-builder[layout][app][page-loader][type]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_default">Default</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" value="spinner-message" id="kt_builder_page_loader_type_spinner-message" name="layout-builder[layout][app][page-loader][type]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_spinner-message">Message</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-7">
                                            <input class="form-check-input" type="radio" checked="checked" value="spinner-logo" id="kt_builder_page_loader_type_spinner-logo" name="layout-builder[layout][app][page-loader][type]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_page_loader_type_spinner-logo">Logo</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane" id="kt_builder_layout">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-dark">Layouts</h4>
                                    <span class="fw-semibold text-muted fs-7 lh-1">4 main layout options.</span>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Options-->
                                <div class="row gy-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="/metronic8/demo1/assets/media/misc/layout/dark-sidebar.png" class="mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="dark-sidebar" name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-800">Dark Sidebar</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success active">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="/metronic8/demo1/assets/media/misc/layout/light-sidebar.png" class="mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" checked="checked" value="light-sidebar" name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-800">Light Sidebar</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="/metronic8/demo1/assets/media/misc/layout/dark-header.png" class="mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="dark-header" name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-800">Dark Header</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-3">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="/metronic8/demo1/assets/media/misc/layout/light-header.png" class="mw-100" alt="" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="light-header" name="layout-builder[layout][app][general][layout]" />
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-800">Light Header</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane" id="kt_builder_sidebar">
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack d-none">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Fixed</h4>
                                        <div class="fs-7 fw-semibold text-muted">Fixed sidebar mode</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][fixed][desktop]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" checked="checked" value="true" name="layout-builder[layout][app][sidebar][default][fixed][desktop]" id="kt_builder_sidebar_fixed_desktop" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_fixed_desktop"></label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6 d-none"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Minimize</h4>
                                        <div class="fs-7 fw-semibold text-muted">Sidebar minimize mode</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex align-items-center justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][enabled]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][enabled]" id="kt_builder_sidebar_minimize_desktop_enabled" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_enabled" data-bs-toggle="tooltip" title="Enable Sidebar minimize toggle">Minimize Toggle</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][hoverable]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][hoverable]" id="kt_builder_sidebar_minimize_desktop_hoverable" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_hoverable" data-bs-toggle="tooltip" title="Expand minimized sidebar on hover">Hoverable</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check info-->
                                        <i class="fas fa-exclamation-circle text-gray-400 ms-2 fs-7" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-trigger="hover focus" data-bs-content='Add &lt;code&gt;data-kt-app-sidebar-hoverable="on"&lt;/code&gt; attribute to the body element to enable the hoverable sidebar menu.'></i>
                                        <!--end::Check info-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][default]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" checked="checked" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][default]" id="kt_builder_sidebar_minimize_desktop_default" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_default" data-bs-toggle="tooltip" title="Set Sidebar minimized by default">Default Minimized</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check info-->
                                        <i class="fas fa-exclamation-circle text-gray-400 ms-2 fs-7" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-trigger="hover focus" data-bs-content='&lt;ul class="px-5 py-0 m-0"&gt; &lt;li class="py-2"&gt;Add &lt;code&gt;data-kt-app-sidebar-minimize="on"&lt;/code&gt; attribute on the body element.&lt;/li&gt; &lt;li class="py-2"&gt;Add &lt;code&gt;active&lt;/code&gt; class on the toggle element.&lt;/li&gt; &lt;li class="py-2"&gt;Set &lt;code&gt;data-kt-toggle-state="active"&lt;/code&gt; attribute on the toggle element.&lt;/li&gt; &lt;/ul&gt;'></i>
                                        <!--end::Check info-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane active" id="kt_builder_header">
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Fixed</h4>
                                        <div class="fs-7 fw-semibold text-muted">Fixed header mode</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch me-10">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][header][default][fixed][desktop]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" checked="checked" value="true" name="layout-builder[layout][app][header][default][fixed][desktop]" id="kt_builder_header_fixed_desktop" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_header_fixed_desktop">Desktop Mode</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][header][default][fixed][mobile]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" checked="checked" value="true" name="layout-builder[layout][app][header][default][fixed][mobile]" id="kt_builder_header_fixed_mobile" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_header_fixed_mobile">Mobile Mode</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Content</h4>
                                        <div class="fs-7 fw-semibold text-muted">Header content type</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm ms-10">
                                            <input class="form-check-input" type="radio" value="menu" id="kt_builder_header_content_menu" name="layout-builder[layout][app][header][default][content]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_header_content_menu">Menu</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-solid form-check-sm ms-10">
                                            <input class="form-check-input" type="radio" checked="checked" value="page-title" id="kt_builder_header_content_page-title" name="layout-builder[layout][app][header][default][content]" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_builder_header_content_page-title">Page Title</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Page Title</h4>
                                        <div class="fs-7 fw-semibold text-muted">Page title layout options</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-check-sm me-10">
                                            <input class="form-check-input" type="radio" checked="checked" value="column" name="layout-builder[layout][app][page-title][direction]" id="kt_builder_page_title_direction_column" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_page_title_direction_column" data-bs-toggle="tooltip" title="Page title, description and breadcrumbs are stacked">Column</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success">
                                            <input class="form-check-input" type="radio" value="row" name="layout-builder[layout][app][page-title][direction]" id="kt_builder_page_title_direction_row" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_page_title_direction_row" data-bs-toggle="tooltip" title="Page title, description and breadcrumbs are laid out&nbsp;in&nbsp;a&nbsp;line">Row</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane" id="kt_builder_toolbar">
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Display</h4>
                                        <div class="fs-7 fw-semibold text-muted">Enable or disable Toolbar</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][display]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][toolbar][display]" id="kt_builder_toolbar_display" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_toolbar_display"></label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Fixed</h4>
                                        <div class="fs-7 fw-semibold text-muted">Fixed toolbar mode</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch me-10">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][fixed][desktop]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][toolbar][fixed][desktop]" id="kt_builder_toolbar_fixed_desktop" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_toolbar_fixed_desktop">Desktop Mode</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][fixed][mobile]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][toolbar][fixed][mobile]" id="kt_builder_toolbar_fixed_mobile" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_toolbar_fixed_mobile">Mobile Mode</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-dark">Layout</h4>
                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">Select a toolbar layout</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Layout-->
                                <div data-kt-buttons="true" data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success active mb-10">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper">
                                            <img src="/metronic8/demo1/assets/media/misc/layout/toolbar-classic.png" class="mw-100" alt="" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                            <input class="form-check-input" type="radio" checked="checked" value="classic" name="layout-builder[layout][app][toolbar][layout]" />
                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-800">Classic</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success mb-10">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper">
                                            <img src="/metronic8/demo1/assets/media/misc/layout/toolbar-saas.png" class="mw-100" alt="" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                            <input class="form-check-input" type="radio" value="saas" name="layout-builder[layout][app][toolbar][layout]" />
                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-800">SaaS</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success mb-10">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper">
                                            <img src="/metronic8/demo1/assets/media/misc/layout/toolbar-accounting.png" class="mw-100" alt="" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                            <input class="form-check-input" type="radio" value="accounting" name="layout-builder[layout][app][toolbar][layout]" />
                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-800">Accounting</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success mb-10">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper">
                                            <img src="/metronic8/demo1/assets/media/misc/layout/toolbar-extended.png" class="mw-100" alt="" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                            <input class="form-check-input" type="radio" value="extended" name="layout-builder[layout][app][toolbar][layout]" />
                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-800">Extended</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label class="form-check-image form-check-success mb-10">
                                        <!--begin::Image-->
                                        <div class="form-check-wrapper">
                                            <img src="/metronic8/demo1/assets/media/misc/layout/toolbar-reports.png" class="mw-100" alt="" />
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                            <input class="form-check-input" type="radio" value="reports" name="layout-builder[layout][app][toolbar][layout]" />
                                            <!--begin::Label-->
                                            <div class="form-check-label text-gray-800">Reports</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Layout-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane" id="kt_builder_footer">
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-stack">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column">
                                        <h4 class="fw-bold text-dark">Fixed</h4>
                                        <div class="fs-7 fw-semibold text-muted">Fixed footer mode</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Option-->
                                    <div class="d-flex align-items-center justify-content-end">
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][footer][default][fixed][desktop]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][footer][fixed][desktop]" id="kt_builder_footer_fixed_desktop" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_footer_fixed_desktop">Desktop Mode</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check info-->
                                        <i class="fas fa-exclamation-circle text-gray-400 ms-2 fs-7" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-trigger="hover focus" data-bs-content='Add &lt;code&gt;data-kt-app-footer-fixed="on"&lt;/code&gt; attribute to the body element to enable the fixed footer mode for desktop'></i>
                                        <!--end::Check info-->
                                        <!--begin::Check-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success form-switch ms-10">
                                            <input type="hidden" value="false" name="layout-builder[layout][app][footer][fixed][mobile]" />
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][footer][fixed][mobile]" id="kt_builder_footer_fixed_mobile" />
                                            <!--begin::Label-->
                                            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_footer_fixed_mobile">Mobile Mode</label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Check-->
                                        <!--begin::Check info-->
                                        <i class="fas fa-exclamation-circle text-gray-400 ms-2 fs-7" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true" data-bs-trigger="hover focus" data-bs-content='Add &lt;code&gt;data-kt-app-footer-fixed-mobile="on"&lt;/code&gt; attribute to the body element to enable the fixed footer mode for mobile'></i>
                                        <!--end::Check info-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane d-none" id="kt_builder_engage"></div>
                            <!--end::Tab pane-->
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer d-flex py-8">
                        <input type="hidden" id="kt_layout_builder_tab" name="layout-builder[tab]" value="kt_builder_header" />
                        <input type="hidden" id="kt_layout_builder_action" name="layout-builder[action]" />
                        <button type="button" id="kt_layout_builder_preview" class="btn btn-primary me-2">
                            <span class="indicator-label">Preview</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="button" id="kt_layout_builder_export" class="btn btn-light me-2">
                            <span class="indicator-label">Export</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="button" id="kt_layout_builder_reset" class="btn btn-active-light btn-color-muted">
                            <span class="indicator-label">Reset</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</x-chat-layout>