<style>
    .kanban-container {
        flex-wrap: nowrap !important;
        overflow-x: auto;
    }
    .kanban-item {
        overflow: hidden;
        text-overflow: ellipsis
    }
</style>

<div id="_jkanban_basic"></div>

<script>
    function jkanban_opportunity() {
        let obj,
            i,
            opportunities_stage = 0,
            prospecting = [],
            qualification = [],
            proposal = [],
            negotiation = [],
            closed_won = [],
            closed_lost = [],
            data = @json($collection);

        for (i = 0; i < data.length; i++) {
            let id = data[i].id;
            let updateURL = "/office/crm/opportunity/" + id + "/edit";
            let deleteURL = "{{ route('office.crm.opportunity.destroy', ':id') }}";
            deleteURL = deleteURL.replace(':id', id);
            let clientName = data[i].client.name;
            let clientContact = data[i].client_contact.name + " (" + data[i].client_contact.phone + ")";
            // console.log(updateURL);
            obj = {
                id: id,
                title: `<span class="font-weight-bold"> ${data[i].name} </span>
                        <input type="hidden" id="opportunities_stage" value="${data[i].opportunities_stage_id}" />
                        <div class="btn-group" style="position: absolute; right:70px; width:0px;">
                            <a href="#" class="btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"/>
                                    <rect x="10" y="3" width="4" height="4" rx="2" fill="currentColor"/>
                                    <rect x="10" y="17" width="4" height="4" rx="2" fill="currentColor"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item menu-link" href="${updateURL}">Edit</a></li>
                                <li><a class="dropdown-item" href="javascript:;" onclick="handle_confirm('Are you sure want to delete this todo list ?', 'Yes, im sure', 'No, im not','DELETE','${deleteURL}')"  class="menu-link">Delete</a></li>
                            </ul>
                        </div>
                        <br><br>
                    <span class="text-muted text-nowrap">${clientName + " - " + clientContact}</span>`,
            };
            opportunities_stage = data[i].opportunities_stage_id;
            switch (opportunities_stage) {
                case 1:
                    prospecting.push(obj);
                    break;
                case 2:
                    qualification.push(obj);
                    break;
                case 3:
                    proposal.push(obj);
                    break;
                case 4:
                    negotiation.push(obj);
                    break;
                case 5:
                    closed_won.push(obj);
                    break;
                case 6:
                    closed_lost.push(obj);
                    break;
            }
        }

        let kanban = new jKanban({
            element: '#_jkanban_basic',
            gutter: '0',
            widthBoard: '270px',
            boards: [{
                    id: '_prospecting',
                    title: 'Prospecting',
                    class: 'primary',
                    item: prospecting
                },
                {
                    id: '_qualification',
                    title: 'Qualification',
                    class: 'info',
                    item: qualification
                },
                {
                    id: '_proposal',
                    title: 'Proposal',
                    class: 'warning',
                    item: proposal
                },
                {
                    id: '_negotiation',
                    title: 'Negotiation',
                    class: 'secondary',
                    item: negotiation
                },
                {
                    id: '_closed_won',
                    title: 'Closed Won',
                    class: 'success',
                    item: closed_won
                },
                {
                    id: '_closed_lost',
                    title: 'Closed Lost',
                    class: 'danger',
                    item: closed_lost
                },
            ],
            dragBoards: true,
            dragendEl: function(el) {
                let id = el.dataset.eid;
                let updateURL = "{{ route('office.crm.opportunity.update-lead-source', ':id') }}";
                updateURL = updateURL.replace(':id', id);
                // console.log(updateURL);
                let opportunities_stage = el.offsetParent.dataset.id;
                switch (opportunities_stage) {
                    case '_prospecting':
                        $('#opportunities_stage').val(1);
                        break;
                    case '_qualification':
                        $('#opportunities_stage').val(2);
                        break;
                    case '_proposal':
                        $('#opportunities_stage').val(3);
                        break;
                    case '_negotiation':
                        $('#opportunities_stage').val(4);
                        break;
                    case '_closed_won':
                        $('#opportunities_stage').val(5);
                        break;
                    case '_closed_lost':
                        $('#opportunities_stage').val(6);
                        break;
                }
                $.ajax({
                    url: updateURL,
                    type: 'PUT',
                    data: {
                        opportunities_stage: $('#opportunities_stage').val(),
                    },
                    success: function(response) {
                        if (response.alert == "success") {
                            handle_success(response);
                        } else {
                            toastify_message(response.message);
                        }
                    },
                    error: function(xhr) {
                        handle_error(xhr);
                    },
                });
                // console.log('dragendEl:', id);
                // console.log('dragendEl:', $('#opportunities_stage').val());
            },
        });
    }

    jkanban_opportunity();
</script>
