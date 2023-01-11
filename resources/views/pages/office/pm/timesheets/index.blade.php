@extends('layouts.main')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/flatpickr.min.css')}}">

@endpush
@section('page-title')
    {{__('Timesheet')}}
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item">{{__('Timesheet')}}</li>
@endsection
@section('action-btn')
    <div class="float-end">

        <a href="{{ route('timesheet.export') }}" data-toggle="tooltip" data-original-title="Export" class="btn btn-sm btn-primary">    <i class="ti ti-file"></i>
        </a>
        @if(!\Auth::user()->isClient())
        <a href="#!" data-bs-toggle="tooltip" title="{{__('Add')}}"  class="btn btn-sm btn-primary add-timesheet-model">
            <i class="ti ti-plus"></i>
        </a>
        @endif

    </div>
@endsection
@section('content')
    <div class="page-content">
        <div class="page-title">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto mb-md-0">
                    <div class="mt-3">
                        <i class="ti ti-caret-left preweek weak-prev weak_go"></i>
                        <span class="week_date"><span class="start_date"></span> {{__('To')}} <span class="end_date"></span></span>
                            <input type="hidden" id="cweek">
                        <i class="ti ti-caret-right weak-left weak_go nextweek"></i>
                    </div>
                </div>
                <div class="col">
                </div>
                <div class="col-auto">
                    <div class="week_total ml-auto d-inline-block mt-3">
                        <small> Week Total : <span class="total_week_time"><b>00:00:00</b></span></small>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mt-2">
            <div class="card-wrapper overflow-auto"  id="detailed_filter">

            </div>

        </div>
        @if(!\Auth::user()->isClient())
        <p class="pl-2">
            <small>{{__('Note : ')}}{{__('Click on box to add/edit timesheet entry')}}</small>
        </p>
        @endif
    </div>



    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Entry') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="body modal-body">
                    <form method="POST" action="{{route('timesheet.add.track')}}" accept-charset="UTF-8" id="add-timesheet">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class="form-label">{{ __('What are you working on?') }}</label>
                                <input class="form-control" placeholder="{{ __('What are you working on?') }}" required="required" name="name" type="text" id="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="form-label">{{__('Tags')}}</label>
                                {{ Form::select('tags',$tags, null , ['class'=>'selectize-input-custom-p select2','id' => 'tags','name'=>'tags[]','multiple'=>'multiple','placeholder'=>'Enter Tags']) }}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="project" class="form-label">{{__('Project')}}</label>
                                {{ Form::select('project',$sprojects, null , ['class'=>'select2','id' => 'timesheet_projects']) }}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="timesheet_tasks" class="form-label">{{__('Tasks')}}</label>
                                <div class="timesheet_tasks_div">
                                    {{ Form::select('task',[''=>__('Select Task')], null , ['class'=>'select2','id' => 'timesheet_tasks']) }}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="timesheet_tasks" class="form-label">{{__('Date')}}</label>
                                <input type="date" class="date start form-control col-md-6 single-date" name="date" id="date"/>
                            </div>

                            <div class="form-group col-md-6 row">
                                <label for="project" class="form-label">{{__('Time')}}</label>
                                <div id="datepairExample" class=" col-5">
                                    <input type="text" name="m_start_time" class="time start form-control d-inline ml-4" placeholder="{{__('Start Time')}}"/>
                                </div>
                                <div id="datepairExample" class=" col-2">
                                    <label class="text-center pt-2"> {{ __('To') }} </label>
                                </div>
                                <div id="datepairExample" class="col-5">
                                    <input type="text" name="m_end_time" class="time end form-control" placeholder="{{__('End Time')}}"/>
                                    <input type="hidden" class="date end"/>
                               </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="custom-control custom-switch  d-flex align-items-center pl-0">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input input-primary" id="customCheckdef1" name="billable" value="1">
                                        <label class="form-check-label" for="customCheckdef1">{{ __('Billable') }}</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="text-end">
                            <input type="button" value="{{__('Cancel')}}" class="btn  btn-light" data-bs-dismiss="modal">
                            <button class="btn btn-primary" type="button" id="add-time-btn">{{ __('Add') }} <span class="spinner" style="display: none;"><i class="fa fa-spinner fa-spin"></i></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')

    <script src="{{asset('assets/js/plugins/flatpickr.min.js')}}"></script>
    <script src="{{url('js/jquery.timepicker.js')}}"></script>
    <script src="{{url('js/jquery.timeentry.js')}}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#datepairExample .time').timepicker({
                'showDuration': true,
                'timeFormat': 'H:i:s',
            });

            flatpickr('#date', {
            dateFormat: "m-d-Y",
            altFormat: "m-d-Y",
            onChange: function(dates) {

                if (dates.length == 2) {

                }
            }
        });
            // $('#datepairExample .date').datepicker({
            //     'format': 'yyyy-m-d',
            //     'autoclose': true,
            // }).datepicker("setDate", new Date());
            // var datePairElement = document.getElementById('datepairExample');
            // var datepair = new Datepair(datePairElement);
            // $('#timesheet_projects').selectize();
            // $('.tags').selectize();
        })

        //Timesheet data;
        var filters = {};
        var cno = $('#cweek').val();
        var filter_url = "{{route('timesheet.filter')}}";
        filters.week = 0;
        filters.timesheet = 1;
        AjaxTables(filter_url, 'detailed_filter', filters);


        // $('[data-type="times"]').timeEntry({
        //     show24Hours: true,
        //     howSeconds: true,
        // });


        $(document).on("click", "#update-timesheet-btn", function () {
            $('.spinner').show();
            $('#update-timesheet').ajaxForm(function (res) {
                toastrs(res.flag, res.msg);
                $('.spinner').hide();
                if (res.flag == 1) {
                    $('#commonModal').modal('hide');
                    filters.timesheet = 1;
                    filters.week = $('#cweek').val();
                    AjaxTables(filter_url, 'detailed_filter', filters);
                }
            }).submit();
        });


        // previous week data
        $(document).on("click", ".preweek", function () {
            var no = $(this).attr('preweek');
            filters.week = no;
            filters.timesheet = 1;
            AjaxTables(filter_url, 'detailed_filter', filters);
        });

        // next week data
        $(document).on("click", ".nextweek", function () {
            var no = $(this).attr('nextweek');
            filters.week = no;
            filters.timesheet = 1;
            AjaxTables(filter_url, 'detailed_filter', filters);
        });

        // add Track
        $(document).on("click", "#add-time-btn", function () {
            $('.spinner').show();
            $('#add-timesheet').ajaxForm(function (res) {
                toastrs(res.flag, res.msg);
                $('.spinner').hide();
                if (res.flag == 1) {
                    $('#addModal').modal('hide');
                    filters.timesheet = 1;
                    filters.week = $('#cweek').val();
                    AjaxTables(filter_url, 'detailed_filter', filters);
                    $('.tags')[0].selectize.clear();
                    $('#add-timesheet')[0].reset();
                }
            }).submit();
        });
        $(document).on('click', '.add-timesheet-model', function () {
            $('#addModal').modal('show');
            loadTasks($('#timesheet_projects').val());
        })

        $(document).on("change", "#timesheet_projects", function () {
            loadTasks($(this).val());
        });

        function loadTasks(project_id) {
            var task_url = "{{route('timesheet.tasks.json')}}";
            var data = {project_id: project_id};
            postAjax(task_url, data, function (res) {

                var task_team = `<select class="select2 choices__input" id="timesheet_tasks" name="task"></select> `;
                $('.timesheet_tasks_div').html(task_team);
                $("#timesheet_tasks").html('<option value="" selected="selected">{{__('Select Task')}}</option>');
                $.each(res, function (key, data) {
                    $("#timesheet_tasks").append('<option value="' + key + '">' + data + '</option>');
                });
                new Choices('#timesheet_tasks', {
                    removeItemButton: true,
                }
            );

            });
        }
    </script>

@endpush
