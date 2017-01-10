<nav class="navbar navbar-inverse ">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						
						<li >
							<?php echo $this->Html->link('RentaNET',array('controller' => 'pages', 'action' => 'home')) ?>
						</li>
				
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Lista Clientes',array('controller' => 'clientes', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Cliente ',array('controller' => 'clientes', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Telefonos ',array('controller' => 'cliente_telefonos', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Telefono ',array('controller' => 'cliente_telefonos', 'action' => 'add')) ?>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membresias <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Lista Membresias',array('controller' => 'membresias', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nueva Membresia ',array('controller' => 'membresias', 'action' => 'add')) ?>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Renta <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Lista Rentas',array('controller' => 'rentas', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nueva Renta ',array('controller' => 'rentas', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Renta Copias ',array('controller' => 'renta_copias', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nueva Renta Copia ',array('controller' => 'renta_copias', 'action' => 'add')) ?>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peliculas <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Lista Peliculas',array('controller' => 'peliculas', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nueva Pelicula ',array('controller' => 'peliculas', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Pelicula Copias ',array('controller' => 'pelicula_copias', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nueva Pelicula Copia ',array('controller' => 'pelicula_copias', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Idiomas ',array('controller' => 'copia_idiomas', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Idioma ',array('controller' => 'copia_idiomas', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Actores ',array('controller' => 'pelicula_actors', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Actor ',array('controller' => 'pelicula_actors', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Directores ',array('controller' => 'pelicula_directors', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Director ',array('controller' => 'pelicula_directors', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Productores ',array('controller' => 'pelicula_productors', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Productor ',array('controller' => 'pelicula_productors', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Premios ',array('controller' => 'pelicula_premios', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Premio ',array('controller' => 'pelicula_premios', 'action' => 'add')) ?>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videojuegos <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<?php echo $this->Html->link('Lista Videojuegos',array('controller' => 'videojuegos', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Videojuego ',array('controller' => 'videojuegos', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Videojuego Copias ',array('controller' => 'videojuego_copias', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nuevo Videojuego Copia ',array('controller' => 'videojuego_copias', 'action' => 'add')) ?>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<?php echo $this->Html->link('Lista Plataformas ',array('controller' => 'copia_plataformas', 'action' => 'index')) ?>
								</li>
								<li>
									<?php echo $this->Html->link('Nueva Plataforma ',array('controller' => 'copia_plataformas', 'action' => 'add')) ?>
								</li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
