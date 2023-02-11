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
        });

        calendar.render();
    }

    initCalendar();
</script>
