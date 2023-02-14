<div id="calendar"></div>

<script>
    function initCalendar() {
        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: "prev,next",
                center: "title",
                right: "today dayGridMonth"
            },
            navLinks: true, // can click day/week names to navigate views
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
                            calendar.addEvent({
                                title: title,
                                start: arg.start,
                                end: arg.end,
                                allDay: arg.allDay
                            })
                        }
                        calendar.unselect()
                    } else if (result.dismiss === "cancel") {
                        Swal.fire({
                            text: "Event creation was declined!.",
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
        });

        // Delete Event
        calendar.on('eventClick', function(arg) {
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
                    arg.event.remove();
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
        });

        calendar.render();
    }

    initCalendar();
</script>
