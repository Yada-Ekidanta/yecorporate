<x-office-layout title="Balance Sheet">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 animation-class">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{config('app.name')}}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('office.dashboard.index')}}" class="text-muted text-hover-primary menu-link">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Master</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Balance Sheet</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3 d-none">
                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6 animation-class delay3">
        <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class=" multi-collapse mt-2 " id="multiCollapseExample1">
                                <div class="card">
                                    <div class="card-body">
                                    <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.finance.chart.index')}}" action="{{$data->id ? route('office.finance.chart.update',$data->id) : route('office.finance.chart.store')}}">
                                        <div class="row align-items-center justify-content-end">
                                            <div class="col-xl-10">
                                                <div class="row">

                                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                        <div class="btn-box">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                        <div class="btn-box">
                                                        </div>
                                                    </div>



                                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                        <div class="btn-box">
                                                            {{ Form::label('start_date', __('Start Date'),['class'=>'text-type']) }}
                                                            {{ Form::date('start_date',$filter['startDateRange'], array('class' => 'month-btn form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                        <div class="btn-box">
                                                            {{ Form::label('end_date', __('End Date'),['class'=>'text-type']) }}
                                                            {{ Form::date('end_date',$filter['endDateRange'], array('class' => 'month-btn form-control')) }}
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="row">
                                                    <div class="col-auto mt-3">
                                                        <a href="#" class="btn btn-sm btn-primary" onclick="document.getElementById('report_ledger').submit(); return false;" data-bs-toggle="tooltip" title="{{__('Apply')}}" data-original-title="{{__('apply')}}">
                                                            <span class="btn-inner--icon"><i class="ti ti-search"></i></span>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-danger " data-bs-toggle="tooltip"  title="{{ __('Reset') }}" data-original-title="{{__('Reset')}}">
                                                            <span class="btn-inner--icon"><i class="ti ti-refresh text-white-off "></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                <div id="printableArea">
                    <div class="row mt-3">
                        <div class="col">
                            <input type="hidden" value="{{__('Ledger').' '.'Report of'.' '.$filter['startDateRange'].' to '.$filter['endDateRange']}}" id="filename">
                            <div class="card p-4 mb-4">
                                <h7 class="report-text gray-text mb-0">{{__('Report')}} :</h7>
                                <h6 class="report-text mb-0">{{__('Balance Sheet')}}</h6>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card p-4 mb-4">
                                <h7 class="report-text gray-text mb-0">{{__('Duration')}} :</h7>
                                <h6 class="report-text mb-0">{{$filter['startDateRange'].' to '.$filter['endDateRange']}}</h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        @foreach($chartAccounts as $type => $accounts)
                            @php $totalNetAmount=0; @endphp

                            @foreach($accounts as  $accountData)
                                @foreach($accountData['account'] as  $account)
                                    @php $totalNetAmount+=$account['netAmount']; @endphp
                                @endforeach
                            @endforeach
                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">{{__('Total'.' '.$type)}}</h7>
                                    <h6 class="report-text mb-0">
                                        @if($totalNetAmount<0)
                                            {{__('Dr').'. '.(abs($totalNetAmount))}}
                                        @elseif($totalNetAmount>0)
                                            {{__('Cr').'. '.($totalNetAmount)}}
                                        @else
                                            {{(0)}}
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mb-4">
                        @foreach($chartAccounts as $type => $accounts)
                            <div class="col-lg-12 mb-4">
                                <h5 class="text-muted">{{$type}}</h5>
                                <div class="row">
                                    @foreach($accounts as $account)

                                        <div class="col-lg-4 col-md-4 mb-4">
                                            <div class="card">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="2" width="80%"><h6> {{$account['subType']}}</h6></th>
                                                    </tr>
                                                    <tr>
                                                        <th width="80%"> {{__('Account')}}</th>
                                                        <th> {{__('Amount')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="balance-sheet-body">
                                                    @php $totalCredit=0;$totalDebit=0;@endphp
                                                    @foreach($account['account'] as  $record)
                                                        @php
                                                            $totalCredit+=$record['totalCredit'];
                                                            $totalDebit+=$record['totalDebit'];
                                                        @endphp
                                                        <tr>
                                                            <td>{{$record['account_name']}}</td>
                                                            <td>
                                                                @if($record['netAmount']<0)
                                                                    {{__('Dr').'. '.(abs($record['netAmount']))}}
                                                                @elseif($record['netAmount']>0)
                                                                    {{__('Cr').'. '.($record['netAmount'])}}
                                                                @else
                                                                    {{(0)}}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                    <thead>
                                                    <tr>
                                                        <th>{{__('Total').' '.$account['subType']}}</th>
                                                        <th>
                                                            @php $total= $totalCredit-$totalDebit; @endphp
                                                            @if($total<0)
                                                                {{__('Dr').'. '.(abs($total))}}
                                                            @elseif($total>0)
                                                                {{__('Cr').'. '.($total)}}
                                                            @else
                                                                {{(0)}}
                                                            @endif
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
    
    @section('custom_js')
        <script>
            load_list(1);
        </script>
    @endsection
</x-office-layout>