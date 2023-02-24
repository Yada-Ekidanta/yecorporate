<x-web-layout title="Insights - {{$insight->title}}" description="Yada Ekidanta (YE) is one of the leading Enterprise Digital Transformation Consultants in Indonesia, specializing in software solutions and application delivery and managed services" keywords="{{$insight->title}}, ye, cv ye, yada ekidanta, cv yada ekidanta, enterprise software, software outsourcing company, software outsourcing in indonesia, enterprise application, software development company indonesia, yada ekidanta, yadaekidanta, ye, ye jkt, b2b, bandung, jakarta,product design, mobile design, ux design, web design, ui design, app design, user experience, user interface, front-end development, mobile development, illustrations, animations">
    <section class="position-relative pt-5">
        <div class="container position-relative zindex-2 pt-5">
            <h1 class="pb-3" style="max-width: 970px;">{{$insight->title}}</h1>
            <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
                <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
                    <div class="fs-xs border-end pe-3 me-3 mb-2">
                        <span class="badge bg-faded-primary text-primary fs-base">{{$insight->category->name}}</span>
                    </div>
                    <div class="fs-sm border-end pe-3 me-3 mb-2">{{$insight->created_at->diffForHumans()}}</div>
                    <div class="d-flex mb-2">
                        <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-sm">{{$insight->likes->count()}}</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-sm">{{$insight->comments->count()}}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-sm">{{$insight->shares->count()}}</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center position-relative ps-md-3 pe-lg-5 mb-2">
                    <img src="{{asset('web/img/avatar/39.jpg')}}" class="rounded-circle" width="60" alt="Avatar">
                    <div class="ps-3">
                        <h6 class="mb-1">Author</h6>
                        <a href="#" class="fw-semibold stretched-link">Rizky Ramadhan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-5 pt-4 pb-2 py-mg-4">
        <div class="row gy-4">
            <!-- Content -->
            <div class="col-lg-9">
                {!!$insight->body!!}
                <div class="d-flex flex-sm-row flex-column pt-2">
                    <h6 class="mt-sm-1 mb-sm-2 mb-3 me-2 text-nowrap">Related Tags:</h6>
                    <div>
                        <a href="#" class="btn btn-sm btn-outline-secondary me-2 mb-2">#lifestyle</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary me-2 mb-2">#tech</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary me-2 mb-2">#business</a>
                    </div>
                </div>
            </div>
            <!-- Sharing -->
            <div class="col-lg-3 position-relative">
                <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
                    <span class="d-block mb-3">5 min read</span>
                    <h6>Share this post:</h6>
                    <div class="mb-4 pb-lg-3">
                        <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
                            <i class="bx bxl-linkedin"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </div>
                    <button class="btn btn-lg btn-outline-secondary">
                        <i class="bx bx-like me-2 lead"></i>
                        Like it
                        <span class="badge bg-primary shadow-primary mt-n1 ms-3">{{$insight->likes->count()}}</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    @auth
    <section class="container mb-4 pb-lg-3">
        <h2 class="h1 text-center text-sm-start">{{$insight->comments->count()}} comments</h2>
        <div class="row">

            <!-- Comments -->
            <div class="col-lg-9">
            <!-- Comment -->
                @foreach($insight->comments->where('comment_id','0') as $comment)
                <div class="py-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                        <div class="d-flex align-items-center me-3">
                            {{-- <img src="assets/img/avatar/03.jpg" class="rounded-circle" width="48" alt="Avatar"> --}}
                            <div class="ps-3">
                                <h6 class="fw-semibold mb-0">{{$comment->name}}</h6>
                                <span class="fs-sm text-muted">{{$comment->created_at->addHours(-7)->diffForHumans()}}</span>
                            </div>
                        </div>
                        <a href="#" class="nav-link fs-sm px-0">
                            <i class="bx bx-share fs-lg me-2"></i>
                            Reply
                        </a>
                    </div>
                    <p class="mb-0">{{$comment->message}}</p>
                    @include('pages.web.desktop.insight.comment_replies', ['replies' => $comment->replies])
                </div>
                <hr class="my-2">
                @endforeach
            </div>
        </div>
    </section>
    <section class="container mb-4 pb-2 mb-md-5 pb-lg-5">
        <div class="row gy-5">

            <!-- Comment form -->
            <div class="col-lg-9">
                <div class="card p-md-5 p-4 border-0 bg-secondary">
                    <div class="card-body w-100 mx-auto px-0" style="max-width: 746px;">
                        <h2 class="mb-4 pb-3">Leave a Comment</h2>
                        <form class="row gy-4 needs-validation" novalidate>
                            <div class="col-sm-6 col-12">
                                <label for="c-name" class="form-label fs-base">Name</label>
                                <input id="c-name" type="text" class="form-control form-control-lg" required>
                                <span class="invalid-tooltip">Please, enter your name.</span>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label for="c-email" class="form-label fs-base">Email</label>
                                <input id="c-email" type="email" class="form-control form-control-lg" required>
                                <span class="invalid-tooltip">Please, provide a valid email address.</span>
                            </div>
                            <div class="col-12">
                                <label for="c-comment" class="form-label fs-base">Comment</label>
                                <textarea id="c-comment" class="form-control form-control-lg" rows="3" placeholder="Type your comment here..." required></textarea>
                                <span class="invalid-tooltip">Please, enter your comment.</span>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input id="c-save" type="checkbox" class="form-check-input">
                                <label for="c-save" class="form-check-label">Save my name and email in this browser for the next time I comment.</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary w-sm-auto w-100 mt-2">Post comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Subscription form + Sharing -->
            <div class="col-lg-3 position-relative">
                <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 70px !important;display:none;">
                    <div class="row gy-lg-5 gy-4 justify-content-center text-lg-start text-center">

                        <!-- Subscription form -->
                        <div class="col-lg-12 col-sm-7 col-11">
                            <h6 class="fs-lg">Enjoy this post? Join our newsletter</h6>
                            <form class="needs-validation" novalidate>
                                <div class="input-group mb-3">
                                    <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y zindex-5 ms-3 text-muted d-lg-inline-block d-none"></i>
                                    <input type="email" placeholder="Your Email" class="form-control ps-lg-5 rounded text-lg-start text-center" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                            </form>
                        </div>

                        <!-- Sharing -->
                        <div class="col-lg-12 col-sm-7 col-11">
                            <h6 class="fs-lg">Don’t forget to share it</h6>
                            <div class="mb-4 pb-lg-3">
                                <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endauth
</x-web-layout>