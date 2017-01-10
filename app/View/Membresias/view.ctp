<div class="container">
	<div class="row">
		<div class="col-md-12"><h2><?php echo __('Membresia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membresia['Membresia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($membresia['Membresia']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Creacion'); ?></dt>
		<dd>
			<?php echo h($membresia['Membresia']['fecha_creacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($membresia['Membresia']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($membresia['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $membresia['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Rentas'); ?></h3>
	<?php if (!empty($membresia['Renta'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Devolucion'); ?></th>
		<th><?php echo __('Multa'); ?></th>
		<th><?php echo __('Membresia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($membresia['Renta'] as $renta): ?>
		<tr>
			<td><?php echo $renta['id']; ?></td>
			<td><?php echo $renta['fecha_inicio']; ?></td>
			<td><?php echo $renta['fecha_devolucion']; ?></td>
			<td><?php echo $renta['multa']; ?></td>
			<td><?php echo $renta['membresia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rentas', 'action' => 'view', $renta['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rentas', 'action' => 'edit', $renta['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rentas', 'action' => 'delete', $renta['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $renta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Renta'), array('controller' => 'rentas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>
