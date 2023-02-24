@foreach($collection as $key => $item)
@php
$tags = json_decode($item->tags, true);
@endphp
<div class="row pb-5 mb-md-4 mb-lg-5">
    <div class="rellax col-md-6{{ $key % 2 === 1 ? ' order-md-2' : '' }} pb-1 mb-3 pb-md-0 mb-md-0" data-rellax-percentage="0.5" data-rellax-speed="0.8" data-disable-parallax-down="md">
        @if($item->platform == "Mobile Apps")
        <div class="position-relative mx-5">
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 w-100 w-md-33 zindex-5">
                <div class="d-flex bg-repeat-0 bg-size-cover w-100 h-100 mx-auto" style="max-width: 150px; background-image: url({{asset('web/img/landing/app-showcase/screens/phone-frame.png')}});"></div>
            </div>
            <!-- Phone screen -->
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 w-100 w-md-33">
                <div class="d-flex bg-repeat-0 bg-size-cover w-100 h-100 mx-auto" style="max-width: 150px; background-image: url({{asset('web/img/landing/app-showcase/screens/phone-screen.png')}});"></div>
            </div>
            <img src="{{$item->image}}" class="d-block position-absolute rounded-3 start-50 translate-middle-x{{ $key % 2 === 1 ? ' float-md-end mt-5' : ' float-md-end' }}" width="150" height="150" alt="Image">
        </div>
        @elseif($item->platform == "Web")
            @if($item->thumbnail)
            <img src="{{$item->image}}" class="d-block{{ $key % 2 === 1 ? ' float-md-end mt-5' : ' float-md-end' }}" style="width:100%;" alt="Image">
            @else
            <lottie-player class="animation-on-hover mx-auto d-block{{ $key % 2 === 1 ? ' float-md-end' : '' }}" src="{{asset('json/thumbnail.json')}}" background="transparent" style="width:50%;" speed="1.25" loop></lottie-player>
            @endif
        @endif
    </div>
    <div class="rellax col-md-6{{ $key % 2 === 1 ? ' order-md-1 pt-md-4 pt-lg-5' : '' }}" data-rellax-percentage="0.5" data-rellax-speed="-0.6" data-disable-parallax-down="md">
        <div class="{{ $key % 2 === 1 ? 'pe-md-4 me-md-2' : 'ps-md-4 ms-md-2' }}">
            <div class="fs-sm text-muted mb-1">{{$item->created_at->format('M d, Y')}}</div>
            <div class="h3">{{$item->title}}</div>
            @foreach ($tags as $tag)
                <a href="javascript:;" data-no-swup class="badge bg-faded-primary text-primary fs-sm mb-3">{{$tag}}</a>
            @endforeach
            {!!$item->description!!}
            <a href="{{route('web.show_portfolio',$item->slug)}}" class="btn custom-link btn-outline-primary mt-3">Read Case Study</a>
        </div>
    </div>
</div>
@endforeach
@if($collection->count() > 0)
    {{$collection->links('themes.web.desktop.pagination')}}
@endif