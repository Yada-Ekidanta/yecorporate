<table class="table work_sheet_table text-center">
    <thead>
    <tr class="text-center">
        <th><b>{{ __('Projects') }}</b></th>

        @foreach($dates as $date)
            <th class="min-width-150"><b><span>{{date('D',strtotime($date))}}</span><br><span>{{date('y-m-d',strtotime($date))}}</span></b></th>
        @endforeach
        <th><b>{{__('Total Hour')}}</b></th>
    </tr>
    </thead>
    <tbody>
        @forelse($timesheet as $key => $times)
        <tr>
            @php
                $total = 0;
            @endphp
            <td><b style="color: {{App\Models\Project::getProjectColor($key)}}">{{ucfirst(App\Models\Project::getProjectName($key))}}</b></td>
            @foreach ($times as $time)
                @php
                    $total+=$time['total_time'];
                     $etimesheet = '';
                    if(!\Auth::user()->isClient()){
                        $etimesheet ='data-timesheet-ajax-popup=true data-edite=true' ;
                    }
                @endphp
            <td> <div {{$etimesheet}} data-projectid="{{$key}}" data-size="lg" data-date="{{$time['date']}}" data-toggle="tooltip" data-original-title="Edit Timesheet Entry." data-time="{{Utility::second_to_time($time['total_time'])}}" data-url="{{route('timesheet.edit')}}" data-title="{{__('Edit Time')}}">{{Utility::second_to_time($time['total_time'])}}</div> </td>
            @endforeach
            <td> {{Utility::second_to_time($total)}} </td>
        </tr>
        @empty
        <tr>
            <td colspan="8"><b>{{__('Records not found')}}</b></td>
        </tr>
        @endforelse
    </tbody>
</table>


