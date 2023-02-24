<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Proposal">
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
                    <li class="breadcrumb-item text-muted">Proposal</li>
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
            <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.finance.proposal.index')}}" action="{{$data->id ? route('office.finance.proposal.update',$data->id) : route('office.finance.proposal.store')}}">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Proposal</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.finance.proposal.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                                    <label class="form-label text-gray-700 fw-bold" for="costumer_id">Proposal Number</label>
                                    <input type="text" class="form-control" id="rates" name="rates" placeholder="" value="PROP000{{$proposal_number}}" disabled/>
                                </div>
                                <div class="form-group mt-5">
                                    <label class="form-label text-gray-700 fw-bold" for="client_id">Client</label>
                                    <select name="client_id" id="client_id" class="form-select">
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}" {{ $client->id === $data->client_id || $client->id === old('client_id') ? 'selected' : '' }}>{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-5">
                                    <label class="form-label text-gray-700 fw-bold" for="issue_date">Issue Date</label>
                                    <input type="date" class="form-control" id="issue_date" name="issue_date" value="{{$data->issue_date}}"/>
                                </div>
                                <div class="form-group mt-5">
                                    <label class="form-label text-gray-700 fw-bold" for="category_id">Category</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        @foreach ($categories as $categories)
                                            <option value="{{ $categories->id }}" {{ $categories->id === $data->category_id || $categories->id === old('category_id') ? 'selected' : '' }}>{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
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
                                                    @foreach ($data->proposalProduct as $key => $varian)
                                                        <div data-repeater-item>
                                                            <input type="hidden" name="id" value="{{ $varian->id }}">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Items</th>
                                                                        <th>qty</th>
                                                                        <th>Price</th>
                                                                        <th>Tax (%)</th>
                                                                        <th>Discount</th>
                                                                        <th  class="text-end">Amount <br>
                                                                        <small class="text-danger font-weight-bold">Before tax & discount</small>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="text" name="name" class="form-control mb-2 mb-md-0" value="{{ $varian->name }}"/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="qty" class="form-control mb-2 mb-md-0 qty number_only" value="{{ $varian->qty }}"/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="price" class="form-control mb-2 mb-md-0 price number_only" value="{{ $varian->price }}"/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="tax" class="form-control mb-2 mb-md-0 tax_rate number_only" value="{{ $varian->tax }}"/>
                                                                            <input type="hidden" name="tax" class="form-control mb-2 mb-md-0 tax_price number_only" value="{{ $varian->tax }}"/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="discount" class="form-control mb-2 mb-md-0 discount number_only" value="{{ $varian->discount }}"/>
                                                                        </td>
                                                                        <td>
                                                                            Rp. <span class="text-end amount" id="amount">0</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">
                                                                            <textarea name="desc" class="form-control mb-2 mb-md-0"></textarea>
                                                                        </td>
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
                                                                    <th>Items</th>
                                                                    <th>qty</th>
                                                                    <th>Price</th>
                                                                    <th>Tax (%)</th>
                                                                    <th>Discount</th>
                                                                    <th  class="text-end">Amount <br>
                                                                    <small class="text-danger font-weight-bold">Before tax & discount</small>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" name="name" class="form-control mb-2 mb-md-0"/>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="qty" class="form-control mb-2 mb-md-0 qty number_only"/>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="price" class="form-control mb-2 mb-md-0 price number_only"/>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="tax" class="form-control mb-2 mb-md-0 tax_rate number_only"/>
                                                                        <input type="hidden" name="tax" class="form-control mb-2 mb-md-0 tax_price number_only"/>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="discount" class="form-control mb-2 mb-md-0 discount number_only"/>
                                                                    </td>
                                                                    <td>
                                                                        Rp. <span class="text-end amount" id="amount">0</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <textarea name="desc" class="form-control mb-2 mb-md-0"></textarea>
                                                                    </td>
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
                                        <td colspan="4"></td>
                                        <td class="text-end">Sub Total </td>
                                        <td>Rp. <span class="sub_total">0</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="text-end">Discount</td>
                                        <td>Rp. <span class="total_discount">0</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="text-end">Tax</td>
                                        <td>Rp. <span class="total_tax">0</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td class="text-end">Grand Total</td>
                                        <td>Rp. <span class="grand_total">0</span></td>
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
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this Proposal ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.finance.proposal.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
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
        $(document).on('keyup', '.qty', function () {
            var quntityTotalTaxPrice = 0;

            var el = $(this).parent().parent().parent().parent();
            var qty = $(this).val();
            var price = $(el.find('.price')).val();
            var discount = $(el.find('.discount')).val();

            var totalItemPrice = (qty * price);
            var amount = (totalItemPrice);
            $(el.find('.amount')).html(amount);

            var totalItemTaxRate = $(el.find('.tax_rate')).val();
            var itemTaxPrice = parseFloat((totalItemTaxRate / 100) * (totalItemPrice));
            $(el.find('.tax_price')).val(itemTaxPrice.toFixed(2));


            var totalItemTaxPrice = 0;
            var itemTaxPriceInput = $('.tax_price');
            for (var j = 0; j < itemTaxPriceInput.length; j++) {
                totalItemTaxPrice += parseFloat(itemTaxPriceInput[j].value);
            }


            var inputs = $(".amount");
            var subTotal = 0;
            for (var i = 0; i < inputs.length; i++) {
                subTotal = parseFloat(subTotal) + parseFloat($(inputs[i]).html());
            }
            $('.sub_total').html(subTotal.toFixed(2));
            $('.total_tax').html(totalItemTaxPrice.toFixed(2));

            $('.grand_total').html((parseFloat(subTotal) + parseFloat(totalItemTaxPrice)).toFixed(2));
        });
        $(document).on('keyup', '.price', function () {
            var el = $(this).parent().parent().parent().parent();
            var price = $(this).val();
            var qty = $(el.find('.qty')).val();
            var discount = $(el.find('.discount')).val();
            var totalItemPrice = (qty * price);

            var amount = (totalItemPrice);
            $(el.find('.amount')).html(amount);


            var totalItemTaxRate = $(el.find('.tax_rate')).val();
            var itemTaxPrice = parseFloat((totalItemTaxRate / 100) * (totalItemPrice));
            $(el.find('.tax_price')).val(itemTaxPrice.toFixed(2));


            var totalItemTaxPrice = 0;
            var itemTaxPriceInput = $('.tax_price');
            for (var j = 0; j < itemTaxPriceInput.length; j++) {
                totalItemTaxPrice += parseFloat(itemTaxPriceInput[j].value);
            }


            var inputs = $(".amount");
            var subTotal = 0;
            for (var i = 0; i < inputs.length; i++) {
                subTotal = parseFloat(subTotal) + parseFloat($(inputs[i]).html());
            }
            $('.total_tax').html(totalItemTaxPrice.toFixed(2));

            $('.sub_total').html(subTotal.toFixed(2));
            $('.grand_total').html((parseFloat(subTotal) + parseFloat(totalItemTaxPrice)).toFixed(2));

        })

        $(document).on('keyup', '.discount', function () {
            var el = $(this).parent().parent().parent().parent();
            var discount = $(this).val();
            var price = $(el.find('.price')).val();

            var qty = $(el.find('.qty')).val();
            var totalItemPrice = (qty * price);

            var totalItemTaxRate = $(el.find('.tax_rate')).val();
            var itemTaxPrice = parseFloat((totalItemTaxRate / 100) * (totalItemPrice));
            $(el.find('.tax_price')).val(itemTaxPrice.toFixed(2));


            var totalItemTaxPrice = 0;
            var itemTaxPriceInput = $('.tax_price');
            for (var j = 0; j < itemTaxPriceInput.length; j++) {
                totalItemTaxPrice += parseFloat(itemTaxPriceInput[j].value);
            }


            var totalItemDiscountPrice = 0;
            var itemDiscountPriceInput = $('.discount');

            for (var k = 0; k < itemDiscountPriceInput.length; k++) {

                totalItemDiscountPrice += parseFloat((itemDiscountPriceInput[k].value / 100) * (totalItemPrice));
            }

            var amount = (totalItemPrice);
            $(el.find('.amount')).html(amount);

            var inputs = $(".amount");
            var subTotal = 0;
            for (var i = 0; i < inputs.length; i++) {
                subTotal = parseFloat(subTotal) + parseFloat($(inputs[i]).html());
            }
            $('.sub_total').html(subTotal.toFixed(2));
            $('.total_discount').html(totalItemDiscountPrice.toFixed(2));
            $('.total_tax').html(totalItemTaxPrice.toFixed(2));

            $('.grand_total').html((parseFloat(subTotal) - parseFloat(totalItemDiscountPrice) + parseFloat(totalItemTaxPrice)).toFixed(2));
        })
    </script>
    @endsection
</x-office-layout>
