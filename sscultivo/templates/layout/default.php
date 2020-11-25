<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>

<head>

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

        <!--Fontawesome-->
        <script src="https://kit.fontawesome.com/a97bdbf67d.js" crossorigin="anonymous"></script>
    </head>

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
                    <?php if ((!isset($_SESSION['id']) && !isset($_SESSION['nombre'])) || ($_SESSION['id'] == 0 && $_SESSION['nombre'] == "")) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Acceder a cuenta
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <?php echo $this->Html->link(__('iniciar sesion'), ['controller' => 'Usuarios', 'action' => 'login'], ['class' => 'dropdown-item']); ?>
                                <?php echo $this->Html->link(__('Registrate gratis'), ['controller' => 'Usuarios', 'action' => 'add'], ['class' => 'dropdown-item']); ?>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a>
                            <?= $this->Html->link(__('Contacto'), ['controller' => 'Pages', 'action' => 'contact'], ['class' => 'nav-link']) ?> </a>
                    </li>
                    <?php if (isset($_SESSION['id']) && isset($_SESSION['nombre'])) {
                        if ($_SESSION['id'] != 0 && $_SESSION['nombre'] != "") { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cultivos
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                    <?php echo $this->Html->link("Listado de cultivos", ['controller' => 'Cultivos', 'action' => 'index'], ['class' => 'dropdown-item']); ?>
                                    <?php echo $this->Html->link("Listado de insumos", ['controller' => 'Insumos', 'action' => 'index'], ['class' => 'dropdown-item']); ?>
                                    <?php echo $this->Html->link("Listado de monitoreo AC", ['controller' => 'MonitoreoAc', 'action' => 'index'], ['class' => 'dropdown-item']); ?>
                                    <?php echo $this->Html->link("Listado de monitoreo TR", ['controller' => 'MonitoreoTr', 'action' => 'index'], ['class' => 'dropdown-item']); ?>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarsession" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION['nombre']; ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarsession">
                                    <?php echo $this->Html->link('<i class="fas fa-id-card" style="font-size:15px"> Mi perfil</i>     ', ['controller' => 'Usuarios', 'action' => 'view', $_SESSION['id']], ['escape' => false, 'class' => 'text-muted dropdown-item']); ?>
                                    <?php echo $this->Html->link('<i class="fas fa-sign-out-alt" style="font-size: 15px"> Salir</i>', ['controller' => 'Usuarios', 'action' => 'logout'], ['escape' => false, 'class' => 'text-muted dropdown-item']); ?>
                                </div>
                            </li>
                    <?php  }
                    } ?>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

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
                                <?= $this->Html->image('post-img-01.jpg') ?>
                            </div>
                            <div class="media-body">
                                <p></p>
                                <span>22 Sep 2018</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <?= $this->Html->image('post-img-02.jpg') ?>
                            </div>
                            <div class="media-body">
                                <p>How to find best dog food?</p>
                                <span>34 Sep 2018</span>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <?= $this->Html->image('post-img-03.jpg') ?>
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