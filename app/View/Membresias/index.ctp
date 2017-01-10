<div class="class="page-header"">
	<h2><?php echo __('Membresias'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($membresias as $membresia): ?>
	<tr>
		<td><?php echo h($membresia['Membresia']['id']); ?>&nbsp;</td>
		<td><?php echo h($membresia['Membresia']['estado']); ?>&nbsp;</td>
		<td><?php echo h($membresia['Membresia']['fecha_creacion']); ?>&nbsp;</td>
		<td><?php echo h($membresia['Membresia']['tipo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($membresia['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $membresia['Cliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $membresia['Membresia']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $membresia['Membresia']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $membresia['Membresia']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $membresia['Membresia']['id'])); ?>
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

