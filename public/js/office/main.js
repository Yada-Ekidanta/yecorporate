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
    cache: false,
    animateHistoryBrowsing: true,
    linkSelector: '.menu-link:not([data-no-swup]), .menu-item:not([data-no-swup]), .nav-link:not([data-no-swup])',
    animationSelector: '[id="kt_app_toolbar"]',
};

const swup = new Swup(options);
// document.addEventListener("swup:contentReplaced",init);
document.addEventListener("swup:contentReplaced", () => {
    get_province('country_id', 'province_id');
    get_regency('province_id', 'regency_id');
    get_district('regency_id', 'district_id');
    get_village('district_id', 'village_id');
    get_postcode('village_id', 'postcode');
    if ($('#data').length > 0 ) {
        var getData = $('#data').val();
        var data =  JSON.parse(getData);
        if (data.id != null) {
            get_regional_data('country_id', 'province_id', 'regency_id', 'district_id', 'village_id', data.country_id, data.province_id, data.regency_id, data.district_id, data.village_id);
        }
    }
    load_list(1);
    setTimeout(() => {
        if ($('#desc').length > 0) {
            obj_quill('desc');
        }
    }, 1000);
    setTimeout(() => {
        if ($('#address').length > 0) {
            obj_quill('address');
        }
    }, 1000);
    setTimeout(() => {
        if ($('#description').length > 0) {
            obj_quill('description');
        }
    }, 1000);
    $('.menu-item a').each(function() {
        let menuLink = $(this).attr('href') + '.*';
        let currentUrl = window.location.href;
        let regex = new RegExp(menuLink);

        if (regex.test(currentUrl)) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
    });
    if ($('#data').length > 0) {
        var getData = $('#data').val();
        var data =  JSON.parse(getData);
        if (data.id != null || data.id != undefined && data.country_id != null || data.country_id != undefined) {
            get_regional_data('country_id', 'province_id', 'regency_id', 'district_id', 'village_id', data.country_id, data.province_id, data.regency_id, data.district_id, data.village_id);
        }
        if (data.id != null || data.id != undefined && data.billing_country_id != null || data.billing_country_id != undefined) {
            get_regional_data('billing_country_id', 'billing_province_id', 'billing_regency_id', 'billing_district_id', 'billing_village_id', data.billing_country_id, data.billing_province_id, data.billing_regency_id, data.billing_district_id, data.billing_village_id);
            get_regional_data('shipping_country_id', 'shipping_province_id', 'shipping_regency_id', 'shipping_district_id', 'shipping_village_id', data.shipping_country_id, data.shipping_province_id, data.shipping_regency_id, data.shipping_district_id, data.shipping_village_id);
        }
        if (data.id != null || data.id != undefined && data.client_id != null && data.client_contact_id != null) {
            get_contact_data('client_id', 'client_contact_id', data.client_id, data.client_contact_id);
        }
    }
    get_contact('client_id', 'client_contact_id')
    get_province('billing_country_id', 'billing_province_id');
    get_regency('billing_province_id', 'billing_regency_id');
    get_district('billing_regency_id', 'billing_district_id');
    get_village('billing_district_id', 'billing_village_id');
    get_postcode('billing_village_id', 'billing_postcode');
    get_province('shipping_country_id', 'shipping_province_id');
    get_regency('shipping_province_id', 'shipping_regency_id');
    get_district('shipping_regency_id', 'shipping_district_id');
    get_village('shipping_district_id', 'shipping_village_id');
    get_postcode('shipping_village_id', 'shipping_postcode');
    get_province('country_id', 'province_id');
    get_regency('province_id', 'regency_id');
    get_district('regency_id', 'district_id');
    get_village('district_id', 'village_id');
    get_postcode('village_id', 'postcode');
    obj_autosize();
    obj_select('district_id');
    obj_select('province_id');
    obj_select('regency_id');
    obj_select('village_id');
    obj_select('country_id');
    obj_select('employee_id');
    obj_select('leave_type_id');
    obj_select('department_id');
    obj_select('bank_id');
    obj_select('priority');
    obj_select('company_branch_id');
    obj_select('position_id');
    obj_select('award_type_id');
    obj_select('termination_type');
    obj_startdatenow('purchase_at');
    obj_startdatenow('supported_at');
    obj_startdatenow('date');
    obj_date('date_birth');
    obj_startdatenow('resignation_date');
    obj_startdatenow('start_at');
    obj_startdatenow('start_date');
    obj_startdatenow('end_date');
    obj_startdatenow('promotion_date');
    obj_startdatenow('complaint_date');
    obj_startdatenow('end_at');
    obj_startdatenow('termination_date');
    obj_startdatenow('notice_date');
    obj_startdatenow('transfer_date');
    obj_time();
    obj_date_time();
    obj_date();
    obj_birthdate();
    obj_startdatenow();
    obj_enddatenow();
    obj_startdatenow('purchase_at');
    obj_startdatenow('supported_at');
    obj_select('st');
    obj_select('direction');
    obj_select('parent');
    obj_select('call_id');
    obj_select('attendees_employee');
    obj_select('attendees_contact');
    obj_select('attendees_lead');
    obj_select('campaign_type_id');
    obj_select('target_list');
    obj_select('ex_target_list');
    obj_select('document_id');
    obj_select('category');
    obj_select('employee_id');
    obj_select('client_type_id');
    obj_select('company_industry_id');
    obj_select('billing_country_id');
    obj_select('billing_province_id');
    obj_select('billing_regency_id');
    obj_select('billing_district_id');
    obj_select('billing_village_id');
    obj_select('shipping_country_id');
    obj_select('shipping_district_id');
    obj_select('shipping_province_id');
    obj_select('shipping_regency_id');
    obj_select('shipping_village_id');
    obj_select('client_contact_id');
    obj_select('client_id');
    obj_select('client_contract_type_id');
    obj_select('opportunitie_stage_id');
    obj_select('lead_source_id');
    obj_select('country_id');
    obj_select('district_id');
    obj_select('province_id');
    obj_select('regency_id');
    obj_select('village_id');
    obj_select('campaign_id');
    obj_select('probability');
    obj_select('document_folder_id');
    obj_select('document_type_id');
    obj_select('opportunity_id');
    obj_select('meeting_id');
    obj_select('priority')
    obj_date('last_seen');
    obj_date('date_birth');
    obj_startdatenow('start_at');
    obj_startdatenow('end_at');
    obj_date('close_date');
    obj_date('publish_date');
    obj_date('expiration_date');
    obj_startdatenow('start_date');
    obj_startdatenow('end_date');
    obj_startdatenow('start_at');
    obj_startdatenow('end_at');
    obj_startdatenow('due_date');
    obj_date_timenow('start_date_time');
    obj_select('form-select-employee');
    obj_select('form-select-project');
    obj_select('form-select-task');
    obj_select('form-select-status');
    obj_select('form-select-priority');
    obj_select('form-select-milestone');
    setTimeout(() => {
        if ($('#desc').length > 0) {
            obj_quill('desc');
        }
    }, 1000);
    setTimeout(() => {
        if ($('#leave_reason').length > 0) {
            obj_quill('leave_reason');
        }
    }, 1000);
    setTimeout(() => {
        if ($('#remark').length > 0) {
            obj_quill('remark');
        }
    }, 1000);
    setTimeout(() => {
        if ($('#description').length > 0) {
            obj_quill('description');
        }
    }, 1000);
    setTimeout(() => {
        if ($('#address').length > 0) {
            obj_quill('address');
        }
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

    $('.menu-item a').each(function() {
        let menuLink = $(this).attr('href');
        let currentUrl = window.location.href;
        let regex = new RegExp(menuLink);
        let menuLink2 = $(this).attr('href') + '/.*';
        let regex2 = new RegExp(menuLink2);

        if (regex.test(currentUrl) || regex2.test(currentUrl)) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
    });

    $('.menu-link a').each(function() {
        let menuLink = $(this).attr('href');
        let currentUrl = window.location.href;
        let regex = new RegExp(menuLink);
        let menuLink2 = $(this).attr('href') + '/.*';
        let regex2 = new RegExp(menuLink2);

        if (regex.test(currentUrl) || regex2.test(currentUrl)) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
    });

});
