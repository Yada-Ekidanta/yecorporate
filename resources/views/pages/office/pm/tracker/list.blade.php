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
{{-- <script>
    $('body').on('click', '.carryOn', function() {
        location.reload(true);

        let start = $(this).attr('itemstart');
        let end = $(this).attr('itemend');

        let convertStart = moment(start);
        let nowStart = moment();
        let secondStart = nowStart.diff(convertStart, 'seconds');

        let convertEnd = moment(end);
        let nowEnd = moment();
        let secondEnd = nowEnd.diff(convertEnd, 'seconds');

        let curentTime = secondStart - secondEnd;

        console.log(curentTime);

        localStorage.setItem("curentTime", curentTime);

        // totalSeconds += curentTime;

        $('#start-btn').hide();
        $('#stop').show();
        $('#is_active').val(1);

        let url = "{{route('office.pm.tracker.carry_on', ':id')}}";
        url = url.replace(':id', $(this).attr('itemid'));

        $.ajax({
            url: url,
            type: 'PUT',
            data: $('#form_input').serialize(),
            success: function(data) {
                $('#id').val(data.id);
            }
        });
    });
</script> --}}
{{$collection->links('themes.office.pagination')}}
