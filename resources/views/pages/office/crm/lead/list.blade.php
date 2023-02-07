<style>
    .kanban-container {
        flex-wrap: nowrap !important;
        overflow-x: auto;
    }
</style>

<div id="jkanban_basic"></div>

<script>
    let obj,
        i,
        status = 0,
        newest = [],
        assigned = [],
        in_process = [],
        converted = [],
        recycled = [],
        dead = [],
        data = @json($collection);

    for (i = 0; i < data.length; i++) {
        let id = data[i].id;
        let updateURL = "{{ route('office.crm.leads.edit', ':id') }}";
        let deleteURL = "{{ route('office.crm.leads.destroy', ':id') }}";
        deleteURL = deleteURL.replace(':id', id);
        let clientName = data[i].client.name;
        let contact = data[i].client_contact.name + " (" + data[i].client_contact.phone + ")";
        // console.log(contact);
        function editPage (id) {
            updateURL = updateURL.replace(':id', id);
            window.location.href = updateURL;
        }
        obj = {
            id: id,
            title: `<span class="font-weight-bold"> ${data[i].title} </span>
                        <input type="hidden" name="st" id="status" value="${data[i].st}" />
                        <div class="btn-group" style="position: absolute; right:70px; width:0px;">
                            <a href="#" class="btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"/>
                                    <rect x="10" y="3" width="4" height="4" rx="2" fill="currentColor"/>
                                    <rect x="10" y="17" width="4" height="4" rx="2" fill="currentColor"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;" onclick="editPage(${data[i].id})";>Edit</a></li>
                                <li><a class="dropdown-item" href="javascript:;" onclick="handle_confirm('Are you sure want to delete this todo list ?', 'Yes, im sure', 'No, im not','DELETE','${deleteURL}')"  class="menu-link">Delete</a></li>
                            </ul>
                        </div>
                        <br><br>
                    <span class="text-muted" style="white-space: nowrap; text-overflow: ellipsis;">${clientName + " - " + contact}</span>`,
        };
        status = data[i].st;
        switch (status) {
            case 1:
                assigned.push(obj);
                break;
            case 2:
                in_process.push(obj);
                break;
            case 3:
                converted.push(obj);
                break;
            case 4:
                recycled.push(obj);
                break;
            case 5:
                dead.push(obj);
                break;
            case 0:
                newest.push(obj);
                break;
        }
    }

    let kanban = new jKanban({
        element: '#jkanban_basic',
        gutter: '0',
        widthBoard: '270px',
        boards: [
            {
                id: '_new',
                title: 'New',
                class: 'primary',
                item: newest
            },
            {
                id: '_assigned',
                title: 'Assigned',
                class: 'info',
                item: assigned
            },
            {
                id: '_in_process',
                title: 'In Process',
                class: 'warning',
                item: in_process
            },
            {
                id: '_converted',
                title: 'Converted',
                class: 'dark',
                item: converted
            },
            {
                id: '_recycled',
                title: 'Recycled',
                class: 'success',
                item: recycled
            },
            {
                id: '_dead',
                title: 'Dead',
                class: 'danger',
                item: dead
            },
        ],
        dragBoards: true,
        dragendEl: function(el) {
            let id = el.dataset.eid;
            let updateURL = "{{ route('office.crm.leads.updateStatus', ':id') }}";
            updateURL = updateURL.replace(':id', id);
            // console.log(updateURL);
            let status = el.offsetParent.dataset.id;
            switch (status) {
                case '_assigned':
                    $('#status').val(1);
                    break;
                case '_in_process':
                    $('#status').val(2);
                    break;
                case '_converted':
                    $('#status').val(3);
                    break;
                case '_recycled':
                    $('#status').val(4);
                    break;
                case '_dead':
                    $('#status').val(5);
                    break;
                case '_new':
                    $('#status').val(0);
                    break;
            }
            $.ajax({
                url: updateURL,
                type: 'PUT',
                data: {
                    status: $('#status').val(),
                }
            });
            // console.log('dragendEl:', id);
            // console.log('dragendEl:', $('#status').val());
        },
    });
</script>
