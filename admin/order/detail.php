<p>Subtotal:<span>$<?php echo $total ?></span></p>
<p>Status:<span><?php echo $status ?></span></p>
<p>Address:<span><?php echo $address ?></span></p>
<p>Email:<span><?php echo $email ?></span></p>
<p>Phone number:<span><?php echo $phone_number ?></span></p>
<h5>Order Detail:</h5>
<table class="table">
    <thead class="alert-success">
        <tr>
            <th></th>
            <th>Book'name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($order_details as $order_detail) :
            extract($order_detail);
        ?>
            <tr>
                <td><img src="<?php echo $CONTENT_URL ?>/images/<?php echo $image ?>" alt=""></td>
                <td><?php echo $title ?></td>
                <td>$<?php echo $price ?></td>
                <td><?php echo $quantity ?></td>
                <td>$<?php echo $total ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>