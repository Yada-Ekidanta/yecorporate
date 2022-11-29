<div class="appBottomMenu" id="mainMenu">
    <a href="{{route('web.home')}}" class="item {{request()->is('/') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="{{route('web.about')}}" class="item {{request()->is('about') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="alert-circle-outline"></ion-icon>
            <strong>About</strong>
        </div>
    </a>
    <div class="action-button large fab-button animate dropdown">
        <a href="#" class="fab {{request()->is('services') ? 'active' : ''}}" data-bs-toggle="dropdown">
            <ion-icon name="bag-outline"></ion-icon>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('web.ad')}}">
                <ion-icon name="sync-outline"></ion-icon>
                <p>Agile Development</p>
            </a>
            <a class="dropdown-item" href="{{route('web.pb')}}">
                <ion-icon name="journal-outline"></ion-icon>
                <p>Project Based</p>
            </a>
            <a class="dropdown-item" href="{{route('web.ms')}}">
                <ion-icon name="settings-outline"></ion-icon>
                <p>Managed Services</p>
            </a>
            <a class="dropdown-item" href="{{route('web.ds')}}">
                <ion-icon name="brush-outline"></ion-icon>
                <p>Design Services</p>
            </a>
            <a class="dropdown-item" href="{{route('web.tw')}}">
                <ion-icon name="newspaper-outline"></ion-icon>
                <p>Technical Writer</p>
            </a>
            <a class="dropdown-item" href="{{route('web.qa')}}">
                <ion-icon name="shield-checkmark-outline"></ion-icon>
                <p>Quality Assurance</p>
            </a>
        </div>
    </div>
    <a href="{{route('web.case_study')}}" class="item {{request()->is('case-study') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="briefcase-outline"></ion-icon>
            <strong>Case Study</strong>
        </div>
    </a>
    <a href="{{route('web.contact')}}" class="item {{request()->is('contact') ? 'active' : ''}}">
        <div class="col">
            <ion-icon name="mail-outline"></ion-icon>
            <strong>Contact</strong>
        </div>
    </a>
</div>