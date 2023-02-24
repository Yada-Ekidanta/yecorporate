@foreach ($collection as $item)
<article class="card border-0 shadow-sm overflow-hidden mb-4">
    <div class="row g-0">
        {{-- <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url(assets/img/blog/01.jpg); min-height: 15rem;">
            <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                <i class="bx bx-bookmark"></i>
            </a>
        </div> --}}
        <div class="col-sm-12">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                <a href="{{route('web.show_insights',$item->slug)}}" class="badge fs-sm text-nav bg-secondary text-decoration-none custom-link">{{$item->category->name}}</a>
                    <span class="fs-sm text-muted border-start ps-3 ms-3">{{$item->created_at->format('D, j F Y')}}</span>
                </div>
                <h3 class="h4">
                    <a class="custom-link" href="{{route('web.show_insights',$item->slug)}}">{{$item->title}}</a>
                </h3>
                <p>{!! Str::words($item->body,20,'...')!!}</p>
                <hr class="my-4">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="{{route('web.show_insights',$item->slug)}}" class="d-flex align-items-center fw-bold text-dark text-decoration-none me-3 custom-link">
                        <img src="{{asset('web/img/avatar/01.jpg')}}" class="rounded-circle me-3" width="48" alt="Avatar">
                        Rizky Ramadhan
                    </a>
                    <div class="d-flex align-items-center text-muted">
                        <div class="d-flex align-items-center me-3">
                        <i class="bx bx-like fs-lg me-1"></i>
                        <span class="fs-sm">{{$item->likes->count()}}</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                        <i class="bx bx-comment fs-lg me-1"></i>
                        <span class="fs-sm">{{$item->comments->count()}}</span>
                        </div>
                        <div class="d-flex align-items-center">
                        <i class="bx bx-share-alt fs-lg me-1"></i>
                        <span class="fs-sm">{{$item->shares->count()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endforeach
@if($collection->count() > 0)
    {{$collection->links('themes.web.desktop.pagination')}}
@endif