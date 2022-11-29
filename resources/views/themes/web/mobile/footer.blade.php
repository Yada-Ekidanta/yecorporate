@if(Request::path() != 'case-study')
<div class="appFooter">
    <img src="{{asset('icon.png')}}" alt="icon" class="footer-logo mb-2">
    <div class="footer-title">
        Copyright © {{config('app.name')}} 2021. All Rights Reserved.
    </div>
    <div>Create Impact With a few lines of Code</div>
    {{-- Great way to start your mobile websites and pwa projects. --}}

    <div class="mt-2">
        <a href="https://facebook.com/YadaEkidanta" target="_blank" class="btn btn-icon btn-sm btn-facebook">
            <ion-icon name="logo-facebook"></ion-icon>
        </a>
        <a href="https://twitter.com/YadaEkidanta" target="_blank" class="btn btn-icon btn-sm btn-twitter">
            <ion-icon name="logo-twitter"></ion-icon>
        </a>
        <a href="https://linkedin.com/company/yada-ekidanta" target="_blank" class="btn btn-icon btn-sm btn-linkedin">
            <ion-icon name="logo-linkedin"></ion-icon>
        </a>
        <a href="https://instagram.com/yadaekidanta" target="_blank" class="btn btn-icon btn-sm btn-instagram">
            <ion-icon name="logo-instagram"></ion-icon>
        </a>
        <a href="https://wa.me/62818694745" target="_blank" class="btn btn-icon btn-sm btn-whatsapp">
            <ion-icon name="logo-whatsapp"></ion-icon>
        </a>
        <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
    </div>
</div>
@endif