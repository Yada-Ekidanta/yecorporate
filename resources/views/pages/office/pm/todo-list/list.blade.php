<div id="kt_docs_jkanban_basic"></div>
@section('custom_js')
    <script>
        load_list(1);
        let obj,
            i,
            status = 0,
            active1 = [],
            active2 = [],
            active3 = [],
            active4 = [],
            data = @json($todoList);

        for (i = 0; i < data.length; i++) {
            let id = data[i].id;
            let updateURL = "{{ route('office.pm.todo-list.edit', ':id') }}";
            updateURL = updateURL.replace(':id', id);
            // $('#name').val(data[i].name);
            // $('#due_date').val(data[i].due_date);
            obj = {
                id: id,
                title: `<span class="font-weight-bold"> ${data[i].name} </span>
                            <div class="btn-group" style="position: absolute; right:60px; width:0px;">
                                <a href="#" class="btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"/>
                                        <rect x="10" y="3" width="4" height="4" rx="2" fill="currentColor"/>
                                        <rect x="10" y="17" width="4" height="4" rx="2" fill="currentColor"/>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="${updateURL}?id={{ $data->id }}" class="menu-link">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:;" onclick="handle_confirm('Are you sure want to delete this todo list ?', 'Yes, i'm sure', 'No, i'm not','DELETE','{{route('office.pm.todo-list.destroy', 1)}}');"  class="menu-link">Delete</a></li>
                                </ul>
                            </div>
                            <br><br>
                        <span class="text-muted">${data[i].due_date}</span>`,
            };

            status = data[i].status;

            switch (status) {
                case 2:
                    active2.push(obj);
                    break;
                case 3:
                    active3.push(obj);
                    break;
                case 4:
                    active4.push(obj);
                    break;
                default:
                    active1.push(obj);
            }
        }

        let kanban = new jKanban({
            element: '#kt_docs_jkanban_basic',
            gutter: '0',
            widthBoard: '200px',
            boards: [
                {
                    id: '_todo',
                    title: 'Todo',
                    class: 'primary',
                    item: active1
                },
                {
                    id: '_in_progress',
                    title: 'In Progress',
                    class: 'warning',
                    item: active2
                },
                {
                    id: '_review',
                    title: 'Review',
                    class: 'info',
                    item: active3
                },
                {
                    id: '_done',
                    title: 'Done',
                    class: 'success',
                    item: active4
                }
            ],
            dragBoards: true,
            dragendEl: function (el) {
                let id = el.dataset.eid;

                let updateURL = "{{ route('office.pm.todo-list.updateStatus', ':id') }}";
                updateURL = updateURL.replace(':id', id);
                // console.log(updateURL);

                let status = el.offsetParent.dataset.id;

                switch (status) {
                    case '_todo':
                        $('#status').val(1);
                        break;
                    case '_in_progress':
                        $('#status').val(2);
                        break;
                    case '_review':
                        $('#status').val(3);
                        break;
                    default:
                        $('#status').val(4);
                }

                $.ajax({
                    url: updateURL,
                    type: 'PUT',
                    data: {
                        status: $('#status').val(),
                        // name: $('#name').val(),
                        // due_date: $('#due_date').val(),
                    }
                });
                // console.log('dragendEl:', id);
                // console.log('dragendEl:', status);
            },
        });
    </script>
@endsection
