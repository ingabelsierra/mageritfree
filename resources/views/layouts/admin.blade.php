<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MageritFree</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('css/plugins/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


     
</head>

<body>

    <div id="wrapper">
        

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MageritFree</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                             
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();">
                                            Salir
                                        </a>
                            <form id="login-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
              
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Proyecto<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('proyecto/proyecto')}}">Datos del Proyecto</a>
                                </li>
                               
								
								 <li>
                                    <a href="{{asset('proyecto/dominio')}}">Dominios de Seguridad</a>
                                </li>
								
								 <li>
                                    <a href="{{asset('proyecto/activocatalogo')}}">Catalogo de activos</a>
                                </li>
								
								 <li>
                                    <a href="{{asset('proyecto/amenazacatalogo')}}">Catalogo de Amenazas</a>
                                </li>
                                
                                <li>
                                    <a href="{{asset('proyecto/salvaguardacatalogo')}}">Catalogo de Salvaguardas</a>
                                </li>
								
															
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						 <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Análisis de Riesgos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('proyecto/activo')}}">Activos</a>
                                </li>
                                
                                 <li>
                                    <a href="{{asset('proyecto/amenaza')}}">Amenazas</a>
                                </li>
                                
                                             <li>
                                    <a href="{{asset('proyecto/valoracion')}}">Valoración</a>
                                </li>  
                               								
								 <li>
                                    <a href="{{asset('proyecto/salvaguarda')}}">Salvaguardas</a>
                                </li>
                                
					
                                
                                   <li>
                                    <a href="{{asset('proyecto/degradacion')}}">Degradación</a>
                                </li>
                                
                                 <li>
                                    <a href="{{asset('proyecto/probabilidad')}}">Probabilidad</a>
                                </li>
                                
                                 <li>
                                    <a href="{{asset('proyecto/eficaciasobreimpacto')}}">Eficacia/Impacto</a>
                                </li>
                                
                                 <li>
                                    <a href="{{asset('proyecto/eficaciasobreprobabilidad')}}">Eficacia/Probabilidad </a>
                                </li>
                                
                                
								 <li>
                                    <a href="{{asset('proyecto/impacto')}}">Impacto</a>
                                </li>
                                
                                <li>
                                    <a href="{{asset('proyecto/riesgo')}}">Riesgo</a>
                                </li>
                                
                                <li>
                                    <a href="{{asset('proyecto/degradacionresidual')}}">Degradación Residual</a>
                                </li>
				
                                 <li>
                                    <a href="{{asset('proyecto/probabilidadresidual')}}">Probabilidad Residual</a>
                                </li>
                                
                                 <li>
                                    <a href="{{asset('proyecto/impactoresidual')}}">Impacto Residual</a>
                                </li>
                                 <li>
                                    <a href="{{asset('proyecto/riesgoresidual')}}">Riesgo Residual</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Informes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('proyecto/reportes')}}"  >Generar Informe</a>
                                </li>
                                </ul> 
			  </li>
                       				
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
 
		<!-- Contenido-->
        <div id="page-wrapper">
           
	
					
			@yield('contenido')
			
			
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{asset('js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('js/plugins/metisMenu/metisMenu.min.js')}}"></script>

    

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('js/sb-admin-2.js')}}"></script>
    
    <script src="js/sistemalaravel.js"></script>

    <script>cargarlistado(1);</script>


</body>

</html>
