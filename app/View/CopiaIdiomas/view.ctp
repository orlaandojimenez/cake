<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Copia Idioma'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($copiaIdioma['CopiaIdioma']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula Copia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($copiaIdioma['PeliculaCopia']['pelicula_id'], array('controller' => 'pelicula_copias', 'action' => 'view', $copiaIdioma['PeliculaCopia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idioma'); ?></dt>
		<dd>
			<?php echo h($copiaIdioma['CopiaIdioma']['idioma']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>

