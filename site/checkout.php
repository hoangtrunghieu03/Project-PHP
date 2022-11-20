	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="<?php echo $_SERVER['PHP_SELF'] ?>">Home</a></li>
					<li class="active">Check out</li>
				</ol>
			</div>
			<?php
			if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) :
			?>
				<!--/breadcrums-->
				<?php
				$subtotal = 0;
				foreach ($_SESSION['cart'] as $item) {
					extract($item);
					$item_total = $price * $quantity;
					$subtotal += $item_total;
				}
				?>
				<div class="shopper-informations">
					<div class="row">
						<div class="col-sm-8">
							<div class="shopper-info">
								<p>Shopper Information</p>
								<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>?page=order">
									<input type="email" placeholder="Email" name="email">
									<input type="text" placeholder="Phone Number" name="phone_number">
									<input type="text" placeholder="Address" name="address">
									<input type="hidden" name="subtotal" value="<?php echo $subtotal ?>">
									<textarea name="note" placeholder="Notes about your order, Special Notes for Delivery" rows="8"></textarea>
									<button type="submit" class="btn btn-primary" href="<?php echo $_SERVER['PHP_SELF'] ?>?page=order_process">Order</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="review-payment">
					<h2>Review</h2>
				</div>

				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Item</td>
								<td class="description"></td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($_SESSION['cart'] as $isbn => $item) :
								extract($item);
							?>
								<tr class="cart-product" data-id="<?php echo $isbn ?>">
									<td class="cart_product">
										<a href=""><img style="width:110px;height:110px" src="<?php echo "$CONTENT_URL/images/$image" ?>" alt=""></a>
									</td>
									<td class="cart_description">
										<h4><a href=""><?php echo $title ?></a></h4>
									</td>
									<td class="cart_price">
										<p>$<span class="price"><?php echo $price ?></span></p>
									</td>
									<td class="cart_quantity">
										<div class="cart_quantity_button">
											<input style="border:none" readonly class="cart_quantity_input" type="text" name="quantity" value="<?php echo $quantity ?>" autocomplete="off" size="2">
										</div>
									</td>
									<td class="cart_total">
										<p class="cart_total_price">$<span><?php echo $price * $quantity ?></span></p>
									</td>
								</tr>
							<?php endforeach ?>
							<tr>
								<td colspan="4">&nbsp;</td>
								<td colspan="2">
									<table class="table table-condensed total-result">
										<tr>
											<td>Cart SubTotal</td>
											<td><span>$<?php echo $subtotal ?></span></td>
										</tr>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<?php else : ?>
				<h1>Không có sản phẩm nào trong giỏ hàng</h1>
			<?php endif ?>
		</div>
	</section>
	<!--/#cart_items-->