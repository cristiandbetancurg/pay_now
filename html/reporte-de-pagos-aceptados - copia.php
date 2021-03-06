<?php 
session_start();

	$conexion=mysqli_connect('localhost','root','','pedido');

 ?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
        <title>Administracion de Pagos</title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- toast CSS -->
        <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
        <!-- morris CSS -->
        <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="css/colors/default.css" id="theme" rel="stylesheet">
        <!-- Estilos importados de maxcdn como Libería alternativa para Grid con ajuste de Cristian Betancur-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        
    </head>

    <body class="fix-header">
        <!-- ============================================================== -->
        <!-- Preloader -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Wrapper -->
        <!-- ============================================================== -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - pages.scss -->
            <!-- ============================================================== -->
            <nav class="navbar navbar-default navbar-static-top m-b-0">
                <div class="navbar-header">
                    <div class="top-left-part">
                        <!-- Logo -->
                        <a class="logo" href="dashboard.html">                        
                            <b>                            
                            </b>                        
                            <span class="hidden-xs">                            
                                <img src="../plugins/images/logo-letras.png" alt="home" class="light-logo" />
                            </span> 
                        </a>
                    </div>
                    <!-- /Logo -->
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                                <input type="text" placeholder="Busca algo..." class="form-control"> 
                                <a href="">
                                    <i class="fa fa-search"></i>
                                </a> 
                            </form>
                        </li>
                        <li>
                            <a class="profile-pic" href="#"> <img src="../plugins/images/users/andy.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Hola, Andy</b></a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-header -->
                <!-- /.navbar-top-links -->
                <!-- /.navbar-static-side -->
            </nav>
            <!-- Final Top Navigation -->
            <!-- ============================================================== -->
            <!-- Izq Sidebar -  sidebar.scss  -->
            <!-- ============================================================== -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                    <div class="sidebar-head">
                        <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                    </div>
                    <ul class="nav" id="side-menu">
                        <li style="padding: 70px 0 0;">
                            <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Panel de Control</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Mi Perfil</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Reporte de Pagos</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-send fa-fw" aria-hidden="true"></i>Escribir a un Cliente</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-university fa-fw" aria-hidden="true"></i>BANCOS - QR Pagos</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-shopping-basket fa-fw" aria-hidden="true"></i>Delivery</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-dollar fa-fw" aria-hidden="true"></i>Establecer Tasa Divisa</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-paypal fa-fw" aria-hidden="true"></i>Gestionar PayPal</a>
                        </li>
                        <li>
                            <a href="" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Status del Sistema</a>
                        </li>

                    </ul>
                    <div class="center p-20">
                        <a href="https:lapollera.com.ve" target="_blank" class="btn btn-danger btn-block waves-effect waves-light">CERRAR SESION</a>
                    </div>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- Final panel Izquierdo "Sidebar" -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Inicio de contenido -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Panel de Control</h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">                        
                            <ol class="breadcrumb">
                                <li><a href="#">V. 1.0</a></li>
                            </ol>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- ============================================================== -->
                    <!-- Different data widgets Pagos -->
                    <!-- ============================================================== -->
                    <!-- .row -->                    
                    <!--/.row -->
                    <!--row -->
                    <!-- /.row -->                
                    <!-- ============================================================== -->
                    <!-- table to reportes de pagos-->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="white-box">
                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <!--<input type="submit" name="name" value="modificar">-->
                                        </div>
                                    </div>
                                </div>
                                
                                <h3 class="box-title">Pagos <span class="badge badge-success">ACEPTADOS</span></h3>
                                    <div class="table-responsive">
                                        <table class="table">                                            
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NRO PEDIDO</th>
                                                    <th>CEDULA</th>
                                                    <th>MONTO DEL PEDIDO</th>
                                                    <th>ENTIDAD FINANCIERA</th>
                                                    <th>COMENTARIO</th>
                                                    <th>ESTADO ACTUAL</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>              

                                                <?php 
                                                $sql="SELECT * from creadas where estado= 'Pago Aceptado' ";
                                                $result=mysqli_query($conexion,$sql);
                                                
                                                while($mostrar=mysqli_fetch_array($result)){
                                                ?>

                                                <tr>
                                                    <td><?php echo $mostrar['id_tabla'] ?></td>
                                                    <td><?php echo $mostrar['npedido'] ?></td>
                                                    <td><?php echo $mostrar['cedula'] ?></td>
                                                    <td><?php echo $mostrar['monto'] ?></td>
                                                    <td><?php echo $mostrar['banco'] ?></td>
                                                    <td><?php echo $mostrar['comentario'] ?></td>
                                                    <td><?php echo $mostrar['estado'] ?></td>                                                    
                                                </tr>
                                            <?php 
                                            }
                                            ?>                                                                                                                       
                                            </tbody>
                                        </table>
                                    </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="white-box">
                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <!--<input type="submit" name="name" value="modificar">-->
                                        </div>
                                    </div>
                                </div>
                                
                                <h3 class="box-title">Pagos <span class="badge badge-danger">ANULADOS</span></h3>                                
                                    <div class="table-responsive">
                                        <table class="table">                                            
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NRO PEDIDO</th>
                                                    <th>CEDULA</th>
                                                    <th>MONTO DEL PEDIDO</th>
                                                    <th>ENTIDAD FINANCIERA</th>
                                                    <th>COMENTARIO</th>
                                                    <th>ESTADO ACTUAL</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>              

                                                <?php 
                                                $sql="SELECT * from creadas where estado= 'Pago Anulado' ";
                                                $result=mysqli_query($conexion,$sql);
                                                
                                                while($mostrar=mysqli_fetch_array($result)){
                                                ?>

                                                <tr>
                                                    <td><?php echo $mostrar['id_tabla'] ?></td>
                                                    <td><?php echo $mostrar['npedido'] ?></td>
                                                    <td><?php echo $mostrar['cedula'] ?></td>
                                                    <td><?php echo $mostrar['monto'] ?></td>
                                                    <td><?php echo $mostrar['banco'] ?></td>
                                                    <td><?php echo $mostrar['comentario'] ?></td>
                                                    <td><?php echo $mostrar['estado'] ?></td>                                                    
                                                </tr>
                                            <?php 
                                            }
                                            ?>                                                                                                                       
                                            </tbody>
                                        </table>
                                    </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="white-box">
                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <!--<input type="submit" name="name" value="modificar">-->
                                        </div>
                                    </div>
                                </div>                                
                                <h3 class="box-title">Pagos <span class="badge badge-warning">EN REVISIÓN</span></h3>                                
                                    <div class="table-responsive">
                                        <table class="table">                                            
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NRO PEDIDO</th>
                                                    <th>CEDULA</th>
                                                    <th>MONTO DEL PEDIDO</th>
                                                    <th>ENTIDAD FINANCIERA</th>
                                                    <th>COMENTARIO</th>
                                                    <th>ESTADO ACTUAL</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>              

                                                <?php 
                                                $sql="SELECT * from creadas where estado= 'Verificando' ";
                                                $result=mysqli_query($conexion,$sql);
                                                
                                                while($mostrar=mysqli_fetch_array($result)){
                                                ?>

                                                <tr>
                                                    <td><?php echo $mostrar['id_tabla'] ?></td>
                                                    <td><?php echo $mostrar['npedido'] ?></td>
                                                    <td><?php echo $mostrar['cedula'] ?></td>
                                                    <td><?php echo $mostrar['monto'] ?></td>
                                                    <td><?php echo $mostrar['banco'] ?></td>
                                                    <td><?php echo $mostrar['comentario'] ?></td>
                                                    <td><?php echo $mostrar['estado'] ?></td>                                                    
                                                </tr>
                                            <?php 
                                            }
                                            ?>                                                                                                                       
                                            </tbody>
                                        </table>
                                    </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <div class="white-box">
                                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <div class="form-group">
                                        <div class="col-sm-12">
                                            <!--<input type="submit" name="name" value="modificar">-->
                                        </div>
                                    </div>
                                </div>
                                
                                <h3 class="box-title">Pagos Incompletos</h3>                                
                                    <div class="table-responsive">
                                        <table class="table">                                            
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>NRO PEDIDO</th>
                                                    <th>CEDULA</th>
                                                    <th>MONTO DEL PEDIDO</th>
                                                    <th>ENTIDAD FINANCIERA</th>
                                                    <th>COMENTARIO</th>
                                                    <th>ESTADO ACTUAL</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>              

                                                <?php 
                                                $sql="SELECT * from creadas where estado= 'Pago Incompleto' ";
                                                $result=mysqli_query($conexion,$sql);
                                                
                                                while($mostrar=mysqli_fetch_array($result)){
                                                ?>

                                                <tr>
                                                    <td><?php echo $mostrar['id_tabla'] ?></td>
                                                    <td><?php echo $mostrar['npedido'] ?></td>
                                                    <td><?php echo $mostrar['cedula'] ?></td>
                                                    <td><?php echo $mostrar['monto'] ?></td>
                                                    <td><?php echo $mostrar['banco'] ?></td>
                                                    <td><?php echo $mostrar['comentario'] ?></td>
                                                    <td><?php echo $mostrar['estado'] ?></td>                                                    
                                                </tr>
                                            <?php 
                                            }
                                            ?>                                                                                                                       
                                            </tbody>
                                        </table>
                                    </div>                                    
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Container para Otros Posibles elementos -->
                    <!-- ============================================================== -->
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2020 &copy; Frigorifico La Pollera, C.A. by Cristian B. </footer>
            </div>
            <!-- ============================================================== -->
            <!-- Final del contenido de la Paágina -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Counter js -->
        <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
        <!-- chartist chart -->
        <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
        <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <!-- Sparkline chart JavaScript -->
        <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.min.js"></script>
        <script src="js/dashboard1.js"></script>
        <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    </body>

</html>