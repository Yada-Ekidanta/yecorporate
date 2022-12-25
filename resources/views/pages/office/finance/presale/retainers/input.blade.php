<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Retainers">
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
                    <li class="breadcrumb-item text-muted">Retainers</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="{{route('office.finance.retainers.index')}}" action="{{$data->id ? route('office.finance.retainers.update',$data->id) : route('office.finance.retainers.store')}}">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <h1>Form {{$data->id ? 'Update' : 'Create'}} Retainers</h1>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <a id="back_form_button" href="{{route('office.finance.retainers.index')}}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
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
                    <div class="card-body transition-fade">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label text-gray-700 fw-bold" for="costumer_id">Select Costumer</label>
                                    <input type="text" class="form-control" id="select" name="costumer" placeholder="Select Costumer" value="{{$data->costumer}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="costumer_id">Issue Date</label>
                                            <input type="date" class="form-control" id="rates" name="rates" placeholder="102" value="{{$data->rates}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="product_category_id">Kategori</label>
                                            <select name="product_category_id" id="product_category_id" class="form-select">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id === $data->product_category_id || $category->id === old('product_category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-gray-700 fw-bold" for="costumer_id">Retainers Number</label>
                                            <input type="text" class="form-control" id="rates" name="rates" placeholder="#RET00001" value="{{$data->rates}}" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12">
                        <h5 class="h4 d-inline-block font-weight-400 mb-4">{{__('Product & Services')}}</h5>
                        <div class="card repeater">
                            <div class="item-section py-4">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-12 d-flex align-items-center justify-content-between justify-content-md-end">
                                        <div class="all-button-box">
                                            <a href="#" data-repeater-create="" class="btn btn-primary mr-2" data-toggle="modal" data-target="#add-bank">
                                                <i class="ti ti-plus"></i> {{__('Add item')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body mt-3">
                                <div class="table-responsive">
                                    <table class="table mb-0" data-repeater-list="items">
                                        <thead>
                                        <tr>
                                            <th>{{__('Items')}}</th>
                                            <th>{{__('Quantity')}}</th>
                                            <th>{{__('Price')}} </th>
                                            <th>{{__('Tax')}} (%)</th>
                                            <th>{{__('Discount')}}</th>
                                            <th class="text-end">{{__('Amount')}} <br>
                                                <small class="text-danger font-weight-bold">{{__('before tax & discount')}}</small>
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody class="ui-sortable" data-repeater-item>
                                        <tr>
                                            <td width="25%" class="form-group">
                                                <div class="form-group pt-0">
                                                    <select name="product_service" id="product_service" class="form-select">
                                                        @foreach ($productservices as $productservice)
                                                            <option value="{{ $productservice->id }}" {{ $productservice->id === $data->product_service || $productservice->id === old('product_service') ? 'selected' : '' }}>{{ $productservice->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="form-group price-input input-group search-form">
                                                <div class="form-group pt-0">
                                                    <input type="number" class="form-control quantity" id="rates" name="rates" value="{{$data->rates}}"/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group pt-0">
                                                    <input type="number" class="form-control price" id="rates" name="rates" value="{{$data->rates}}"/>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group pt-0">
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group pt-0">
                                                    <input type="text" class="form-control" id="price" name="price" value="{{$data->price}}"/>
                                                </div>
                                            </td>
                                            <td class="text-end amount">
                                                0.00
                                            </td>
                                            <td>
                                                <a href="#" class="ti ti-trash text-white repeater-action-btn bg-danger ms-2 bs-pass-para" data-repeater-delete></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="desc" placeholder="Description" name="desc" value="{{$data->desc}}"/> </textarea>
                                                </div>
                                            </td>
                                            <td colspan="5"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                               
                                            </td>
                                            <td colspan="5"></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="border-none">
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td></td>
                                            <td><strong>{{__('Sub Total')}}</strong></td>
                                            <td class="text-end subTotal">0.00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td></td>
                                            <td><strong>{{__('Discount')}}</strong></td>
                                            <td class="text-end totalDiscount">0.00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td></td>
                                            <td><strong>{{__('Tax')}}</strong></td>
                                            <td class="text-end totalTax">0.00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td class="blue-text border-none"><strong>{{__('Total Amount')}}</strong></td>
                                            <td class="text-end totalAmount blue-text border-none"></td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                            {{$data->id ? 'Update' : 'Create'}}
                        </button>
                        @if($data->id)
                        <button type="button" onclick="handle_confirm('Are you sure want to delete this retainers ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.finance.retainers.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-office-layout>