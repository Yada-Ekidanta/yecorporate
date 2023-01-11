// const options = {
//     // when this option is enabled, swup disables browser native scroll control (sets scrollRestoration to manual) and takes over this task.
//     // This means that position of scroll on previous page(s) is not preserved (but can be implemented manually based on use case).
//     // Otherwise swup scrolls to top/#element on popstate as it does with normal browsing.
//     animateHistoryBrowsing: false,
//     // animation selector
//     animationSelector: '[class*="transition-"]',
//     // defines link elements that will trigger the transition
//     linkSelector: '.menu-link:not([data-no-swup]), .menu-item:not([data-no-swup]), .nav-link:not([data-no-swup])',
//     // stores previously loaded contents of the pages in memory
//     cache: true,
//     // default container(s)
//     containers: ['#kt_app_main'],
//     // request headers
//     requestHeaders: {
//         'X-Requested-With': 'swup',
//         Accept: 'text/html, application/xhtml+xml'
//     },
//     // enable/disable plugins
//     // see below
//     plugins: [],
//     // skips popState handling when using other tools manipulating the browser history
//     skipPopStateHandling: function skipPopStateHandling(event) {
//         return !(event.state && event.state.source === 'swup');
//     }
// };
const options = {
    containers: ['#kt_app_main'],
    cache:false,
    animateHistoryBrowsing: true,
    linkSelector: '.menu-link:not([data-no-swup]), .menu-item:not([data-no-swup]), .nav-link:not([data-no-swup])',
    animationSelector: '[class="app-toolbar"]',
};
const swup = new Swup(options);
// document.addEventListener("swup:contentReplaced",init);
document.addEventListener("swup:contentReplaced", () => {
    load_list(1);
    obj_autosize();
    obj_time();
    obj_date_time();
    obj_date();
    obj_birthdate();
    obj_startdatenow();
    obj_enddatenow();
    obj_startdatenow('purchase_at');
    obj_startdatenow('supported_at');
    obj_startdatenow('start_date');
    obj_startdatenow('end_date');
    obj_startdatenow('start_at');
    obj_startdatenow('end_at');
    obj_startdatenow('due_date');
    obj_select('form-select-employee');
    obj_select('form-select-project');
    obj_select('form-select-task');
    obj_select('form-select-status');
    obj_select('form-select-priority');
    obj_select('form-select-milestone');
    setTimeout(() => {
        obj_quill('desc');
    }, 1000);
    $('.ribuan').keyup(function (event) {
        if (event.which >= 37 && event.which <= 40) return;
        // format number
        $(this).val(function (index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        });
        var id = $(this).data("id-selector");
        var classs = $(this).data("class-selector");
        var value = $(this).val();
        var noCommas = value.replace(/,/g, "");
        $('#' + id).val(noCommas);
        $('.' + classs).val(noCommas);
    });
    $('.number_only').bind('keypress', function (event) {
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
    $('.format_email').bind('keypress', function (event) {
        var regex = new RegExp("^[A-Za-z0-9@_.]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });
    Inputmask({
        "mask": "99.999.999.9-999.999"
    }).mask(".npwp_format");

});
