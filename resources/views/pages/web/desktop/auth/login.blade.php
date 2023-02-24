<x-web-layout title="Login" description="ye, cv ye, yada ekidanta, cv yada ekidanta, YE is one of the largest enterprise software development company based in Jakarta & Bandung, Indonesia." keywords="application development, enterprise software, software outsourcing in jakarta, ios app development, android app development, top it company in indonesia, top software house in indonesia, rizky ramadhan, perusahaan consultant it, perusahaan konsultan it">
    <section class="position-relative h-100 pt-5 pb-5">
        <!-- Sign in form -->
        <div class="container d-flex flex-wrap justify-content-center justify-content-xl-start h-100 pt-5">
            <div class="w-100 align-self-end pt-1 pt-md-4 pb-4" style="max-width: 526px;">
                <h1 class="text-center text-xl-start">Welcome Back</h1>
                <p class="text-center text-xl-start pb-3 mb-3">Don’t have an account yet? <a href="account-signup.html">Register here.</a></p>
                <form class="needs-validation mb-2" novalidate>
                    <div class="position-relative mb-4">
                        <label for="email" class="form-label fs-base">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg" required>
                        <div class="invalid-feedback position-absolute start-0 top-100">Please enter a valid email address!</div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fs-base">Password</label>
                        <div class="password-toggle">
                            <input type="password" id="password" class="form-control form-control-lg" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox">
                                <span class="password-toggle-indicator"></span>
                            </label>
                            <div class="invalid-feedback position-absolute start-0 top-100">Please enter your password!</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label fs-base">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Sign in</button>
                </form>
                <a href="#" class="btn btn-link btn-lg w-100">Forgot your password?</a>
                <hr class="my-4">
                <h6 class="text-center mb-4">Or sign in with your social network</h6>
                <div class="row row-cols-1 row-cols-sm-2">
                    <div class="col mb-3">
                        <a href="#" class="btn btn-icon btn-secondary btn-google btn-lg w-100">
                        <i class="bx bxl-google fs-xl me-2"></i>
                        Google
                        </a>
                    </div>
                    <div class="col mb-3">
                        <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg w-100">
                        <i class="bx bxl-facebook fs-xl me-2"></i>
                        Facebook
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="w-100 align-self-end">
                <p class="nav d-block fs-xs text-center text-xl-start pb-2 mb-0">
                &copy; All rights reserved. Made by 
                <a class="nav-link d-inline-block p-0" href="https://yadaekidanta.com/" target="_blank" rel="noopener">Yada Ekidanta</a>
                </p>    
            </div> --}}
        </div>
        <!-- Background -->
        <div class="position-absolute top-0 end-0 w-50 h-100 bg-position-center bg-repeat-0 bg-size-cover d-none d-xl-block" style="background-image: url({{asset('web/img/account/signin-bg.jpg')}});"></div>
    </section>
</x-web-layout>