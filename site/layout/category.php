 <div class="panel-group category-products" id="accordian">
     <!--category-productsr-->
     <?php
        foreach ($categories as $category) :
        ?>
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h4 class="panel-title"><a href="<?php echo $_SERVER['PHP_SELF'] ?>?page=category&cat_id=<?php echo $category['id'] ?>"><?php echo $category['cat_name'] ?></a></h4>
             </div>
         </div>
     <?php endforeach ?>
 </div>
 <!--/category-products-->