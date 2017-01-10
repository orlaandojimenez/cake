<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['direccion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
	<div class="related">
		<h3><?php echo __('Related Membresias'); ?></h3>
	<?php if (!empty($cliente['Membresia'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $cliente['Membresia']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
	<?php echo $cliente['Membresia']['estado']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fecha Creacion'); ?></dt>
		<dd>
	<?php echo $cliente['Membresia']['fecha_creacion']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
	<?php echo $cliente['Membresia']['tipo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Cliente Id'); ?></dt>
		<dd>
	<?php echo $cliente['Membresia']['cliente_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Membresia'), array('controller' => 'membresias', 'action' => 'edit', $cliente['Membresia']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Cliente Telefonos'); ?></h3>
	<?php if (!empty($cliente['ClienteTelefono'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['ClienteTelefono'] as $clienteTelefono): ?>
		<tr>
			<td><?php echo $clienteTelefono['id']; ?></td>
			<td><?php echo $clienteTelefono['cliente_id']; ?></td>
			<td><?php echo $clienteTelefono['telefono']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cliente_telefonos', 'action' => 'view', $clienteTelefono['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cliente_telefonos', 'action' => 'edit', $clienteTelefono['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cliente_telefonos', 'action' => 'delete', $clienteTelefono['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $clienteTelefono['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente Telefono'), array('controller' => 'cliente_telefonos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>

