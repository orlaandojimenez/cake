<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Pelicula Actor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peliculaActor['PeliculaActor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peliculaActor['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaActor['Pelicula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($peliculaActor['PeliculaActor']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
