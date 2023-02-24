<x-web-layout title="Insights" description="Yada Ekidanta (YE) is one of the leading Enterprise Digital Transformation Consultants in Indonesia, specializing in software solutions and application delivery and managed services" keywords="ye, cv ye, yada ekidanta, cv yada ekidanta, enterprise software, software outsourcing company, software outsourcing in indonesia, enterprise application, software development company indonesia, yada ekidanta, yadaekidanta, ye, ye jkt, b2b, bandung, jakarta,product design, mobile design, ux design, web design, ui design, app design, user experience, user interface, front-end development, mobile development, illustrations, animations">
    <section class="pt-5 overflow-hidden">
        <div class="pt-5"></div>
    </section>
    <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">
        <!-- Page title + Layout switcher + Search form -->
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-lg-5 col-md-4">
                <h1 class="mb-2 mb-md-0">Insights</h1>
            </div>
            <div class="col-lg-7 col-md-8">
                <form id="content_filter">
                    <div class="row gy-2">
                        <div class="col-lg-5 col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center me-sm-4 me-3 d-none">
                                    <a href="blog-list-no-sidebar.html" class="nav-link me-2 p-0 active">
                                        <i class="bx bx-list-ul fs-4"></i>
                                    </a>
                                    <a href="blog-grid-no-sidebar.html" class="nav-link p-0">
                                        <i class="bx bx-grid-alt fs-4"></i>
                                    </a>
                                </div>
                                <select class="form-select" name="category" onchange="load_list();">
                                    <option value="">All categories</option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-6">
                            <div class="input-group">
                                <input type="text" name="keyword" onkeyup="load_list();" class="form-control pe-5 rounded" placeholder="Search insight...">
                                <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Item -->
        <div id="list_result"></div>
        <!-- Pagination -->
    </section>
    @section('custom_js')
    <script>
        load_list();
    </script>
    @endsection
</x-web-layout>