
<?php

$this->Paginator->options(array(
		'update' => '#contenedor-clientes',
		'before' => $this->Js->get('#procesando')->effect('fadeIn',array('buffer'=>false)),
		'complete' => $this->Js->get('#procesando')->effect('fadeOut',array('buffer'=>false))
		));

?>

<div id="contenedor-clientes">

<div class="class="page-header"">
	<h2><?php echo __('Clientes'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'btn btn-xs btn-info'));
		echo $this->Paginator->numbers(array('separator' => '','class' => 'btn btn-xs btn-info'));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'btn btn-xs btn-info'));
	?>
	</div>
	<?php
		echo $this->Js->writeBuffer();
	?>
</div> <!--contenedor-clientes

