<div class="class="page-header"">
	<h2><?php echo __('Videojuego Copias'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('videojuego_id'); ?></th>
			<th><?php echo $this->Paginator->sort('formato'); ?></th>
			<th><?php echo $this->Paginator->sort('condicion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($videojuegoCopias as $videojuegoCopia): ?>
	<tr>
		<td><?php echo h($videojuegoCopia['VideojuegoCopia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($videojuegoCopia['Videojuego']['titulo'], array('controller' => 'videojuegos', 'action' => 'view', $videojuegoCopia['Videojuego']['id'])); ?>
		</td>
		<td><?php echo h($videojuegoCopia['VideojuegoCopia']['formato']); ?>&nbsp;</td>
		<td><?php echo h($videojuegoCopia['VideojuegoCopia']['condicion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $videojuegoCopia['VideojuegoCopia']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $videojuegoCopia['VideojuegoCopia']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $videojuegoCopia['VideojuegoCopia']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $videojuegoCopia['VideojuegoCopia']['id'])); ?>
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

