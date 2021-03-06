<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Spicylicious </title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/stylesheet.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheet/jquery-ui-1.8.9.custom.css" />
	<!-- jQuery and Custom scripts -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom_scripts.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.roundabout.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.9.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/tabs.js"></script>
	<!-- Tipsy -->
	<script src="<?php echo base_url(); ?>assets/js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
	<link href="<?php echo base_url(); ?>assets/js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/js/jquery.tweet.js" type="text/javascript"></script>
	<link href="<?php echo base_url(); ?>assets/js/jquery.tweet.css" rel="stylesheet" type="text/css" />
	<!-- custom js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/country.js"></script>
</head>

<body>
	<!-- MAIN WRAPPER -->
	<div id="container">

		<!-- SIDEFEATURES -->
		<div id="sidefeatures">
			<ul>
				<li class="side_cart"><span class="icon">Shopping Cart</span>
					<div id="cart">
						<div class="heading">
							<h4>Shopping Cart</h4>
							<span id="cart_total">3 item(s) - $1099.99</span>
						</div>
						<div class="content">
							<table class="cart">
								<tbody>
									<tr>
										<td class="image"><a href="#"><img alt="Spicylicious" src="<?php echo base_url(); ?>assets/image/cart_pic1.jpg" /></a></td>
										<td class="name"><a href="#">Product name 1</a>
											<div> </div>
										</td>
										<td class="quantity">x&nbsp;1</td>
										<td class="total">$117.50</td>
										<td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>assets/image/close.png" /></td>
									</tr>
									<tr>
										<td class="image"><a href="#"><img title="Palm Treo Pro" alt="Palm Treo Pro" src="<?php echo base_url(); ?>assets/image/cart_pic2.jpg" /></a></td>
										<td class="name"><a href="#">Product name 2</a>
											<div> </div>
										</td>
										<td class="quantity">x&nbsp;1</td>
										<td class="total">$328.99</td>
										<td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>assets/image/close.png" /></td>
									</tr>
									<tr>
										<td class="image"><a href="#"><img title="Canon EOS 5D" alt="Canon EOS 5D" src="<?php echo base_url(); ?>assets/image/cart_pic3.jpg" /></a></td>
										<td class="name"><a href="#">Product name 3</a>
											<div> - <small>Extra Cheese</small><br />
											</div>
										</td>
										<td class="quantity">x&nbsp;1</td>
										<td class="total">$94.00</td>
										<td class="remove"><img title="Remove" alt="Remove" src="<?php echo base_url(); ?>assets/image/close.png" /></td>
									</tr>
								</tbody>
							</table>
							<table class="total">
								<tbody>
									<tr>
										<td align="right"><b>Sub-Total</b></td>
										<td align="right">$459.99</td>
									</tr>
									<tr>
										<td align="right"><b>VAT 17.5%</b></td>
										<td align="right">$80.50</td>
									</tr>
									<tr>
										<td align="right"><b>Total</b></td>
										<td align="right">$540.49</td>
									</tr>
								</tbody>
							</table>
							<div class="checkout"><a class="button" href="checkout.html"><span>Checkout</span></a></div>
						</div>
					</div>
				</li>
				<li class="side_currency"><span class="icon">Currency</span>
					<div id="currency"> Currency <a href="#" title="Euro">???</a> <a href="#" title="Pound Sterling">??</a> <a title="US Dollar">$</a> </div>
				</li>
				<li class="side_lang"><span class="icon">Language</span>
					<div id="language"> Language <a href="#" title="English"><img src="<?php echo base_url(); ?>assets/image/gb.png" alt="Spicylicious store" /></a> <a href="#" title="Deutsch"><img src="<?php echo base_url(); ?>assets/image/de.png" alt="Spicylicious store" /></a> <a title="Bylgarski"><img src="<?php echo base_url(); ?>assets/image/bg.png" alt="Spicylicious store" /></a> </div>
				</li>
				<li class="side_search"><span class="icon">Search</span>
					<div id="search">
						<input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name" />
						<a href="#" class="button-search"></a>
					</div>
				</li>
			</ul>
		</div>
		<!-- END OF SIDEFEATURES -->

		<!-- HEADER -->
		<div id="header">
			<div class="inner">
				<ul class="main_menu menu_left">
					<li><a href="account.html">My Account</a></li>
					<li><a href="wish.html">Wish List <b>(3)</b></a></li>
					<li><a href="<?php echo base_url(); ?>Welcome/about_us">About Us</a></li>
					<li><a href="<?php echo base_url(); ?>Welcome/index">Home</a></li>
				</ul>
				<div id="logo"><a href="index.html"><img src="<?php echo base_url(); ?>assets/image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
				<ul class="main_menu menu_right">
					<li><a href="compare.html">Compare</a></li>
					<li><a href="<?php echo base_url(); ?>CartController/show_cart">Shopping Cart(<?php echo $this->cart->total_items(); ?>)</a></li>
					<li><a href="checkout.html">Checkout</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
				<?php
				$customer_id = $this->session->userdata('customer_id');
				$customer_name = $this->session->userdata('customer_name');
				if ($customer_id != NULL) { ?>
					<div id="welcome"> Welcome <?php echo $customer_name;?> you can <a href="<?php echo base_url();?>Checkout/logout">Logout</a></div>
				<?php } else { ?>
					<div id="welcome"> Welcome visitor you can <a href="">login</a> or <a href="<?php echo base_url() ?>Checkout/customer_registration">create an account</a>. </div>
				<?php } ?>

				<div class="menu">
					<?php
					$this->db->select('*');
					$this->db->from('tbl_category');
					$this->db->where('publication_status', 1);
					$query_result = $this->db->get();
					$all_published_category = $query_result->result();
					?>
					<ul id="topnav">
						<?php
						foreach ($all_published_category as  $value_category) { ?>
							<li><a href="<?php echo base_url() ?>Welcome/category_product/<?php echo $value_category->id; ?>"><?php echo $value_category->category_name; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- END OF HEADER -->

		<!-- CONTENT -->
		<div id="content_holder" class="fixed">
			<div class="inner">
				<div id="content">
					<div class="box featured-box">
						<h2 class="heading-title"><span>Featured Products</span></h2>
						<div class="box-content">
							<ul id="myRoundabout">
								<?php
								foreach ($featured_product as $v_featured_product) { ?>
									<li>
										<div class="prod_holder"> <a href="<?php echo base_url() ?>Welcome/product_detail/<?php echo $v_featured_product->id; ?>"> <img src="<?php echo base_url() . $v_featured_product->image; ?>" height="300" width="450" alt="Spicylicious store" /> </a>
											<h3><?php echo $v_featured_product->product_name; ?></h3>
										</div>
										<span class="pricetag"><?php echo $v_featured_product->new_price ?>Tk</span>
									</li>
								<?php } ?>
							</ul>
							<a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a>
						</div>
					</div>

					<?php echo $maincontent; ?>

				</div>
			</div>
		</div>
		<!-- END OF CONTENT -->

		<!-- PRE-FOOTER -->
		<div id="pre_footer">
			<div class="inner">

			</div>
		</div>
		<!-- END OF PRE-FOOTER -->

		<!-- FOOTER -->
		<div id="footer">
			<div class="inner">
				<div class="column_big">
					<!-- FOOTER MODULES AREA -->
					<div class="footer_modules">
						<h3>About spicylicious</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
					<!-- END OF FOOTER MODULES AREA -->
					<div class="footer_social">
						<h3>Spread the word</h3>

					</div>
				</div>
				<div class="column_small">
					<h3>Customer Service</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Order History</a></li>
						<li><a href="#">Wishlist</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">Returns</a></li>
					</ul>
				</div>
				<div class="column_small">
					<h3>Information</h3>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="sitemap.html">site map</a></li>
					</ul>
				</div>
				<div class="column_small">
					<h3>Extras</h3>
					<ul>
						<li><a href="#">Brands</a></li>
						<li><a href="#">Gift vouchers</a></li>
						<li><a href="#">Affiliates</a></li>
						<li><a href="#">Specials</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<span class="copyright">Spicylicious theme by <a href="#">Dimitar Koev - theAlThemist</a>. </span>
			</div>
		</div>
		<!-- END OF FOOTER -->

	</div>
	<!-- END OF MAIN WRAPPER -->
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script>
	<script type="text/javascript">
		// $(document).ready(function() {
		// 	$('#twitter_update_list').cycle({
		// 		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		// 		next: '#tweet_next',
		// 		prev: '#tweet_prev'
		// 	});
		// });
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var interval;
			$('ul#myRoundabout')
				.roundabout({
					'btnNext': '.next_round',
					'btnPrev': '.previous_round'
				})
				.hover(
					function() {

						clearInterval(interval);
					},
					function() {

						interval = startAutoPlay();
					});

			interval = startAutoPlay();
		});

		function startAutoPlay() {
			return setInterval(function() {
				$('ul#myRoundabout').roundabout_animateToPreviousChild();
			}, 3000);
		}
	</script>
</body>

</html>
