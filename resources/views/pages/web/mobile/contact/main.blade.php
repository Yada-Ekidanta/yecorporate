<x-mobile-layout title="Contact Us">
    <div class="section full mt-4">
        <div id='map' style='width: 400px; height: 300px;'></div>
        <div class="section-title" style="margin-top:70%;">Fill the form to contact us *</div>
        <div class="wide-block pt-2 pb-2">
            <form id="form_input">
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <input type="text" class="form-control" name="name" id="name5" placeholder="Name">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <input type="email" name="email" class="form-control" id="email5" placeholder="Email">
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <textarea id="address5" name="messages" rows="4" class="form-control" placeholder="Message"></textarea>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>

                <div class="mt-1">
                    <button id="tombol_simpan" class="btn btn-primary btn-lg btn-block" onclick="handle_save('#tombol_simpan','#form_input','{{route('web.send_message')}}','POST');">
                        Send
                    </button>
                </div>

            </form>

        </div>
        <div class="content-footer mt-05">* We promise not to disclose your personal information to third parties.</div>

    </div>
</x-mobile-layout>