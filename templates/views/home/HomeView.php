<?php require_once INCLUDES.'inc_header.php'; ?>

<!-- Slider Area -->
<section class="register-today overlay section" data-stellar-background-ratio="0.5"
    style="background-image:url('<?php echo IMAGES."header2.jpg" ?>');min-height:100vh;padding-top:150px !important; padding-bottom:20px!important;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course-countdown">
                    <div class="coming-course">
                        <h2><span>
                                XXI CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS</span>Del 09 al 13 de noviembre 2020
                        </h2>
                    </div>
                    <div class="coming-time">
                        <div class="clearfix" data-countdown="2020/11/09"></div>
                    </div>
                    <div class="text-center mt-4">
                        <!-- Enlace para Registrarse -->
                        <a class="btn white primary" href="{{ url('/inscription/create">Inscribirse</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-1 pl-5">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="https://ciistacna.com/2018/src/2018/assets/images/calendario.png"
                        class="img-fluid rounded mt-4" style="width:50px;float: left;">
                    <h4 class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Fecha
                    </h4>
                    <h5 class="text-center text-white" style="font-size:11pt">del 09 al 13 de noviembre</h5>

                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="https://ciistacna.com/2018/src/2018/assets/images/reloj(1).png"
                        class="img-fluid rounded mt-4" style="width:50px;float: left;">
                    <h4 class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Hora
                        de inicio</h4>
                    <h5 class="text-center text-white" style="font-size:11pt">9:00 am</h5>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="https://ciistacna.com/2018/src/2018/assets/images/ponente-en-una-conferencia(1).png"
                        class="img-fluid rounded mt-4" style="width:50px;float: left;">
                    <h4 class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">
                        Expositores</h4>
                    <h5 class="text-center text-white" style="font-size:11pt">Nacionales e internacionales</h5>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <img src="https://ciistacna.com/2018/src/2018/assets/images/aplausos(2).png"
                        class="img-fluid rounded mt-4" style="width:50px;float: left;">
                    <h4 class="text-center text-white" style="margin-top: 10%;font-size:11pt;font-weight: bold;">Tours
                        y más</h4>
                    <h5 class="text-center text-white" style="font-size:11pt">Disfruta Tacna</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Slider -->
<div class="home-slider">
    <div class="slider-active ">
        <!-- Single Slider -->
        <div class="single-slider ">
            <div class="slider-image" style="background-image:url('<?php echo IMAGES."portadas/portada1.png" ?>')"></div>

        </div>
        <!--/ End Single Slider -->
        <div class="single-slider ">
            <div class="slider-image" style="background-image:url('<?php echo IMAGES."portadas/portada1.png" ?> ')"></div>

        </div>
        <!-- Single Slider -->


        <!--/ End Single Slider -->
    </div>
</div>
<!--/ End Slider Area -->

<!-- Courses o ponentes-->
<section class="courses section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2>Nuestros <span>Ponentes</span></h2>
                    <p>Conozca mas sobre los ponentes internacionales que les traemos (boton click para ver mas)</p>
                    <div class="icon"><i class="fa fa-users"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="<?php echo IMAGES.'temp/courses/course1.jpg' ?>" alt="#">
                        <a href="course-single.html" class="btn white primary">Ver más</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'temp/author1.jpg' ?>" alt="#">
                                <h4 class="title">Jewel Mathies</h4>
                            </div>
                            <span class="price">$350</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Basic Web Design Course 2019 (a-z)</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                            shore of this uncharted Gilligan consequa</p>
                    </div>

                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="<?php echo IMAGES.'temp/courses/course3.jpg' ?>" alt="#">
                        <a href="course-single.html" class="btn white primary">Ver más</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'temp/author3.jpg' ?>" alt="#">
                                <h4 class="title">Noha Brown</h4>
                            </div>
                            <span class="price">Free</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Free PHP Web Development</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                            shore of this uncharted Gilligan</p>
                    </div>

                </div>
                <!--/ End Single Course -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Course -->
                <div class="single-course">
                    <!-- Course Head -->
                    <div class="course-head overlay">
                        <img src="<?php echo IMAGES.'temp/courses/course2.jpg' ?>" alt="#">
                        <a href="course-single.html" class="btn white primary">Ver más</a>
                    </div>
                    <!-- Course Body -->
                    <div class="course-body">
                        <div class="name-price">
                            <div class="teacher-info">
                                <img src="<?php echo IMAGES.'temp/author2.jpg' ?>" alt="#">
                                <h4 class="title">Jenola Protan</h4>
                            </div>
                            <span class="price">$290</span>
                        </div>
                        <h4 class="c-title"><a href="course-single.html">Learn Web Developments Course</a></h4>
                        <p>Natus voluptatibus perferendis repellendus Amet rerum quis odioThe ship set ground on the
                            shore of this uncharted Gilligan</p>
                    </div>

                </div>
                <!--/ End Single Course -->
            </div>


        </div>
    </div>
    </div>
