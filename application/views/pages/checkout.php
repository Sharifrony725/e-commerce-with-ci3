<!-- CONTENT -->
<div id="content_holder" class="fixed">
	<div class="inner">
		<div class="breadcrumb"> <a href="#">Home</a> <a href="#">Cart</a></div>
		<h2 class="heading-title"><span>Checkout</span></h2>
		<div id="content">
			<!-- ACCORDION -->
			<div id="accordion" class="checkout">
				<div class="container">
					<div class="row">

						<div style="float:left">
							<h3>Registration</h3>
							<div>
								<form action="<?php echo base_url(); ?>Checkout/customer_save" method="post">
									<table class="form">
										<tbody>
											<tr>
												<td> First Name:</td>
												<td><input type="text" class="large-field" value="" name="first_name" /></td>
											</tr>
											<tr>
												<td> Last Name:</td>
												<td><input type="text" class="large-field" value="" name="last_name" /></td>
											</tr>
											<tr>
												<td>Company:</td>
												<td><input type="text" class="large-field" value="" name="company" /></td>
											</tr>
											<tr>
												<td>Email:</td>
												<td><input type="text" class="large-field" value="" name="email" /></td>
											</tr>
											<tr>
												<td>Password:</td>
												<td><input type="password" class="large-field" value="" name="password" /></td>
											</tr>
											<tr>
												<td>Mobile:</td>
												<td><input type="text" class="large-field" value="" name="mobile" /></td>
											</tr>
											<tr>
												<td>Address:</td>
												<td><input type="text" class="large-field" value="" name="address" /></td>
											</tr>
											<tr>
												<td>City:</td>
												<td><input type="text" class="large-field" value="" name="city" /></td>
											</tr>
											<tr>
												<td> Post Code:</td>
												<td><input type="text" class="large-field" value="" name="postcode" /></td>
											</tr>
											<tr>
												<td> Country:</td>
												<td><select class="large-field" name="country">
														<option value=""> --- Please Select --- </option>
														<script type="text/javascript">
															printCountryOptions()
														</script>
													</select>
												</td>
											</tr><br>
											<tr>
												<td></td>
												<td class="large-field">
													<button class="large-field" type="submit" name="btn">Save</button>
												</td>
											</tr>
										</tbody>


									</table>
								</form>
							</div>
						</div>

						<div style="float:right">
							<div>
								<h3>Login</h3>
								<div>
									<form action="<?php echo base_url() ?>save_shipping_address" method="post">
										<table class="form">
											<tbody>
												<tr>
													<td>Email:</td>
													<td><input type="text" class="large-field" value="" name="email" /></td>
												</tr>
												<tr>
													<td>Password:</td>
													<td><input type="password" class="large-field" value="" name="password" /></td>
												</tr>
												<tr>
													<td></td>
													<td class="large-field">
														<button class="large-field" type="submit" name="btn">Save</button>
													</td>
												</tr>
											</tbody>
										</table>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END OF ACCORDION -->
		</div>
	</div>
</div>
<!-- END OF CONTENT -->
