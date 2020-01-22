@include('layouts_blog.header')

    @foreach ($data as $isipost)
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('/'.$isipost->gambar) }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">{{ $isipost->judul }}</h1><br>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>{{ $isipost->judul }}
                            </span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">

                        <p class="mb-5">
                            <img src="{{ asset('/'.$isipost->gambar) }}" alt="" class="img-fluid" style="width: 500px">
                        </p>
                        <h2 class="mb-3"></h2>

                            <p>{{ $isipost->content }}</p>

                        <div class="tag-widget post-tag-container mb-5 mt-5">
                            <div class="tagcloud">
                                @foreach ($isipost->tags as $a)
                                    <a href="#" class="tag-cloud-link">{{ $a->name }}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="about-author d-flex p-4 bg-light">
                            <div class="bio mr-5">
                                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                            </div>
                            <div class="desc">
                                <h3>George Washington</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                                    necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa
                                    sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                            </div>
                        </div>
                    @endforeach

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            @foreach ($kategori as $item_kategori)
                                <li><a href="#">{{ $item_kategori->name }} <span class="ion-ios-arrow-forward"></span></a></li>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            @foreach ($tag as $item_tag)
                                <a href="#" class="tag-cloud-link">{{ $item_tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

@include('layouts_blog.footer')
