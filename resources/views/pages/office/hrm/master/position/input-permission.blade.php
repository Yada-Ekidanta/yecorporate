<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Permission">
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
                    <li class="breadcrumb-item text-muted">Executive</li>
                    <!--end::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Permission</li>
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
            <div class="row">
                <div class="col-8">
                    <div class="card shadow-sm">
                        <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#kt_docs_card_collapsible">
                            <h3 class="card-title">Permission Form</h3>
                            <div class="card-toolbar rotate-180">
                                <span class="svg-icon toggle-on svg-icon-2 me-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"/>
                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div id="kt_docs_card_collapsible" class="collapse show">
                            <form class="form w-100" id="form_input" action="{{$data->id ? route('office.master.role.update',$data->id) : route('office.master.role.store')}}" data-redirect-url="{{route('office.hrm.master.department.show',$position->department_id)}}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12 mb-5">
                                            <div class="form-floating">
                                                <input type="hidden" class="form-control" id="position" name="position" placeholder="Technology" value="{{$position->id}}"/>
                                                <input type="text" readonly class="form-control" id="position_name" name="position_name" placeholder="Technology" value="{{$position->name}}"/>
                                                <label for="name">Position Name</label>
                                            </div>
                                        </div>
                                        <div class="fv-row">
                                            <label class="fs-5 fw-bold form-label mb-2">Position Permissions</label>
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                                    <tbody class="text-gray-600 fw-semibold">
                                                        <tr>
                                                            <td class="text-gray-800">Administrator Access
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allows a full access to the system"></i></td>
                                                            <td>
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                                    <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                                    <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        @foreach ($modules as $item)
                                                        @php
                                                        $role = \App\Models\HRM\RolePermission::where('permission_id',$item->id)->where('role_id',$position->id)->get()->count();
                                                        $role = $role > 0 ? \App\Models\HRM\RolePermission::where('permission_id',$item->id)->where('role_id',$position->id)->first()->permission_id : 0;
                                                        @endphp
                                                        <tr>
                                                            <td class="text-gray-800">{{Str::before($item->name,'-')}}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                                        <input class="form-check-input" type="checkbox" value="{{$item->id}}" name="permission[]" {{$item->id == $role ? 'checked' :''}} />
                                                                        <span class="form-check-label">{{Str::after($item->name,'-')}}</span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                                        {{$data->id ? 'Update' : 'Save'}}
                                    </button>
                                    @if($data->id)
                                    <button type="button" onclick="handle_confirm('Are you sure want to delete this position ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.hrm.master.position.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-office-layout>