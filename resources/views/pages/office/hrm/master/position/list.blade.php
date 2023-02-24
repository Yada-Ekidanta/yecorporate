<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
    @foreach($collection as $key => $item)
    <div class="col-md-4">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{$item->name}}</h2>
                </div>
            </div>
            <div class="card-body pt-1">
                <div class="fw-bold text-gray-600 mb-5">Total permission with this position: {{$item->role_permission->count() > 0 ? $item->role_permission->count() : 0}}</div>
                @if($item->role_permission->count() > 0 ? $item->role_permission->count() : '')
                <div class="d-flex flex-column text-gray-600">
                    @php
                    $total = 5;
                    @endphp
                    @foreach($item->role_permission as $keys => $permission)
                    @if(++$keys < 6)
                    <div class="d-flex align-items-center py-2">
                        <span class="bullet bg-primary me-3"></span>
                        {{$permission->permission->name}}
                    </div>
                    @endif
                    @endforeach
                    @if($item->role_permission->count() > 5)
                    <div class='d-flex align-items-center py-2'>
                        <span class='bullet bg-primary me-3'></span>
                        <em>and {{$item->role_permission->count() - $total}} more...</em>
                    </div>
                    @endif
                </div>
                @endif
            </div>
            <div class="card-footer flex-wrap pt-0">
                <a href="{{route('office.hrm.master.position.permission',$item->id)}}" class="btn btn-light btn-active-primary my-1 me-2 menu-link">Edit Permission</a>
                <a href="{{route('office.hrm.master.position.edit-position',['department'=>$department->id,'position'=>$item->id])}}" onclick="" class="btn btn-light btn-active-warning my-1 me-2 menu-link">Edit</a>
                <a href="javascript:;" onclick="handle_confirm('Are you sure want to delete this position ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.hrm.master.position.destroy',$item->id)}}');" class="btn btn-light btn-active-danger my-1 my-1">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-md-4">
        <div class="card h-md-100">
            <div class="card-body d-flex flex-center">
                <a href="{{route('office.hrm.master.position.create-position',$department->id)}}" class="btn btn-clear d-flex flex-column flex-center menu-link">
                    <img src="{{asset('metronic/media/illustrations/sketchy-1/4.png')}}" alt="" class="mw-100 mh-150px mb-7" />
                    <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Position</div>
                </a>
            </div>
        </div>
    </div>
</div>