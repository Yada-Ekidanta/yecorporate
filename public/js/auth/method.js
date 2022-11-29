$("body").on("contextmenu", "img", function(e) {
    return false;
});
$('img').attr('draggable', false);
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
$("#form_login").on('keydown', 'input', function (event) {
    if (event.which == 9 || event.which == 13) {
        event.preventDefault();
        var $this = $(event.target);
        var index = parseFloat($this.attr('data-login'));
        var val = $($this).val();
        if(index == 1){
            if(val.length > 0){
                var validateMail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if(!validateMail.test(val)){
                    toastify_message($($this).data('format'));
                }else{
                    $('[data-login="' + (index + 1).toString() + '"]').focus();
                }
            }else{
                toastify_message($($this).data('validation'));
            }
        }else{
            $('#tombol_login').trigger("click");
        }
    }
});
$("#form_register").on('keydown', 'input', function (event) {
    if (event.which == 9 || event.which == 13) {
        event.preventDefault();
        var $this = $(event.target);
        var index = parseFloat($this.attr('data-register'));
        var val = $($this).val();
        if(index < 6){
            if(index == 3){
                if(val.length > 0){
                    var validateMail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if(!validateMail.test(val)){
                        toastify_message($($this).data('format'));
                    }else{
                        $('[data-register="' + (index + 1).toString() + '"]').focus();
                    }
                }else{
                    toastify_message($($this).data('validation'));
                }
            }else if(index == 4){
                if(val.length > 0){
                    var validatePhone = /^([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})$/;
                    if(!validatePhone.test(val)){
                        toastify_message($($this).data('format'));
                    }else{
                        $('[data-register="' + (index + 1).toString() + '"]').focus();
                    }
                }else{
                    toastify_message($($this).data('validation'));
                }
            }else if(index == 1 || index == 2 || index == 5 || index == 6){
                if(val.length < 1){
                    toastify_message($($this).data('validation'));
                }else if(val.length < 8){
                    toastify_message($($this).data('format'));
                }else{
                    $('[data-register="' + (index + 1).toString() + '"]').focus();
                }
            }else{
                $('[data-register="' + (index + 1).toString() + '"]').focus();
            }
        }else{
            $('#tombol_register').trigger("click");
        }
    }
});
$("#form_reset").on('keydown', 'input', function (event) {
    if (event.which == 9 || event.which == 13) {
        event.preventDefault();
        var $this = $(event.target);
        var index = parseFloat($this.attr('data-reset'));
        var val = $($this).val();
        if(index == 1){
            if(val.length > 0){
                var validateMail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if(!validateMail.test(val)){
                    toastify_message($($this).data('format'));
                    // custom_message('info',$($this).data('format'))
                }else{
                    $('[data-reset="' + (index + 1).toString() + '"]').focus();
                }
            }else{
                toastify_message($($this).data('validation'));
            }
        }else{
            $('#tombol_reset').trigger("click");
        }
    }
});
function handle_post(tombol, form)
{
    $(document).one('submit', form, function(e) {
        let data = new FormData(this);
        data.append('_method', 'POST');
        $(tombol).prop("disabled", true);
        $(tombol).attr("data-kt-indicator","on");
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
                toastify_message(response.message);
                $(tombol).prop("disabled", false);
                $(tombol).removeAttr("data-kt-indicator");
                if (response.alert=="success") {
                    setTimeout(function () {
                        swup.loadPage({
                            url: $(form).data('redirect-url'), // route of request (defaults to current url)
                            // method: 'GET', // method of request (defaults to "GET")
                            // data: data, // data passed into XMLHttpRequest send method
                            // customTransition: '' // name of your transition used for adding custom class to html element and choosing custom animation in swupjs (as setting data-swup-transition attribute on link)
                        });
                    }, 1000);
                }
            },
        });
        return false;
    });
}