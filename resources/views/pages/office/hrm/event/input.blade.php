<x-office-layout title="{{$data->id ? 'Update' : 'Create'}} Calendar">
    <form id="form_input">
        <div class="modal-header">
            <h5 class="modal-title">Create new Event</h5>
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <span class="svg-icon svg-icon-2x">

                </span>
            </div>
            <!--end::Close-->
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <div class="col-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="code" name="code" placeholder="102" value="{{$data->code}}"/>
                        <label for="name">Title</label>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Indonesia" value="{{$data->name}}"/>
                        <label for="name">Name</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{$data->id ? route('office.hrm.event.update',$data->id) : route('office.hrm.event.store')}}','{{$data->id ? 'PATCH' : 'POST'}}');" class="btn btn-sm btn-{{$data->id ? 'warning' : 'success'}}">
                {{$data->id ? 'Update' : 'Create'}}
            </button>
            @if($data->id)
            <button type="button" onclick="handle_confirm('Are you sure want to delete this event ?', 'Yes, i`m sure', 'No, i`m not','DELETE','{{route('office.hrm.event.destroy',$data->id)}}');" class="btn btn-sm btn-danger">
                Delete
            </button>
            @endif
        </div>
    </form>
</x-office-layout>    