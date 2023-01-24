<!--begin::Events listing-->
<div class="d-flex flex-wrap">
    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge badge-info me-3 my-1">
        <div class="fc-event-main">Celebration</div>
    </div>
    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge badge-success me-3 my-1">
        <div class="fc-event-main">Holiday</div>
    </div>
    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge me-3 my-1">
        <div class="fc-event-main">Meeting</div>
    </div>
    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event badge badge-danger me-3 my-1">
        <div class="fc-event-main">National Day</div>
    </div>
</div>
<!--end::Events listing-->
<div id="ye_calendar"></div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var events = @json($collection);
    var calendarEl = document.getElementById("ye_calendar");

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
        },
        initialDate: "{{date('Y-m-d')}}",
        locale: 'id',
        buttonIcons: true, // show the prev/next text
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        businessHours: true, 

        // Create new event
        select: function (arg) {
            // handle_open_modal(`{{route('office.hrm.event.create')}}`,`#customXtraLargeModal`,`#contentXtraLargeModal`,`GET`);
            Swal.fire({
                html: 
                "<div class='mb-7'>Create new event?</div>"+
                "<div class='fw-bold mb-5'>Event Name:</div>"+
                "<input type='text' class='form-control mb-5' name='event_name' />"+
                "<div class='fw-bold mb-5'>Event Description:</div>"+
                "<textarea class='form-control mb-5' name='event_desc'></textarea>"+
                "<div class='fw-bold mb-5'>Event Type:</div>"+
                "<select class='form-select mb-5' name='event_type'>"+
                    "<option value='Celebration'>Celebration</option>"+
                    "<option value='Holiday'>Holiday</option>"+
                    "<option value='Meeting'>Meeting</option>"+
                    "<option value='National'>National Day</option>"+
                "</select>"+
                "<div class='fw-bold mb-5'>Event URL:</div>"+
                "<input type='url' class='form-control mb-5' name='event_url' />",
                // icon: "info",
                width: "800px",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, create it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    var title = document.querySelector("input[name='event_name']").value;
                    var description = document.querySelector("textarea[name='event_desc']").value;
                    var type = document.querySelector("select[name='event_type']").value;
                    var url = document.querySelector("input[name='event_url']").value;
                    if (title) {
                        $.ajax({
                            url: "{{ route('office.hrm.event.store') }}",
                            type: "POST",
                            data: {
                                title: title,
                                start: arg.start,
                                end: arg.end,
                                description: description,
                                url: url,
                                type: type
                            },
                            success: function(response) {
                                handle_success(response);
                            },
                            error: function(xhr) {
                                handle_error(xhr);
                            },
                        })
                    }
                    calendar.unselect()
                } else if (result.dismiss === "cancel") {
                    toastify_message('Create Event Canceled');
                }
            });
        },

        // Delete event
        eventClick: function (arg) {
            arg.jsEvent.preventDefault();
            if(!arg.event.url){
                Swal.fire({
                    text: "Are you sure you want to delete this event?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{ route('office.hrm.event.destroy', ':id') }}".replace(":id", arg.event.id),
                            type: "DELETE",
                            success: function(response) {
                                arg.event.remove()
                                toastify_message('Event deleted');
                            }
                        })
                    } else if (result.dismiss === "cancel") {
                        toastify_message('Delete Event Canceled');
                    }
                });
            }else{
                Swal.fire({
                title: 'Do you want to visit this event?',
                icon: "warning",
                buttonsStyling: false,
                showDenyButton: true,
                showCancelButton: true,
                focusConfirm: true,
                denyButtonText: `Delete this event`,
                confirmButtonText: 'Yes',
                cancelButtonText: `No, return`,
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                    denyButton: "btn btn-danger"
                }
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.open(arg.event.url);
                    } else if (result.isDenied) {
                        $.ajax({
                            url: "{{ route('office.hrm.event.destroy', ':id') }}".replace(":id", arg.event.id),
                            type: "DELETE",
                            success: function(response) {
                                arg.event.remove()
                                toastify_message('Event deleted');
                            }
                        })
                    }
                })
            }
        },
        eventDrop: function(arg) {
            $.ajax({
                url: "{{ route('office.hrm.event.update', ':id') }}"
                    .replace(":id", arg
                        .event.id),
                type: "PUT",
                data: {
                    start: arg.event.start,
                    end: arg.event.end,
                },
                success: function(response) {
                    if (response.alert == "success") {
                        // Swal.fire({
                        //     title: "Success",
                        //     text: response.message,
                        //     icon: "success",
                        //     buttonsStyling: !1,
                        //     confirmButtonText: "Ok",
                        //     customClass: {
                        //         confirmButton: "btn btn-primary"
                        //     }
                        // })
                    } else {
                        // Swal.fire({
                        //     title: "Error",
                        //     text: "Event not updated",
                        //     icon: "error",
                        //     buttonsStyling: !1,
                        //     confirmButtonText: "Ok",
                        //     customClass: {
                        //         confirmButton: "btn btn-primary"
                        //     }
                        // })
                    }
                }
            })
        },
        eventContent: function (info) {
            var element = $(info.el);

            if (info.event.extendedProps && info.event.extendedProps.description) {
                if (element.hasClass("fc-day-grid-event")) {
                    element.data("content", info.event.extendedProps.description);
                    element.data("placement", "top");
                    KTApp.initPopover(element);
                } else if (element.hasClass("fc-time-grid-event")) {
                    element.find(".fc-title").append("<div class='fc-description'>" + info.event.extendedProps.description + "</div>");
                } else if (element.find(".fc-list-item-title").lenght !== 0) {
                    element.find(".fc-list-item-title").append("<div class='fc-description'>" + info.event.extendedProps.description + "</div>");
                }
            }
        },
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: events,
    });
    calendar.render();
</script>