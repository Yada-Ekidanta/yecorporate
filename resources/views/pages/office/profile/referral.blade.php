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
            <!--begin::Referral program-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Body-->
                <div class="card-body py-10">
                    <h2 class="mb-9">Referral Program</h2>
                    <!--begin::Overview-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                            <h4 class="mb-0">How to use Referral Program</h4>
                            <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Use images to enhance your post, improve its flow, add humor
                            <br />and explain complex topics</p>
                            <a href="#" class="btn btn-light btn-active-light-primary fw-bold">Get Started</a>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <h4 class="text-gray-800 mb-0">Your Referral Link</h4>
                            <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">Plan your blog post by choosing a topic, creating an outline conduct
                            <br />research, and checking facts</p>
                            <div class="d-flex">
                                <input id="kt_referral_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="https://keenthemes.com/reffer/?refid=345re66787k8" />
                                <button id="kt_referral_program_link_copy_btn" class="btn btn-light btn-active-light-primary fw-bold flex-shrink-0" data-clipboard-target="#kt_referral_link_input">Copy Link</button>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Overview-->
                    <!--begin::Stats-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-info pb-1 px-2">Net Earnings</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                <span data-kt-countup="true" data-kt-countup-value="63,240.00">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-success pb-1 px-2">Balance</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                <span data-kt-countup="true" data-kt-countup-value="8,530.00">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-danger pb-1 px-2">Avg Deal Size</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                <span data-kt-countup="true" data-kt-countup-value="2,600">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col">
                            <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                <span class="fs-4 fw-semibold text-primary pb-1 px-2">Referral Signups</span>
                                <span class="fs-lg-2tx fw-bold d-flex justify-content-center">$
                                <span data-kt-countup="true" data-kt-countup-value="783&quot;">0</span></span>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Stats-->
                    <!--begin::Info-->
                    <p class="fs-5 fw-semibold text-gray-600 py-6">Writing headlines for blog posts is as much an art as it is a science, and probably warrants its own post, but for now, all I’d advise is experimenting with what works for your audience, especially if it’s not resonating with your audience</p>
                    <!--end::Info-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
                                <path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Withdraw Your Money to a Bank Account</h4>
                                <div class="fs-6 text-gray-700 pe-7">Withdraw money securily to your bank account. Commision is $25 per transaction under $50,000</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Withdraw Money</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Referral program-->
            <!--begin::Referred users-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3>Referred Users</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_tab_1" class="nav-link text-active-gray-800 me-4 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">Month</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_tab_2" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2">2022</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_tab_3" class="nav-link text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_referrals_3">2021</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Tab content-->
                <div id="kt_referred_users_tab_content" class="tab-content">
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered table-flush align-middle gy-6">
                                <!--begin::Thead-->
                                <thead class="border-bottom border-gray-200 fs-6 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-125px ps-9">Order ID</th>
                                        <th class="min-w-125px px-0">User</th>
                                        <th class="min-w-125px">Date</th>
                                        <th class="min-w-125px">Bonus</th>
                                        <th class="min-w-125px ps-0">Profit</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                        </td>
                                        <td>Nov 24, 2020</td>
                                        <td>26%</td>
                                        <td class="text-success">$1,200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">578433345</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                        </td>
                                        <td>Aug 10, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                        </td>
                                        <td>May 06, 2020</td>
                                        <td>18%</td>
                                        <td class="text-success">$940.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">098669322</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                        </td>
                                        <td>Apr 30, 2020</td>
                                        <td>43%</td>
                                        <td class="text-success">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">245899092</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                        </td>
                                        <td>Feb 29, 2020</td>
                                        <td>21%</td>
                                        <td class="text-success">$380.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">505432578</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                        </td>
                                        <td>Jan 08, 2020</td>
                                        <td>47%</td>
                                        <td class="text-success">$2,050.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">256899235</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                        </td>
                                        <td>Jan 02, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$820.00</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_2" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered table-flush align-middle gy-6">
                                <!--begin::Thead-->
                                <thead class="border-bottom border-gray-200 fs-6 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-125px ps-9">Order ID</th>
                                        <th class="min-w-125px px-0">User</th>
                                        <th class="min-w-125px">Date</th>
                                        <th class="min-w-125px">Bonus</th>
                                        <th class="min-w-125px ps-0">Profit</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">256899235</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                        </td>
                                        <td>Jan 02, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$820.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">245899092</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                        </td>
                                        <td>Feb 29, 2020</td>
                                        <td>21%</td>
                                        <td class="text-success">$380.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">505432578</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                        </td>
                                        <td>Jan 08, 2020</td>
                                        <td>47%</td>
                                        <td class="text-success">$2,050.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                        </td>
                                        <td>May 06, 2020</td>
                                        <td>18%</td>
                                        <td class="text-success">$940.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">578433345</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                        </td>
                                        <td>Aug 10, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">098669322</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                        </td>
                                        <td>Apr 30, 2020</td>
                                        <td>43%</td>
                                        <td class="text-success">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                        </td>
                                        <td>Nov 24, 2020</td>
                                        <td>26%</td>
                                        <td class="text-success">$1,200.00</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_3" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered table-flush align-middle gy-6">
                                <!--begin::Thead-->
                                <thead class="border-bottom border-gray-200 fs-6 fw-bold bg-lighten">
                                    <tr>
                                        <th class="min-w-125px ps-9">Order ID</th>
                                        <th class="min-w-125px px-0">User</th>
                                        <th class="min-w-125px">Date</th>
                                        <th class="min-w-125px">Bonus</th>
                                        <th class="min-w-125px ps-0">Profit</th>
                                    </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-semibold text-gray-600">
                                    <tr>
                                        <td class="ps-9">578433345</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                                        </td>
                                        <td>Aug 10, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Robert Smith</a>
                                        </td>
                                        <td>May 06, 2020</td>
                                        <td>18%</td>
                                        <td class="text-success">$940.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">256899235</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Juan Carlos</a>
                                        </td>
                                        <td>Jan 02, 2020</td>
                                        <td>35%</td>
                                        <td class="text-success">$820.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">245899092</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Paul Johnson</a>
                                        </td>
                                        <td>Feb 29, 2020</td>
                                        <td>21%</td>
                                        <td class="text-success">$380.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">505432578</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Sarah Jones</a>
                                        </td>
                                        <td>Jan 08, 2020</td>
                                        <td>47%</td>
                                        <td class="text-success">$2,050.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">098669322</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Williams Brown</a>
                                        </td>
                                        <td>Apr 30, 2020</td>
                                        <td>43%</td>
                                        <td class="text-success">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="ps-9">678935899</td>
                                        <td class="ps-0">
                                            <a href="" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                                        </td>
                                        <td>Nov 24, 2020</td>
                                        <td>26%</td>
                                        <td class="text-success">$1,200.00</td>
                                    </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                </div>
                <!--end::Tab content-->
            </div>
            <!--end::Referred users-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</x-office-layout>