</section>
<!--/ End Courses o ponentes-->

<!-- video CSS -->
<div class="clients" style="background:linear-gradient(45deg, #071a4c, #149dcc);">
    <div class=" container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12" style="margin:4% 0%;">
                <div class="text-content text-center">
                    <h4> Conoce más de este gran evento</h4>
                    <p>El Círculo de Estudios y Responsabilidad Social de la ESIS junto con los estudiantes de la XXVI
                        Promoción de la Escuela Profesional de Ingeniería en Informática y Sistemas organizan el XXI
                        Congreso Internacional de Informática y Sistemas con el fin de brindarle una gama de
                        conocimientos, con ponentes del más alto nivel en los distintos campos de Ciencias de la
                        Computación. 
                    </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 text-center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5UYTGX5ICBo" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!--/ End video CSS -->

<!-- Gallery -->
<section class="image-gallery section" style="background:#f8f8f8;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h2><span>En la edición </span> 2019</h2>
                    <p>Se realizó con éxito el XX Congreso Internacional de Informática y Sistemas</p>
                    <p><span>(Galería de fotos)</span></p>
                    <div class="icon"><i class="fa fa-photo"></i></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Gallery Nav -->
                <div class="gallery-nav">
                    <ul class="tr-list list-inline cbp-l-filters-work" id="gallery-menu">
                        <li data-filter="*" class="cbp-filter-item active">Todo<div class="cbp-filter-counter"></div>
                        </li>
                        <li data-filter=".congreso" class="cbp-filter-item">congreso<div class="cbp-filter-counter">
                            </div>
                        </li>
                        <li data-filter=".feria_t" class="cbp-filter-item">Feria<div class="cbp-filter-counter"></div>
                        </li>
                        <li data-filter=".talleres" class="cbp-filter-item">Talleres<div class="cbp-filter-counter">
                            </div>
                        </li>
                        <li data-filter=".concursos" class="cbp-filter-item">Concursos<div class="cbp-filter-counter">
                            </div>
                        </li>
                        <li data-filter=".grupales" class="cbp-filter-item">Grupales<div class="cbp-filter-counter">
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/ End Gallery Nav -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="gallery-item">
                    <div class="cbp-item congreso">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home1.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home1.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item congreso">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home2.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home2.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item congreso">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home3.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home3.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item congreso">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home4.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home4.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item congreso">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home5.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home5.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item feria_t">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home6.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home6.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item talleres">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home7.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home7.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item concursos">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home8.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home8.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item grupales">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home9.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home9.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item grupales">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home10.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home10.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item grupales">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home11.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home11.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                    <div class="cbp-item grupales">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home12.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home12.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>

                    <div class="cbp-item grupales">
                        <!-- Single Gallery -->
                        <div class="gallery-single">
                            <img src="<?php echo IMAGES.'gallery/home/home13.jpg' ?>" alt="#" />
                            <div class="gallery-hover">
                                <h4>Ver foto</h4>
                                <div class="p-button">
                                    <a data-fancybox="gallery" href="<?php echo IMAGES.'gallery/home/home13.jpg' ?>"
                                        class="btn primary"><i class="fa fa-photo"></i></a>

                                </div>
                            </div>
                        </div>
                        <!--/ End Single Gallery -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Gallery -->

<?php require_once INCLUDES.'inc_footer.php'; ?>
