<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center pt-lg-3 pt-1">
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a href="#" class="page-link">
                <i class="bx bx-chevron-left mx-n1"></i>
            </a>
        </li>
        @else
        <li class="page-item">
            <a href="javascript:;" data-halaman="{{ $paginator->previousPageUrl() }}" class="page-link">
                <i class="bx bx-chevron-left mx-n1"></i>
            </a>
        </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled m-1"><a href="#" class="page-link">...</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active m-1"><a href="javascript:;" data-halaman="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @else
                    <li class="page-item m-1"><a href="{{ $url }}" data-halaman="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="javascript:;" data-halaman="{{ $paginator->nextPageUrl() }}" class="page-link">
                    <i class="bx bx-chevron-right mx-n1"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a href="javascript:;" data-halaman="{{ $paginator->nextPageUrl() }}" class="page-link">
                    <i class="bx bx-chevron-right mx-n1"></i>
                </a>
            </li>
        @endif
    </ul>
</nav>