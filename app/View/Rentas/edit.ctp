<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Renta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Renta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_inicio',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
		echo $this->Form->input('fecha_devolucion',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
		echo $this->Form->input('multa',array('class' => 'form-control','label' => 'Multa'));
		echo $this->Form->input('membresia_id',array('class' => 'form-control','label' => 'Cliente'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>

