<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Pelicula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pelicula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo',array('class' => 'form-control','label' => 'Titulo'));
		echo $this->Form->input('categoria',array('class' => 'form-control','label' => 'Categoria'));
		echo $this->Form->input('fecha_inclusion',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
		echo $this->Form->input('fecha_realizacion',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>