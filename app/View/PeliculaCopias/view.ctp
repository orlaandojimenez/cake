<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Pelicula Copia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($peliculaCopia['PeliculaCopia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pelicula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($peliculaCopia['Pelicula']['titulo'], array('controller' => 'peliculas', 'action' => 'view', $peliculaCopia['Pelicula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formato'); ?></dt>
		<dd>
			<?php echo h($peliculaCopia['PeliculaCopia']['formato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicion'); ?></dt>
		<dd>
			<?php echo h($peliculaCopia['PeliculaCopia']['condicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Copia Idiomas'); ?></h3>
	<?php if (!empty($peliculaCopia['CopiaIdioma'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pelicula Copia Id'); ?></th>
		<th><?php echo __('Idioma'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($peliculaCopia['CopiaIdioma'] as $copiaIdioma): ?>
		<tr>
			<td><?php echo $copiaIdioma['id']; ?></td>
			<td><?php echo $copiaIdioma['pelicula_copia_id']; ?></td>
			<td><?php echo $copiaIdioma['idioma']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'copia_idiomas', 'action' => 'view', $copiaIdioma['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'copia_idiomas', 'action' => 'edit', $copiaIdioma['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'copia_idiomas', 'action' => 'delete', $copiaIdioma['id']), array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $copiaIdioma['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Copia Idioma'), array('controller' => 'copia_idiomas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Renta Copias'); ?></h3>
	<?php if (!empty($peliculaCopia['RentaCopia'])): ?>
	<table class="table table-striped" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Renta Id'); ?></th>
		<th><?php echo __('Pelicula Copia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($peliculaCopia['RentaCopia'] as $rentaCopia): ?>
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
