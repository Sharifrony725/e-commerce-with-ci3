 <?php
	$contents = $this->cart->contents();
	?>
 <div id="content_holder" class="fixed">
 	<div class="inner">
 		<div class="breadcrumb"> <a href="index.html">Home</a> » <a href="">Account</a> » Shopping Cart</div>
 		<h2 class="heading-title"><span>Shopping Cart</span></h2>
 		<div id="content">
 			<div class="cart-info">
 				<table>
 					<thead>
 						<tr>
 							<td class="remove">Remove</td>
 							<td class="image">Image</td>
 							<td class="name">Product Name</td>
 							<td class="quantity">Quantity</td>
 							<td class="quantity">Unit Price</td>
 							<td class="total">Sub Total</td>
 						</tr>
 					</thead>
 					<tbody>
 						<?php
							foreach ($contents as $items) { ?>
 							<tr>
 								<td class="remove">
									<a href="<?php echo base_url();?>CartController/delete_cart/<?php echo $items['rowid'];?>" name="remove">Remove</a>
								</td>
 								<td class="image"><a href="#"><img height="70" width="90" src="<?php echo base_url() . $items['options']['image']; ?>" alt="Spicylicious store" /></a></td>
 								<td class="name"><?php echo $items['name']; ?></td>

 								<td class="quantity">
 									<form action="<?php echo base_url(); ?>/CartController/cart_update" method="post">
 										<input type="number" size="3" value="<?php echo $items['qty']; ?>" name="qty" />
 										<input type="hidden" size="3" value="<?php echo $items['rowid']; ?>" name="row_id" />
 										<button type="submit" name="btn" class="btn btn-cart">Update</button>
 									</form>
 								</td>
 								<td class="price"><?php echo $items['price']; ?> Tk</td>
 								<td class="total"><?php echo $items['subtotal']; ?> Tk</td>
 							</tr>
 						<?php }
							?>
 					</tbody>
 				</table>
 			</div>

 			<div class="cart-total">
 				<table>
 					<tbody>
 						<tr>
 							<td colspan="5"></td>
 							<td class="right"><b>Total: </b></td>
 							<td class="right numbers">Tk <?php echo $this->cart->total(); ?></td>
 						</tr>
 						<tr>
 							<td colspan="5"></td>
 							<td class="right"><b>VAT 15%:</b></td>
 							<td class="right numbers">Tk <?php
															$vat = (15 * $this->cart->total()) / 100;
															echo  $vat;
															?>
 							</td>
 						</tr>
 						<tr>
 							<td colspan="5"></td>
 							<td class="right numbers_total"><b>Grand Total:</b></td>
 							<td class="right numbers_total">Tk
 								<?php echo $this->cart->total() + $vat; ?>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 			<div class="buttons">
 				<div class="left"><a class="button" onclick=""><span>Update</span></a></div>
 				<div class="right"><a class="button" href="<?php echo base_url();?>Checkout/customer_registration"><span>Checkout</span></a></div>
 				<div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
 			</div>
 		</div>
 	</div>
 </div>
