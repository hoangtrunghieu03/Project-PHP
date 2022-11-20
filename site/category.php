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
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <?php
                        foreach ($books as $book) :
                            extract($book);
                        ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="<?php echo $SITE_URL ?>?page=book-detail&isbn=<?php echo $book['isbn'] ?>">
                                                <img style="cursor:pointer;height:255px;width:255px" src="<?php echo "$CONTENT_URL/images/$image" ?>" alt="" />
                                            </a>
                                            <h2>$<?php echo $price ?></h2>
                                            <p><?php echo $title ?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>


                    </div>
                </div>
            </div>
    </section>