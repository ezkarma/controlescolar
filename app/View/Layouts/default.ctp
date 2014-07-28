<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Secundaria Heberto Castillo Martinez');
?>
<!DOCTYPE html>
<html>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

<style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #4e5d6c;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>

<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		//echo $this->Html->css('cake.generic');		
		echo $this->Html->css('superheroe');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

			
	?>
	
	<!---style type="text/css">
		.navbar-default {
		background-color: #176228;
		border-color: #498c40;
		}
		.navbar-default .navbar-brand {
			color: #ecf0f1;
		}
		.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
			color: #e0ffdb;
		}
		.navbar-default .navbar-text {
			color: #ecf0f1;
		}
		.navbar-default .navbar-nav > li > a {
			color: #ecf0f1;
		}
		.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
			color: #e0ffdb;
		}
		.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
			color: #e0ffdb;
			background-color: #498c40;
		}
		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
			color: #e0ffdb;
			background-color: #498c40;
		}
		.navbar-default .navbar-toggle {
			border-color: #498c40;
		}
		.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
			background-color: #498c40;
		}
		.navbar-default .navbar-toggle .icon-bar {
			background-color: #ecf0f1;
		}
		.navbar-default .navbar-collapse,
		.navbar-default .navbar-form {
			border-color: #ecf0f1;
		}
		.navbar-default .navbar-link {
			color: #ecf0f1;
		}
		.navbar-default .navbar-link:hover {
			color: #e0ffdb;
		}

		@media (max-width: 767px) {
			.navbar-default .navbar-nav .open .dropdown-menu > li > a {
				color: #ecf0f1;
			}
			.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
				color: #e0ffdb;
			}
			.navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
				color: #e0ffdb;
				background-color: #498c40;
			}
		}
	</style-->
	
	<div class="row">
	<div class="col-lg-1">	
	</div>
	<div class="col-lg-2">	
	<?php echo $this->Html->image('logo.jpg');?>
	</div>
	<div class="col-lg-4"></div>
	<div class="col-lg-2">
	<?php echo $this->Html->image('escudo.png');?>
	</div>
	</div>
	
	<nav class="navbar-default" role="navigation">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="/users">Secundaria Heberto Castillo Martinez</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
					  						
						<?php

								$user = $this->Session->read('Auth.User.rol'); 

								if ($this->Session->read('Auth.User')){
								
								if($user == 'admin'){
								echo 	'<li class="tutorials"><a href="/users/perfil">Mi perfil</a>  </li>
												<li class="tutorials"><a href="/alumnos/listado">Alumnos</a>  </li>
												<li class="tutorials"><a href="/tutores/listado">Tutores</a>  </li>
												<li class="tutorials"><a href="/grupos">Grupos</a>  </li>
												<li class="tutorials"><a href="/materias">Materias</a>  </li>
												<li class="tutorials"><a href="/mensajes">Mensajes</a>  </li>
											</ul>
											<ul class="nav navbar-nav navbar-right">
												<li><a href="/users/logout">Salir</a></li>
											</ul>';
								}
									else if($user == 'tutor'){
									echo 		'	<li class="tutorials"><a href="/users/perfil">Mi perfil</a>  </li>
														<li class="tutorials"><a href="/alumnos/seleccion">Vincular Alumno</a>  </li>
														<li class="tutorials"><a href="/mensajes">Mensajes</a>  </li>
														</ul>
														<ul class="nav navbar-nav navbar-right">
														<li><a href="/users/logout">Salir</a></li>
														</ul>';
									}
								
								}
								else{
								echo '</ul>
										<ul class="nav navbar-nav navbar-right">
											<li><a href="/users/login"><font color="white">Iniciar Sesion</font></a></li>
										</ul>';
								}
								?>
						</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			
		</div>
	</head>
	
	<body>
	 <div id="wrap" height="100%">
	<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			</div>
			
		</div>
		
		<div id="footer">
		<br>
			<center><small><strong>Secundaria Heberto Castillo 2014</strong></small></center>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
     


