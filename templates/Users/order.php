<!-- order.ctp -->

<h1>Order Details</h1>

<?php foreach ($Orderdetails as $order): ?>
    <div>
        <p>Email: <?= h($order->email) ?></p>
        <p>Name: <?= h($order->name) ?> <?= h($order->lastname) ?></p>
        <p>Address: <?= h($order->address) ?>, <?= h($order->city) ?>, <?= h($order->state) ?> <?= h($order->zip) ?></p>
        <!-- Add more fields as needed -->
    </div>
    <hr>
<?php endforeach; ?>
