<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Renta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($renta['Renta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($renta['Renta']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Devolucion'); ?></dt>
		<dd>
			<?php echo h($renta['Renta']['fecha_devolucion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Multa'); ?></dt>
		<dd>
			<?php echo h($renta['Renta']['multa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membresia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($renta['Membresia']['id'], array('controller' => 'membresias', 'action' => 'view', $renta['Membresia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Renta Copias'); ?></h3>
	<?php if (!empty($renta['RentaCopia'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Renta Id'); ?></th>
		<th><?php echo __('Pelicula Copia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($renta['RentaCopia'] as $rentaCopia): ?>
		<tr>
			<td><?php echo $rentaCopia['id']; ?></td>
			<td><?php echo $rentaCopia['renta_id']; ?></td>
			<td><?php echo $rentaCopia['pelicula_copia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'renta_copias', 'action' => 'view', $rentaCopia['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'renta_copias', 'action' => 'edit', $rentaCopia['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'renta_copias', 'action' => 'delete', $rentaCopia['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $rentaCopia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Renta Copia'), array('controller' => 'renta_copias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>
