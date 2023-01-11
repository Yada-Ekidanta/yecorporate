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
                    @csrf
                    <div class="card-body transition-fade">
                        <div class="row">
                            <input type="hidden" id="start_time" name="start_time"/>
                            <input type="hidden" id="end_time" name="end_time"/>
                            <input type="hidden" id="is_active" name="is_active"/>
                            <input type="hidden" id="total_time" name="total_time"/>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Indonesia" value=""/>
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
                <div class="card-body transition-fade">
                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">No</th>
                                <th class="min-w-120px">Name</th>
                                <th class="min-w-120px">Project Name</th>
                                <th class="min-w-120px">Task Name</th>
                                <th class="min-w-120px">Start Time</th>
                                <th class="min-w-120px">End Time</th>
                                <th class="min-w-120px">Total Time</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @forelse ($collection as $key => $item)
                            <tr>
                                <td>
                                    {{$key+ 1}}
                                </td>
                                <td>
                                    <span>{{$item->name}}</span>
                                </td>
                                <td>
                                    <span>{{$item->project->name}}</span>
                                </td>
                                <td>
                                    <span>{{$item->task->name}}</span>
                                </td>
                                <td>
                                    <span>{{$item->start_time}}</span>
                                </td>
                                <td>
                                    <span>{{$item->end_time}}</span>
                                </td>
                                <td>
                                    <span>{{$item->total_time}}</span>
                                </td>
                                <td>
                                    <span><a class="menu-link" data-no-swup href="{{ $item->join_url }}" target="_blank">{{$item->join_url}}</a></span>
                                </td>
                                <td class="text-end">
                                    {{-- <a href="{{route('office.pm.tracker.edit',$item->id)}}" class="btn btn-sm btn-hover-scale btn-icon btn-bg-light btn-active-color-warning w-30px h-30px menu-link">
                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor"/>
                                                <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor"/>
                                                <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </a> --}}
                                    <a href="javascript:;" onclick="handle_confirm('Are you sure want to delete this tracker ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.pm.tracker.destroy',$item->id)}}');" class="btn btn-sm btn-hover-scale btn-icon btn-bg-light btn-active-color-danger w-30px h-30px">
                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td align="center" colspan="8">No Data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{$colection->links('themes.office.pagination')}} --}}
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            load_list(1);
            obj_select('form-select-project');
            obj_select('form-select-task');
            $(document).ready(function() {
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
                    let start_date = new Date();
                    let start_month = start_date.getMonth()+1;
                    let start_day = start_date.getDate();
                    let output_start = start_date.getFullYear() + '-' +
                    ((''+start_month).length<2 ? '0' : '') + start_month + '-' +
                    ((''+start_day).length<2 ? '0' : '') + start_day;
                    let time = start_date.getHours() + ":" + start_date.getMinutes() + ":" + start_date.getSeconds();
                    $('#start_time').val(output_start+' '+time);
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
