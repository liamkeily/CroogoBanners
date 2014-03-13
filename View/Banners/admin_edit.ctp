<?php
$this->Html->script('ElFinder.image_picker',array('inline'=>false));

$this->viewVars['title_for_layout'] = __d('croogo', 'Banners');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Banners'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['Banner']['title'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Banners: ' . $this->data['Banner']['title'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('Banner');

?>
<div class="banners row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Banner'), '#banner');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='banner' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('slug', array(
					'label' => 'Slug',
				));
				echo $this->Form->input('title', array(
					'label' => 'Title',
				));
				echo $this->Form->input('width', array(
					'label' => 'Width',
				));
				echo $this->Form->input('height', array(
					'label' => 'Height',
				));
			?>

			<div class="input text">	
				<table class="table striped" id="banner_images">
				<tbody>	
				<?php
				foreach($images as $image){
					echo $this->element('banner',array('image'=>$image));
				}
				?>
				</tbody>
				</table>
			</div>

			<p><a class="btn btn-default" id="add_image">Add Image</a></p>

			</div>
			<?php echo $this->Croogo->adminTabs(); ?>
		</div>

	</div>

	<div class="span4">
	<?php
		echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
			$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
			$this->Form->button(__d('croogo', 'Save'), array('class' => 'btn btn-primary')) .
			$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('class' => 'btn btn-danger')) .
			$this->Html->endBox();
		?>
	</div>

</div>
<?php echo $this->Form->end(); ?>

<script type="text/javascript">
$(function(){
$("#add_image").click(function(){
imagepicker.getFiles(function(files){
	console.log(files);
	for(i in files){
		var file = files[i];

		var banner_image = [];
		banner_image['BannerImage'] = [];
		banner_image['BannerImage']['title'] = 'New Image';
		banner_image['BannerImage']['description'] = '';
		banner_image['BannerImage']['path'] = file;

		$.ajax({
			method:'POST',
			url:'<?php echo $this->Html->url(array('controller'=>'banner_images','action'=>'add')); ?>',
			data:banner_image,
			success:function(data){
				$("#banner_images tbody").append(data);
			}
		});		
	}
});
});
});
</script>
