<div class="class="page-header"">
	<h2><?php echo __('Productores'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pelicula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($peliculaProductors as $peliculaProductor): ?>
	<tr>
		<td><?php echo h($peliculaProductor['PeliculaProductor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($peliculaProductor['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaProductor['Pelicula']['id'])); ?>
		</td>
		<td><?php echo h($peliculaProductor['PeliculaProductor']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $peliculaProductor['PeliculaProductor']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $peliculaProductor['PeliculaProductor']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $peliculaProductor['PeliculaProductor']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaProductor['PeliculaProductor']['id'])); ?>
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