 <h4 class="card-title">Account list</h4>
 <a href="<?php echo $ADMIN_URL ?>/book/?action=act_insert_form">Add account</a>
 <div class="table-responsive">
     <table class="table">
         <thead>
             <tr>
                 <th>name</th>
                 <th>email</th>
                 <th>Role</th>
                 <th>isActive</th>
                 <th></th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($accounts as $account) :
                    extract($account);
                ?>
                 <tr>
                     <td><?php echo $name ?></td>
                     <td><?php echo $email ?></td>
                     <td><?php echo $role ?></td>
                     <td><?php echo $isActive ?></td>
                     <td>
                         <?php if ($isActive == "no") : ?>
                             <form method="post" action="">
                                 <input type="hidden" name="action" value="act_activate">
                                 <input type="hidden" name="account_id" value="<?php echo $id ?>">
                                 <button style="background-color:white;color:#007bff;border:none">activate</button>
                             </form>
                         <?php else : ?>
                             <form method="post" action="">
                                 <input type="hidden" name="action" value="act_deactivate">
                                 <input type="hidden" name="account_id" value="<?php echo $id ?>">
                                 <button style="background-color:white;color:#007bff;border:none">deactivate</button>
                             </form>
                         <?php endif ?>
                     </td>
                     <td><a href="?action=act_delete&id=<?php echo $id ?>" class="btn btn-outline-danger btn-fw btn-sm">delete</a></td>
                 </tr>
             <?php
                endforeach
                ?>
         </tbody>
     </table>
 </div>