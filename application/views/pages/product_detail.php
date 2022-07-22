<div id="content_holder" class="fixed">
	<div class="inner">
		<div class="breadcrumb"> <a href="index.html">Home</a> » <a href="#"><?php echo $product_info->category_name ?></a> » <?php echo $product_info->product_name; ?> </div>
		<h2 class="heading-title"><span><?php echo $product_info->product_name; ?></span></h2>

		<!-- PRODUCT INFO -->
		<div class="product-info fixed">
			<div class="left">
				<div class="image"> <a href="<?php echo base_url() . $product_info->image; ?>"> <img height="600px" width="600px" src="<?php echo base_url() . $product_info->image; ?>" alt='' title="<?php echo $product_info->product_name ?>" /></a> <span class="pricetag">Tk <?php echo $product_info->new_price ?></span> </div>
			</div>
			<div class="right">
				<div class="description"> <span>Manufacturer Name:</span> <a href="#"><?php echo $product_info->manufacture_name; ?></a><br>
					<span>Category Name:</span> <span style="color:#d06464"><?php echo $product_info->category_name ?></span><br>
					<span>Product Old Price:</span> <span style="color:#d06464">Tk <?php echo $product_info->price ?></span><br>
					<span>Availability:</span>
					<?php if ($product_info->quantity > 0) { ?>
						<span style="color:green">In Stock</span>
					<?php } else { ?>
						<span style="color:red"> Stock Out </span>
					<?php } ?>

				</div>

				<form action="<?php echo base_url(); ?>CartController/add_to_cart" method="post">
					<div class="cart"> <span class="label">Qty:</span>
						<input type="text" value="1" size="2" name="qty" id="qty" />
						<input type="hidden" name="product_id" value="<?php echo $product_info->id ?>">
						<button type="submit" class="button" id="button-cart" title="Add to Cart"><span>Add to Cart</span></button>
						<a href="#" class="wish_button" title="Add to Wish List">Add to Wish List</a> <a href="#" class="compare_button" title="Add to Compare">Add to Compare</a>
					</div>
				</form>

				<div class="tags"> <span class="label">Tags:</span> <a href="#"><?php echo $product_info->product_name; ?></a> <a href="#">Italian</a> <a href="#">Food</a> <a href="#">Delivery</a> <a href="#">Vegetarian</a> <a href="#">Sample tag</a> </div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- END OF PRODUCT INFO -->

		<div id="content">
			<div class="box">
				<h2 class="heading-title"><span>Description</span></h2>
				<div class="box-content">
					<p><?php echo $product_info->long_description; ?></p>
				</div>
			</div>
			<div class="box">
				<h2 class="heading-title"><span>Reviews (3)</span></h2>
				<div class="box-content box-rating"> <a class="comment_switch" href="#"> <span class="button_comments">View Comments</span> <span class="button_review">Write Review</span> </a>
					<div class="box-comments">
						<div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-5.png" alt="3 reviews" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-1.png" alt="3 reviews" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-4.png" alt="3 reviews" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
					</div>
					<div class="box-write">
						<h3 id="review-title">Write a review</h3>
						<span class="label">Your Name:</span>
						<input type="text" value="" name="name" />
						<br />
						<br />
						<span class="label">Your Review:</span>
						<textarea style="width: 98%;" rows="10" cols="40" name="text"></textarea>
						<span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br />
						<br />
						<span class="label">Rating:</span> <span>Bad</span>&nbsp;
						<input type="radio" value="1" name="rating" />
						&nbsp;
						<input type="radio" value="2" name="rating" />
						&nbsp;
						<input type="radio" value="3" name="rating" />
						&nbsp;
						<input type="radio" value="4" name="rating" />
						&nbsp;
						<input type="radio" value="5" name="rating" />
						&nbsp; <span>Good</span><br />
						<br />
						<span class="label">Enter the code in the box below:</span>
						<input type="text" value="" name="captcha" />
						<br />
						<img id="captcha" alt="" src="image/captcha.jpg" /><br />
						<br />
						<div class="buttons">
							<div class="left"><a class="button" id="button-review"><span>Submit Review</span></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="cat_list">
				<h2 class="heading-title"><span>Related Products</span></h2>
				<div class="prod_hold"> <a class="wrap_link" href="product.html">
						<span class="image"><img src="image/prod_pic1.jpg" alt="Spicylicious store" /></span>
					</a>
					<div class="pricetag_small"> <span class="old_price">$ 19 999,99</span> <span class="new_price">$ 14 999,99</span> </div>
					<div class="info">
						<h3>Very long product name goes here</h3>
						<p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
						<a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a>
					</div>
				</div>
				<div class="prod_hold"> <a class="wrap_link" href="product.html">
						<span class="image"><img src="image/prod_pic2.jpg" alt="Spicylicious store" /></span>
					</a>
					<div class="pricetag_small"> <span class="price">$ 147,99</span> </div>
					<div class="info">
						<h3>Very long product name goes here</h3>
						<p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
						<a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a>
					</div>
				</div>
				<div class="prod_hold"> <a class="wrap_link" href="product.html">
						<span class="image"><img src="image/prod_pic3.jpg" alt="Spicylicious store" /></span>
					</a>
					<div class="pricetag_small"> <span class="price">$ 472,99</span> </div>
					<div class="info">
						<h3>Very long product name goes here</h3>
						<p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
						<a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a>
					</div>
				</div>
				<div class="prod_hold"> <a class="wrap_link" href="product.html">
						<span class="image"><img src="image/prod_pic4.jpg" alt="Spicylicious store" /></span>
					</a>
					<div class="pricetag_small"> <span class="price">$ 219,99</span> </div>
					<div class="info">
						<h3>Very long product name goes here</h3>
						<p>Suspendisse eget
							nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
						<a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- END OF CONTENT -->
