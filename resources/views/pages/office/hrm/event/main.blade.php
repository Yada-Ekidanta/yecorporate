<x-office-layout title="Calendar">
    <div id="content_list">
        <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title fw-bold">{{config('app.name')}} Calendar</h2>
                    </div>
                    <div class="card-body">
                        <div id="list_result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
<script>
    load_list(1);
</script>
</x-office-layout>