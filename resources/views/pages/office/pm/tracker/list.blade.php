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
            <th class="text-end w-50px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @forelse ($collection as $key => $item)
            <tr>
                <td>
                    {{$key+ $collection->firstItem()}}
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
                    <span>{{ $item->start_time }}</span>
                </td>
                <td>
                    <span>{{ $item->end_time }}</span>
                </td>
                <td>
                    {{-- <span>{{\Carbon\Carbon::parse($item->total_time)->diffForHumans(null, true)}}</span> --}}
                    <span>{{$item->total_time}}</span>
                </td>
                <td class="text-nowrap text-center">
                    @if(!$status)
                        <button class="btn btn-sm btn-hover-scale btn-icon btn-bg-light btn-active-color-warning w-30px h-30px carryOn d-none" itemid="{{ $item->id }}" itemstart="{{ $item->start_time }}" itemend="{{ $item->end_time }}">
                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9 10.7L7 5V19L16.9 13.3C17.9 12.7 17.9 11.3 16.9 10.7Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                    @endif
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
<script>
    function tracker() {
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

                localStorage.removeItem('status');
                localStorage.removeItem('seconds')
            });

            $( "#pause" ).click(function() {
                $('#pause').hide();
                $('#resume').removeClass('d-none').show();

                clearInterval(intervalId);

                $('#is_paused').val(1);

                let end_date = new Date();
                let end_month = end_date.getMonth()+1;
                let end_day = end_date.getDate();
                let output_end = end_date.getFullYear() + '-' +
                ((''+end_month).length<2 ? '0' : '') + end_month + '-' +
                ((''+end_day).length<2 ? '0' : '') + end_day;
                let time = end_date.getHours() + ":" + end_date.getMinutes() + ":" + end_date.getSeconds();

                $('#end_time').val(output_end+' '+time);

                let url = '{{route('office.pm.tracker.pause', 'id_tracker')}}';
                url = url.replace('id_tracker', "{{ $status ? $status->id : null }}");
                $.ajax({
                    url: url,
                    type: 'PUT',
                    data: $('#form_input').serialize(),
                    success: function(data) {
                        $('#id').val(data.id);
                    }
                });

                localStorage.removeItem('status');
            });

            $( "#resume" ).click(function() {
                location.reload(true);

                $('#resume').hide();
                $('#pause').show();
                $('#is_paused').val(0);

                let url = '{{route('office.pm.tracker.pause', 'id_tracker')}}';
                url = url.replace('id_tracker', "{{ $status ? $status->id : null }}");
                $.ajax({
                    url: url,
                    type: 'PUT',
                    data: $('#form_input').serialize(),
                    success: function(data) {
                        $('#id').val(data.id);
                    }
                });

                localStorage.setItem('status', 'resume');
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
                $('#is_paused').val(0);
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

                localStorage.removeItem('status');
                localStorage.removeItem('seconds');
            });

            const activeTracker = {!! json_encode($status); !!};

            if (activeTracker != null) {
                if (activeTracker.is_active && activeTracker.is_paused) {
                    let start_date = moment("{{ $status ? $status->start_time : null }}");
                    let end_date = moment("{{ $status ? $status->end_time : null }}");
                    let differentTimePaused = end_date.diff(start_date, 'seconds');

                    let paused_hour = Math.floor(differentTimePaused /3600);
                    let paused_minute = Math.floor((differentTimePaused - paused_hour*3600)/60);
                    let paused_seconds = differentTimePaused - (paused_hour*3600 + paused_minute*60);

                    $('#hour').html(paused_hour);
                    $('#minute').html(paused_minute);
                    $('#seconds').html(paused_seconds);

                    let final_seconds = parseInt(paused_hour)*3600 + parseInt(paused_minute)*60 + parseInt(paused_seconds);
                    localStorage.setItem('seconds', final_seconds);

                    $('#pause').hide();
                    $('#resume').removeClass('d-none').show();
                }

                if (activeTracker.is_active && !activeTracker.is_paused) {
                    let timeToSec = moment();
                    let start_date = moment("{{ $status ? $status->start_time : null }}");
                    let curent_time_start = timeToSec.diff(start_date, 'seconds');

                    if (localStorage.getItem('status') === 'resume') {
                        totalSeconds += parseInt(localStorage.getItem("seconds"));
                    } else {
                        totalSeconds = curent_time_start;
                    }

                    intervalId = setInterval(startTimer, 1000);
                }
            }
        });
    }
    tracker();
</script>
{{$collection->links('themes.office.pagination')}}
