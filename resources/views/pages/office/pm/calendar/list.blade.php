<div id="calendar"></div>

<script>
    function initCalendar() {
        let data = @json($data);
        // console.log(data);

        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: "prev,next",
                center: "title",
                right: "today dayGridMonth"
            },
            navLinks: true,
            selectable: true,
            selectMirror: true,
            editable: true,
            dayMaxEvents: true,

            // Create new event
            select: function (arg) {
                Swal.fire({
                    html: '<div class="mb-7">Create new event?</div><div class="fw-bold mb-5">Event Name:</div><input type="text" class="form-control" name="event_name" />',
                    icon: "info",
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
                        let title = document.querySelector('input[name="event_name"]').value;
                        if (title) {
                            let startDate = new Date(arg.start);
                            let formattedStartDate = startDate.getFullYear() + "-" + (startDate.getMonth() + 1).toString().padStart(2, "0") + "-" + startDate.getDate().toString().padStart(2, "0");
                            let endDate = new Date(arg.end);
                            let formattedEndDate = endDate.getFullYear() + "-" + (endDate.getMonth() + 1).toString().padStart(2, "0") + "-" + endDate.getDate().toString().padStart(2, "0");
                            let allDay = (arg.allDay) ? 1 : 0;
                            $.ajax({
                                url: '{{ route("office.pm.calender.store") }}',
                                type: 'POST',
                                data: {
                                    title: title,
                                    start: formattedStartDate,
                                    end: formattedEndDate,
                                    allDay: allDay
                                },
                                success: function (response) {
                                    calendar.addEvent({
                                        title: title,
                                        start: formattedStartDate,
                                        end: formattedEndDate,
                                        allDay: allDay
                                    });
                                    calendar.unselect();
                                    Swal.fire({
                                        text: "Event created successfully!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        }
                                    }).then(function (result) {
                                        if (result.value) {
                                            location.reload();
                                        }
                                    });
                                },
                                error: function () {
                                    Swal.fire({
                                        text: "Event creation failed!",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        }
                                    });
                                }
                            });
                        }
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Event creation was declined!",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            },

            // Delete Event
            eventClick: function (arg) {
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
                        let url = '{{ route("office.pm.calender.destroy", ":id") }}';
                        url = url.replace(':id', arg.event.id);
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            success: function(result) {
                                arg.event.remove();
                            }
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Event deletion was declined!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                });
            },

            events: data
        });

        calendar.render();
    }

    initCalendar();
</script>
