<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Cliente Telefono'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clienteTelefono['ClienteTelefono']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clienteTelefono['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $clienteTelefono['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($clienteTelefono['ClienteTelefono']['telefono']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>
