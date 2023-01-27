{{ Form::open(['route' => 'timesheet.update','id'=>'update-timesheet','method'=>'post']) }}
<div class="row">
    <input type="hidden" name="project_id" value="{{$project->id}}">
    <input type="hidden" name="old_time" value="{{$time}}">
    <input type="hidden" name="date" value="{{$d}}">

    <div class="form-group col-md-6">
        <label for="name" class="form-label">{{__('What are you working on?')}}</label>
        <input class="form-control" placeholder="{{__('What are you working on?')}}" required="required" name="description" type="text" id="description">
    </div>

    <div class="form-group  col-md-6">
        <label for="project" class="form-label">{{__('Project')}}</label>
        <input class="form-control" disabled type="text" value="{{$project->name}}">
    </div>


        <div class="form-group col-md-6">
            <label for="project"  class="form-label">{{__('Date')}}</label>
            <div id="datepairExample" class="">
                <input type="text" class="date start form-control" name="date" value="{{$d}}" disabled/>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="project" class="form-label">{{__('Total Hours')}}</label>
            <div id="datepairExample" class="">
                <input type="text" class="start form-control" data-type="times" name="time" value="{{$time}}"/>
            </div>
        </div>

    <div class="form-group  col-md-12">
        <label class="ml-2 capitalize">{{__('Billable')}}</label>
        <div class="form-check form-switch d-flex align-items-center pl-0">
            <label class="form-check-label form-control-label text-dark"></label>
            <input type="hidden" name="billable" value="0">
            <input class="form-check-input" name="billable" type="checkbox" value="1" {{isset($project->is_billable) && $project->is_billable ==1?'checked':''}}>
        </div>
    </div>

</div>
<div class="text-end">
    <button class="btn btn-primary" type="button"  id="update-timesheet-btn">{{ __('Update') }}  </button>
</div>
{{ Form::close() }}
<script type="text/javascript">
    // $('#datepairExample .date').datepicker({
    //     'format': 'yyyy-m-d',
    //     'autoclose': true,
    // }).datepicker("setDate", '{{$d}}');
    
    $('[data-type="times"]').timepicker({
                'showDuration': true,
                'timeFormat': 'H:i:s',
            });
</script>
