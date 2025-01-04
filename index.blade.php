@extends('components.layout')
@section('title', 'A.P. Mahavidhalay Laxmipur Kushinagar')
<!--The Hero Section Start-->
@section('main-page')
    <div class="hero-section">
        <div class="bg-holder" style="background-image: url('../assets/images/hero.jpg');"><video class="bg-video"
                autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
                <source src="{{ url('../assets/images/Techpile_video.mp4') }}" type="video/mp4" />
                <source src="{{ url('../assets/images/Techpile_video.mp4') }}" type="video/mp4" />
                <source src="{{ url('../assets/images/Techpile_video.mp4') }}" type="video/mp4" />
            </video></div>
        <div class="container">
            <div class="row justify-content-end align-items-center vh-50" style="padding-top:120px;">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a class="link-300 btn d-block w-100 text-uppercase ls-2" href="#"
                        style="background: var(--bg-color); border-color: rgba(255, 255, 255, 0.35);color:var(--text-color);">Apply</a>
                    <a class="link-300 btn d-block w-100 text-uppercase ls-2 mt-2" href="#"
                        style="background: var(--bg-color); border-color: rgba(255, 255, 255, 0.35);color:var(--text-color);">Enqiury</a>
                    <a class="link-300 btn d-block w-100 text-uppercase ls-2 mt-2" href="#"
                        style="background: var(--bg-color); border-color: rgba(255, 255, 255, 0.35);color:var(--text-color);">Addmission</a>
                </div>
            </div>
        </div><!-- end of .container-->
    </div>

    <section class="pt-3 text-center" style="margin-top:160px;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <p class="mb-0 fs-4"><strong style="color:var(--text-color)">A.P Mahavidhalay </strong>Laxmipur Padrauna
                        Kushinagar 274303</p>
                </div>
                <div class="col-12">
                    <hr class="text-300 mb-0" />
                </div>
            </div>
        </div>
    </section>
    <!--******* The About Section Start ***********-->
    <section class="about-section-home-pages pt-5 .pt-sm-3" style="background-color:rgba(255,255,255,1)">
        <div class="container" style="max-width:1400px;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="" style="color:var(--text-color);">About Us</h1>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4 mb-3">
                    <div class="card mt-4" style="width:100%;max-width:100%;">
                        <img src="{{ asset('assets/images/Khurshedalam2.jpg') }}" alt="" class="img-fluid"
                            style="height:400px;width:100%;max-width:100%;">
                    </div>
                </div>
                <div class="col-sm-7 mb-3 mt-sm-5">
                    <div class="card" style="border:none;">
                        <h4 class="card-body">
                            Mr. XYZ
                            <p class="pt-1 opacity-100" style="font-size:1rem;color:#cbcbcb;">Principal of A.P. Mahavidalay
                                Laxmipur Kushinagar</p>
                        </h4>
                    </div>
                    <div class="row shadow text-center p-3 text-white fw-bold" style="background-color: rgba(255, 255, 255, .35);">
                        <div class="col-sm-4 mb-3 bg-primary  opacity-75">
                            <div class="card-body py-3">
                                B.A Course
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3 opacity-75" style="background-color:var(--text-color);">
                            <div class="card-body py-3">
                                B.COM
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3 bg-success opacity-75">
                            <div class="card-body py-3">
                                B.SC
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-4">
                            <h4 class="card-title">
                                About Info
                                <p style="text-align: justify;font-size:1rem;padding:7px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur inventore natus in neque nobis, dolorem dolor suscipit rem? Iure delectus fugiat ab assumenda. Asperiores quo eaque aspernatur exercitationem culpa autem.</p>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--******* The About Section Ends ***********-->
    <!--- Our Teacher Section Start --->
    <section class="teacher-section mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center" style="color:var(--text-color);"> Our Teacher </h1>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-offset-2 col-md-12 col-sm-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial bg-white shadow rounded rounded-4">
                            <div class="pic">
                                <img src="{{ asset('assets/images/khurshedalam2.jpg') }}" alt="">
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, veritatis. Earum odit
                                iusto et cupiditate, eos incidunt a dignissimos quod veniam recusandae temporibus, ipsa non,
                                ipsam quidem reiciendis repellendus sequi.
                            </p>
                            <h3 class="title">Khurshed Alam
                                <span class="post"> - Php Developer</span>
                            </h3>
                        </div>
                        <div class="testimonial bg-white shadow rounded rounded-4">
                            <div class="pic">
                                <img src="{{ asset('assets/images/khurshedalam.jpg') }}" alt="">
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, veritatis. Earum odit
                                iusto et cupiditate, eos incidunt a dignissimos quod veniam recusandae temporibus, ipsa non,
                                ipsam quidem reiciendis repellendus sequi.
                            </p>
                            <h3 class="title">Nurshed Alam
                                <span class="post"> - React</span>
                            </h3>
                        </div>
                        <div class="testimonial bg-white shadow rounded rounded-4">
                            <div class="pic">
                                <img src="{{ asset('assets/images/khurshedalam.jpg') }}" alt="">
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, veritatis. Earum odit
                                iusto et cupiditate, eos incidunt a dignissimos quod veniam recusandae temporibus, ipsa non,
                                ipsam quidem reiciendis repellendus sequi.
                            </p>
                            <h3 class="title">Jamshed Alam
                                <span class="post"> - App Developer</span>
                            </h3>
                        </div>
                        <div class="testimonial bg-white shadow rounded rounded-4">
                            <div class="pic">
                                <img src="{{ asset('assets/images/khurshedalam.jpg') }}" alt="">
                            </div>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, veritatis. Earum odit
                                iusto et cupiditate, eos incidunt a dignissimos quod veniam recusandae temporibus, ipsa non,
                                ipsam quidem reiciendis repellendus sequi.
                            </p>
                            <h3 class="title">Anwer Ali
                                <span class="post"> - Graphices Desiger</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
