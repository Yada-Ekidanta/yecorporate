<div class="offcanvas offcanvas-start sidebarMenu" id="sidebarPanel">
    <div class="offcanvas-body">
        <!-- profile box -->
        <div class="profileBox">
            <div class="image-wrapper">
                <img src="{{asset('icon.png')}}" alt="image" class="imaged rounded">
            </div>
            <div class="in">
                <strong>{{config('app.name')}}</strong>
                <div class="text-muted">
                    <ion-icon name="location"></ion-icon>
                    Bandung, ID 40287
                </div>
            </div>
            <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <!-- * profile box -->

        <ul class="listview flush transparent no-line image-listview mt-2">
            <li>
                <a href="mailto:hello@yadaekidanta.com" target="_blank" data-no-swup class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>
                    <div class="in">
                        hello@yadaekidanta.com
                    </div>
                </a>
            </li>
            <li>
                <a href="https://wa.me/62818694745" class="item" target="_blank" data-no-swup>
                    <div class="icon-box bg-primary">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="in">
                        +628 18 694 745
                    </div>
                </a>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="moon-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Dark Mode</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodesidebar">
                            <label class="form-check-label" for="darkmodesidebar"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="listview-title mt-2 mb-1">
            <span>LATEST PUBLICATIONS</span>
        </div>
        <ul class="listview image-listview flush transparent no-line">
            <li>
                <a href="{{route('web.show_insights','kementerian-pertahanan-gelar-indo-defence-2022-expo-forum-pameran-industri')}}" class="item ye-anima-link">
                    <img src="{{asset('img/blog/thumbnail/rdi.jpeg')}}" alt="image" class="image">
                    <div class="in">
                        <div>Kementerian Pertahanan Gelar Indo Defence 2022 Expo & Forum, Pameran Industri Pertahanan Bertaraf Internasional</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('web.show_insights',Str::slug('Paparan Pengembangan Aplikasi Penduduk Non Permanen Dukcapil Kementerian Dalam Negeri Republik Indonesia'))}}" class="item">
                    <img src="{{asset('img/blog/thumbnail/nonper.jpeg')}}" alt="image" class="image">
                    <div class="in">
                        <div>Paparan Pengembangan Aplikasi Penduduk Non Permanen Dukcapil Kementerian Dalam Negeri Republik Indonesia</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('web.show_insights',Str::slug('Paparan Pengembangan Aplikasi eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia'))}}" class="item">
                    <img src="{{asset('img/blog/thumbnail/eoffice.jpeg')}}" alt="image" class="image">
                    <div class="in">
                        <div>Paparan Pengembangan Aplikasi eOffice Dukcapil Kementerian Dalam Negeri Republik Indonesia</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('web.show_insights',Str::slug('Paparan Pengembangan Aplikasi Program Hibah Luar Negeri Tahap 1'))}}" class="item">
                    <img src="{{asset('img/blog/thumbnail/phln.jpeg')}}" alt="image" class="image">
                    <div class="in">
                        <div>Paparan Pengembangan Aplikasi Program Hibah Luar Negeri Tahap 1</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar buttons -->
    <div class="sidebar-buttons d-none">
        <a href="#" class="button">
            <ion-icon name="person-outline"></ion-icon>
        </a>
        <a href="#" class="button">
            <ion-icon name="archive-outline"></ion-icon>
        </a>
        <a href="#" class="button">
            <ion-icon name="settings-outline"></ion-icon>
        </a>
        <a href="#" class="button">
            <ion-icon name="log-out-outline"></ion-icon>
        </a>
    </div>
    <!-- * sidebar buttons -->
</div>