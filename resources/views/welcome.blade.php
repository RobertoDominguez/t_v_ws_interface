<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Tudebon - Homepage</title>
</head>

<body>
    <!-- Scripts -->
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('js/vendor/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/swiper-script.js')}}"></script>
    <script src="{{asset('js/submit-form.js')}}"></script>
    <script src="{{asset('js/vendor/isotope.pkgd.min.js')}}"></script>

    <link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
    <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>
    <df-messenger
    project-id="lithe-sunset-398319"
    agent-id="31ead8e7-12d6-4cd9-8f4a-d486e6a9c421"
    language-code="en">
    <df-messenger-chat-bubble
    chat-title="innovWare">
    </df-messenger-chat-bubble>
    </df-messenger>
    <style>
    df-messenger {
        z-index: 999;
        position: fixed;
        bottom: 16px;
        right: 16px;
    }
    </style>

    <!-- Header -->
    <!--<section class="sticky-top bg-accent-color-1">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo-container">
                        <img src="image/feature.png" alt="" class="img-fluid">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse p-lg-0 px-2 py-3 navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.html">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Service
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="services.html">Services</a></li>
                                    <li><a class="dropdown-item" href="service_detail.html">Service Detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="appointment.html">Appointment</a></li>
                                    <li><a class="dropdown-item" href="therapist.html">Therapist</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                    <li><a class="dropdown-item" href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="single_blog.html">Single Blog</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <div>
                            <div class="d-flex flex-row align-items-center gap-3 text-white">
                                <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
                                <div class="d-flex flex-column">
                                    <span>Call Us</span>
                                    <span>+123-234-1234</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>-->
    <!-- End Of Header -->

    <main>
        <!-- Banner -->
        <section class="section position-relative"
            style="background-image: url({{asset('assets/image/logo.png')}}); height: 90vh;">
            <!--<div class="image-overlay"></div>-->
            <div class="r-container position-relative h-100" style="z-index: 2;">
                <div class="row row-cols-lg-2 row-cols-1 w-100 h-100">
                    <div class="col h-100">
                        <div class="d-flex flex-column h-100 justify-content-center gap-3">
                            <!--<h6 class="fw-semibold font-1 accent-color-1 ls-2">WELCOME TO TUDEBON</h6>-->
                            <!--<h2 class="accent-color font-1 fw-semibold">Keep Your Bone Strong & Health</h2>-->
                            <!--<p class="font-1">
                                Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti. Duis
                                vestibulum magna quis suscipit tempus.
                            </p>-->
                            <!--<div class="d-flex flex-row gap-5">
                                <a href="appointment.html"
                                    class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">MAKE
                                    APPOINTMENT</a>
                                <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-play"></i>
                                </button>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade bg-overlay" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content bg-dark-color">
                        <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"
                            frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 position-relative" style="margin-top: -100px;">
            <div class="r-container">
                <div class="w-100 mx-auto row row-cols-1 row-cols-lg-3 px-3 px-lg-0">
                    <div class="col"></div>
                    <!--<div class="col mb-3">
                        <div class="bg-accent-color-1 rounded-3 p-3  text-white text-center d-flex flex-column">
                            <h2><i class="fa-solid fa-award"></i></h2>
                            <h5 class="font-2">Satisfaction Guarantee</h5>
                            <p>Aenean euismod eros arcu, ut dapibus vestibulum.</p>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="bg-accent-color rounded-3 p-3  text-white text-center d-flex flex-column">
                            <h2><i class="fa-solid fa-user-doctor"></i></h2>
                            <h5 class="font-2">Professional Therapist</h5>
                            <p>Aenean euismod eros arcu, ut dapibus vestibulum.</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>

        <!-- ABOUT TUDEBON -->
        <section class="section">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col mb-3">
                        <div class="position-relative ps-5">
                            <a href="{{asset('assets/image/corp.jpeg')}}" data-fslightbox="gallery">
                                <img src="{{asset('assets/image/corp.jpeg')}}" alt="" class="img-fluid rounded-4">
                            </a>
                            <!--<div
                                class="position-absolute top-0 start-0 bg-accent-color rounded-4 p-4 text-white text-center mt-5">
                                <h3 class="font-1 fw-semibold m-0">15<sup class="fw-normal">Th</sup></h3>
                                <span class="font-1">Years of Experience</span>
                            </div>-->
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-2 h-100 justify-content-center px-3">
                            <!--<h6 class="fw-semibold font-1 accent-color-1 ls-2">ABOUT TUDEBON</h6>-->
                            <h3 class="accent-color font-1 fw-semibold">Sobre Nosotros...</h3>
                            <p class="font-2 fw-light">
                                InnovWare Solutions es líder en el desarrollo de soluciones
                                avanzadas de seguridad mediante inteligencia artificial. 
                                Nuestra innovadora plataforma utiliza tecnología de vanguardia 
                                para detectar y reportar incidentes de acoso físico o verbal, 
                                proporcionando una respuesta inmediata. Con un enfoque proactivo, 
                                ayudamos a proteger y mejorar la seguridad en diversos entornos. 
                                Confíe en InnovWare Solutions para un futuro más seguro y conectado.
                                <br><br>
                                Bienvenido a una nueva era de convivencia en tus manos.
                            </p>
                            <div class="row row-cols-1 row-cols-lg-2 mb-4">
                                <div class="col">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <img src="{{asset('assets/image/billetera.jpeg')}}" alt="" class="img-fluid" width="50" height="50">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h5 class="m-0">Deteccion de Acoso</h5>
                                            <p class="m-0">Donde la comodidad se encuentra con la tecnologia.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-row align-items-center gap-3">
                                        <img src="{{asset('assets/image/compra.jpeg')}}" alt="" class="img-fluid" width="50"
                                            height="50">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h5 class="m-0">Reportes</h5>
                                            <p class="m-0">Una experiencia sin limites.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div>
                                <a href="about_us.html" 
                                    class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">READ
                                    MORE</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        

        <!--
        <section class="section bg-color-2">
            <div class="r-container">
                <div class="d-flex flex-column text-center gap-2">
                    <h6 class="fw-semibold font-1 accent-color-1 ls-2">SERVICIOS</h6>
                    <h3 class="accent-color font-1 fw-semibold">Vista Previa</h3>
                    <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                        Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac
                        habitasse platea dictumst. Nullam eu elit sed metus convallis lobortis. Cras a iaculis eros.
                        Phasellus at lectus viverra, sagittis erat quis.
                    </p>
                    <div class="w-100 row row-cols-1 row-cols-lg-3">
                        <div class="col mb-3">
                            <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/image1.png" alt="" class="img-fluid" width="200" height="200">
                                <h5>Chiropractic Care</h5>
                                <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                                <a href="" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/image2.png" alt="" class="img-fluid" width="200" height="200">
                                <h5>Acupunctur</h5>
                                <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                                <a href="service_detail.html" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/image3.png" alt="" class="img-fluid" width="200" height="200">
                                <h5>Massage Therapy</h5>
                                <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                                <a href="service_detail.html" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/menu.png" alt="" class="img-fluid" width="220" height="220">
                                <h5>Sports Chiropractic</h5>
                                <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                                <a href="service_detail.html" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/image4.png" alt="" class="img-fluid" width="200" height="200">
                                <h5>Laser Therapy</h5>
                                <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                                <a href="service_detail.html" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/image5.png" alt="" class="img-fluid" width="200" height="200">
                                <h5>Pediatric Chiropractic</h5>
                                <p>Suspendisse nec magna ac magna sagittis tristique etiam sagittis.</p>
                                <a href="service_detail.html" class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- PARTNER -->
        <!--<section class="section">
            <div class="r-container">
                <div class="w-100 row row-cols-1 row-cols-lg-2">
                    <div class="col col-lg-5">
                        <div class="d-flex flex-column gap-3">
                            <h6 class="fw-semibold font-1 accent-color-1 ls-2">PARTNER</h6>
                            <h3 class="accent-color font-1 fw-semibold">Partners & Associations</h3>
                            <p class="font-2 fw-light mx-auto my-0" style="max-width: 912px;">
                                Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti duis.
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-7 d-flex align-items-center">
                        <div class="row row-cols-1 row-cols-lg-3">
                            <div class="col">
                                <img src="image/logo-ipsum-1.png" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="image/logo-ipsum-2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="image/logo-ipsum-3.png" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="image/logo-ipsum-4.png" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="image/logo-ipsum-5.png" alt="" class="img-fluid">
                            </div>
                            <div class="col">
                                <img src="image/logo-ipsum-6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="section position-relative bg-attach-fixed"
            style="background-image: url({{asset('assets/image/feature.png')}});">
            <div class="image-overlay-2"></div>
            <div class="r-container position-relative mb-5" style="z-index: 2;">
                <!--<div class="w-100 row row-cols-1 row-cols-lg-4 text-center text-white">
                    <div class="col mb-3">
                        <div class="d-flex flex-column">
                            <h3><i class="fa-solid fa-users"></i></h3>
                            <h3 class="font-1 fw-semibold m-0">1,200<sup class="fw-normal">+</sup></h3>
                            <span class="font-1">Happy Patients</span>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column">
                            <h3><i class="fa-solid fa-award"></i></h3>
                            <h3 class="font-1 fw-semibold m-0">15<sup class="fw-normal">Th</sup></h3>
                            <span class="font-1">Years of Experience</span>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column">
                            <h3><i class="fa-solid fa-user-doctor"></i></h3>
                            <h3 class="font-1 fw-semibold m-0">250<sup class="fw-normal">+</sup></h3>
                            <span class="font-1">Therapist & Staff</span>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column">
                            <h3><i class="fa-solid fa-hospital"></i></h3>
                            <h3 class="font-1 fw-semibold m-0">75<sup class="fw-normal">+</sup></h3>
                            <span class="font-1">Branch Clinic</span>
                        </div>
                    </div>
                </div>
            </div>-->
        </section>

        <!-- WHY CHOOSE US -->
        <section class="pb-5 position-relative" style="margin-top: -100px;">
            <div class="r-container">
                <div class="rounded-3 bg-color-2 p-5">
                    <div class="row row-cols-1 row-cols-lg-2">
                        <div class="col mb-3">
                            <a href="{{asset('assets/image/mision.jpeg')}}" data-fslightbox="gallery">
                           <img src="{{asset('assets/image/mision.jpeg')}}" alt="" class="rounded-3 img-fluid">
                        </a>
                          <!--<div class="d-flex flex-column gap-3 mt-3">
                                <div class="r-progress w-100" style="--value:95;">
                                    <span class="accent-color font-2">Experience</span>
                                    <div class="progress-container">
                                        <div class="r-progress-bar percentage-label">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="r-progress w-100" style="--value:87;">
                                    <span class="accent-color font-2">Chiropractic</span>
                                    <div class="progress-container">
                                        <div class="r-progress-bar percentage-label">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="r-progress w-100" style="--value:96;">
                                    <span class="accent-color font-2">Therapist</span>
                                    <div class="progress-container">
                                        <div class="r-progress-bar percentage-label">
                                            <div class="progress-value"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-3">
                                <h6 class="fw-semibold font-1 accent-color-1 ls-2">WHY CHOOSE US</h6>
                                <h3 class="accent-color font-1 fw-semibold">Nuestra Mision</h3>
                                <p class="font-2 fw-light mx-auto my-0" style="max-width: 912px;">
                                    Misión de InnovWare Solutions: Impulsar la seguridad y bienestar 
                                    social a través de soluciones tecnológicas innovadoras. 
                                    Nos comprometemos a desarrollar plataformas de seguridad basadas en 
                                    inteligencia artificial que detecten y mitiguen eficazmente incidentes 
                                    de acoso físico o verbal, contribuyendo así a la creación de entornos 
                                    más seguros y respetuosos en todo el mundo.
                                </p>
                                <!--<div class="d-flex flex-column gap-2">
                                    <div class="d-flex flex-row gap-2 font-2 align-items-center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Certified Professional Therapist
                                    </div>
                                    <div class="d-flex flex-row gap-2 font-2 align-items-center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        High Quality Treatment and Best Equipment
                                    </div>
                                    <div class="d-flex flex-row gap-2 font-2 align-items-center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Friendly and Kind Staff
                                    </div>
                                    <div class="d-flex flex-row gap-2 font-2 align-items-center">
                                        <i class="fa-solid fa-chevron-right"></i>
                                        Affordable Prices and Guaranteed Healing
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOW WE WORK -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 text-center">
                    <h6 class="fw-semibold font-1 accent-color-1 ls-2">HOW WE WORK</h6>
                    <h3 class="accent-color font-1 fw-semibold">Nuestra Vision</h3>
                    <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                        Visión de InnovWare Solutions: Ser líderes reconocidos a nivel mundial 
                        en la aplicación de inteligencia artificial para la prevención y respuesta 
                        a situaciones de acoso, contribuyendo a la creación de comunidades más 
                        seguras y respetuosas. 
                        Aspiramos a ser referentes en innovación tecnológica, 
                        promoviendo un cambio positivo en la sociedad mediante 
                        soluciones avanzadas y accesibles.
                    </p>
                    <!--<div class="row row-cols-1 row-cols-lg-4 mt-3">
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                                <div class="border-3 border rounded-3 p-3 mb-3"
                                    style="--bs-border-color: var(--accent-color-1);">
                                    <img src="image/notebook.png" alt="" class="img-fluid" width="40" height="40">
                                </div>
                                <h6 class="font-1 m-0">Make an Appointment</h6>
                                <p>
                                    Suspendisse nec magna ac magna sagittis tristique.
                                </p>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                                <div class="border-3 border rounded-3 p-3 mb-3"
                                    style="--bs-border-color: var(--accent-color-1);">
                                    <img src="image/consulting.png" alt="" class="img-fluid" width="40" height="40">
                                </div>
                                <h6 class="font-1 m-0">Consultation</h6>
                                <p>
                                    Suspendisse nec magna ac magna sagittis tristique.
                                </p>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                                <div class="border-3 border rounded-3 p-3 mb-3"
                                    style="--bs-border-color: var(--accent-color-1);">
                                    <img src="image/back.png" alt="" class="img-fluid" width="40" height="40">
                                </div>
                                <h6 class="font-1 m-0">Chiropractic Therapy</h6>
                                <p>
                                    Suspendisse nec magna ac magna sagittis tristique.
                                </p>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                                <div class="border-3 border rounded-3 p-3 mb-3"
                                    style="--bs-border-color: var(--accent-color-1);">
                                    <img src="image/reviews.png" alt="" class="img-fluid" width="40" height="40">
                                </div>
                                <h6 class="font-1 m-0">Satisfied Review</h6>
                                <p>
                                    Suspendisse nec magna ac magna sagittis tristique.
                                </p>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>

        <!-- Our Patient Review -->
        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    <div class="col col-lg-5 mb-3">
                        <!--<div class="d-flex flex-column gap-3">
                            <h3 class="accent-color font-1 fw-semibold fs-1">Our Patient Review</h3>
                            <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                                Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti duis
                                fringilla massa at rhoncus.
                            </p>
                            <div class="overflow-hidden outer-margin">
                                <div class="swiper">
                                    Additional required wrapper 
                                    <div class="swiper-wrapper">
                                        Slides 
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column bg-accent-color rounded-4 p-5 text-white">
                                                <h1><i class="fa-solid fa-quote-right"></i></h1>
                                                <p class="text-gray mb-4 fst-italic font-1">
                                                    "Curabitur accumsan felis in dui placerat lobortis. Pellentesque et
                                                    malesuada orci, quis pretium neque. Aenean accumsan sodales tortor,
                                                    porta tempor nunc efficitur quis. Nunc sit amet magna ac dui aliquet
                                                    euismod nec vitae nisi."</p>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <h6 class="font-2 lh-1">Kim Esmeralda</h6>
                                                    <span class="text-gray">Gym Instructor</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column bg-accent-color rounded-4 p-5 text-white">
                                                <h1><i class="fa-solid fa-quote-right"></i></h1>
                                                <p class="text-gray mb-4 fst-italic font-1">
                                                    "Curabitur accumsan felis in dui placerat lobortis. Pellentesque et
                                                    malesuada orci, quis pretium neque. Aenean accumsan sodales tortor,
                                                    porta tempor nunc efficitur quis. Nunc sit amet magna ac dui aliquet
                                                    euismod nec vitae nisi."</p>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <h6 class="font-2 lh-1">Michael Granger</h6>
                                                    <span class="text-gray">Football Player </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column bg-accent-color rounded-4 p-5 text-white">
                                                <h1><i class="fa-solid fa-quote-right"></i></h1>
                                                <p class="text-gray mb-4 fst-italic font-1">
                                                    "Curabitur accumsan felis in dui placerat lobortis. Pellentesque et
                                                    malesuada orci, quis pretium neque. Aenean accumsan sodales tortor,
                                                    porta tempor nunc efficitur quis. Nunc sit amet magna ac dui aliquet
                                                    euismod nec vitae nisi."</p>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <h6 class="font-2 lh-1">Jason Rando</h6>
                                                    <span class="text-gray">Construction Worker</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <!--<div class="col col-lg-7 mb-3">
                        <a href="image/dummy-img-600x700.jpg" data-fslightbox="gallery">
                            <img src="image/dummy-img-600x700.jpg" alt="" class="img-fluid rounded-4">
                        </a>
                    </div>-->
                </div>
            </div>
        </section>

        <section class="section position-relative bg-attach-fixed"
            style="background-image: url({{asset('assets/image/feature.png')}});">
            <div class="image-overlay-2"></div>
            <!--<div class="r-container position-relative" style="z-index: 2;">
                <div class="d-flex flex-column gap-3 text-white text-center align-items-center">
                    <h3 class="font-1 fw-semibold" style="font-size: 48px;">Feel Something Wrong With Your Bones?</h3>
                    <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                        Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies. In hac
                        habitasse platea dictumst. Nullam eu elit sed metus convallis lobortis. Cras a iaculis eros.
                        Phasellus at lectus viverra, sagittis erat quis.
                    </p>
                    <a href="contact.html" class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">FREE
                        CONSULTATION</a>
                </div>
            </div>-->
        </section>

        <!-- CHECK OUT OUR BLOG -->
        <!--<section class="section">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                    <div class="col col-lg-7">
                        <div class="row row-cols-1 row-cols-lg-2">
                            <div class="col">
                                <div class="card p-3 bg-accent-color-1 rounded-4 with-border-bottom">
                                    <img src="image/dummy-img-600x400.jpg" class="img-fluid" alt="image">
                                    <div class="d-flex flex-column gap-3 p-3 text-white">
                                        <div class="d-flex flex-row gap-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-regular fa-calendar"></i>
                                                October 7, 2023
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-regular fa-user"></i>
                                                Author
                                            </div>
                                        </div>
                                        <h6 class="font-1">Neck Pain and Treatment with Chiropractic</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum
                                            ultrices nisi, at congue sapien lobortis…
                                        </p>
                                        <div>
                                            <a href="single_blog.html" class="btn text-white p-0 font-1 fw-semibold">
                                                READ MORE
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card p-3 bg-accent-color-1 rounded-4 with-border-bottom">
                                    <img src="image/dummy-img-600x400.jpg" class="img-fluid" alt="image">
                                    <div class="d-flex flex-column gap-3 p-3 text-white">
                                        <div class="d-flex flex-row gap-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-regular fa-calendar"></i>
                                                October 7, 2023
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-regular fa-user"></i>
                                                Author
                                            </div>
                                        </div>
                                        <h6 class="font-1">What Your Back Pain is Trying to Tell You</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum
                                            ultrices nisi, at congue sapien lobortis…
                                        </p>
                                        <div>
                                            <a href="single_blog.html" class="btn text-white p-0 font-1 fw-semibold">
                                                READ MORE
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="d-flex flex-column gap-3 ps-lg-4">
                            <h6 class="fw-semibold font-1 accent-color-1 ls-2">CHECK OUT OUR BLOG</h6>
                            <h3 class="accent-color font-1 fw-semibold">Blog & Articles</h3>
                            <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                                Maecenas dictum fringilla nisi ac malesuada. Donec ac quam non diam elementum ultricies.
                                In hac habitasse platea dictumst nullam eu elit ligula volutpat.
                                <br><br>
                                Ut malesuada lectus non ante eleifend, ac lacus nunc viverra. Etiam ornare neque augue.
                            </p>
                            <div>
                                <a href="blog.html" class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">VIEW
                                    ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    </main>

    <footer>
        <section class="bg-accent-color-1">
            <div class="r-container section border-bottom">
                <div class="row row-cols-1 row-cols-lg-2 w-100">
                    <div class="col col-lg-4">
                        <div class="d-flex flex-column gap-3 text-white">
                            <div class="logo-container">
                                <img src="{{asset('assets/image/logo.png')}}" alt="" class="img-fluid">
                            </div>
                            <p>
                                
                            </p>
                            <div class="social-container">
                                <a href="https://www.facebook.com" class="social-item">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="https://www.twitter.com" class="social-item">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com" class="social-item">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="https://www.instagram.com" class="social-item">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-8">
                        <div class="row row-cols-1 row-cols-lg-3 text-white">
                            <div class="col">
                                <h5 class="font-2 mb-3">Quick Links</h5>
                                <ul class="list gap-2">
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Appointment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <h5 class="font-2 mb-3">Services</h5>
                                <ul class="list gap-2">
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Chiropractic Care
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Acupunctur
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Massage Therapy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Sports Chiropractic
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Laser Therapy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="d-flex flex-row gap-3 align-items-center link">
                                            <i class="fa-regular fa-circle-dot"></i>
                                            Pediatric Chiropractic
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <h5 class="font-2 mb-3">Information</h5>
                                <div class="d-flex flex-column gap-3">
                                    <div class="d-flex flex-row align-items-center gap-3 text-white">
                                        <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
                                        <div class="d-flex flex-column">
                                            <span>Phone</span>
                                            <span>+591-62066339</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-3 text-white">
                                        <span class="fs-2">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <div class="d-flex flex-column">
                                            <span>Email</span>
                                            <span>Innovware_Solutions@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-3 text-white">
                                        <span class="fs-2">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <div class="d-flex flex-column">
                                            <span>Address</span>
                                            <span>Entre Beni y Alemana #354</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 text-white text-center">
                <p class="m-0">Copyright 2023 © All Right Reserved Design by Rometheme</p>
            </div>
        </section>
    </footer>

    <script src="{{asset('assets/js/vendor/fslightbox.js')}}"></script>
    <script src="{{asset('assets/js/masonry.js')}}"></script>

</body>

</html>