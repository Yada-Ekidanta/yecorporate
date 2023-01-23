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
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('metronic/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('metronic/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('js/swup.min.js')}}"></script>
<script src="{{asset('js/toastify.js')}}"></script>
<script src="{{asset('js/office/plugin.js')}}"></script>
<script src="{{asset('js/office/method.js')}}"></script>
<script src="{{asset('js/office/main.js')}}"></script>
<script src="{{asset('metronic/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
<!--end::Custom Javascript-->
