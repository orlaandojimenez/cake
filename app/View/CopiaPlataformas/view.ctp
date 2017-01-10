<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Copia Plataforma'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($copiaPlataforma['CopiaPlataforma']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Videojuego Copia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($copiaPlataforma['VideojuegoCopia']['videojuego_id'], array('controller' => 'videojuego_copias', 'action' => 'view', $copiaPlataforma['VideojuegoCopia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plataforma'); ?></dt>
		<dd>
			<?php echo h($copiaPlataforma['CopiaPlataforma']['plataforma']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
