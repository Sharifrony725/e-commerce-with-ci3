<!-- CONTENT -->
<div id="content_holder" class="fixed">
	<div class="inner">
		<div class="breadcrumb"> <a href="index.html">Home</a> » <a href="cart.html">Cart</a> » Payment </div>
		<h2 class="heading-title"><span>Payment</span></h2>
		<div id="content">
			<!-- ACCORDION -->
			<div id="accordion" class="checkout">

				<h2>Payment Method</h2>
				<div>
					<p>Please select the preferred payment method to use on this order.</p>
					<form action="<?php echo base_url() ?>Checkout/order_confirm" method="post">
						<table class="form">
							<tbody>
								<tr>
									<td style="width: 1px;"><input type="radio" id="tod" checked="checked" value="cod" name="payment_method" /></td>
									<td><label for="tod">Cash On Delivery</label></td>
								</tr>
								<tr>
									<td style="width: 1px;"><input type="radio" id="cod" value="cod" name="payment_method" /></td>
									<td><label for="cod">Bkash</label></td>
								</tr>
								<tr>
									<td style="width: 1px;"><input type="radio" id="mod" value="cod" name="payment_method" /></td>
									<td><label for="mod">Nagat</label></td>
								</tr>
							</tbody>
						</table>
						<!-- <b>Add Comments About Your Order</b>
					<textarea style="width: 98%;" rows="8" cols="20" name="comment"></textarea>
					<br /> -->
						<br />
						<div class="buttons">
							<div class="left">I have read and agree to the <a href="#" class="fancybox"><b>Terms &amp; Conditions</b></a>
								<input type="checkbox" value="1" name="agree" />
								<button class="button" type="submit" name id="button-payment"><span>Confirm Order</span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END OF ACCORDION -->
		</div>
	</div>
</div>

<!-- END OF CONTENT -->
