<h2>Admin Edit Product</h2>

<br />

<div class="row">
<div class="col-sm-8">

<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->input('id'); ?>
<br />
<?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('brand_id', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('slug', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('image', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('price', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('weight', array('class' => 'form-control')); ?>
<br />
<?php echo $this->Form->input('active', array('type' => 'checkbox')); ?>
<br />
<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>

<br />
<br />

</div>
</div>