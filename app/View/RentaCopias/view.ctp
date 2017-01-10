<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Renta Copia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rentaCopia['RentaCopia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Renta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentaCopia['Renta']['id'], array('controller' => 'rentas', 'action' => 'view', $rentaCopia['Renta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula Copia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentaCopia['PeliculaCopia']['pelicula_id'], array('controller' => 'pelicula_copias', 'action' => 'view', $rentaCopia['PeliculaCopia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Videojuego Copia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentaCopia['VideojuegoCopia']['videojuego_id'], array('controller' => 'videojuego_copias', 'action' => 'view', $rentaCopia['VideojuegoCopia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
