<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Pelicula Productor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peliculaProductor['PeliculaProductor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peliculaProductor['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaProductor['Pelicula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($peliculaProductor['PeliculaProductor']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
