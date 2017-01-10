<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Videojuego'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($videojuego['Videojuego']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($videojuego['Videojuego']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($videojuego['Videojuego']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inclusion'); ?></dt>
		<dd>
			<?php echo h($videojuego['Videojuego']['fecha_inclusion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Videojuego Copias'); ?></h3>
	<?php if (!empty($videojuego['VideojuegoCopia'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Videojuego Id'); ?></th>
		<th><?php echo __('Formato'); ?></th>
		<th><?php echo __('Condicion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($videojuego['VideojuegoCopia'] as $videojuegoCopia): ?>
		<tr>
			<td><?php echo $videojuegoCopia['id']; ?></td>
			<td><?php echo $videojuegoCopia['videojuego_id']; ?></td>
			<td><?php echo $videojuegoCopia['formato']; ?></td>
			<td><?php echo $videojuegoCopia['condicion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'videojuego_copias', 'action' => 'view', $videojuegoCopia['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'videojuego_copias', 'action' => 'edit', $videojuegoCopia['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'videojuego_copias', 'action' => 'delete', $videojuegoCopia['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $videojuegoCopia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Videojuego Copia'), array('controller' => 'videojuego_copias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>
