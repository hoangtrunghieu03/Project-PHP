 <h4 class="card-title">Book list</h4>
 <a href="<?php echo $ADMIN_URL ?>/book/?action=act_insert_form">Add book</a>
 <div class="table-responsive">
     <table class="table">
         <thead>
             <tr>
                 <th>image</th>
                 <th>title</th>
                 <th>author</th>
                 <th>nxb</th>
                 <th>price</th>
                 <th>discount</th>
                 <th>edit</th>
                 <th>delete</th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($books as $book) :
                    extract($book);
                ?>
                 <tr>
                     <td><img style="width:80px;height:80px;border-radius:0%" src="<?php echo $CONTENT_URL ?>/images/<?php echo $image ?>" alt=""></td>
                     <td><?php echo $title ?></td>
                     <td><?php echo $author ?></td>
                     <td><?php echo $nxb ?></td>
                     <td><?php echo $price ?></td>
                     <td><?php echo $discount ?></td>
                     <td> <a href="?action=act_edit_form&isbn=<?php echo $isbn ?>" class="btn btn-outline-info btn-fw btn-sm">edit</a></td>
                     <td> <a href="?action=act_delete&isbn=<?php echo $isbn ?>" class="btn btn-outline-danger btn-fw btn-sm">delete</a></td>
                 </tr>
             <?php
                endforeach
                ?>
         </tbody>
     </table>
 </div>