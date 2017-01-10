<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Pelicula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inclusion'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['fecha_inclusion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Realizacion'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['fecha_realizacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Pelicula Actors'); ?></h3>
	<?php if (!empty($pelicula['PeliculaActor'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pelicula Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['PeliculaActor'] as $peliculaActor): ?>
		<tr>
			<td><?php echo $peliculaActor['id']; ?></td>
			<td><?php echo $peliculaActor['pelicula_id']; ?></td>
			<td><?php echo $peliculaActor['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pelicula_actors', 'action' => 'view', $peliculaActor['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pelicula_actors', 'action' => 'edit', $peliculaActor['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pelicula_actors', 'action' => 'delete', $peliculaActor['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaActor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula Actor'), array('controller' => 'pelicula_actors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pelicula Copias'); ?></h3>
	<?php if (!empty($pelicula['PeliculaCopia'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pelicula Id'); ?></th>
		<th><?php echo __('Formato'); ?></th>
		<th><?php echo __('Condicion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['PeliculaCopia'] as $peliculaCopia): ?>
		<tr>
			<td><?php echo $peliculaCopia['id']; ?></td>
			<td><?php echo $peliculaCopia['pelicula_id']; ?></td>
			<td><?php echo $peliculaCopia['formato']; ?></td>
			<td><?php echo $peliculaCopia['condicion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pelicula_copias', 'action' => 'view', $peliculaCopia['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pelicula_copias', 'action' => 'edit', $peliculaCopia['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pelicula_copias', 'action' => 'delete', $peliculaCopia['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaCopia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula Copia'), array('controller' => 'pelicula_copias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pelicula Directors'); ?></h3>
	<?php if (!empty($pelicula['PeliculaDirector'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pelicula Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['PeliculaDirector'] as $peliculaDirector): ?>
		<tr>
			<td><?php echo $peliculaDirector['id']; ?></td>
			<td><?php echo $peliculaDirector['pelicula_id']; ?></td>
			<td><?php echo $peliculaDirector['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pelicula_directors', 'action' => 'view', $peliculaDirector['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pelicula_directors', 'action' => 'edit', $peliculaDirector['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pelicula_directors', 'action' => 'delete', $peliculaDirector['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaDirector['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula Director'), array('controller' => 'pelicula_directors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pelicula Premios'); ?></h3>
	<?php if (!empty($pelicula['PeliculaPremio'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pelicula Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['PeliculaPremio'] as $peliculaPremio): ?>
		<tr>
			<td><?php echo $peliculaPremio['id']; ?></td>
			<td><?php echo $peliculaPremio['pelicula_id']; ?></td>
			<td><?php echo $peliculaPremio['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pelicula_premios', 'action' => 'view', $peliculaPremio['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pelicula_premios', 'action' => 'edit', $peliculaPremio['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pelicula_premios', 'action' => 'delete', $peliculaPremio['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaPremio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula Premio'), array('controller' => 'pelicula_premios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pelicula Productors'); ?></h3>
	<?php if (!empty($pelicula['PeliculaProductor'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pelicula Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pelicula['PeliculaProductor'] as $peliculaProductor): ?>
		<tr>
			<td><?php echo $peliculaProductor['id']; ?></td>
			<td><?php echo $peliculaProductor['pelicula_id']; ?></td>
			<td><?php echo $peliculaProductor['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pelicula_productors', 'action' => 'view', $peliculaProductor['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pelicula_productors', 'action' => 'edit', $peliculaProductor['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pelicula_productors', 'action' => 'delete', $peliculaProductor['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $peliculaProductor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pelicula Productor'), array('controller' => 'pelicula_productors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>