

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

<!-- checkout.ctp -->
<section class="main ">

<div class="container" style="margin-top: 100px;">
    <h1>Cart</h1>
    <?= $this->Form->create(null, ['url' => ['controller' => 'Orders', 'action' => 'confirmOrder']]) ?>
    <div class="row">
        <div class="col-6 mx-auto shadow p-3 mb-5 bg-body rounded">
            <?php
            $totalPrice = 0;
            foreach ($cartItems as $item):
                // Extracting crust and size prices from their strings
                preg_match('/\d+/', $item['crust'], $crustPrice);
                preg_match('/\d+/', $item['size'], $sizePrice);

                // Calculating the total price for the item
                $crustPriceValue = (int)$crustPrice[0];
                $sizePriceValue = (int)$sizePrice[0];
                $itemTotalPrice = $crustPriceValue + $sizePriceValue;
                $totalPrice += $itemTotalPrice * $item['quantity'];
            ?>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="text-center"><img src="<?php echo h($item['image']); ?>" alt="<?php echo h($item['name']); ?>" style="width: 100px; height: 100px;"></div>
                        <h3 class="text-center mt-2"><?php echo h($item['name']); ?></h3>
                    </div>
                    <div class="col-6">
                        <div class="cart-item">
                            <p><?php echo h($item['description']); ?></p>
                            <p>Crust: <?php echo h($item['crust']); ?> </p>
                            <p>Size: <?php echo h($item['size']); ?> </p>
                            <p>Quantity: <?php echo h($item['quantity']); ?></p>
                            <p>Price: <?php echo $itemTotalPrice; ?></p>   
                        </div>
                    </div>
                </div>
                
                <hr>
            <?php endforeach; ?>
            <div class="text-center" style="font-size: large;"><p>Total Price: <span id="tprice"><?php echo $totalPrice; ?></span></p></div>
            <?= $this->Form->hidden('totalPrice', ['value' => $totalPrice]); ?>S
           
            <div class="mt-5 text-center">
            <?= $this->Form->button('Confirm Order', ['class' => 'btn btn-primary']) ?>

            </div>
           
        </div>
    </div>
   
<?= $this->Form->end() ?>
   
</div>




</section>






   





  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>