<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9 mb-5">
    @foreach($collection as $key => $item)
    <div class="col-md-4">
        <div class="card card-flush h-md-100 bg-secondary">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ $item->project->name }}</h2>
                </div>
            </div>
            <div class="card-body pt-1">
                <table>
                    <tr>
                        <td>Client</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>{{ $item->client }}</td>
                    </tr>
                    <tr>
                        <td>Due Date</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>{{ $item->due_date }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer flex-wrap pt-0">
                <a href="{{route('office.pm.invoice-pm.edit',$item->id)}}" class="menu-link btn btn-light btn-active-warning my-1 me-2">Edit</a>
                <a href="javascript:;" onclick="handle_confirm('Are you sure want to delete this invoice ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.pm.invoice-pm.destroy',$item->id)}}');" class="btn btn-light btn-active-danger my-1 my-1">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
