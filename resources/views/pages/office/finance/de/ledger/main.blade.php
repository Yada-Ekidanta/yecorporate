<x-office-layout title="Ledger Summary">
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
                    <li class="breadcrumb-item text-muted">Ledger Summary</li>
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
                                                        <label class="text-type" for="start_date">Start Date</label>
                                                        {{ Form::date('start_date',$filter['startDateRange'], array('class' => 'month-btn form-control')) }}
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                    <div class="btn-box">
                                                        <label class="text-type" for="end_date">End Date</label>
                                                        {{ Form::date('end_date',$filter['endDateRange'], array('class' => 'month-btn form-control')) }}
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                                    <div class="btn-box">
                                                        <label class="text-type" for="account">Account</label>
                                                        {{ Form::select('account',$chart,isset($_GET['account'])?$_GET['account']:'', array('class' => 'form-control select')) }}                                        </div>
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
                            <input type="hidden" value="Ledger.' '.'Report of'.' '.$filter['startDateRange'].' to '.$filter['endDateRange']}}" id="filename">
                            <div class="card p-4 mb-4">
                                <h7 class="report-text gray-text mb-0">Report</h7>
                                <h6 class="report-text mb-0">Ledger Summary</h6>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card p-4 mb-4">
                                <h7 class="report-text gray-text mb-0">Duration</h7>
                                <h6 class="report-text mb-0">{{$filter['startDateRange'].' to '.$filter['endDateRange']}}</h6>
                            </div>
                        </div>
                    </div>
                    
                    @if(!empty($chart))
                        <div class="row mt-3">
                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">{{__('Account Name')}} :</h7>
                                    <h6 class="report-text mb-0">{{$chart->name}}</h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">{{__('Account Code')}} :</h7>
                                    <h6 class="report-text mb-0">{{$chart->code}}</h6>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">{{__('Total Debit')}} :</h7>
                                    <h6 class="report-text mb-0">{{($filter['debit'])}}</h6>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">{{__('Total Credit')}} :</h7>
                                    <h6 class="report-text mb-0">{{($filter['credit'])}}</h6>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card p-4 mb-4">
                                    <h7 class="report-text gray-text mb-0">{{__('Balance')}} :</h7>
                                    <h6 class="report-text mb-0">{{($filter['balance']>0)?__('Cr').'. '.(abs($filter['balance'])):__('Dr').'. '.(abs($filter['balance']))}}</h6>
                                </div>
                            </div>
                        </div>
        @endif
                    <div class="row mb-4">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-body table-border-style">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th> #</th>
                                                <th> Transaction Date</th>
                                                <th> Create At</th>
                                                <th> Description</th>
                                                <th> Debit</th>
                                                <th> Credit</th>
                                                <th> Balance</th>
                                            </tr>
                                            </thead>
                                                <tbody>
                                                    @php $balance=0;$debit=0;$credit=0; @endphp
                                                    @foreach($journalItems as  $item)
                                                        <tr>
                                                            <td class="Id">
                                                                <a href="{{ route('journal-entry.show',$item->journal) }}" class="btn btn-outline-primary">{{ AUth::user()->journalNumberFormat($item->journal_id) }}</a>
                                                            </td>

                                                            <td>{{($item->transaction_date)}}</td>
                                                            <td>{{($item->created_at)}}</td>
                                                            <td>{{!empty($item->description)?$item->description:'-'}}</td>
                                                            <td>{{($item->debit)}}</td>
                                                            <td>{{($item->credit)}}</td>
                                                            <td>
                                                                @if($item->debit>0)
                                                                    @php $debit+=$item->debit @endphp
                                                                @else
                                                                    @php $credit+=$item->credit @endphp
                                                                @endif

                                                                @php $balance= $credit-$debit @endphp
                                                                @if($balance>0)
                                                                    {{__('Cr').'. '.($balance)}}

                                                                @elseif($balance<0)
                                                                    {{__('Dr').'. '.(abs($balance))}}
                                                                @else
                                                                    {{(0)}}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    @section('custom_js')
        <script>
        var filename = $('#filename').val();

        function saveAsPDF() {
            var element = document.getElementById('printableArea');
            var opt = {
                margin: 0.3,
                filename: filename,
                image: {type: 'jpeg', quality: 1},
                html2canvas: {scale: 4, dpi: 72, letterRendering: true},
                jsPDF: {unit: 'in', format: 'A2'}
            };
            html2pdf().set(opt).from(element).save();
        }
            load_list(1);
        </script>
    @endsection
</x-office-layout>