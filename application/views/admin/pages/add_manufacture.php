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
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacture</h2>

			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>

		</div>
		<div class="box-content">
			<h3 style="color:green; text-align:center">
				<?php
				$message = $this->session->userdata('message');
				if ($message) {
					echo $message;
					$this->session->unset_userdata('message');
				}
				?>
			</h3>
			<form class="form-horizontal" action="<?php echo base_url() ?>SuperAdmin/save_manufacture" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Manufacture Name</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="manufacture_name" placeholder="Manufacture name">
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Description</label>
						<div class="controls">
							<textarea class="cleditor" name="description" id="textarea2" rows="3"></textarea>
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Publication Status</label>
						<div class="controls">
							<select name="publication_status">
								<option value="">select status</option>
								<option value="1">Published</option>
								<option value="">Unpublished</option>
							</select>
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
