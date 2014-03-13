<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Banners');
$this->extend('/Common/admin_index');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Banners'), array('action' => 'index'));

?>

<div class="banners index">
	<table class="table table-striped">
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('slug'); ?></th>
		<th><?php echo $this->Paginator->sort('title'); ?></th>
		<th><?php echo $this->Paginator->sort('width'); ?></th>
		<th><?php echo $this->Paginator->sort('height'); ?></th>
		<th class="actions"><?php echo __d('croogo', 'Actions'); ?></th>
	</tr>
	<?php foreach ($banners as $banner): ?>
	<tr>
		<td><?php echo h($banner['Banner']['id']); ?>&nbsp;</td>
		<td><?php echo h($banner['Banner']['slug']); ?>&nbsp;</td>
		<td><?php echo h($banner['Banner']['title']); ?>&nbsp;</td>
		<td><?php echo h($banner['Banner']['width']); ?>&nbsp;</td>
		<td><?php echo h($banner['Banner']['height']); ?>&nbsp;</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'view', $banner['Banner']['id']), array('icon' => 'eye-open')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'edit', $banner['Banner']['id']), array('icon' => 'pencil')); ?>
			<?php echo $this->Croogo->adminRowAction('', array('action' => 'delete', $banner['Banner']['id']), array('icon' => 'trash', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $banner['Banner']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
