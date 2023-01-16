<x-office-layout title="Todo List">
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
                    <li class="breadcrumb-item text-muted">Project Management</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Todo List Task</li>
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
                <div class="card-header border-0 pt-6">
                    <form id="content_filter">
                        <input type="hidden" name="status" id="status">
                        {{-- <input type="hidden" name="name" id="name"> --}}
                        {{-- <input type="hidden" name="due_date" id="due_date"> --}}
                        <div class="card-title">
                            <a href="{{ route('office.pm.todo-list.create', $data->id) }}?id={{ request()->query('id') }}" class="btn btn-primary btn-sm btn-hover-scale menu-link">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                    </svg>
                                </span>
                                Add Todo List
                            </a>
                        </div>
                    </form>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <a id="back_form_button" href="{{route('office.pm.project.show', request()->query('id'))}}" class="btn btn-primary btn-sm btn-hover-scale menu-link" data-no-swup>
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
                <div class="card-body">
                    <div class="container mx-4">
                        <div id="kt_docs_jkanban_basic"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
    <script>
        let obj,
            i,
            status = 0,
            active1 = [],
            active2 = [],
            active3 = [],
            active4 = [],
            data = @json($todoList);

        for (i = 0; i < data.length; i++) {
            let id = data[i].id;
            let updateURL = "{{ route('office.pm.todo-list.edit', ':id') }}";
            updateURL = updateURL.replace(':id', id);
            // $('#name').val(data[i].name);
            // $('#due_date').val(data[i].due_date);
            obj = {
                id: id,
                title: `<span class="font-weight-bold"> ${data[i].name} </span>
                            <div class="btn-group" style="position: absolute; right:60px; width:0px;">
                                <a href="#" class="btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"/>
                                        <rect x="10" y="3" width="4" height="4" rx="2" fill="currentColor"/>
                                        <rect x="10" y="17" width="4" height="4" rx="2" fill="currentColor"/>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="${updateURL}?id={{ $data->id }}" class="menu-link">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:;" onclick="handle_confirm('Are you sure want to delete this todo list ?', 'Yes, i'm sure', 'No, i'm not','DELETE','{{route('office.pm.todo-list.destroy', 1)}}');"  class="menu-link">Delete</a></li>
                                </ul>
                            </div>
                            <br><br>
                        <span class="text-muted">${data[i].due_date}</span>`,
            };

            status = data[i].status;

            switch (status) {
                case 2:
                    active2.push(obj);
                    break;
                case 3:
                    active3.push(obj);
                    break;
                case 4:
                    active4.push(obj);
                    break;
                default:
                    active1.push(obj);
            }
        }

        let kanban = new jKanban({
            element: '#kt_docs_jkanban_basic',
            gutter: '0',
            widthBoard: '200px',
            boards: [
                {
                    id: '_todo',
                    title: 'Todo',
                    class: 'primary',
                    item: active1
                },
                {
                    id: '_in_progress',
                    title: 'In Progress',
                    class: 'warning',
                    item: active2
                },
                {
                    id: '_review',
                    title: 'Review',
                    class: 'info',
                    item: active3
                },
                {
                    id: '_done',
                    title: 'Done',
                    class: 'success',
                    item: active4
                }
            ],
            dragBoards: true,
            dragendEl: function (el) {
                let id = el.dataset.eid;

                let updateURL = "{{ route('office.pm.todo-list.updateStatus', ':id') }}";
                updateURL = updateURL.replace(':id', id);
                // console.log(updateURL);

                let status = el.offsetParent.dataset.id;

                switch (status) {
                    case '_todo':
                        $('#status').val(1);
                        break;
                    case '_in_progress':
                        $('#status').val(2);
                        break;
                    case '_review':
                        $('#status').val(3);
                        break;
                    default:
                        $('#status').val(4);
                }

                $.ajax({
                    url: updateURL,
                    type: 'PUT',
                    data: {
                        status: $('#status').val(),
                        // name: $('#name').val(),
                        // due_date: $('#due_date').val(),
                    }
                });
                // console.log('dragendEl:', id);
                // console.log('dragendEl:', status);
            },
        });
    </script>
    @endsection
</x-office-layout>
