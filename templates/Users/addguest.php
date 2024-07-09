
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

<section class="main">
  <div class="container" style="margin-top: 200px">



  <?php echo $this->Form->create(null, [ 'url' => ['controller' => 'Users', 'action' => 'addguest']]); ?>

  

<div class="row g-3">
  <div class="col-md-6">
    <?php echo $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'placeholder' => 'Email']); ?>
  </div>

</div>

<div class="row g-3">
  <div class="col-md-6">
    <?php echo $this->Form->control('name', ['type' => 'text','class' => 'form-control', 'placeholder' => 'First name']); ?>
  </div>
  <div class="col-md-6">
    <?php echo $this->Form->control('lastname', ['type' => 'text','class' => 'form-control', 'placeholder' => 'Last name']); ?>
  </div>
</div>


<div class="row g-3">
  <div class="col-md-6">
    <?php echo $this->Form->control('phone_number', ['type' => 'tel', 'class' => 'form-control', 'placeholder' => 'Phone No']); ?>
  </div>
  <div class="col-12">
    <?php echo $this->Form->control('address', ['class' => 'form-control', 'placeholder' => 'Address']); ?>
  </div>
</div>

<div class="row g-3">
  <div class="col-md-6">
    <?php echo $this->Form->control('city', ['class' => 'form-control', 'placeholder' => 'City']); ?>
  </div>
  <div class="col-md-4">
    <?php echo $this->Form->control('state', ['class' => 'form-control', 'placeholder' => 'State']); ?>
  </div>
  <div class="col-md-2">
    <?php echo $this->Form->control('zip', ['class' => 'form-control', 'placeholder' => 'Zip']); ?>
  </div>
</div>


<div class="row g-3">
  <div class="col-12">
    <?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-danger']); ?>
  </div>
</div>

<?php echo $this->Form->end(); ?>
</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>

