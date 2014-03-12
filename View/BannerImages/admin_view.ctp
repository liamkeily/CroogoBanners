<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Banner Images'), h($bannerImage['BannerImage']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Banner Images'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Banner Image'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Banner Image'), array('action' => 'edit', $bannerImage['BannerImage']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Banner Image'), array('action' => 'delete', $bannerImage['BannerImage']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $bannerImage['BannerImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Banner Images'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Banner Image'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Banners'), array('controller' => 'banners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Banner'), array('controller' => 'banners', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="bannerImages view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($bannerImage['BannerImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Banner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bannerImage['Banner']['title'], array('controller' => 'banners', 'action' => 'view', $bannerImage['Banner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($bannerImage['BannerImage']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Description'); ?></dt>
		<dd>
			<?php echo h($bannerImage['BannerImage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Path'); ?></dt>
		<dd>
			<?php echo h($bannerImage['BannerImage']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Order'); ?></dt>
		<dd>
			<?php echo h($bannerImage['BannerImage']['order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
