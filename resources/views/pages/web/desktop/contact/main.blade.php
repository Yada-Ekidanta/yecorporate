<x-web-layout title="Contact Us">
    <div class="qrt-half-content-frame">
        <div class="qrt-left">
            <div class="row qrt-p-0-40">
                <div class="col-lg-12">
                    <div class="qrt-page-cover">
                        <img src="{{asset('img/banner/contact.png')}}" alt="our office">
                        <div class="qrt-about-info qrt-info-lg">
                            <div class="qrt-cover-info">
                                <ul class="qrt-table">
                                    <li>
                                        <h5 class="qrt-white">Phone:</h5><a  target="_blank" href="https://wa.me/62818694745" data-no-swup><span>+62 (818) 694 745</span></a>
                                    </li>
                                    <li>
                                        <h5 class="qrt-white">Email:</h5><a href="mailto:hello@yadaekidanta.com" data-no-swup><span>hello@yadaekidanta.com</span></a>
                                    </li>
                                    <li>
                                        <h5 class="qrt-white">Adress:</h5><a href="https://g.page/yada-ekidanta?share" target="_blank" data-no-swup><span>Permata Buah Batu Blok C 15B, Bandung 40287</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="qrt-mb-40">Get in touch</h3>
                </div>
                <div class="col-lg-12">
                    <form id="form_input" class="qrt-contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="qrt-form-field">
                                    <input id="name" name="name" class="qrt-input" type="text" placeholder="Name" required>
                                    <label for="name"><i class="fas fa-user"></i></label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="qrt-form-field">
                                    <input id="email" name="email" class="qrt-input" type="email" placeholder="Email" required>
                                    <label for="email"><i class="fas fa-at"></i></label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="qrt-form-field">
                                    <textarea id="message" name="messages" class="qrt-input" placeholder="Message" required></textarea>
                                    <label for="message"><i class="far fa-envelope"></i></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="qrt-mb-20">We promise not to disclose your personal information to third parties.</div>
                            </div>
                            <div class="col-md-6">
                                <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40">
                                    <button id="tombol_simpan" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale" onclick="handle_save('#tombol_simpan','#form_input','{{route('web.send_message')}}','POST');"><span>Send message</span></button>
                                </div>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="qrt-call-to-action">
                        <h4>Learn more about us!</h4>
                        <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="{{route('web.about')}}"><span>About us</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="fixed" class="qrt-right">
            <div class="qrt-map-frame">
                <div class="qrt-lock"><i class="fas fa-lock"></i></div>
                <div id="map" class="qrt-map"></div>
            </div>
        </div>
</x-web-layout>