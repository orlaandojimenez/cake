<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('RentaCopia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Renta Copia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('renta_id',array('class' => 'form-control','label' => 'Cliente'));
		echo $this->Form->input('pelicula_copia_id',array('class' => 'form-control','label' => 'Pelicula'));
		echo $this->Form->input('videojuego_copia_id',array('class' => 'form-control','label' => 'Videojuego'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>

