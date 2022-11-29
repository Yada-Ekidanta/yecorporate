$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
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
                toastify_message(response.message);
            } else {
                toastify_message(response.message);
                setTimeout(function() {
                    $(tombol).prop("disabled", false);
                }, 2000);
            }
        },
    });
}