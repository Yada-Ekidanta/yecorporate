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
            let obj,
                i,
                start,
                end,
                arr = [],
                data = @json($data),
                timeConvert = @json($timeConvert);

            for (i = 0; i < data.length; i++) {
                // console.log(timeConvert);
                start = data[i].start_time;
                end = data[i].end_time;

                obj = {
                    title: `Employee working time ${timeConvert}`,
                    start: start,
                    end: end,
                };

                arr.push(obj);
            }

            console.log(arr);

            let calendarEl = document.getElementById("kt_docs_fullcalendar_drag");
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: "prev,next",
                    center: "title",
                    right: "today timeGridWeek"
                },
                dateAlignment: 'week',
                allDaySlot: false,
                contentHeight:"auto",
                events: arr,
                slotDuration: "00:20:00",
                // slotLabelInterval: "01:00:00"
            });
            // console.log(calendar.el.children);

            calendar.render();
        </script>
    @endsection
</x-office-layout>
