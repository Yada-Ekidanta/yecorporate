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
                    <span>{{$item->start_date}} {{ $item->start_time }}</span>
                </td>
                <td>
                    <span>{{$item->end_date}} {{ $item->end_time }}</span>
                </td>
                <td>
                    <span>{{$item->total_time}}</span>
                </td>
                <td class="text-center">
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
{{$collection->links('themes.office.pagination')}}
