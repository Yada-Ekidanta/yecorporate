<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Journal Account">
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
                    <li class="breadcrumb-item text-muted">Journal Account</li>
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
            <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.finance.journal.index')}}" action="{{$data->id ? route('office.finance.journal.update',$data->id) : route('office.finance.journal.store')}}">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Journal Account</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.finance.journal.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header border-0 pt-6">
                                <div class="card-title">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <h1>General Info</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body transition-fade">
                                <div class="form-group">
                                    <label class="form-label text-gray-700 fw-bold" for="costumer_id">Journal Number</label>
                                    <input type="text" class="form-control" id="rates" name="rates" value="JUR{{$journalId}}" disabled/>
                                </div>
                                <div class="form-group mt-5">
                                    <label class="form-label text-gray-700 fw-bold" for="date">Transaction Date</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{$data->date}}"/>
                                </div>
                                <div class="form-group mt-5">
                                    <label class="form-label text-gray-700 fw-bold" for="reference">Reference</label>
                                    <input type="text" class="form-control" id="reference" name="reference" value="{{$data->reference}}"/>
                                    </div>
                                <div class="form-group mt-5">
                                    <label class="form-label text-gray-700 fw-bold" for="desc">DESCRIPTION</label>
                                   <textarea class="form-control" id="desc" name="desc" value="{{$data->desc}}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="card">
                            <div id="kt_docs_repeater_basic">
                                <div class="card-header border-0 pt-6">
                                    <div class="card-title">
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <h1>List Item</h1>
                                        </div>
                                    </div>
                                    <div class="card-toolbar">
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                <i class="la la-plus"></i>Add
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_docs_repeater_basic">
                                    <div class="card-body transition-fade">
                                        <div class="form-group">
                                            <div data-repeater-list="kt_docs_repeater_basic">
                                                @if ($data->id)
                                                    @foreach ($data->journalProduct as $key => $varian)
                                                        <div data-repeater-item>
                                                            <input type="hidden" name="id" value="{{ $varian->id }}">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Account</th>
                                                                            <th>Debit</th>
                                                                            <th>Credit</th>
                                                                            <th>Description</th>
                                                                            <th  class="text-end">Amount <br>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                            <select name="account_id" id="account_id" class="form-select">
                                                                                @foreach ($accounts as $account)
                                                                                    <option value="{{ $account->id }}" {{ $account->id === $data->account_id || $account->id === old('account_id') ? 'selected' : '' }}>{{ $account->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="debit" class="form-control debit" value="{{ $varian->debit }}" />
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="credit" class="form-control credit" value="{{ $varian->credit }}" />
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="desc" class="form-control" value="{{ $varian->desc }}" />
                                                                            </td>
                                                                            <td>
                                                                                Rp. <span class="text-end amount" id="amount">0</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>
                                                                                <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                                    <i class="la la-trash-o"></i>Delete
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                        </div>
                                                    @endforeach
                                                @else
                                                <div data-repeater-item>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Account</th>
                                                                <th>Debit</th>
                                                                <th>Credit</th>
                                                                <th>Description</th>
                                                                <th  class="text-end">Amount <br>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                <select name="account_id" id="account_id" class="form-select">
                                                                    @foreach ($accounts as $account)
                                                                        <option value="{{ $account->id }}" {{ $account->id === $data->account_id || $account->id === old('account_id') ? 'selected' : '' }}>{{ $account->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="debit" class="form-control debit"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="credit" class="form-control credit"/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="desc" class="form-control"/>
                                                                </td>
                                                                <td>
                                                                    Rp. <span class="text-end amount" id="amount">0</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                        <i class="la la-trash-o"></i>Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-end"><strong>{{__('Total Credit')}}</strong></td>
                                        <td class="text-end totalCredit">0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-end"><strong>{{__('Total Debit')}}</strong></td>
                                        <td class="text-end totalDebit">0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this journal ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.finance.journal.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    @section('custom_js')
    <script>
        obj_date('issue_date');
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        var selector = "body";
        if ($(selector + " .repeater").length) {
            // var $dragAndDrop = $("body .repeater tbody").sortable({
            //     handle: '.sort-handler'
            // });
            var $repeater = $(selector + ' .repeater').repeater({
                initEmpty: false,
                defaultValues: {
                    'status': 1
                },
                show: function () {
                    $(this).slideDown();
                    var file_uploads = $(this).find('input.multi');
                    if (file_uploads.length) {
                        $(this).find('input.multi').MultiFile({
                            max: 3,
                            accept: 'png|jpg|jpeg',
                            max_size: 2048
                        });
                    }
                    if($('.select2').length) {
                        $('.select2').select2();
                    }
                },
                hide: function (deleteElement) {
                    if (confirm('Are you sure you want to delete this element?')) {
                        $(this).slideUp(deleteElement);
                        $(this).remove();

                        var inputs = $(".debit");
                        var totalDebit = 0;
                        for (var i = 0; i < inputs.length; i++) {
                            totalDebit = parseFloat(totalDebit) + parseFloat($(inputs[i]).val());
                        }
                        $('.totalDebit').html(totalDebit.toFixed(2));


                        var inputs = $(".credit");
                        var totalCredit = 0;
                        for (var i = 0; i < inputs.length; i++) {
                            totalCredit = parseFloat(totalCredit) + parseFloat($(inputs[i]).val());
                        }
                        $('.totalCredit').html(totalCredit.toFixed(2));


                    }
                },
                ready: function (setIndexes) {
                    // $dragAndDrop.on('drop', setIndexes);
                },
                isFirstItemUndeletable: true
            });
            var value = $(selector + " .repeater").attr('data-value');

            if (typeof value != 'undefined' && value.length != 0) {
                value = JSON.parse(value);
                $repeater.setList(value);
                for (var i = 0; i < value.length; i++) {
                    var tr = $('#sortable-table .id[value="' + value[i].id + '"]').parent();
                    tr.find('.item').val(value[i].product_id);
                    changeItem(tr.find('.item'));
                }
            }

        }

        $(document).on('keyup', '.debit', function () {
            var el = $(this).parent().parent().parent().parent();
            var debit = $(this).val();
            var credit = 0;
            el.find('.credit').val(credit);
            el.find('.amount').html(debit);


            var inputs = $(".debit");
            var totalDebit = 0;
            for (var i = 0; i < inputs.length; i++) {
                totalDebit = parseFloat(totalDebit) + parseFloat($(inputs[i]).val());
            }
            $('.totalDebit').html(totalDebit.toFixed(2));

            el.find('.credit').attr("disabled", true);
            if (debit == '') {
                el.find('.credit').attr("disabled", false);
            }
        })

        $(document).on('keyup', '.credit', function () {
            var el = $(this).parent().parent().parent().parent();
            var credit = $(this).val();
            var debit = 0;
            el.find('.debit').val(debit);
            el.find('.amount').html(credit);

            var inputs = $(".credit");
            var totalCredit = 0;
            for (var i = 0; i < inputs.length; i++) {
                totalCredit = parseFloat(totalCredit) + parseFloat($(inputs[i]).val());
            }
            $('.totalCredit').html(totalCredit.toFixed(2));

            el.find('.debit').attr("disabled", true);
            if (credit == '') {
                el.find('.debit').attr("disabled", false);
            }
        })


    </script>
    @endsection
</x-office-layout>
