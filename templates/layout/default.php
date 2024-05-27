<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>


 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="#">
        <h2>Pizza.</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav" style="font-size:medium">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pizza">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pizza">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pizza">menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pizza">faq</a>
          </li>
        </ul>
      </div>

      <div class=" d-flex justify-content-end" style="font-size:medium">
        <div>
          <ul style="list-style-type: none; display:flex; font-size:large">
            <li>
              <button type="button" class="btn"><a href="profile" href="#pro"><i class="bi bi-person-fill" ></i></a></button>
            </li>
            <li>
    <button class="btn" type="button">
        <a href="<?php echo url(['controller' => 'cart', 'action' => 'checkout']); ?>">
            <i class="bi bi-cart-fill"></i>
        </a>
    </button>
</li>

            <li>
              <button class="btn " type="button"><a href="billing"><i class="bi bi-box2-fill" href="#checkout"></i></a></button>
            </li>

            <li>
              <button type="button" class="btn btn-danger"><?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']); ?></button>

            </li>
          </ul>
        </div>
      </div>


    </div>

  </nav> 
    
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    <div class="container mt-5 mb-5" style="padding-top:100px">
        <div class="row">
          <div class="col-lg-3 text-center">
            <div class="mb-3"><i class="bi bi-telephone-fill bg-danger text-white p-2" style="border-radius:100%; "></i></div>
            <h6>Phone Number</h6>
            <p style="font-size: small;">+123-456-7890 <br>+111-222-3333</p>

          </div>
          <div class="col-lg-3 text-center">
            <div class="mb-3"><i class="bi bi-geo-alt-fill bg-danger text-white p-2" style="border-radius: 50%;"></i></div>
            <h6>Address</h6>
            <p style="font-size: small;">nagpur,india-4400204</p>

          </div>
          <div class="col-lg-3 text-center">
            <div class="mb-3"><i class="bi bi-clock bg-danger text-white p-2" style="border-radius: 50%;"></i></div>
            <h6>Opening hours</h6>
            <p style="font-size: small;">6:00 pm-11:00 pm</p>

          </div>
          <div class="col-lg-3 text-center">
            <div class="mb-3"> <i class="bi bi-envelope-fill bg-danger text-white p-2" style="border-radius: 50%;"></i></div>
            <h6>Email Address</h6>
            <p style="font-size: small;">khushi@123<br>
              demo@123</p>
          </div>
        </div>
      </div>
      <div class="container text-center ">copywrite @Algorism | all rights reserved! </div>
  </section>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>
</html>
