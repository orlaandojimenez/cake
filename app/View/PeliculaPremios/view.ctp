<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Pelicula Premio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peliculaPremio['PeliculaPremio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peliculaPremio['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaPremio['Pelicula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($peliculaPremio['PeliculaPremio']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
