<x-office-layout title="My Profile">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Account Overview</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('office.dashboard.index')}}" class="text-muted text-hover-primary menu-link">{{config('app.name')}}</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Account</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    @include('pages.office.profile.details')
                    <!--end::Details-->
                    <!--begin::Navs-->
                    @include('pages.office.profile.menu')
                    <!--end::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::API Overview-->
            <div class="card mb-5 mb-xxl-10">
                <!--begin::Header-->
                <div class="card-header">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3>API Overview</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" checked="checked" value="1" />
                            <span class="form-check-label text-muted">Test mode</span>
                        </label>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-10">
                    <!--begin::Row-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-6 pb-10 pb-lg-0">
                            <h2>How to set API</h2>
                            <p class="fs-6 fw-semibold text-gray-600 py-2">Use images to enhance your post, improve its flow, add humor
                            <br />and explain complex topics</p>
                            <a href="#" class="btn btn-light btn-active-light-primary">Get Started</a>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                            <h2>Developer Tools</h2>
                            <p class="fs-6 fw-semibold text-gray-600 py-2">Plan your blog post by choosing a topic, creating an outline conduct
                            <br />research, and checking facts</p>
                            <a href="#" class="btn btn-light btn-active-light-primary">Create Rule</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Notice-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
                                <path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing and create outstanding products to serve your clients
                                <a class="fw-bold" href="#">Learn More</a>.</div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--end::Notice-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::API overview-->
            <!--begin::Login sessions-->
            <div class="card mb-5 mb-xxl-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Heading-->
                    <div class="card-title">
                        <h3>Login Sessions</h3>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <div class="my-1 me-4">
                            <!--begin::Select-->
                            <select class="form-select form-select-sm form-select-solid w-125px" data-control="select2" data-placeholder="Select Hours" data-hide-search="true">
                                <option value="1" selected="selected">1 Hours</option>
                                <option value="2">6 Hours</option>
                                <option value="3">12 Hours</option>
                                <option value="4">24 Hours</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <a href="#" class="btn btn-sm btn-primary my-1">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                <tr>
                                    <th class="min-w-250px">Location</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="min-w-150px">Device</th>
                                    <th class="min-w-150px">IP Address</th>
                                    <th class="min-w-150px">Time</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fw-6 fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">USA(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>Chrome - Windows</td>
                                    <td>236.125.56.78</td>
                                    <td>2 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">United Kingdom(10)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>Safari - Mac OS</td>
                                    <td>236.125.56.78</td>
                                    <td>10 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Norway(-)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-bold">ERR</span>
                                    </td>
                                    <td>Firefox - Windows</td>
                                    <td>236.125.56.10</td>
                                    <td>20 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Japan(112)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">OK</span>
                                    </td>
                                    <td>iOS - iPhone Pro</td>
                                    <td>236.125.56.54</td>
                                    <td>30 mins ago</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-hover-primary text-gray-600">Italy(5)</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-warning fs-7 fw-bold">WRN</span>
                                    </td>
                                    <td>Samsung Noted 5- Android</td>
                                    <td>236.100.56.50</td>
                                    <td>40 mins ago</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Login sessions-->
            <!--begin::API keys-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3>API Keys</h3>
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_api_keys_table">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                                <tr>
                                    <th class="min-w-175px ps-9">Label</th>
                                    <th class="min-w-250px px-0">API Keys</th>
                                    <th class="min-w-125px"></th>
                                    <th class="min-w-100px">Created</th>
                                    <th class="min-w-100px">Status</th>
                                    <th class="w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-semibold text-gray-600">
                                <tr>
                                    <td class="ps-9">none set</td>
                                    <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>Nov 01, 2020</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Navitare</td>
                                    <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>Sep 27, 2020</td>
                                    <td>
                                        <span class="badge badge-light-primary fs-7 fw-semibold">Review</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Docs API Key</td>
                                    <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>Jul 09, 2020</td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-semibold">Inactive</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Identity Key</td>
                                    <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd3568</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>May 14, 2020</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Remore Interface</td>
                                    <td data-bs-target="license" class="ps-0">hhet6454788gfg555hhh4</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>Dec 30, 2019</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">none set</td>
                                    <td data-bs-target="license" class="ps-0">fftt456765gjkkjhi83093985</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>Inactive</td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Test App</td>
                                    <td data-bs-target="license" class="ps-0">jk076590ygghgh324vd33</td>
                                    <td>
                                        <button data-action="copy" class="btn btn-active-color-primary btn-icon btn-sm btn-outline-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen054.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.5" d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z" fill="currentColor" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                    </td>
                                    <td>Apr 03, 2019</td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-semibold">Active</span>
                                    </td>
                                    <td class="pe-9">
                                        <div class="w-100px position-relative">
                                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Options" data-hide-search="true">
                                                <option value=""></option>
                                                <option value="2">Options 1</option>
                                                <option value="3">Options 2</option>
                                                <option value="4">Options 3</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::API keys-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</x-office-layout>