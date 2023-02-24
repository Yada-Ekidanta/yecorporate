<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Budget Planner">
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
                    <li class="breadcrumb-item text-muted">Budget Planner</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{$data->id ? 'Update' : 'Create'}}</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.finance.budget.index')}}" action="{{$data->id ? route('office.finance.budget.update',$data->id) : route('office.finance.budget.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Budget</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.finance.budget.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor"/>
                                            <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-none card-box mt-3">
                        <div class="card-body">
                            {{ Form::open(array('url' => 'budget','class'=>'w-100')) }}
                            <div class="row">

                                <div class="form-group col-md-4">
                                    {{ Form::label('name', __('Name'),['class'=>'form-label']) }}
                                    {{ Form::text('name',null, array('class' => 'form-control','required'=>'required')) }}
                                </div>

                                <div class="form-group col-md-4">
                                    {{ Form::label('period', __('Budget Period'),['class'=>'form-label']) }}
                                    {{ Form::select('period', $periods,null, array('class' => 'form-control select period','required'=>'required')) }}

                                </div>

                                <div class="form-group  col-md-4">
                                    <div class="btn-box">
                                        {{ Form::label('year', __('Year'),['class'=>'form-label']) }}
                                        {{ Form::select('year',$yearList,isset($_GET['year'])?$_GET['year']:'', array('class' => 'form-control select')) }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-border-style">

                                <!---- Start Monthly Budget ------------------------------------------------------------------------>
                                <div class="table-responsive budget_plan d-block"  id="monthly">
                                    <table class="table  mb-0" id="dataTable-manual">
                                        <thead>
                                        <tr>
                                            <th>{{__('Category')}}</th>
                                            @foreach($monthList as $month)
                                                <td class="total text-dark">{{__($month)}}</td>
                                            @endforeach
                                            <th>{{__('Total :')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!------------------   Income Category ----------------------------------->
                                        
                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Income :')}}</span></th>
                                        </tr>

                                        @foreach ($incomeproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                    @foreach($monthList as $month)
                                                    <td>
                                                        <input type="number" style="padding-right: 2px; padding-left: 4px;" class="form-control pl-1 pr-1 income_data {{$month}}_income" data-month="{{$month}}" name="income[{{$productService->id}}][{{$month}}]" value="0" id="income_data_{{$month}}">
                                                    </td>
                                                    @endforeach
                                                <td class="totalIncome text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td class="text-dark">{{__('Total :')}}</td>
                                            @foreach($monthList as $month)
                                                <td>
                                                    <span class="{{$month}}_total_income text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td>
                                                <span class="income text-dark">0.00</span>
                                            </td>
                                        </tr>

                                        <!------------------   Expense Category ----------------------------------->

                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Expense :')}}</span></th>
                                        </tr>

                                        @foreach ($expenseproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                @foreach($monthList as $month)
                                                    <td>
                                                        <input type="number" style="padding-right: 2px; padding-left: 4px;" class="form-control pl-1 pr-1 expense_data {{$month}}_expense" data-month="{{$month}}" name="expense[{{$productService->id}}][{{$month}}]" value="0" id="expense_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="totalExpense text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td  class="text-dark">{{__('Total :')}}</span></td>
                                            @foreach($monthList as $month)
                                                <td>
                                                    <span class="{{$month}}_total_expense text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td>
                                                <span class="expense text-dark">0.00</span>
                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>

                                    <div class="card">
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this Proposal ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.finance.proposal.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                        @endif
                    </div>
                </div>
                                </div>

                                <!---- End Monthly Budget ----->


                                <!---- Start Quarterly Budget ----------------------------------------------------------------------->
                                <div class="table-responsive budget_plan d-none" id="quarterly">
                                    <table class="table mb-0" id="dataTable-manual">
                                        <thead>
                                        <tr>
                                            <th>{{__('Category')}}</th>
                                            @foreach($quarterly_monthlist as $month)
                                                <td class="total text-dark">{{$month}}</td>
                                            @endforeach
                                            <th>{{__('Total :')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!------------------   Income Category ----------------------------------->
                                        <tr>
                                            <th colspan="37" class="text-dark light_blue"><span>{{__('Income :')}}</span></th>
                                        </tr>

                                        @foreach ($incomeproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                @foreach($quarterly_monthlist as $month)
                                                    <td>
                                                        <input type="number" class="form-control income_data {{$month}}_income" data-month="{{$month}}"
                                                            name="income[{{$productService->id}}][{{$month}}]" value="0" id="income_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="text-end totalIncome  text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td class="text-dark">{{__('Total :')}}</td>
                                            @foreach($quarterly_monthlist as $month)
                                                <td>
                                                    <span class="{{$month}}_total_income  text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td class="text-end">
                                                <span class="income  text-dark">0.00</span>
                                            </td>
                                        </tr>



                                        <!------------------   Expense Category ----------------------------------->

                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Expense :')}}</span></th>
                                        </tr>

                                        @foreach ($expenseproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                @foreach($quarterly_monthlist as $month)
                                                    <td>
                                                        <input type="number" class="form-control expense_data {{$month}}_expense" data-month="{{$month}}" name="expense[{{$productService->id}}][{{$month}}]" value="0" id="expense_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="text-end totalExpense  text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td  class="text-dark">{{__('Total :')}}</span></td>
                                            @foreach($quarterly_monthlist as $month)
                                                <td>
                                                    <span class="{{$month}}_total_expense  text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td class="text-end">
                                                <span class="expense  text-dark">0.00</span>
                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>
                                    <div class="modal-footer">
                                        <input type="button" value="{{__('Cancel')}}" onclick="location.href = '{{route("office.finance.budget.index")}}';" class="btn btn-light">
                                        <input type="submit" value="{{__('Create')}}" class="btn  btn-primary">
                                    </div>
                                </div>

                                <!---- End Quarterly Budget ----->


                                <!---Start Half-Yearly Budget --------------------------------------------------------------------->
                                <div class="table-responsive budget_plan d-none" id="half-yearly">
                                    <table class="table  mb-0" id="dataTable-manual">
                                        <thead>
                                        <tr>
                                            <th>{{__('Category')}}</th>
                                            @foreach($half_yearly_monthlist as $month)
                                                <td class="total text-dark">{{$month}}</td>
                                            @endforeach
                                            <th>{{__('Total :')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!------------------   Income Category ----------------------------------->
                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Income :')}}</span></th>
                                        </tr>

                                        @foreach ($incomeproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                @foreach($half_yearly_monthlist as $month)
                                                    <td>
                                                        <input type="number" class="form-control income_data {{$month}}_income" data-month="{{$month}}" name="income[{{$productService->id}}][{{$month}}]" value="0" id="income_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="text-end totalIncome  text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td class="text-dark">{{__('Total :')}}</td>
                                            @foreach($half_yearly_monthlist as $month)
                                                <td>
                                                    <span class="{{$month}}_total_income  text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td class="text-end">
                                                <span class="income text-dark">0.00</span>
                                            </td>
                                        </tr>

                                        <!------------------   Expense Category ----------------------------------->

                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Expense :')}}</span></th>
                                        </tr>

                                        @foreach ($expenseproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                @foreach($half_yearly_monthlist as $month)
                                                    <td>
                                                        <input type="number" class="form-control expense_data {{$month}}_expense" data-month="{{$month}}" name="expense[{{$productService->id}}][{{$month}}]" value="0" id="expense_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="text-end totalExpense text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td  class="text-dark">{{__('Total :')}}</span></td>
                                            @foreach($half_yearly_monthlist as $month)
                                                <td>
                                                    <span class="{{$month}}_total_expense text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td class="text-end">
                                                <span class="expense text-dark">0.00</span>
                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>
                                    <div class="modal-footer">
                                        <input type="button" value="{{__('Cancel')}}" onclick="location.href = '{{route("office.finance.budget.index")}}';" class="btn btn-light">
                                        <input type="submit" value="{{__('Create')}}" class="btn  btn-primary">
                                    </div>
                                </div>

                                <!---End Half-Yearly Budget ----->

                                <!---Start Yearly Budget --------------------------------------------------------------------------------->
                                <div class="table-responsive budget_plan d-none" id="yearly">
                                    <table class="table  mb-0" id="dataTable-manual">
                                        <thead>
                                        <tr>
                                            <th>{{__('Category')}}</th>
                                            @foreach($yearly_monthlist as $month)
                                                <td class="total text-dark">{{$month}}</td>
                                            @endforeach
                                            <th>{{__('Total :')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!------------------   Income Category ----------------------------------->
                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Income :')}}</span></th>
                                        </tr>

                                        @foreach ($incomeproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>

                                                @foreach($yearly_monthlist as $month)

                                                    <td>
                                                        <input type="number" class="form-control income_data {{$month}}_income" data-month="{{$month}}" name="income[{{$productService->id}}][{{$month}}]" value="{{!empty($budget['income_data'][$productService->id][$month])?$budget['income_data'][$productService->id][$month]:0}}" id="income_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="text-end totalIncome text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td class="text-dark">{{__('Total :')}}</td>
                                            @foreach($yearly_monthlist as $month)
                                                <td>
                                                    <span class="{{$month}}_total_income text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td class="text-end">
                                                <span class="income text-dark">0.00</span>
                                            </td>
                                        </tr>

                                        <!------------------   Expense Category ----------------------------------->

                                        <tr>
                                            <th colspan="14" class="text-dark light_blue"><span>{{__('Expense :')}}</span></th>
                                        </tr>

                                        @foreach ($expenseproduct as $productService)
                                            <tr>
                                                <td>{{$productService->name}}</td>
                                                @foreach($yearly_monthlist as $month)
                                                    <td>
                                                        <input type="number" class="form-control expense_data {{$month}}_expense" data-month="{{$month}}" name="expense[{{$productService->id}}][{{$month}}]" value="{{!empty($budget['expense_data'][$productService->id][$month])?$budget['expense_data'][$productService->id][$month]:0}}" id="expense_data_{{$month}}">
                                                    </td>
                                                @endforeach
                                                <td class="text-end totalExpense text-dark">
                                                    0.00
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td  class="text-dark">{{__('Total :')}}</span></td>
                                            @foreach($yearly_monthlist as $month)
                                                <td>
                                                    <span class="{{$month}}_total_expense text-dark">0.00</span>
                                                </td>
                                            @endforeach
                                            <td class="text-end">
                                                <span class="expense text-dark">0.00</span>
                                            </td>

                                        </tr>

                                        </tbody>

                                    </table>
                                    <div class="modal-footer">
                                        <input type="button" value="{{__('Cancel')}}" onclick="location.href = '{{route("office.finance.budget.index")}}';" class="btn btn-light">
                                        <input type="submit" value="{{__('Create')}}" class="btn  btn-primary">
                                </div>
                                </div>

                                <!---End Yearly Budget ----->



                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-office-layout>
@section('costum_js')
    <script>
        //Income Total
        $(document).on('keyup', '.income_data', function () {
            //category wise total
            var el = $(this).parent().parent();
            var inputs = $(el.find('.income_data'));

            var totalincome = 0;
            for (var i = 0; i < inputs.length; i++) {
                var price = $(inputs[i]).val();
                totalincome = parseFloat(totalincome) + parseFloat(price);
            }
            el.find('.totalIncome').html(totalincome);

            // month wise total //
            var month_income = $(this).data('month');
            var month_inputs = $(el.parent().find('.' + month_income+'_income'));
            var month_totalincome = 0;
            for (var i = 0; i < month_inputs.length; i++) {
                var month_price = $(month_inputs[i]).val();
                month_totalincome = parseFloat(month_totalincome) + parseFloat(month_price);
            }
            var month_total_income = month_income + '_total_income';
            el.parent().find('.' + month_total_income).html(month_totalincome);

            //all total //
            var total_inputs = $(el.parent().find('.totalIncome'));
            console.log(total_inputs)
            var income = 0;
            for (var i = 0; i < total_inputs.length; i++) {
                var price = $(total_inputs[i]).html();
                income = parseFloat(income) + parseFloat(price);
            }
            el.parent().find('.income').html(income);

        })


        //Expense Total
        $(document).on('keyup', '.expense_data', function () {
            //category wise total
            var el = $(this).parent().parent();
            var inputs = $(el.find('.expense_data'));

            var totalexpense = 0;
            for (var i = 0; i < inputs.length; i++) {
                var price = $(inputs[i]).val();
                totalexpense = parseFloat(totalexpense) + parseFloat(price);
            }
            el.find('.totalExpense').html(totalexpense);

           // month wise total //
            var month_expense = $(this).data('month');
            var month_inputs = $(el.parent().find('.' + month_expense+'_expense'));
            var month_totalexpense = 0;
            for (var i = 0; i < month_inputs.length; i++) {
                var month_price = $(month_inputs[i]).val();
                month_totalexpense = parseFloat(month_totalexpense) + parseFloat(month_price);
            }
            var month_total_expense = month_expense + '_total_expense';
            el.parent().find('.' + month_total_expense).html(month_totalexpense);

            //all total //
            var total_inputs = $(el.parent().find('.totalExpense'));
            console.log(total_inputs)
            var expense = 0;
            for (var i = 0; i < total_inputs.length; i++) {
                var price = $(total_inputs[i]).html();
                expense = parseFloat(expense) + parseFloat(price);
            }
            el.parent().find('.expense').html(expense);

        })

        //Hide & Show
        $(document).on('change', '.period', function() {
            var period = $(this).val();

        $('.budget_plan').removeClass('d-block');
        $('.budget_plan').addClass('d-none');
        $('#'+ period).removeClass('d-none');
        $('#'+ period).addClass('d-block');



        });




    </script>
@endsection