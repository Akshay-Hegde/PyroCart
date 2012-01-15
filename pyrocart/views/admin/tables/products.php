<table border="0" class="table-list">
	<thead>
		<tr>
			<th with="30" class="align-center"><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?></th>
			<th><?php echo lang('pyrocart.title');?></th>
			<th><?php echo lang('pyrocart.price');?></th>
			<th>Stock</th>
			<th>Expire date</th>
			<th><span><?php echo lang('pyrocart.actions');?></span></th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="6">
			<div class="inner">
				<?php $this->load->view('admin/partials/pagination');?>
			</div></td>
		</tr>
	</tfoot>
	<tbody>
		<?php foreach ($products as $product_item): if($product_item->featured=='true'){$checked=true;}else{$checked=false;}
		?>
		<tr>
			<td class="align-center"><?php echo form_checkbox('action_to[]', $product_item->id); ?></td>
			<td><?php echo $product_item -> title;?></td>
			<td>$<?php echo $product_item -> price;?></td>
			<td><?php echo $product_item -> stock;?></td>
			<td><?php
			$curdate = date('Y-m-d H:i:s');
			if ($product_item -> expire_date < $curdate && $product_item -> expire_date != '') {
				echo '<font color="red">Product has expired</font>';
			} else {
				echo $product_item -> expire_date;
			}
			?></td>
			<td><?php echo anchor('admin/pyrocart/edit/' . $product_item -> id, 'Edit');?>|<a href="<?php echo base_url() . 'pyrocart/details/' . $product_item -> id;?>" target="_blank">View</a> | <a href="<?php echo base_url() . 'admin/pyrocart/delete/' . $product_item -> id;?>" onclick="return confirm('Are you sure you want to delete this apartment?')">Delete</a></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>