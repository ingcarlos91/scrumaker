<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL'); ?></dt>
		<dd>
			<?php echo h($user['User']['EMAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('USERNAME'); ?></dt>
		<dd>
			<?php echo h($user['User']['USERNAME']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PASSWORD'); ?></dt>
		<dd>
			<?php echo h($user['User']['PASSWORD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('US EMPRESA'); ?></dt>
		<dd>
			<?php echo h($user['User']['US_EMPRESA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('US ROL'); ?></dt>
		<dd>
			<?php echo h($user['User']['US_ROL']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['ID']), array(), __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
