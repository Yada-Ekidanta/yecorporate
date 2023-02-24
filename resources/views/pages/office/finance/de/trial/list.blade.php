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
                            <div class="col-auto mt-3">
                                <div class="row">
                                    <div class="col-auto">

                                        <a href="#" class="btn btn-sm btn-primary" onclick="document.getElementById('report_trial_balance').submit(); return false;" data-bs-toggle="tooltip" title="Apply')}}" data-original-title="apply')}}">
                                            <span class="btn-inner--icon"><i class="ti ti-search"></i></span>
                                        </a>
                                        <a href="{{route('office.finance.chart.index')}}" class="btn btn-sm btn-danger " data-bs-toggle="tooltip"  title="{{ __('Reset') }}" data-original-title="Reset')}}">
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
<div id="printableArea">
    <div class="row mt-4">
        <div class="col">
            <input type="hidden" value="Trial Balance .' '.'Report of'.' '.$filter['startDateRange'].' to '.$filter['endDateRange']}}" id="filename">
            <div class="card p-4 mb-4">
                <h7 class="report-text gray-text mb-0">Report :</h7>
                <h5 class="report-text mb-0">Trial Balance Summary</h5>
            </div>
        </div>

        <div class="col">
            <div class="card p-4 mb-4">
                <h7 class="report-text gray-text mb-0">Duration :</h7>
                <h5 class="report-text mb-0">{{$filter['startDateRange'].' to '.$filter['endDateRange']}}</h5>
            </div>
        </div>
    </div>
    @if(!empty($account))
        <div class="row mt-4">
            <div class="col">
                <div class="card p-4 mb-4">
                    <h5 class="report-text gray-text mb-0">Total Credit :</h5>
                    <h5 class="report-text mb-0">0</h5>
                </div>
            </div>
            <div class="col">
                <div class="card p-4 mb-4">
                    <h5 class="report-text gray-text mb-0">Total Debit :</h5>
                    <h5 class="report-text mb-0">0</h5>
                </div>
            </div>
        </div>
    @endif
    <div class="row mb-4">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th>ACCOUNT NAME</th>
                                    <th>DEBIT TOTAL</th>
                                    <th>CREDIT TOTAL</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                        @php  $debitTotal=0;$creditTotal=0;@endphp
</div>
@section('js')
<script type="text/javascript" src="{{ asset('js/html2pdf.bundle.min.js') }}"></script>
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

</script>
@endsection