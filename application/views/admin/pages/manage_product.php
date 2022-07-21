<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Product</a></li>
</ul>

<div class="row-fluid sortable">
	<h3 style="color:green; text-align:center">
		<?php
		$message = $this->session->userdata('message');
		if ($message) {
			echo $message;
			$this->session->unset_userdata('message');
		}
		?>
	</h3>
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>All Product</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Id</th>
						<th>Product Name</th>
						<th>Image</th>
						<th>Status</th>
						<th>Featured</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($all_product as $single_product) { ?>
						<tr>
							<td><?php echo $single_product->id; ?></td>
							<td class="center"><?php echo $single_product->product_name; ?></td>
							<td class="center">
								<img src="<?php echo base_url() . $single_product->image; ?>" height="50" width="100" alt="" srcset="">
							</td>

							<td class="center">
								<?php
								if ($single_product->publication_status == 1) { ?>
									<span class="label label-success">Active</span>
								<?php } else { ?>
									<span class="label label-important">Inactive</span>
								<?php } ?>
							</td>

							<td>
								<?php
								if ($single_product->is_featured == 1) { ?>
									<span class="label label-success">Featured</span>
								<?php } else { ?>
									<span class="label label-important">Not Featured</span>
								<?php } ?>
							</td>
							<td class="center">

								<?php
								if ($single_product->publication_status == 1) { ?>
									<a class="btn btn-danger" href="<?php echo base_url() ?>SuperAdmin/unpublished_product/<?php echo $single_product->id ?>">
										<i class="halflings-icon white arrow-down"></i>
									</a>
								<?php } else { ?>
									<a class="btn btn-success" href="<?php echo base_url() ?>SuperAdmin/published_product/<?php echo $single_product->id ?>">
										<i class="halflings-icon white arrow-up"></i>
									</a>
								<?php } ?>

								<?php
								if ($single_product->is_featured == 1) { ?>
									<a class="btn btn-warning" href="<?php echo base_url() ?>SuperAdmin/unpublished_featured_product/<?php echo $single_product->id ?>">
										<i class="halflings-icon white thumbs-down"></i>
									</a>
								<?php } else { ?>
									<a class="btn btn-primary" href="<?php echo base_url() ?>SuperAdmin/published_featured_product/<?php echo $single_product->id ?>">
										<i class="halflings-icon white thumbs-up"></i>
									</a>
								<?php } ?>

								<a class="btn btn-info" href="<?php echo base_url() ?>SuperAdmin/edit_product/<?php echo $single_product->id; ?>">
									<i class="halflings-icon white edit"></i>
								</a>

								<a class="btn btn-danger" href="<?php echo base_url() ?>SuperAdmin/delete_product/<?php echo $single_product->id; ?>">
									<i class="halflings-icon white trash"></i>
								</a>

							</td>
						</tr>
					<?php	} ?>
				</tbody>
			</table>
		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
