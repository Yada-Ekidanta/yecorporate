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
            <!--begin::Login sessions-->
            <div class="card mb-5 mb-lg-10">
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
            <!--begin::Card-->
            <div class="card pt-4">
                <!--begin::Card header-->
                <div class="card-header border-0">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Logs</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-sm btn-light-primary">
                        <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
                                <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
                                <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Download Report</button>
                        <!--end::Button-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-0">
                    <!--begin::Table wrapper-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
                            <!--begin::Table body-->
                            <tbody>
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_6463_4714/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">21 Feb 2022, 2:40 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_8077_1103/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">10 Mar 2022, 6:05 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_7988_6683/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">10 Nov 2022, 2:40 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_7197_7971/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Jul 2022, 9:23 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_8077_1103/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">10 Nov 2022, 10:30 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_6761_2470/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Oct 2022, 8:43 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-success">200 OK</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoices/in_3948_8521/payment</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">19 Aug 2022, 11:05 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">404 WRN</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/customer/c_637dc7cc8eee7/not_found</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Oct 2022, 6:43 am</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-danger">500 ERR</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/invoice/in_8077_1103/invalid</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">25 Oct 2022, 8:43 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Badge=-->
                                    <td class="min-w-70px">
                                        <div class="badge badge-light-warning">404 WRN</div>
                                    </td>
                                    <!--end::Badge=-->
                                    <!--begin::Status=-->
                                    <td>POST /v1/customer/c_637dc7cc8eee8/not_found</td>
                                    <!--end::Status=-->
                                    <!--begin::Timestamp=-->
                                    <td class="pe-0 text-end min-w-200px">24 Jun 2022, 10:10 pm</td>
                                    <!--end::Timestamp=-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</x-office-layout>