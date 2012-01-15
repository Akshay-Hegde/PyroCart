<section class="title">
    <h4><?php echo lang('pyrocart.list_title'); ?></h4>
</section>
<section class="item">
<?php if ($products) : ?>
	<?php echo $this->load->view('admin/partials/filter'); ?>
	
	<?php echo form_open('admin/pyrocart/action'); ?>
	
		<div id="filter-stage">
			<?php echo $this->load->view('admin/tables/products'); ?>
		</div>
	
		<div class="table_action_buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('activate', 'delete') )); ?>
		</div>

	<?php echo form_close(); ?>
<?php else: ?>
	<div class="no_data">No Products</div>
<?php endif; ?>
</section>