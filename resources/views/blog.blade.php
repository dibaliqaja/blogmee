@include('layouts_blog.header')

    <div class="hero-wrap js-fullheight" style="background-image: url({{ asset('front/images/guys.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate">
                    <h2 class="subheading">Hallo! Selamat Datang di</h2>
                    <h1 class="mb-4 mb-md-0">Blogmee</h1>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="text">
                                <br>
                                <p> Daftarkan dirimu, Posting yang ada di sekitarmu.
                                    Daftarkan dirimu, Posting yang ada di sekitarmu.
                                    Daftarkan dirimu, Posting yang ada di sekitarmu.
                                    Daftarkan dirimu, Posting yang ada di sekitarmu. </p>
                                <div class="mouse">
                                    <a href="#post" class="mouse-icon">
                                        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="post">
                    @foreach ($data as $new_post)
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="{{ route('blog.isi', $new_post->slug) }}" class="img w-100 mb-3 mb-md-0"
                                    style="background-image: url({{ asset('/'.$new_post->gambar) }});"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">{{ $new_post->category->name }}</span>
                                    <h2><a href="{{ route('blog.isi', $new_post->slug) }}">{{ $new_post->judul }}</a>
                                    </h2>
                                    {{-- <ul class="media-social list-unstyled">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    </ul> --}}
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">{{ $new_post->created_at->diffForHumans() }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="pagination-lg">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('layouts_blog.footer')
