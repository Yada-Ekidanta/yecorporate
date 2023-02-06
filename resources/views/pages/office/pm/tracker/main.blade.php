<x-office-layout title="Tracker">
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
                    <li class="breadcrumb-item text-muted">Tracker</li>
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
                <form class="form w-100" novalidate="novalidate" id="form_input" data-redirect-url="#">
                    <div class="card-body transition-fade">
                        <div class="row">
                            <input type="hidden" id="start_time" name="start_time"/>
                            <input type="hidden" id="end_time" name="end_time"/>
                            <input type="hidden" id="date" name="date"/>
                            <input type="hidden" id="is_active" name="is_active"/>
                            <input type="hidden" id="total_time" name="total_time"/>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-solid" id="name" name="name" placeholder="Indonesia" value=""/>
                                    <label for="name">What are you working on?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="project_id" id="form-select-project" class="form-select form-select-solid form-select-lg">
                                            <option selected disabled>Select Project</option>
                                            @if (!empty($project))
                                                @foreach ($project as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="task_id" id="form-select-task" class="form-select form-select-solid form-select-lg">
                                            <option selected disabled>Select Task</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="fw-bold">Timer <span id="hour"></span>:<span id="minute"></span>:<span id="seconds"></span></p>
                                @if ($status)
                                    <button type="button" id="stop" class="btn btn-sm btn-danger">Stop</button>
                                @else
                                    <button type="button" id="start-btn" class="btn btn-sm btn-primary">Start</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card mt-7">
                <div class="card-header border-0 pt-6">
                    <form id="content_filter">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" name="keyword" onkeyup="load_list();" class="form-control form-control-solid w-250px ps-14" placeholder="Search your working" />
                            </div>
                        </div>
                    </form>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                           <span class="btn btn-sm btn-primary">Total Time Tracker : {{ $timeConvert }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body transition-fade">
                    <div id="list_result"></div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            obj_select('form-select-project');
            obj_select('form-select-task');
            load_list(1);
            $(document).ready(function() {
                // Dinamic Dropdown
                $('#form-select-project').on('change', function() {
                    let project_id = $(this).val();
                    // console.log(project_id);

                    if (project_id == '') {
                        let project_id = 0;
                    }

                    $.ajax({
                        url: '{{ url("/office/pm/fetch-task/") }}/'+project_id,
                        type: 'POST',
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response);

                            $('#form-select-task').find('option').not(':first').remove();

                            if (response['task'].length > 0) {
                                $.each(response['task'], function(key, value) {
                                    $('#form-select-task').append('<option id="'+value.id+'" value="'+value.id+'">'+value.name+'</option>');
                                });
                            }
                        }
                    })
                });

                // Timer
                let hour = 0
                    minute = 0
                    seconds = 0
                    totalSeconds = 0
                    intervalId = null;

                function startTimer() {
                    ++totalSeconds;
                    hour = Math.floor(totalSeconds /3600);
                    minute = Math.floor((totalSeconds - hour*3600)/60);
                    seconds = totalSeconds - (hour*3600 + minute*60);
                    $('#hour').html(hour);
                    $('#minute').html(minute);
                    $('#seconds').html(seconds);
                }

                $( "#start-btn" ).click(function() {
                    location.reload(true);
                    let start_date = new Date();
                    let start_month = start_date.getMonth()+1;
                    let start_day = start_date.getDate();
                    let output_start = start_date.getFullYear() + '-' +
                    ((''+start_month).length<2 ? '0' : '') + start_month + '-' +
                    ((''+start_day).length<2 ? '0' : '') + start_day;
                    let time = start_date.getHours() + ":" + start_date.getMinutes() + ":" + start_date.getSeconds();
                    $('#start_time').val(output_start+' '+time);
                    $('#date').val(output_start);
                    $('#start-btn').hide();
                    $('#stop').show();
                    intervalId = setInterval(startTimer, 1000);
                    $('#is_active').val(1);
                    $('#total_time').val('0:0:0');
                    $.post('{{route('office.pm.tracker.store')}}', $('#form_input').serialize(), function(data) {
                        $('#id').val(data.id);
                    });
                });

                $( "#stop" ).click(function() {
                    location.reload(true);
                    let end_date = new Date();
                    let end_month = end_date.getMonth()+1;
                    let end_day = end_date.getDate();
                    let output_end = end_date.getFullYear() + '-' +
                    ((''+end_month).length<2 ? '0' : '') + end_month + '-' +
                    ((''+end_day).length<2 ? '0' : '') + end_day;
                    let time = end_date.getHours() + ":" + end_date.getMinutes() + ":" + end_date.getSeconds();
                    $('#end_time').val(output_end+' '+time);
                    $('#start-btn').show();
                    $('#stop').hide();
                    if (intervalId)
                    clearInterval(intervalId);
                    $('#is_active').val(0);
                    $('#total_time').val(hour+':'+minute+':'+seconds);
                    let url = '{{route('office.pm.tracker.update', 'id_tracker')}}';
                    url = url.replace('id_tracker', "{{ $status ? $status->id : null }}");
                    $.ajax({
                        url: url,
                        type: 'PUT',
                        data: $('#form_input').serialize(),
                        success: function(data) {
                            $('#id').val(data.id);
                        }
                    });
                });

                if ("{{ $status }}" != null) {
                    let start_date = moment("{{ $status ? $status->start_time : null }}");
                    let now = moment();
                    let curent_time = now.diff(start_date, 'seconds');
                    totalSeconds = curent_time;
                    intervalId = setInterval(startTimer, 1000);
                }
            });
        </script>
    @endsection
</x-office-layout>
