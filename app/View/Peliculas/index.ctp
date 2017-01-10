<div class="class="page-header"">
	<h2><?php echo __('Peliculas'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inclusion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_realizacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($peliculas as $pelicula): ?>
	<tr>
		<td><?php echo h($pelicula['Pelicula']['id']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['fecha_inclusion']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['fecha_realizacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pelicula['Pelicula']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pelicula['Pelicula']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pelicula['Pelicula']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $pelicula['Pelicula']['id'])); ?>
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


