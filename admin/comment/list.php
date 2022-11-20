 <h4 class="card-title">Comment list</h4>
 <div class="table-responsive">
     <table class="table">
         <thead>
             <tr>
                 <th>User Name</th>
                 <th>Email</th>
                 <th>Content</th>
                 <th></th>
                 <th></th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($comments as $comment) :
                    extract($comment);
                    $account = account_select_by_id($account_id);
                ?>
                 <tr>
                     <td><?php echo $account['name']; ?></td>
                     <td><?php echo $account['email']; ?></td>
                     <td><?php echo $content; ?></td>
                     <?php
                        if ($isApprove == "yes") :
                        ?>
                         <td><a href="?action=act_unapprove&comment_id=<?php echo $id ?>">unapprove</a></td>
                     <?php else : ?>
                         <td><a href="?action=act_approve&comment_id=<?php echo $id ?>">approve</a></td>
                     <?php endif ?>
                     <td> <a href="?action=act_delete&comment_id=<?php echo $id ?>" class="btn btn-outline-danger btn-fw btn-sm">delete</a></td>
                 </tr>
             <?php
                endforeach
                ?>
         </tbody>
     </table>
 </div>