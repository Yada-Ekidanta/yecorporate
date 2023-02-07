<style>
    .kanban-container {
        flex-wrap: nowrap !important;
        overflow-x: auto;
    }
</style>

<div id="_jkanban_basic"></div>

<script>
    let obj,
        i,
        lead_source = 0,
        call_ = [],
        email = [],
        existing_customer = [],
        partner = [],
        public_relations = [],
        website = [],
        campaign = [],
        data = @json($collection);

    for (i = 0; i < data.length; i++) {
        let id = data[i].id;
        let updateURL = "{{ route('office.crm.opportunity.edit', ':id') }}";
        let deleteURL = "{{ route('office.crm.opportunity.destroy', ':id') }}";
        deleteURL = deleteURL.replace(':id', id);
        let clientName = data[i].client.name;
        let clientContact = data[i].client_contact.name + " (" + data[i].client_contact.phone + ")";
        // console.log(clientContact);
        function editPage (id) {
            updateURL = updateURL.replace(':id', id);
            window.location.href = updateURL;
        }
        obj = {
            id: id,
            title: `<span class="font-weight-bold"> ${data[i].name} </span>
                        <input type="hidden" id="lead_source" value="${data[i].lead_source_id}" />
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
                    <span class="text-muted" style="white-space: nowrap; text-overflow: ellipsis;">${clientName + " - " + clientContact}</span>`,
        };
        lead_source = data[i].lead_source_id;
        switch (lead_source) {
            case 1:
                call_.push(obj);
                break;
            case 2:
                email.push(obj);
                break;
            case 3:
                existing_customer.push(obj);
                break;
            case 4:
                partner.push(obj);
                break;
            case 5:
                public_relations.push(obj);
                break;
            case 6:
                website.push(obj);
                break;
            case 7:
                campaign.push(obj);
                break;
        }
    }

    let kanban = new jKanban({
        element: '#_jkanban_basic',
        gutter: '0',
        widthBoard: '270px',
        boards: [
            {
                id: '_call',
                title: 'Call',
                class: 'primary',
                item: call_
            },
            {
                id: '_email',
                title: 'Email',
                class: 'info',
                item: email
            },
            {
                id: '_existing_customer',
                title: 'Existing Customer',
                class: 'warning',
                item: existing_customer
            },
            {
                id: '_partner',
                title: 'Partner',
                class: 'dark',
                item: partner
            },
            {
                id: '_public_relations',
                title: 'Public Relations',
                class: 'success',
                item: public_relations
            },
            {
                id: '_website',
                title: 'Website',
                class: 'secondary',
                item: website
            },
            {
                id: '_campaign',
                title: 'Campaign',
                class: 'danger',
                item: campaign
            },
        ],
        dragBoards: true,
        dragendEl: function(el) {
            let id = el.dataset.eid;
            let updateURL = "{{ route('office.crm.opportunity.update-lead-source', ':id') }}";
            updateURL = updateURL.replace(':id', id);
            // console.log(updateURL);
            let lead_source = el.offsetParent.dataset.id;
            switch (lead_source) {
                case '_call':
                    $('#lead_source').val(1);
                    break;
                case '_email':
                    $('#lead_source').val(2);
                    break;
                case '_existing_customer':
                    $('#lead_source').val(3);
                    break;
                case '_partner':
                    $('#lead_source').val(4);
                    break;
                case '_public_relations':
                    $('#lead_source').val(5);
                    break;
                case '_website':
                    $('#lead_source').val(6);
                    break;
                case '_campaign':
                    $('#lead_source').val(7);
                    break;
            }
            $.ajax({
                url: updateURL,
                type: 'PUT',
                data: {
                    lead_source: $('#lead_source').val(),
                }
            });
            // console.log('dragendEl:', id);
            // console.log('dragendEl:', $('#lead_source').val());
        },
    });
</script>
