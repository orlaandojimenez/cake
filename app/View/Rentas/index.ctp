<div class="class="page-header"">
	<h2><?php echo __('Rentas'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_devolucion'); ?></th>
			<th><?php echo $this->Paginator->sort('multa'); ?></th>
			<th><?php echo $this->Paginator->sort('membresia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rentas as $renta): ?>
	<tr>
		<td><?php echo h($renta['Renta']['id']); ?>&nbsp;</td>
		<td><?php echo h($renta['Renta']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($renta['Renta']['fecha_devolucion']); ?>&nbsp;</td>
		<td><?php echo h($renta['Renta']['multa']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($renta['Membresia']['id'], array('controller' => 'membresias', 'action' => 'view', $renta['Membresia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $renta['Renta']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $renta['Renta']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $renta['Renta']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $renta['Renta']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-xs btn-info'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-xs btn-info'));
	?>
	</div>

