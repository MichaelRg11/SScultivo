<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('https://images5.alphacoders.com/105/1050845.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bienvenidos a SSCultivo</h3>
                        <p>Un servicio que te permite monitorear tus cultivos de manera mas facil.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://miro.medium.com/max/4800/1*MC0blcVlAb4NNKY8koLfiw.jpeg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bienvenidos a SSCultivo</h3>
                        <p>El mejor cuidado para cultivos acuaponicos y terrestres</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://mk0softsecrets4cv09b.kinstacdn.com/wp-content/uploads/sites/11/2020/09/what-to-do-with-male-cannabis-plants-04-1024x576.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bienvenidos a SSCultivo</h3>
                        <p>Una gran opcion para el cuidado de tus plantas</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Nuestros Servicios </h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Gestion de cultivos</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="img/related-pro-01.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Manejo y registro de la informacion basica y necesaria de tus cultivos, de manera mas detallada.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Conoce mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Gestion de Seguimiento & Monitoreo</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="img/related-pro-02.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Estadisticas y calculos de tus cultivos para que puedas prevenir y ahorrar tiempo frente a posibles complicaciones.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Conoce mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Gestion de insumos</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="img/related-pro-03.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text"> Inventario de los insumos requeridos por los cultivos en vigencia para que tengas un panorama de tus gastos.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Conoce mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Bienvenido a SSCultivo</h2>
                    <p>Queremos ser tus mejores aliados en tu trabajo diario para que puedas acceder a toda la informacion de tus cultivos desde la web.</p>
                    <h5>Nuestro enfoque</h5>
                    <ul>
                        <li>Seguimos el ODS 9 como meta para aportar al desarrollo del mundo.</li>
                        <li>Buscamos que puedas acceder a herramientas tecnologicas para mejorar la infraestructura de tus cultivos.</li>
                        <li>Trabajamos con cultivos acuaponicos como contribucion y promocion para el medio ambiente.</li>
                        <li>Ahorro en tiempo y costos.</li>
                        <li>Seguridad en tus procesos.</li>
                    </ul>
                    <p> Somos una empresa comprometida con la contribucion y desarrollo de las nuevas tecnologias a traves de actividades agronomas.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="img/cultivo.jpg" alt="" />
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Experiencias clientes</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="img/portfolio-img-01.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="usuarios/index">Lawn & garden care</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="img/portfolio-img-02.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Lawn renovation</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="img/portfolio-img-03.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Tree planting</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="img/portfolio-img-04.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Water Baganig</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="img/portfolio-img-05.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Growing plants</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <div class="card-img">
                            <a href="#">
                                <img class="card-img-top" src="img/portfolio-img-01.jpg" alt="" />
                                <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Snow removal</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <hr>
        <!-- Get In Touch Now Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Escribenos y te asesoraremos con todo lo necesario para tus cultivos.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Ponte en contacto ahora</a>
            </div>
        </div>
    </div>
</body>

</html>