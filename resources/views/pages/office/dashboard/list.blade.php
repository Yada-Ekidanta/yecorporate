<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
    <!--begin::Table head-->
    <thead>
        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
            <th class="p-0 pb-3 min-w-175px ">ITEM</th>
            <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
            <th class="p-0 pb-3 min-w-175px text-end">STATUS</th>
        </tr>
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody>
        @forelse ($collection as $item)
            <tr class="text-start">
                <td>
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-50px me-3">
                            <img src="{{ asset('storage/'.$item->image) }}" class="" alt="" />
                        </div>
                        <div class="d-flex justify-content-start flex-column pb-8">
                            <p class="text-gray-800 fw-bold mb-1 fs-6">{{ $item->name }}</p>
                            {{-- <span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span> --}}
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="text-gray-600 fw-bold fs-6">{{ $item->currency }}{{ $item->budget }}</span>
                </td>
                <td class="text-end">
                    @if ($item->status == 'In Progres')
                        <span class="badge py-3 px-3 fs-7 badge-light-success">{{ $item->status }}</span>
                    @elseif( $item->status == 'On Hold')
                        <span class="badge py-3 px-3 fs-7 badge-light-warning">{{ $item->status }}</span>
                    @elseif( $item->status == 'Closed')
                        <span class="badge py-3 px-3 fs-7 badge-light-danger">{{ $item->status }}</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td align="center" colspan="8">No Data</td>
            </tr>
        @endforelse
    </tbody>
    <!--end::Table body-->
</table>
<div class="my-5">
    {{$collection->links('themes.office.pagination')}}
</div>
