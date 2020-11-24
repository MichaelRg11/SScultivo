<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SSCultivo</title>
    <!-- Bootstrap core CSS -->
    <?= $this->Html->css(['all', 'style']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

    <script src="https://use.fontawesome.com/fc46943e67.js"></script>
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	Fontawesome CSS
	link href="css/all.css" rel="stylesheet">
	 Custom styles for this template
	<link href="css/style.css" rel="stylesheet">-->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <?= $this->Html->image('logo_ssc.png') ?>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a>
                            <?= $this->Html->link(__('Inicio'), ['controller' => 'Pages', 'action' => 'display'], ['class' => 'nav-link']) ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a>
                            <?= $this->Html->link(__('Acerca de'), ['controller' => 'Pages', 'action' => 'about'], ['class' => 'nav-link']) ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a>
                            <?= $this->Html->link(__('Servicios'), ['controller' => 'Pages', 'action' => 'services'], ['class' => 'nav-link']) ?>
                        </a>
                    </li>
                    <?php if ($_SESSION['id'] == 0 && $_SESSION['nombre'] == "") { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Acceder a cuenta
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <?= $this->Html->link(__('iniciar sesion'), ['controller' => 'Usuarios', 'action' => 'login'], ['class' => 'dropdown-item']) ?>
                                <?= $this->Html->link(__('Registrate gratis'), ['controller' => 'Usuarios', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="faq.html">FAQ</a>
                            <a class="dropdown-item" href="404.html">404</a>
                            <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a>
                            <?= $this->Html->link(__('Contacto'), ['controller' => 'Pages', 'action' => 'contact'], ['class' => 'nav-link']) ?> </a>
                    </li>
                    <?php if ($_SESSION['id'] != 0 && $_SESSION['nombre'] != "") { ?>
                        <li class="nav-item">
                            <a class="nav-link">
                                <?php echo $_SESSION['nombre']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <?php echo $this->Html->link("Logout", ['controller' => 'Usuarios', 'action' => 'logout'], ['class' => 'nav-link']); ?>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
    </nav>

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
                        <p>Una gram opcion para monitorear tus cultivos</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://miro.medium.com/max/4800/1*MC0blcVlAb4NNKY8koLfiw.jpeg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bienvenidos a SSCultivo</h3>
                        <p>Una gran opcion para el cuidado de tus plantas</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://mk0softsecrets4cv09b.kinstacdn.com/wp-content/uploads/sites/11/2020/09/what-to-do-with-male-cannabis-plants-04-1024x576.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Bienvenidos a SSCultivo</h3>
                        <p>A Una gran opcion para el cuidado de tus plantas</p>
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
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Fence</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="img/services-img-01.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Watering</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="img/services-img-02.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header">Garden Supplies</h4>
                        <div class="card-img">
                            <img class="img-fluid" src="img/services-img-03.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Learn More</a>
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
                    <h2>Welcome to N & LW Lawn Care</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h5>Our smart approach</h5>
                    <ul>
                        <li>Sed at tellus eu quam posuere mattis.</li>
                        <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Duis porttitor odio pellentesque mollis vulputate.</li>
                        <li>Quisque ac eros non ex hendrerit vehicula.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="img/about-img.jpg" alt="" />
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Get In Touch Now</a>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                    <!--headin5_amrc-->
                    <p class="mb10"> </p>
                    <p><i class="fa fa-location-arrow"></i> Barranquilla-Atlantico </p>
                    <p><i class="fa fa-phone"></i> +57 3022721117 </p>
                    <p><i class="fa fa fa-envelope"></i> maicolrg11@gmail.com </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                    <!--headin5_amrc ends here-->
                    <ul class="footer_ul2_amrc">
                        <li>
                            <a href="https://www.instagram.com/maicolrg11/"><i class="fa fa fa-instagram fleft padding-right"></i> </a>
                            <p>Maicolrg11 <a href="https://www.instagram.com/maicolrg11/"> www.instagram.com/maicolrg11/ </a></p>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/99daniela/"><i class="fa fa fa-instagram fleft padding-right"></i> </a>
                            <p>99Daniela <a href="https://www.instagram.com/99daniela/"> www.instagram.com/99daniela/ </a></p>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/yeisson_b/"><i class="fa fa fa-instagram fleft padding-right"></i> </a>
                            <p>Yeisson_B<a href="https://www.instagram.com/yeisson_b/"> www.instagram.com/yeisson_b/ </a></p>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/brayanbarrosop/"><i class="fa fa fa-instagram fleft padding-right"></i> </a>
                            <p>BrayanBarrosop<a href="https://www.instagram.com/brayanbarrosop/"> www.instagram.com/brayanbarrosop/ </a></p>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/cin_dy2306/"><i class="fa fa fa-instagram fleft padding-right"></i> </a>
                            <p>Cin_dy2306<a href="https://www.instagram.com/cin_dy2306/"> www.instagram.com/cin_dy2306/ </a></p>
                        </li>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="#">Default Version</a></li>
                        <li><a href="#">Boxed Version</a></li>
                        <li><a href="#">Our Team </a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Get In Touch</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <h5 class="headin5_amrc col_white_amrc pt2">Recent posts</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li class="media">
                            <div class="media-left">
                                <img class="img-fluid" src="img/post-img-01.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p></p>
                                <span>22 Sep 2018</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <img class="img-fluid" src="img/post-img-02.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p>How to find best dog food?</p>
                                <span>34 Sep 2018</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <img class="img-fluid" src="img/post-img-03.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p>How to find best dog food?</p>
                                <span>30 Sep 2018</span>
                            </div>
                        </li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-logo">
                <?= $this->Html->image('footer-logo.png') ?>
            </div>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="copyright text-center">Todos los derechos reservados. &copy; 2020-11 <a href="#">SSControl</a> Diseñado por :
                <a href="https://www.instagram.com/maicolrg11/">html design</a>
            </p>
        </div>
    </footer>
</body>

</html>