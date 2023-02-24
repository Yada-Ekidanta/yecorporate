<div id="jkanban_basic"></div>

<script>
    function kanban () {
        let obj,
            i,
            status = 0,
            active1 = [],
            active2 = [],
            active3 = [],
            active4 = [],
            date = new Date(),
            data = @json($todoList);

        for (i = 0; i < data.length; i++) {
            let id = data[i].id;

            let updateURL = "{{ route('office.pm.todo-list.edit', ':id') }}";
            updateURL = updateURL.replace(':id', id);

            let deleteURL = "{{ route('office.pm.todo-list.destroy', ':id') }}";
            deleteURL = deleteURL.replace(':id', id);

            let dueDate = '';

            if (data[i].status < 4) {
                if (new Date(data[i].due_date) < date) {
                    dueDate = `<span class="text-danger">${data[i].due_date}</span>`;
                } else {
                    dueDate = `<span class="text-muted">${data[i].due_date}</span>`;
                }
            } else {
                dueDate = `<span class="text-muted">${data[i].due_date}</span>`;
            }

            obj = {
                id: id,
                title: `<span class="font-weight-bold"> ${data[i].name} </span>
                            <input type="hidden" name="status" id="status">
                            <div class="btn-group" style="position: absolute; right:60px; width:0px;">
                                <a href="#" class="btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"/>
                                        <rect x="10" y="3" width="4" height="4" rx="2" fill="currentColor"/>
                                        <rect x="10" y="17" width="4" height="4" rx="2" fill="currentColor"/>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item menu-link" href="${updateURL}?id={{ $data->id }}" target="_parent">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:;" onclick="handle_confirm('Are you sure want to delete this todo list ?', 'Yes, im sure', 'No, im not','DELETE','${deleteURL}')"  class="menu-link">Delete</a></li>
                                </ul>
                            </div>
                            <br><br>` + dueDate,
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
            element: '#jkanban_basic',
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

                status = el.offsetParent.dataset.id;

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
                    }
                });
            },
        });
    }
    kanban();
</script>

