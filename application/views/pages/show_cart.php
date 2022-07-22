 <?php
	$contents = $this->cart->contents();
	// echo '<pre>';
	// print_r($contents);
	// exit();
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
 							<td class="total">Total</td>
 						</tr>
 					</thead>
 					<tbody>
 						<?php
							foreach ($contents as $items) { ?>
 							<tr>
 								<td class="remove"><input type="checkbox" value="41" name="remove[]" />Remove</td>
 								<td class="image"><a href="#"><img height="70" width="90" src="<?php echo base_url() . $items['options']['image']; ?>" alt="Spicylicious store" /></a></td>
 								<td class="name"><?php echo $items['name']; ?></td>
 								<td class="quantity"><input type="text" size="3" value="<?php echo $items['qty']; ?>" name="quantity[41]" /></td>
 								<td class="price"><?php echo $items['price']; ?></td>
 								<td class="total"><?php echo $items['subtotal']; ?></td>
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
 							<td class="right"><b>Sub-Total:</b></td>
 							<td class="right numbers">0</td>
 						</tr>
 						<tr>
 							<td colspan="5"></td>
 							<td class="right"><b>VAT </b></td>
 							<td class="right numbers"></td>
 						</tr>
 						<tr>
 							<td colspan="5"></td>
 							<td class="right numbers_total"><b>Total:</b></td>
 							<td class="right numbers_total"></td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 			<div class="buttons">
 				<div class="left"><a class="button" onclick=""><span>Update</span></a></div>
 				<div class="right"><a class="button" href="#"><span>Checkout</span></a></div>
 				<div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
 			</div>
 		</div>
 	</div>
 </div>
