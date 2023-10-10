@include("templates.navbar")
@include("templates.head")
<section id="hero" class="hero" style="background-image: url({{asset("/img/contact.jpg")}}); background-size: cover;">
    <div class="container position-relative" style="background: rgba(0, 0, 0, 0.7); border-radius: 10px; padding: 20px; margin-bottom: 70px;"
         data-aos="zoom-in" data-aos-delay="100">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Contáctenos</h2>
                <p>¿Dudas?, Te asesoramos en lo que necesites.</p>
            </div>

        </div>
    </div>
</section>

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Formulario</h2>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Dirección:</h4>
                                <p>Calle 70 No. 55-210 Bucaramanga, Santander</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>willian.ardila@mail.udes.edu.co</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>PBX:</h4>
                                <p>(+57) (607) 6516500</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Horario de Atención:</h4>
                                <p>Lunes a viernes de 8:00 a.m. a 12:00 m y de 2:00 p.m. a 7:00 p.m.</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"
                                       required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Correo" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Titulo"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Mensaje"
                                      required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Cargando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tu mensaje ha sido enviado</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Enviar mensaje</button>
                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
@include("templates.footer")
