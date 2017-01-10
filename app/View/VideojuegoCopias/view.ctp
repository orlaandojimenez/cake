<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Videojuego Copia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($videojuegoCopia['VideojuegoCopia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Videojuego'); ?></dt>
		<dd>
			<?php echo $this->Html->link($videojuegoCopia['Videojuego']['titulo'], array('controller' => 'videojuegos', 'action' => 'view', $videojuegoCopia['Videojuego']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formato'); ?></dt>
		<dd>
			<?php echo h($videojuegoCopia['VideojuegoCopia']['formato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicion'); ?></dt>
		<dd>
			<?php echo h($videojuegoCopia['VideojuegoCopia']['condicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
