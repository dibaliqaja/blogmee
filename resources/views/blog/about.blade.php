@include('layouts_blog.header')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('front/images/guys.jpg') }});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">About</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>About </span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
                    style="background-image: url({{ asset('front/images/me2.jpg') }});">
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Selamat Datang di Blogmee</span>
                        <h2 class="mb-4">Hallo! Nama Saya Muhammad Iqbal</h2>
                        <p>Ini adalah Blog yang saya buat untuk kalian yang ingin bercerita tentang apapun disekitar
                            lalu posting agar bermanfaat juga untuk orang lain :) </p>
                        <div class="tabulation-2 mt-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                <li class="nav-item mb-md-0 mb-2">
                                    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
                                </li>
                                <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
                                </li>
                            </ul>
                            <div class="tab-content bg-light rounded mt-2">
                                <div class="tab-pane container p-0 active" id="home1">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                                <div class="tab-pane container p-0 fade" id="home2">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                                <div class="tab-pane container p-0 fade" id="home3">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Dengan adanya blog ini saya lebih mudah untuk menulis dan membagikan cerita menjadi Frontend Developer saya. The big Thanks for you Iqbal!</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('front/images/me3.JPG') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Adi Gumulung</p>
                                        <span class="position">Frontend Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Blog yang sederhana dan simple untuk membagikan cerita saya.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('front/images/me4.JPG') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Eric Kamahama</p>
                                        <span class="position">Mobile Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Dengan adanya ini saya bisa lebih mudah untuk membagikan cerita saya terlebih tentang User Experience</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('front/images/image_9.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Amanda Soya</p>
                                        <span class="position">UX Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Dari blog ini saya juga menambah literasi untuk membaca</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('front/images/me5.jpg') }})"></div>
                                    <div class="pl-3">
                                        <p class="name">Agung Pambudi</p>
                                        <span class="position">Backend Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="logo"><a href="#">Blog<span>mee</span>.</a></h2>
                    <p> Daftarkan dirimu, Posting yang ada di sekitarmu.
                        Daftarkan dirimu, Posting yang ada di sekitarmu.
                        Daftarkan dirimu, Posting yang ada di sekitarmu.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://twitter.com/dibaliqaja"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/dibaliqaja"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/dibaliqaja/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="/" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a>
                        </li>
                        <li><a href="/about" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Jalan Raya Rengel No.
                                    155, Rengel, Tuban, Jawa Timur</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 896 8735
                                        3934</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">dibaliqaja@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" /></svg></div>

<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/aos.js') }}"></script>
<script src="{{ asset('front/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('front/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
</script>
<script src="{{ asset('front/js/google-map.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>
