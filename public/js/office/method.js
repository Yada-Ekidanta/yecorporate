$("body").on("contextmenu", "img", function(e) {
    return false;
});
var audio = document.getElementById("audio");
$('img').attr('draggable', false);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    // $(window).keydown(function(event) {
    //     if (event.keyCode == 13) {
    //         event.preventDefault();
    //         // load_list(1);
    //     }
    // });
    $(document).on('click', '.page-link.default', function(event) {
        event.preventDefault();
        $('.page-link.default').removeClass('active');
        $(this).parent('.page-link.default').addClass('active');
        // var myurl = $(this).attr('href');
        page = $(this).data('halaman').split('page=')[1];
        load_list(page);
    });

    $(document).on('click', '.page-link.team', function(event) {
        event.preventDefault();
        $('.page-link.team').removeClass('active');
        $(this).parent('.page-link.team').addClass('active');
        page = $(this).data('halaman').split('page=')[1];
        console.log($(this).data('halaman'));
        load_team(page);
    });

    $(document).on('click', '.page-link.milestone', function(event) {
        event.preventDefault();
        $('.page-link.milestone').removeClass('active');
        $(this).parent('.page-link.milestone').addClass('active');
        page = $(this).data('halaman').split('page=')[1];
        console.log($(this).data('halaman'));
        load_milestone(page);
    });

    $(document).on('click', '.page-link.task', function(event) {
        event.preventDefault();
        $('.page-link.task').removeClass('active');
        $(this).parent('.page-link.task').addClass('active');
        page = $(this).data('halaman').split('page=')[1];
        console.log($(this).data('halaman'));
        load_task(page);
    });
});
function load_list(page){
    $.get('?page=' + page, $('#content_filter').serialize(), function(result) {
        $('#list_result').html(result);
    }, "html");
}
function handle_save(tombol, form, url, method){
    $(tombol).submit(function() {
        return false;
    });
    $(tombol).attr("data-kt-indicator","on");
    let data = $(form).serialize();
    $(tombol).prop("disabled", true);
    $.ajax({
        type: method,
        url: url,
        data: data,
        dataType: 'json',
        beforeSend: function() {

        },
        success: function(response) {
            $(form)[0].reset();
            $(tombol).removeAttr("data-kt-indicator");
            $(tombol).prop("disabled", false);
            if(response.alert == "success"){
                handle_success(response);
            }else{
                toastify_message(response.message);
            }
        },
        error: function(xhr) {
            $(tombol).removeAttr("data-kt-indicator");
            $(tombol).prop("disabled", false);
            handle_error(xhr);
        },
    });
}
function handle_confirm(title, confirm_title, deny_title, method, route){
    Swal.fire({
        showClass: {
            popup: 'animate__animated animate__fadeInDownBig'
        },
        hideClass: {
            popup: 'animate__animated animate__hinge'
        },
        position: 'top-end',
        title: title,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: confirm_title,
        denyButtonText: deny_title,
    }).then((result) => {
        if (result.isConfirmed) {
            loading();
            $.ajax({
                type: method,
                url: route,
                dataType: 'json',
                success: function(response) {
                    if(response.alert == "success"){
                        handle_success(response);
                    }else{
                        toastify_message(response.message);
                    }
                    setTimeout(() => {
                        // window.history.pushState(null, null, $(form).data('redirect-url'));
                        // swup.preloadPage($(form).data('redirect-url'));
                        swup.loadPage({
                            url: '', // route of request (defaults to current url)
                            // method: 'GET', // method of request (defaults to "GET")
                            // data: data, // data passed into XMLHttpRequest send method
                            // customTransition: '' // name of your transition used for adding custom class to html element and choosing custom animation in swupjs (as setting data-swup-transition attribute on link)
                        });
                    }, 1000);
                },
                error: function(xhr) {
                    handle_error(xhr);
                },
            });
        } else if (result.isDenied) {
            toastify_message("You cancel this confirmation");
            // custom_message(response.alert,response.message);
        }
    });
}
function handle_confirm_checked(title, confirm_title, deny_title, method, route){
    Swal.fire({
        title: title,
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: confirm_title,
        denyButtonText: deny_title,
    }).then((result) => {
        if (result.isConfirmed) {
            var id = [];
            $('input[name="list_id"]:checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });
            if(id.length === 0){
                Swal.fire('Please Select atleast one checkbox', '', 'info')
            }else{
                $.ajax({
                    type: method,
                    url: route,
                    data: {id: id},
                    dataType: 'json',
                    success: function(response) {
                        if(response.alert == "success"){
                            handle_success(response);
                        }else{
                            toastify_message(response.message);
                        }
                        setTimeout(() => {
                            // window.history.pushState(null, null, $(form).data('redirect-url'));
                            // swup.preloadPage($(form).data('redirect-url'));
                            swup.loadPage({
                                url: $(form).data('redirect-url'), // route of request (defaults to current url)
                                // method: 'GET', // method of request (defaults to "GET")
                                // data: data, // data passed into XMLHttpRequest send method
                                // customTransition: '' // name of your transition used for adding custom class to html element and choosing custom animation in swupjs (as setting data-swup-transition attribute on link)
                            });
                        }, 1000);
                    },
                    error: function(xhr) {
                        handle_error(xhr);
                    },
                });
            }
        } else if (result.isDenied) {
            Swal.fire('Konfirmasi dibatalkan', '', 'info')
        }
    });
}
function handle_upload(tombol, form, method){
    $(document).one('submit', form, function(e) {
        let data = new FormData(this);
        data.append('_method', method);
        $(tombol).attr("data-kt-indicator","on");
        $(tombol).prop("disabled", true);
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: data,
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            resetForm: true,
            processData: false,
            dataType: 'json',
            beforeSend: function() {

            },
            success: function(response) {
                $(tombol).removeAttr("data-kt-indicator");
                $(tombol).prop("disabled", false);
                if(response.alert == "success"){
                    $(form)[0].reset();
                    handle_success(response);
                    setTimeout(() => {
                        // window.history.pushState(null, null, $(form).data('redirect-url'));
                        // swup.preloadPage($(form).data('redirect-url'));
                        swup.loadPage({
                            url: $(form).data('redirect-url'), // route of request (defaults to current url)
                            // method: 'GET', // method of request (defaults to "GET")
                            // data: data, // data passed into XMLHttpRequest send method
                            // customTransition: '' // name of your transition used for adding custom class to html element and choosing custom animation in swupjs (as setting data-swup-transition attribute on link)
                        });
                    }, 1000);
                }else{
                    toastify_message(response.message);
                }
            },
            error: function(xhr) {
                $(tombol).removeAttr("data-kt-indicator");
                $(tombol).prop("disabled", false);
                handle_error(xhr);
            },
        });
        return false;
    });
}
function handle_success(response){
    loaded();
    if(response.redirect == "cart"){
        load_cart(localStorage.getItem("route_cart"));
    }else if(response.redirect == "memo"){
        load_memo(localStorage.getItem("route_memo"));
    }else{
        toastify_message(response.message);
    }
}
function handle_error(result){
    toastify_message(result.responseJSON.message);
}
