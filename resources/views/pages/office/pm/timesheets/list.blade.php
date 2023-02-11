<div id="timeSheet"></div>

<script>
    function timeSheet() {
        let data = @json($data);

        let timeSheetEl = document.getElementById("timeSheet");
        let timeSheet = new FullCalendar.Calendar(timeSheetEl, {
            initialView: 'dayGridWeek',
            headerToolbar: {
                left: "prev,next",
                center: "title",
                right: "today dayGridWeek"
            },
            dateAlignment: 'week',
            allDaySlot: false,
            contentHeight:"auto",
            events: data,
        });

        timeSheet.render();
    }

    timeSheet();
</script>
