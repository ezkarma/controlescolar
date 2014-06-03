<?php
/**
 *
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>
		Secundaria Heberto Castillo Martinez
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<body>
	<div id="container">
		<div id="header">
				
	<nav class="navbar-inverse" role="navigation">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="/">Secundaria </a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav">
					  						
						<?php

								$user = $this->Session->read('Auth.User.rol'); 

								if ($this->Session->read('Auth.User')){
								
								if($user == 'admin'){
								echo 	'<li class="tutorials"><a href="/alumnos/listado">Alumnos</a>  </li>
												<li class="tutorials"><a href="/tutores/listado">Tutores</a>  </li>
												<li class="tutorials"><a href="/grupos">Grupos</a>  </li>
												<li class="tutorials"><a href="/materias">Materias</a>  </li>
											</ul>
											<ul class="nav navbar-nav navbar-right">
												<li><a href="/users/logout">Salir</a></li>
											</ul>';
								}
									else if($user == 'tutor'){
									echo 		'	<li class="tutorials"><a href="/users/perfil">Mi perfil</a>  </li>
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
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
