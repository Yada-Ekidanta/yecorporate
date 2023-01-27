<x-office-layout title="Time Sheet">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 animation-class">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{config('app.name')}}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('office.dashboard.index')}}" class="text-muted text-hover-primary menu-link">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Project Management</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Calender</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3 d-none">
                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6 animation-class delay3">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="container p-5">
                    <div id="kt_docs_fullcalendar_drag"></div>
                </div>
            </div>
        </div>
    </div>
    @section('custom_js')
        <script>
            // https://stackoverflow.com/questions/44496686/how-to-customize-the-full-calendar-for-weekday-view
            let calendarEl = document.getElementById("kt_docs_fullcalendar_drag");
            var repeatingEvents = [{
                "id": "1",
                "title": "Event 1",
                //in "start and "end", only set times of day, not dates.
                "start": "09:00",
                "end": "10:00",
                //use standard dow property to define which days of the week the event will appear on
                "dow": "1",
                //the custom "ranges" sets when the repetition begins and ends
                "ranges": [{
                "start": "2023-01-01",
                "end": "2023-01-30"
                }],
                "allDay": false
            }, {
                "id": "2",
                "title": "Event 2",
                "start": "10:00",
                "end": "12:00",
                "dow": "2",
                "ranges": [{
                "start": "2023-01-10",
                "end": "2023-01-16"
                }],
                "allDay": false
            }, {
                "id": "3",
                "title": "Event 3",
                "start": "15:00",
                "end": "16:30",
                "dow": "3",
                "ranges": [{
                "start": "2023-01-01",
                "end": "2023-01-30"
                }],
                "allDay": false
            }];
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                // slotDuration: {
                    // days: 1,
                    // hours:1,
                // },
                headerToolbar: {
                    left: "prev,next",
                    center: "title",
                    right: "today timeGridWeek"
                },
                dateAlignment: 'week',
                allDaySlot: false,
                contentHeight:"auto",
                // eventContent: `Nanti di isi total time`,
                events: [
                {
                    title: 'Test',
                    start: '2023-01-18 00:00:00',
                    end: '2023-01-18 10:00:00'
                },
                {
                    title: 'Test',
                    start: '2023-01-19 00:00:00',
                    end: '2023-01-19 10:00:00'
                },
                ]
            });
            // console.log(calendar.el.children);

            calendar.render();
        </script>
    @endsection
</x-office-layout>
