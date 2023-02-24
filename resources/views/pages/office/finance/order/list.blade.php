<table class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th>Order</th>
            <th>Date</th>
            <th>Name</th>
            <th>Plan Name</th>
            <th>Price</th>
            <th>Payment Type</th>
            <th>Status</th>
            <th>Coupon</th>
            <th >Invoice</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @forelse ($collection as $key => $item)
        <tr>
            <td>{{$item->order_id}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->plant_name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->payment_type}}</td>
            <td>
                @if($item->payment_status == 'succeeded')
                    <i class="badge bg-success p-2 px-3 rounded"></i> {{ucfirst($item->payment_status)}}
                @else
                    <i class="badge bg-danger p-2 px-3 rounded"></i> {{ucfirst($item->payment_status)}}
                @endif
            </td>

            <td>{{!empty($item->total_coupon_used)? !empty($order->total_coupon_used->coupon_detail)?$order->total_coupon_used->coupon_detail->code:'-':'-'}}</td>

            <td class="text-center">
                @if($item->receipt != 'free coupon' && $item->payment_type == 'STRIPE')
                    <a href="{{$item->receipt}}" title="Invoice" target="_blank" class="">
                        <i class="ti ti-file-invoice"></i>
                    </a>
                @elseif($item->receipt == 'free coupon')
                    <p>{{__('Used 100 % discount coupon code.')}}</p>
                @elseif($item->payment_type == 'Manually')
                    <p>{{__('Manually plan upgraded by super admin')}}</p>
                @else
                    -
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td align="center" colspan="9">No Data</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{$collection->links('themes.office.pagination')}}