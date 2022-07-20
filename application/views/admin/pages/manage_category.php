<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Category</a></li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>All Category</h2>
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
						<th>Name</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($all_category as $single_category) { ?>
						<tr>
							<td><?php echo $single_category->id; ?></td>
							<td class="center"><?php echo $single_category->category_name; ?></td>
							<td class="center">
								<?php
								if ($single_category->publication_status == 1) { ?>
									<span class="label label-success">Active</span>
								<?php } else { ?>
									<span class="label label-important">Inactive</span>
								<?php } ?>
							</td>
							<td class="center">
								<?php
								if ($single_category->publication_status == 1) { ?>
									<a class="btn btn-danger" href="<?php echo base_url() ?>SuperAdmin/unpublished_category/<?php echo $single_category->id ?>">
										<i class="halflings-icon white arrow-down"></i>
									</a>
								<?php } else { ?>
									<a class="btn btn-success" href="<?php echo base_url() ?>SuperAdmin/published_category/<?php echo $single_category->id ?>">
										<i class="halflings-icon white arrow-up"></i>
									</a>
								<?php } ?>


								<a class="btn btn-info" href="#">
									<i class="halflings-icon white edit"></i>
								</a>
								<a class="btn btn-danger" href="<?php echo base_url()?>SuperAdmin/delete_category/<?php echo $single_category->id; ?>">
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
