 <h4 class="card-title">Category list</h4>
 <a href="<?php echo $ADMIN_URL ?>/category/?action=act_insert_form">Add category</a>
 <div class="table-responsive">
     <table class="table">
         <thead>
             <tr>
                 <th>Name</th>
                 <th>Edit</th>
                 <th>Delete</th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($categories as $category) :
                ?>
                 <tr>
                     <td><?php echo $category['cat_name'] ?></td>
                     <td> <a href="?action=act_edit_form&id=<?php echo $category['id'] ?>" class="btn btn-outline-info btn-fw btn-sm">edit</a></td>
                     <td> <a href="?action=act_delete&id=<?php echo $category['id'] ?>" class="btn btn-outline-danger btn-fw btn-sm">delete</a></td>
                 </tr>
             <?php
                endforeach
                ?>
         </tbody>
     </table>
 </div>