<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('MODIFICAR MI INFORMACION'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('EMAIL');
		echo $this->Form->input('USERNAME');
		echo $this->Form->input('PASSWORD');
		echo $this->Form->input('US_EMPRESA');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
