<script>
    var defaultThemeMode = "light";
    var themeMode;
    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
            if ( localStorage.getItem("data-theme") !== null ) {
                themeMode = localStorage.getItem("data-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('metronic/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('metronic/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('metronic/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('metronic/js/widgets.bundle.js')}}"></script>
<script src="{{asset('metronic/js/custom/widgets.js')}}"></script>
<script src="{{asset('metronic/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('metronic/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('metronic/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->