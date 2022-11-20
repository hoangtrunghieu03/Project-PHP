	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shopping Cart</li>
				</ol>
			</div>
			<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Item</td>
								<td class="description"></td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td></td>
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
											<a class="cart_quantity_up"> + </a>
											<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $quantity ?>" autocomplete="off" size="2">
											<a <?php echo $quantity == 1 ? "style='pointer-events:none'" : "" ?> class="cart_quantity_down"> - </a>
										</div>
									</td>
									<td class="cart_total">
										<p class="cart_total_price">$<span><?php echo $price * $quantity ?></span></p>
									</td>
									<td class="cart_delete">
										<a class="cart_quantity_delete" data-isbn="<?php echo $isbn ?>"><i class="fa fa-times"></i></a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>

					</table>
				</div>
				<?php
				$subtotal = 0;
				foreach ($_SESSION['cart'] as $item) {
					extract($item);
					$item_total = $price * $quantity;
					$subtotal += $item_total;
				}
				?>
				<section id="do_action">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<div class="total_area">
									<ul>
										<li>Cart Sub Total <span id="cart-subtotal">$<?php echo $subtotal ?></span></li>
									</ul>
									<a class="btn btn-default check_out" href="<?php echo $_SERVER['PHP_SELF'] ?>?page=checkout">Check Out</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--/#do_action-->
			<?php else : ?>
				<h1>Không có sản phẩm nào trong giỏ hàng</h1>
			<?php endif ?>
		</div>
	</section>
	<!--/#cart_items-->