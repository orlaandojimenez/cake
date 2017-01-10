<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('CopiaIdioma'); ?>
	<fieldset>
		<legend><?php echo __('Edit Copia Idioma'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pelicula_copia_id',array('class' => 'form-control','label' => 'Pelicula'));
		echo $this->Form->input('idioma',array('class' => 'form-control','label' => 'Idioma'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
