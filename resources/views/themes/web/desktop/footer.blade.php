<footer class="footer pt-5 pb-4 pb-lg-5">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-4 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="{{asset('icon.png')}}" width="47" alt="Silicon">
                    Yada Ekidanta
                </div>
                <p class="fs-sm opacity-70 pb-lg-3 mb-4" style="text-align: justify;text-justify: inter-word;">
                    Yada Ekidanta (YE) is one of the leading Enterprise Digital Transformation Consultants in Indonesia, specializing in software solutions and application delivery and managed services.
                </p>
                <form class="needs-validation" id="form_subscribe" novalidate>
                    <label for="subscr-email" class="form-label">Subscribe to our newsletter</label>
                    <div class="input-group">
                        <input type="email" name="email" id="subscr-email" class="form-control rounded-start ps-5" placeholder="Your email" required>
                        <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                        <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                        <button id="tombol_subscribe" onclick="handle_save('#tombol_subscribe','#form_subscribe','{{route('web.subscribe')}}','POST');" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                <div id="footer-links" class="row">
                    <div class="col-lg-6">
                        <h3 class="h6">01 HEADQUARTER</h3>
                        <ul class="nav flex-column">
                            <p class="fs-sm opacity-70 pb-lg-3" style="text-align: justify;text-justify: inter-word;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Komplek Permata Buah Batu Blok C 15B,<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bandung Jawa Barat, Indonesia 40287
                            </p>
                        </ul>
                        <h3 class="h6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SALES OFFICE</h3>
                        <ul class="nav flex-column mb-3">
                            <p class="fs-sm opacity-70 pb-lg-3 mb-4" style="text-align: justify;text-justify: inter-word;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jl. Pangeran Tubagus Angke No. 24B, RW 4, <br> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wijaya Kusuma, Grogol Petamburan, <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jakarta Barat, Indonesia 11460
                            </p>
                            <li>
                                <a href="tel:62818694745" data-no-swup class="nav-link fs-lg fw-normal px-0 py-1">
                                    <i class="bx bx-phone-call fs-4 me-2"></i>
                                    (62) 818 694 745
                                </a>
                            </li>
                            <li>
                                <a href="mailto:hello@yadaekidanta.com" data-no-swup class="nav-link fs-lg fw-normal px-0 py-1">
                                <i class="bx bx-envelope fs-4 me-2"></i>
                                hello@yadaekidanta.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-5">
                        <h6 class="mb-2">
                            <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">02</a>
                        </h6>
                        <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="{{route('web.home')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('web.services')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item"><a href="{{route('web.case_study')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Case Studies</a></li>
                                <li class="nav-item"><a href="{{route('web.about')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">About Us</a></li>
                                <li class="nav-item"><a href="{{route('web.career')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Careers</a></li>
                                <li class="nav-item"><a href="{{route('web.insights')}}" class="nav-link d-inline-block px-0 pt-1 pb-2">News &amp; Insights</a></li>
                            </ul>
                            <ul class="nav flex-column mb-2 mb-lg-0 d-none">
                                <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Terms &amp; Conditions</a></li>
                                <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="d-flex pt-2 pt-sm-3 pt-md-4">
                            <a target="_blank" href="https://facebook.com/YadaEkidanta" data-no-swup class="btn btn-icon btn-secondary btn-facebook rounded-circle me-3">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/company/yada-ekidanta" data-no-swup class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-3">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://instagram.com/yadaekidanta" data-no-swup class="btn btn-icon btn-secondary btn-instagram rounded-circle me-3">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a target="_blank" href="https://twitter.com/YadaEkidanta" data-no-swup class="btn btn-icon btn-secondary btn-twitter rounded-circle me-3">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-center pb-2 pb-lg-0 mb-0">
            <span class="opacity-50">&copy; All rights reserved. </span>
            <a class="nav-link d-inline-block p-0" href="https://yadaekidanta.com" target="_blank" rel="noopener">Yada Ekidanta</a>
        </p>
    </div>
</footer>