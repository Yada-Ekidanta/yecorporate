<div class="row">
    @foreach($insight as $item)
    <div class="col-sm-12 col-md-4 mb-3">
        <article class="card p-md-3 p-2 border-0 shadow-sm card-hover-primary h-100 mx-2">
            <div class="card-body pb-0">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="javascript:;" class="badge fs-sm text-nav bg-secondary text-decoration-none position-relative zindex-2">{{$item->category->name}}</a>
                    <span class="fs-sm text-muted">{{$item->created_at->format('D, d F Y')}}</span>
                </div>
                <h3 class="h4">
                    <a href="{{route('web.show_insights',$item->slug)}}" class="stretched-link custom-link">{{$item->title}}</a>
                </h3>
                {!! Str::words($item->body,20,'...')!!}
            </div>
            <div class="card-footer d-flex align-items-center py-4 text-muted border-top-0">
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
        </article>
    </div>
    @endforeach
</div>