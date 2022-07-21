<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Product</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>

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
			<form class="form-horizontal" action="<?php echo base_url() ?>SuperAdmin/save_product" method="post" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Name</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="product_name" placeholder="Product Name">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Category Name</label>
						<div class="controls">
							<select name="category_name" id="" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">
								<option value="">Select Category</option>
								<?php
								foreach ($published_category as $v_category) { ?>
									<option value="<?php echo $v_category->id; ?>"><?php echo $v_category->category_name; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Manufacturer Name</label>
						<div class="controls">
							<select name="manufacturer_name" id="" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4">
								<option value="">Select Manufacturer</option>
								<?php
								foreach ($published_manufacturer as $v_manufacturer) { ?>
									<option value="<?php echo $v_manufacturer->id ?>"><?php echo $v_manufacturer->manufacture_name ?></option>
								<?php }
								?>
							</select>
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Short Description</label>
						<div class="controls">
							<textarea class="cleditor" name="short_description" id="textarea2" rows="3"></textarea>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Long Description</label>
						<div class="controls">
							<textarea class="cleditor" name="long_description" id="textarea2" rows="3"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Price</label>
						<div class="controls">
							<input type="number" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="price" placeholder="price">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product New Price</label>
						<div class="controls">
							<input type="number" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="new_price" placeholder="new price">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Quantity</label>
						<div class="controls">
							<input type="number" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="quantity" placeholder="Quantity">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Is Featured</label>
						<div class="controls">
							<input type="checkbox" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="is_featured">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Product Image</label>
						<div class="controls">
							<input type="file" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" name="image">
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
