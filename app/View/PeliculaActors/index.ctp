<div class="class="page-header"">
	<h2><?php echo __('Actores'); ?></h2>
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
	<?php foreach ($peliculaActors as $peliculaActor): ?>
	<tr>
		<td><?php echo h($peliculaActor['PeliculaActor']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($peliculaActor['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaActor['Pelicula']['id'])); ?>
		</td>
		<td><?php echo h($peliculaActor['PeliculaActor']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $peliculaActor['PeliculaActor']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $peliculaActor['PeliculaActor']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $peliculaActor['PeliculaActor']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaActor['PeliculaActor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
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

