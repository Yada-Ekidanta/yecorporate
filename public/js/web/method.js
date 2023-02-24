$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
const toastLiveExample = document.getElementById('liveToast');
const toast = new bootstrap.Toast(toastLiveExample);
function toastify_message(text)
{
    Toastify({
        text: text,
        duration: 3000,
        // destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: false,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
        onClick: function(){} // Callback after click
    }).showToast();
}
$(document).ready(function() {
    // $(window).keydown(function(event) {
    //     if (event.keyCode == 13) {
    //         event.preventDefault();
    //         // load_list(1);
    //     }
    // });
    $(document).on('click', '.page-link', function(event) {
        event.preventDefault();
        $('.page-link').removeClass('active');
        $(this).parent('.page-link').addClass('active');
        // var myurl = $(this).attr('href');
        page = $(this).data('halaman').split('page=')[1];
        load_list(page);
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
            if (response.alert == "success") {
                $(form)[0].reset();
                $(tombol).prop("disabled", false);
                if(response.redirect == "input"){
                    load_input(response.route);
                }else if(response.redirect == "reload"){
                    location.reload();
                }else{
                }
                $("#toast_body").html(response.message);
                toast.show();
            } else {
                $(form).addClass("was-validated");
                // Array.prototype.filter.call(e, function (t) {
                //     t.addEventListener(
                //         "submit",
                //         function (e) {
                //         },
                //         !1
                //     );
                // });
                // form.classList.add('was-validated');
                $("#toast_body").html(response.message);
                toast.show();
                setTimeout(function() {
                    $(tombol).prop("disabled", false);
                }, 2000);
            }
        },
    });
}