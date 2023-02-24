@foreach ($replies as $reply)
<div class="position-relative ps-4 mt-4">
    <span class="position-absolute top-0 start-0 w-1 h-100 bg-primary"></span>
    <div class="d-flex align-items-center justify-content-between ps-3 pb-2 mb-1">
        <div class="d-flex align-items-center me-3">
            {{-- <img src="assets/img/avatar/05.jpg" class="rounded-circle" width="48" alt="Avatar"> --}}
            <div class="ps-3">
                <h6 class="fw-semibold mb-0">{{$reply->name}}</h6>
                <span class="fs-sm text-muted">{{$reply->created_at->addHours(-7)->diffForHumans()}}</span>
            </div>
        </div>
        <a href="#" class="nav-link fs-sm px-0">
            <i class="bx bx-share fs-lg me-2"></i>
            Reply
        </a>
    </div>
    <p class="ps-3 mb-0"><a href="#" class="fw-semibold text-decoration-none">@ {{$reply->parent->name}}</a> {{$reply->message}}</p>
    @include('pages.web.desktop.insight.comment_replies', ['replies' => $reply->replies])
</div>
@endforeach