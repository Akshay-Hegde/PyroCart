<fieldset id="filters">

	<legend><?php echo lang('global:filters'); ?></legend>
	
	<?php echo form_open(''); ?>
	<?php echo form_hidden('f_module', $module_details['slug']); ?>
	<ul>
		<li>
				<?php echo lang('pyrocart.category'); ?>
				<?php echo form_dropdown('f_category', $product_categories); ?>
			</li>
		<li><?php echo form_input('f_keywords'); ?></li>
		<li><?php echo anchor(current_url(), lang('buttons.cancel'), 'class="cancel"'); ?></li>
	</ul>
	<?php echo form_close(); ?>
</fieldset>