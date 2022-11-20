 <div id="overlay">
     <div id="text">Thêm vào giỏ hàng thành công!</div>
 </div>
 <section>
     <div class="container">
         <div class="row">
             <div class="col-sm-3">
                 <div class="left-sidebar">
                     <h2>Category</h2>
                     <!--book-category-->
                     <?php include_once __DIR__ . "/layout/category.php" ?>
                     <!--end-book-category-->

                     <div class="shipping text-center">
                         <!--shipping-->
                         <img src="<?php echo "$CONTENT_SITE_PATH" ?>/images/home/shipping.jpg" alt="" />
                     </div>
                     <!--/shipping-->

                 </div>
             </div>

             <div class="col-sm-9 padding-right">
                 <div class="product-details">
                     <!--product-details-->
                     <div class="col-sm-5">
                         <div class="view-product">
                             <img src=<?php echo "$CONTENT_URL/images/$image" ?> alt="" />
                         </div>

                     </div>
                     <div class="col-sm-7">
                         <div class="product-information">
                             <!--/product-information-->
                             <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                             <h2><?php echo $title ?></h2>
                             <img src="images/product-details/rating.png" alt="" />
                             <span>
                                 <span>US $<?php echo $price ?></span>
                                 <label>Quantity:</label>
                                 <input id="quantity" type="number" value="1" min="1" />
                                 <button data-isbn="<?php echo $isbn ?>" type="button" class="btn btn-fefault cart">
                                     <i class="fa fa-shopping-cart"></i>
                                     Add to cart
                                 </button>
                             </span>
                             <p><b>Availability:</b> In Stock</p>
                             <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
                         </div>
                         <!--/product-information-->
                     </div>
                 </div>
                 <!--/product-details-->

                 <div class="category-tab shop-details-tab">
                     <!--category-tab-->
                     <div class="col-sm-12">
                         <ul class="nav nav-tabs">
                             <li><a href="#details" data-toggle="tab">Details</a></li>
                             <li class="active"><a href="#reviews" data-toggle="tab">Reviews (0)</a></li>
                         </ul>
                     </div>
                     <div class="tab-content">
                         <div class="tab-pane fade" id="details">
                             <p><?php echo $description ?></p>
                         </div>

                         <div class="tab-pane fade active in" id="reviews">
                             <?php
                                if (isset($_POST['submit'])) {
                                    extract($_POST);
                                    comment_insert($_SESSION['account']['id'], $isbn, $content, date("Y-m-d", time()), 'no');
                                    echo "Thanks for your comment,please wait till we approve it.";
                                }
                                ?>
                             <?php if (isset($_SESSION['account'])) : ?>
                                 <div class="col-sm-12">
                                     <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                                         <span>
                                             <input type="text" readonly value="<?php echo $_SESSION['account']['name'] ?>" />
                                             <input type="email" readonly value="<?php echo $_SESSION['account']['email'] ?>" />
                                         </span>
                                         <textarea name="content"></textarea>
                                         <input type="hidden" name="submit">
                                         <button class="btn btn-default pull-right">
                                             Submit
                                         </button>
                                     </form>
                                 </div>
                             <?php else : ?>
                                 <h1>Login to make review</h1>
                             <?php endif ?>
                             <?php
                                if (count($comments) > 0) :
                                ?>
                                 <div id="review-container">
                                     <?php
                                        require "../dao/account.php";
                                        foreach ($comments as $comment) :
                                            $account = account_select_by_id($comment['account_id']);
                                        ?>
                                         <div class="review">
                                             <div class="row">
                                                 <p class="col-sm-3 name"><?php echo $account['name'] ?></p>
                                                 <p class="col-sm-9 date"><?php echo $comment['date'] ?></p>
                                             </div>
                                             <p><?php echo $comment['content'] ?></p>
                                         </div>
                                     <?php
                                        endforeach
                                        ?>
                                 </div>
                             <?php endif ?>
                         </div>

                     </div>
                 </div>
                 <!--/category-tab-->

                 <div class="recommended_items">
                     <!--recommended_items-->
                     <h2 class="title text-center">recommended items</h2>

                     <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                         <div class="carousel-inner">
                             <div class="item active">
                                 <div class="col-sm-4">
                                     <div class="product-image-wrapper">
                                         <div class="single-products">
                                             <div class="productinfo text-center">
                                                 <img src="images/home/recommend1.jpg" alt="" />
                                                 <h2>$56</h2>
                                                 <p>Easy Polo Black Edition</p>
                                                 <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <div class="product-image-wrapper">
                                         <div class="single-products">
                                             <div class="productinfo text-center">
                                                 <img src="images/home/recommend2.jpg" alt="" />
                                                 <h2>$56</h2>
                                                 <p>Easy Polo Black Edition</p>
                                                 <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <div class="product-image-wrapper">
                                         <div class="single-products">
                                             <div class="productinfo text-center">
                                                 <img src="images/home/recommend3.jpg" alt="" />
                                                 <h2>$56</h2>
                                                 <p>Easy Polo Black Edition</p>
                                                 <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="col-sm-4">
                                     <div class="product-image-wrapper">
                                         <div class="single-products">
                                             <div class="productinfo text-center">
                                                 <img src="images/home/recommend1.jpg" alt="" />
                                                 <h2>$56</h2>
                                                 <p>Easy Polo Black Edition</p>
                                                 <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <div class="product-image-wrapper">
                                         <div class="single-products">
                                             <div class="productinfo text-center">
                                                 <img src="images/home/recommend2.jpg" alt="" />
                                                 <h2>$56</h2>
                                                 <p>Easy Polo Black Edition</p>
                                                 <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-4">
                                     <div class="product-image-wrapper">
                                         <div class="single-products">
                                             <div class="productinfo text-center">
                                                 <img src="images/home/recommend3.jpg" alt="" />
                                                 <h2>$56</h2>
                                                 <p>Easy Polo Black Edition</p>
                                                 <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                             <i class="fa fa-angle-left"></i>
                         </a>
                         <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                             <i class="fa fa-angle-right"></i>
                         </a>
                     </div>
                 </div>
                 <!--/recommended_items-->

             </div>
         </div>
     </div>
 </section>