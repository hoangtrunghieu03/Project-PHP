 <form action="?action=act_edit" method="post" style="margin:0 100px" class="forms-sample" enctype="multipart/form-data">
     <div class="form-group">
         <label for="exampleInputName1">isbn</label>
         <input type="text" class="form-control" name="isbn" value="<?php echo $isbn ?>">
         <input type="hidden" name="ISBN" value="<?php echo $isbn ?>">
     </div>
     <div class="form-group">
         <label for="exampleInputEmail3">title</label>
         <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
     </div>
     <div class=" form-group">
         <label for="exampleInputPassword4">author</label>
         <input type="text" class="form-control" name="author" value="<?php echo $author ?>">
     </div>
     <div class="form-group">
         <label for="exampleInputPassword4">nxb</label>
         <input type="text" class="form-control" name="nxb" value="<?php echo $nxb ?>">
     </div>
     <div class="form-group">
         <label for="exampleSelectGender">category</label>
         <select class="form-control" name="category">
             <?php
                var_dump($categories);
                foreach ($categories as $category) :
                ?>
                 <option <?php echo $category['id'] == $category_id ? "selected" : "" ?> value="<?php echo $category['id'] ?>"><?php echo $category['cat_name'] ?></option>
             <?php endforeach ?>
         </select>
     </div>
     <div class="form-group">
         <label>image</label>
         <input type="file" name="image" class="file-upload-default">
         <div class="input-group col-xs-12">
             <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
             <span class="input-group-append">
                 <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
             </span>
         </div>
         <img style="width:80px;height:80px" src="<?php echo $CONTENT_URL ?>/images/<?php echo $image ?>" alt="">
     </div>
     <div class="form-group">
         <label for="exampleInputCity1">price</label>
         <input type="number" class="form-control" name="price" value="<?php echo $price ?>">
     </div>
     <div class="form-group">
         <label for="exampleInputCity1">discount</label>
         <input type="number" class="form-control" name="discount" value="<?php echo $discount ?>">
     </div>
     <div class="form-group">
         <label for="exampleTextarea1">description</label>
         <textarea class="form-control" name="description" rows="4">
             <?php
                echo $description
                ?>
         </textarea>
     </div>
     <button type="submit" class="btn btn-primary mr-2">Submit</button>
     <button class="btn btn-light">Cancel</button>
 </form>
 <script src="<?php echo $CONTENT_ADMIN_PATH ?>/vendors/js/vendor.bundle.base.js"></script>
 <!-- Plugin js for this page -->
 <script src="<?php echo $CONTENT_ADMIN_PATH ?>/vendors/typeahead.js/typeahead.bundle.min.js"></script>
 <script src="<?php echo $CONTENT_ADMIN_PATH ?>/vendors/select2/select2.min.js"></script>
 <!-- End plugin js for this page -->
 <script src="<?php echo $CONTENT_ADMIN_PATH ?>/js/file-upload.js"></script>
 <script src="<?php echo $CONTENT_ADMIN_PATH ?>/js/typeahead.js"></script>
 <script src="<?php echo $CONTENT_ADMIN_PATH ?>/js/select2.js"></script>
 <!-- End custom js for this page-->