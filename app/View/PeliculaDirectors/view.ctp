<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Pelicula Director'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peliculaDirector['PeliculaDirector']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peliculaDirector['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaDirector['Pelicula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($peliculaDirector['PeliculaDirector']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>