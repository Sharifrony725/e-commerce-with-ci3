<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Manufacture</a></li>
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
			<h2><i class="halflings-icon user"></i><span class="break"></span>All Manufacture</h2>
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
					foreach ($all_manufacture as $single_manufacture) { ?>
						<tr>
							<td><?php echo $single_manufacture->id; ?></td>
							<td class="center"><?php echo $single_manufacture->manufacture_name; ?></td>
							<td class="center">
								<?php
								if ($single_manufacture->publication_status == 1) { ?>
									<span class="label label-success">Active</span>
								<?php } else { ?>
									<span class="label label-important">Inactive</span>
								<?php } ?>
							</td>
							<td class="center">
								<?php
								if ($single_manufacture->publication_status == 1) { ?>
									<a class="btn btn-danger" href="<?php echo base_url() ?>SuperAdmin/unpublished_manufacture/<?php echo $single_manufacture->id ?>">
										<i class="halflings-icon white arrow-down"></i>
									</a>
								<?php } else { ?>
									<a class="btn btn-success" href="<?php echo base_url() ?>SuperAdmin/published_manufacture/<?php echo $single_manufacture->id ?>">
										<i class="halflings-icon white arrow-up"></i>
									</a>
								<?php } ?>


								<a class="btn btn-info" href="<?php echo base_url() ?>SuperAdmin/edit_manufacture/<?php echo $single_manufacture->id; ?>">
									<i class="halflings-icon white edit"></i>
								</a>
								<a class="btn btn-danger" href="<?php echo base_url() ?>SuperAdmin/delete_manufacture/<?php echo $single_manufacture->id; ?>">
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
