<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Manufacture</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Manufacture</h2>

			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>

		</div>
		<div class="box-content">
			
			<form class="form-horizontal" action="<?php echo base_url() ?>SuperAdmin/update_manufacture" method="post">
				<fieldset>
					<input type="hidden" name="id" value="<?php echo $manufacture_info->id; ?>">
					<div class="control-group">
						<label class="control-label" for="typeahead">Manufacture Name</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="manufacture_name" value="<?php echo $manufacture_info->manufacture_name; ?>">
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Description</label>
						<div class="controls">
							<textarea class="cleditor" name="description" id="textarea2" rows="3"><?php echo $manufacture_info->description; ?></textarea>
						</div>
					</div>


					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button type="reset" class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>

		</div>
	</div>
	<!--/span-->

</div>
<!--/row-->
