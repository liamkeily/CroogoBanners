<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Banner Images');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Banner Images'), array('action' => 'index'));

?>

<div class="bannerImages index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('banner_id'); ?></th>
		<th><?php echo $this->Paginator->sort('title'); ?></th>
		<th><?php echo $this->Paginator->sort('description'); ?></th>
		<th><?php echo $this->Paginator->sort('path'); ?></th>
		<th><?php echo $this->Paginator->sort('order'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($bannerImages as $bannerImage): ?>
	<tr>
		<td><?php echo h($bannerImage['BannerImage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bannerImage['Banner']['title'], array('controller' => 'banners', 'action' => 'view', $bannerImage['Banner']['id'])); ?>
		</td>
		<td><?php echo h($bannerImage['BannerImage']['title']); ?>&nbsp;</td>
		<td><?php echo h($bannerImage['BannerImage']['description']); ?>&nbsp;</td>
		<td><?php echo h($bannerImage['BannerImage']['path']); ?>&nbsp;</td>
		<td><?php echo h($bannerImage['BannerImage']['order']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $bannerImage['BannerImage']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $bannerImage['BannerImage']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $bannerImage['BannerImage']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $bannerImage['BannerImage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
