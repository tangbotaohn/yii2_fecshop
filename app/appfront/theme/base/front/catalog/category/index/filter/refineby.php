<?php if(isset($parentThis['refine_by_info']) && is_array($parentThis['refine_by_info']) && !empty($parentThis['refine_by_info'])){   ?>
	<div class="filter_refine_by">
		<div class="filter_attr_title"><?= Yii::$service->page->translate->__('Refine By'); ?></div>
		<div class="filter_refine_by_content">
		<?php foreach($parentThis['refine_by_info'] as $one){  ?>
			<?php $name = $one['name'];  ?>
			<?php $url 	= $one['url']; ?>
			<div><a href="<?= $url ?>"><i class="closeBtn c_tagbg"></i><span><?= Yii::$service->page->translate->__($name); ?></span></a></div>
		<?php } ?>
		</div>
	</div>
<?php }; ?>
