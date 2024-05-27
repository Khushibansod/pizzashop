<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

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
          <!-- <li class="nav-item">
            <a class="nav-link" href="pizza">order</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="pizza">faq</a>
          </li>
        </ul>
      </div>

      <div class=" d-flex justify-content-end" style="font-size:medium">
            <div >
            <ul style="list-style-type: none; display:flex; font-size:large">
              <li>
              <button type="button" class="btn"><a href="profile"><i class="bi bi-person-fill"></i></a></button>
              </li>
              <li>
              <button class="btn " type="button" ><a href="cart"><i class="bi bi-cart-fill" href="#cart"></i></a></button> 
              </li>
              <li>
              <button class="btn " type="button" ><a href="billing"><i class="bi bi-box2-fill" href="#billing"></i></a></button>
              </li>
              
              <li>
              <button type="button" class="btn btn-danger"><?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']);?></button> 

              </li>
            </ul> 
          </div> 
          </div>


    </div>

  </nav>
  <section class="main">
    <div class="container mt-5 " style="padding-top:80px">

      <div class="row">
        <div class="col-lg-4 mx-auto shadow p-5 bg-white ">
          <div class="row">
            <div class="col-5 mx-auto">
            <img src="../webroot/img/pizza-1.jpg" class="img-fluid">
            </div>
          </div>
          <div style="font-size: large;"> Name : pizza-1</div>
          <div class="d-flex ">
          <div style="font-size: large;" class="mt-3">Size:</div>
          <select class="form-select form-select-lg mt-3 mx-4" aria-label=".form-select-sm example">
            
            <option selected value="1">small</option>
            <option value="2">medium</option>
            <option value="3">large</option>
          </select>
          </div>

          <div class="d-flex ">
          <div style="font-size: large;" class="mt-3">Quantity:</div>
          <div class="number-spinner" style="width: 200px;">
      <!-- <button type="button" class="btn btn-decrement">-</button> -->
      <input type="number" class="form-control" value="1" min="1">
      <!-- <button type="button" class="btn btn-increment">+</button> -->
    </div>
          </div>

          <div class="d-flex">
          <div style="font-size: large;" class="mt-3">Crust:</div>
          <select class="form-select form-select-lg mt-3 mx-4" aria-label=".form-select-sm example">
          
            <option selected value="1">Gluten-Free</option>
            <option value="2">Thin Crust</option>
            <option value="3">Stuffed Crust</option>
          </select>
          </div>
          <div style="font-size: large;" class="mt-3"> Extra cheese : <div class="form-check form-check-inline" style="font-size:small;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1" style="font-size:small;">Yes</label>
            </div>
            <div class="form-check form-check-inline" style="font-size:small;">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2" style="font-size:small;">No</label>
            </div>
          </div>
          <div class="d-flex">
          <div style="font-size: large;" class="mt-3">Toppings:</div>
          <select class="form-select form-select-lg mt-3 mx-4" aria-label=".form-select-sm example">
          <option selected value="1">Pepperoni</option>
            <option value="2">Mushrooms</option>
            <option value="3">Sausage</option>
            <option value="4">Onions</option>
            <option value="5">Bacon</option>
          </select>
          </div>
          
          <div style="font-size: large;" class="mt-2"> Price : <p>Rs. 299</p></div>
          <div class="d-grid  col-6 mx-auto">
                  <button class="btn btn-danger" type="button">Add to Cart</button>
                </div>
          
        </div>
      </div>

    </div>
    
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









  
  
  <script>

$(document).ready(function() {
  $('.number-spinner button').click(function() {
    var btn = $(this);
    var input = btn.closest('.number-spinner').find('input');
    var oldValue = parseInt(input.val());
    var newVal = 0;

    if (btn.hasClass('btn-increment')) {
      newVal = oldValue + 1;
    } else {
      if (oldValue > 1) {
        newVal = oldValue - 1;
      } else {
        newVal = 1; // Don't allow going below 1
      }
    }

    input.val(newVal);
  });
});

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>