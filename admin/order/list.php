 <h4 class="card-title">Order list</h4>
 <div class="table-responsive">
     <table class="table">
         <thead>
             <tr>
                 <th>Email</th>
                 <th>Phone number</th>
                 <th>Address</th>
                 <th>Status</th>
                 <th>Subtotal</th>
                 <th>Note</th>
                 <th></th>
                 <th></th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($orders as $order) :
                    extract($order);
                ?>
                 <tr>
                     <td><?php echo $email ?></td>
                     <td><?php echo $phone_number ?></td>
                     <td><?php echo $address ?></td>
                     <td><?php echo $status ?></td>
                     <td>$<?php echo $total ?></td>
                     <td><?php echo $note ?></td>
                     <td> <a href="?action=act_detail&order_id=<?php echo $id ?>">detail</a></td>
                     <td> <a href="?action=act_delete&order_id=<?php echo $id ?>" class="btn btn-outline-danger btn-fw btn-sm">delete</a></td>
                 </tr>
             <?php
                endforeach
                ?>
         </tbody>
     </table>
 </div>