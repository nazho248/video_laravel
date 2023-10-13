@include(( 'template.header'))
@include(( 'template.navbar'))


<section id="hero" class="hero"
         style="background-image: url({{asset("/img/plan.jpg")}}); background-size: cover; background-position: center;">
    <div class="container position-relative"
         style="background: rgba(0, 0, 0, 0.7); border-radius: 10px; padding: 20px; margin-bottom: 70px;"
         data-aos="zoom-in" data-aos-delay="100">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Plan de Estudios</h2>
            </div>

        </div>
    </div>
</section>

<main id="main">

    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <h2 style="text-align: center;">Semestres</h2>

                <div class="col-lg-6">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                    <span class="num">1.</span>
                                    Primer semestre
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Introducción a la Ingeniería de Software</li>
                                        <li>Química General</li>
                                        <li>Cálculo Diferencial</li>
                                        <li>Competencias Comunicativas</li>
                                        <li>Socio-antropología</li>
                                        <li>Constitución Política y Legislación Ambiental</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                    <span class="num">2.</span>
                                    Segundo Semestre
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Electiva de Contextualización I</li>
                                        <li>Electiva de Contextualización II</li>
                                        <li>Cálculo Integral</li>
                                        <li>Física Mecánica</li>
                                        <li>Dibujo de Ingeniería</li>
                                        <li>Ética y Valores</li>
                                        <li>Metodología de la Investigación</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                    <span class="num">3.</span>
                                    Tercer Semestre
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Fundamentos de Programación</li>
                                        <li>Modelos de Procesos de Software.</li>
                                        <li>Cálculo Multivariableis</li>
                                        <li>Física Eléctrica</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                    <span class="num">4.</span>
                                    Cuarto Semestre
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Programación de Computadores I</li>
                                        <li>Herramientas de Modelado de Software</li>
                                        <li>Fundamentos de Electrónica</li>
                                        <li>Matemática Discreta</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                    <span class="num">5.</span>
                                    Quinto Semestre
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Programación de Computadores II</li>
                                        <li>Requisito de Software</li>
                                        <li>Estructura de Datos</li>
                                        <li>Herramientas de Ingeniería de Software</li>
                                        <li>Métodos Numéricos</li>
                                        <li>Fundamentos de Bases de Datos</li>
                                        <li>Emprendimiento Empresarial</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="accordion accordion-flush" data-aos="fade-up" data-aos-delay="100">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-6">
                                    <span class="num">6.</span>
                                    Sexto semestre
                                </button>
                            </h3>
                            <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Electiva de Profundización I</li>
                                        <li>Diseño de Software I</li>
                                        <li>Diseño y Análisis de Algoritmos</li>
                                        <li>Organización de Computadores</li>
                                        <li>Redes y Comunicaciones de Datos</li>
                                        <li>Gestores de Bases de Datos</li>
                                        <li>Gerencia de Ingeniería</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-7">
                                    <span class="num">7.</span>
                                    Séptimo semestre
                                </button>
                            </h3>
                            <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Electiva de Profundización II</li>
                                        <li>Diseño de Software II</li>
                                        <li>Lenguajes de Programación</li>
                                        <li>Calidad de Software</li>
                                        <li>Sistemas Operativos</li>
                                        <li>Ingeniería Económica</li>
                                        <li>Desarrollo e Innovación Tecnológica</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-8">
                                    <span class="num">8.</span>
                                    Octavo semestre
                                </button>
                            </h3>
                            <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Electiva de Profundización III</li>
                                        <li>Construcción e Integración de Software</li>
                                        <li>Prueba de Software</li>
                                        <li>Práctica Empresarial</li>
                                        <li>Formulación y Evaluación de Proyectos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-9">
                                    <span class="num">9.</span>
                                    Noveno semestre
                                </button>
                            </h3>
                            <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Electiva de Profundización IV</li>
                                        <li>Interacción Hombre-Computador</li>
                                        <li>Configuración y Mantenimiento de Software</li>
                                        <li>Mejores prácticas de Ingeniería de Software</li>
                                        <li>Gestión de Proyectos de Software</li>
                                        <li></li>
                                        Anteproyecto</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-10">
                                    <span class="num">10.</span>
                                    Décimo semestre
                                </button>
                            </h3>
                            <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Electiva de Profundización V</li>
                                        <li>Electiva de Contextualización III</li>
                                        <li>Auditoría de Software</li>
                                        <li>Seminario de Actualización</li>
                                        <li>Trabajo de Grado</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Frequently Asked Questions Section -->

</main>

@include(( 'template.footer'))
