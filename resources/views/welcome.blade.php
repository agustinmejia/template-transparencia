<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Transparencia | Bienvenido</title>
        <meta content="" name="description">

        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="icon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: FlexStart - v1.11.1
        * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->

    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url('') }}" class="logo d-flex align-items-center">
                <img src="icon.png" alt="">
                <span>Transparencia</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
                {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                <li><a class="getstarted scrollto" href="#contact">Hacer denuncia</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Plataforma de Transparencia de GADBENI</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Secretaría de Transparencia y Lucha Contra la Corrupción</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                    <a href="#contact" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Hacer denuncia</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                    <h3>Quienes somos</h3>
                    <h2>La Secretaria de Transparencia y lucha contra la corrupción</h2>
                    <p>
                        La Secretaria de Transparencia y lucha contra la corrupción es la instancia responsable de gestionar las denuncias por actos de corrupción y llevar adelante las políticas de transparencia y lucha contra la corrupción, de acuerdo a lo establecido en la Ley 974, de 4 de septiembre 2017.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Leer más</span>
                        <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/about.png" class="img-fluid" alt="">
                </div>

                </div>
            </div>

            </section><!-- End About Section -->

            <!-- ======= Features Section ======= -->
            {{-- <section id="features" class="features">

                <div class="container" data-aos="fade-up">
    
                    <header class="section-header">
                    <h2>Servicios</h2>
                    <p>Servicios</p>
                    </header>
    
                    <!-- Feature Icons -->
                    <div class="row feature-icons" data-aos="fade-up">
    
                    <div class="row">
    
                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                        </div>
    
                        <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">
    
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="ri-line-chart-line"></i>
                            <div>
                                <h4>Corporis voluptates sit</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            </div>
    
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="ri-stack-line"></i>
                            <div>
                                <h4>Ullamco laboris nisi</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            </div>
    
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="ri-brush-4-line"></i>
                            <div>
                                <h4>Labore consequatur</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            </div>
    
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="ri-magic-line"></i>
                            <div>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                            </div>
    
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="ri-command-line"></i>
                            <div>
                                <h4>Molestiae dolor</h4>
                                <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                            </div>
                            </div>
    
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="ri-radar-line"></i>
                            <div>
                                <h4>Explicabo consectetur</h4>
                                <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                            </div>
                            </div>
    
                        </div>
                        </div>
    
                    </div>
    
                    </div><!-- End Feature Icons -->
    
                </div>
    
            </section> --}}
            <!-- End Features Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="106" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total de denuncias</p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Casos rechazados</p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                    <i class="bi bi-headset" style="color: #15be56;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Casos objetados</p>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                    <i class="bi bi-people" style="color: #bb0852;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Acusaciones</p>
                    </div>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Counts Section -->

            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Preguntas frecuentes</p>
                </header>

                <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                Qué es denuncia por corrupción?
                            </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Todo acto realizado por un funcionario público que haciendo mal ejercicio de su cargo no tenga en cuenta los fines de la función pública o el interés público, sino que actúa por un beneficio particular, violando la ley.
                            </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                Cuándo denunciar?
                            </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Cuando se tienen conocimiento de actos de corrupción que perjudican a los intereses del Estado, y de la sociedad.  Sólo las denuncias contra particulares, que no afecten los intereses del Estado, no serán atendidas en nuestras oficinas.
                            </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                Quién puede realizar una denuncia?
                            </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Cualquier persona que tenga conocimiento de un acto de corrupción o por falta de transparencia (art. 108, num. 8 de la CPE).
                            </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                Cómo presentar una denuncia?
                            </button>
                            </h2>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                De manera verbal o escrita, ante la Unidad de Transparencia, acompañando la documentación de respaldo.
                            </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                Cuánto cuesta una denuncia?
                            </button>
                            </h2>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                NO tiene ningún costo.
                            </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

            </div>

            </section>
            <!-- End F.A.Q Section -->

            <!-- ======= Testimonials Section ======= -->
            {{-- <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Testimonials</h2>
                        <p>What they are saying about us</p>
                    </header>

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                </div>
                            </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                                <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                </div>
                            </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                </div>
                            </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                </div>
                            </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section> --}}
            <!-- End Testimonials Section -->


            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                <h2>Información de contacto</h2>
                <p>Haz tu denuncia</p>
                </header>

                <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Dirección</h3>
                        <p>Plaza Principal acera sur<br>Santísima Trinidad, Beni - Bolivia</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3>Llámanos</h3>
                        <p>(3) 462 4226</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p>transparencia@beni.gob.bo</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                        <i class="bi bi-clock"></i>
                        <h3>Horarios de atención</h3>
                        <p>Lunes - Domingo<br>24 horas del día</p>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <form action="{{ route('denuncias.store.landingpage') }}" method="post" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="nombre_completo" class="form-control" placeholder="Tu nombre completo" required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" name="ci" class="form-control" placeholder="Tu cédula de identidad" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="telefono" class="form-control" placeholder="Tu telefono/celular de contacto" required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" name="direccion" class="form-control" placeholder="Tu dirección" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="denunciado" class="form-control" placeholder="Personas o entidades denunciadas" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="delito" rows="6" placeholder="Describa el motivo de su denuncia y la fecha en la que ocurrieron los hechos" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="file" name="file" class="form-control">
                                <small>Puedes adjuntar un archivo a tu denuncia (PDF o imagen)</small>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Enviando...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu denuncia ha sido enviada. Gracias!</div>

                                <button type="submit">Enviar denuncia</button>
                            </div>

                        </div>
                    </form>

                </div>

                </div>

            </div>

            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Boletín de noticias</h4>
                    <p>Suscribete a nuestro boletín de noticias</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
                </div>
            </div>
            </div>

            <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                    <img src="icon.png" alt="">
                    <span>Transparencia</span>
                    </a>
                    <p>Secretaría de Transparencia y Lucha Contra la Corrupción</p>
                    <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Enlaces</h4>
                    <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Otros servicios</h4>
                    <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contáctanos</h4>
                    <p>
                    Plaza Principal acera sur, <br>
                    Santísima Trinidad, Beni - Bolivia<br><br>
                    <strong>Telefonos:</strong> (3) 462 4226<br>
                    <strong>Email:</strong> transparencia@beni.gob.bo<br>
                    </p>

                </div>

                </div>
            </div>
            </div>

            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>GADBENI</span></strong>. Todos los derechos reservados
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Diseñado por <a href="https://beni.gob.bo"><b>Unidad de Sistemas</b></a>
            </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
</html>