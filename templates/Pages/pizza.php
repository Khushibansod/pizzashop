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

  

  <section class="main" id="home">
    <div class="caraousel ">
      <div><img src="../webroot/img/home-bg.jpg" class="img-fluid" style="position:absolute;height:600px;width:100%"></div>


      <div class="overlay-content " style="position:relative ;padding:50px">
        <div class="row" style="padding-top: 80px;">
          <div class="col-lg-5"><img src="../webroot/img/hmbg-1.png" id="profileImage" class="animate__animated animate__bounceInLeft animate__infinite infinite animate__slow 1s  ">

          </div>
          <div class="col-lg-6 mx-auto my-auto">
            <h1 class="animate__animated animate__bounceInRight animate__infinite infinite animate__slow 1s   text-white text-center" style="font-size:xx-large" id="profileName">Homemade Pepperoni Pizza</h1>

            <div class="d-grid gap-2 d-sm-block text-center ">
              <button class="btn btn-light" type="button" id="prevButton"><i class="bi bi-arrow-left"></i></button>
              <button class="btn btn-light" type="button" id="nextButton"><i class="bi bi-arrow-right"></i></button>
            </div>
          </div>




        </div>
      </div>

    </div>
    <div class="container mt-5 mb-5 " id="about" style="padding-top:50px">
      <h2 style="text-align: center;">About Us</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100 p-3">
            <img src="../webroot/img/about-1.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">made with love</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#menu" style="text-decoration:none;color:white"> 
            <div class="d-grid  col-6 mx-auto">
              <button class="btn btn-danger" type="button">Our Menu</button>
            </div>
          </a> 
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="../webroot/img/about-2.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">30 minutes delivery</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#menu" style="text-decoration:none;color:white"> 
            <div class="d-grid  col-6 mx-auto">
              <button class="btn btn-danger" type="button">Our Menu</button>
            </div>
          </a> 
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="../webroot/img/about-3.svg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">share with friends</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <a href="#menu" style="text-decoration:none;color:white"> 
            <div class="d-grid  col-6 mx-auto">
              <button class="btn btn-danger" type="button">Our Menu</button>
            </div>
          </a> 
          </div>
        </div>
      </div>
    </div>
    <!-- <..........ccccccc.........> -->

    <div class="container d-flex">
    <div class="container" style="width: 80%;">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="row">
                    <?php foreach($results as $i): ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card h-100 p-3">
                                <div class="row">
                                    <div class="col-8 mx-auto">
                                        <?= $this->Html->image($i->image, ['class' => 'img-fluid']) ?>
                                        <?= $this->Form->hidden('product_id', ['value' => $i->id, 'class' => 'form-control']) ?>
                                        <?= $this->Form->hidden('image', ['value' => $i->image, 'class' => 'form-control']) ?>
                                    </div>
                                    <h4><?= $i->name ?></h4>
                                    <p style="font-size: small;">
                                        <?= $i->description ?>
                                    </p>
                                    <?= $this->Form->hidden('description', ['value' => $i->description, 'class' => 'form-control']) ?>
                                </div>
                                <hr>
                                <div class="row mb-4">
                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <div style="font-size: small;" class="mt-3">Size:</div>
                                            <?= $this->Form->hidden('product_name', ['value' => $i->name]) ?>
                                            <?= $this->Form->select('size', [
                                                'Regular '.$i->regular => 'Regular ' . $i->regular,
                                                'Medium ' .$i->medium => 'Medium ' . $i->medium,
                                                'Large ' .$i->large => 'Large ' . $i->large
                                            ], ['class' => 'form-select form-select-lg mt-3 mx-4']) ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <div style="font-size: small;" class="mt-3">Crust:</div>
                                            <?= $this->Form->select('crust', [
                                                'Gluten-Free' . $i->glutenfree => 'Gluten-Free ' . $i->glutenfree,
                                                'Thin Crust '. $i->thincrust => 'Thin Crust ' . $i->thincrust,
                                                'Stuffed Crust '.$i->stuffedcrust => 'Stuffed Crust ' . $i->stuffedcrust
                                            ], ['class' => 'form-select form-select-lg mt-3 mx-4']) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid col-6 mx-auto">
                                    <button class="btn btn-danger add-to-cart-button">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="width: 25%;">
    <?= $this->Form->create(null, ['id' => 'cart-form', 'url' => ['controller' => 'Cart', 'action' => 'checkout']]) ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card h-100 p-3">
                <div class="row">
                    <div class="col-8 mx-auto">
                        <div id="cart-items" class="cart-items disabled">
                            <div class="text-center">SHOPPING CART</div>
                            <div id="cart-items-container" class="d-grid text-center">
                               
                            </div>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <button type="button" onclick="fetchCartAndSubmit()" class="btn btn-danger">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>


   




    <div class="container mb-5 " id="faq" style="padding-top:100px">
      <h2 class="heading text-center">FaQ<h2>
          <div class="accordion mt-3 col-6 mx-auto " id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h6>how does it work?</h6>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p style="font-size:medium;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur nostrum sapiente obcaecati in minus!</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h6>how long does it take for delivery?</h6>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p style="font-size:medium;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur nostrum sapiente obcaecati in minus!</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h6>can i order for huge parties?</h6>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p style="font-size:medium;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur nostrum sapiente obcaecati in minus!</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <h6>how much protein it contains?</h6>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p style="font-size:medium;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur nostrum sapiente obcaecati in minus!</p>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <h6>Is it cooked with oil?</h6>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p style="font-size:medium;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur nostrum sapiente obcaecati in minus!</p>
                </div>
              </div>
            </div>
          </div>
    </div>


  </section>

  <!-- <script>
    function fetchCartAndSubmit() {
        // Fetch cart items using JavaScript (you can implement this based on your cart implementation)
        const cartItems = [
            // Sample cart items data (replace with actual data fetching)
            {
                id: 1,
                name: "Product 1",
                price: 10.99,
                quantity: 2
            },
            {
                id: 2,
                name: "Product 2",
                price: 15.99,
                quantity: 1
            }
        ];

        // Clear existing cart items
        const cartItemsContainer = document.getElementById("cart-items-container");
        cartItemsContainer.innerHTML = "";

        // Populate form fields with cart items
        cartItems.forEach(item => {
            const cartItemHTML = `
                <input type="hidden" name="cart_items[${item.id}][id]" value="${item.id}">
                <input type="hidden" name="cart_items[${item.name}][name]" value="${item.name}">
                <input type="hidden" name="cart_items[${item.crust}][crust]" value="${item.crust}">
                <input type="hidden" name="cart_items[${item.quantity}][quantity]" value="${item.quantity}">
                <input type="hidden" name="cart_items[${item.description}][description]" value="${item.description}">
                <input type="hidden" name="cart_items[${item.size}][size]" value="${item.size}">
            `;
            cartItemsContainer.insertAdjacentHTML("beforeend", cartItemHTML);
        });

        // Submit the form
        document.getElementById("cart-form").submit();
    }
</script> -->
<script>
    function fetchCartAndSubmit() {
        // Fetch cart items using JavaScript (you can implement this based on your cart implementation)
        const cartItems = [];
        const cartItemElements = document.querySelectorAll('.cart-item');
        
        cartItemElements.forEach(itemElement => {
            const itemName = itemElement.querySelector('h4').textContent;
            const itemDescription = itemElement.querySelector('p:nth-of-type(1)').textContent;
            const selectedCrust = itemElement.querySelector('p:nth-of-type(2)').textContent.split(': ')[1];
            const selectedSize = itemElement.querySelector('p:nth-of-type(3)').textContent.split(': ')[1];
            const quantity = itemElement.querySelector('input[type="number"]').value;
            const itemImage = itemElement.querySelector('.cart-item-image').src;


            cartItems.push({
                name: itemName,
                description:itemDescription,
                crust: selectedCrust,
                size: selectedSize,
                quantity: quantity,
                image: itemImage
                
            });
        });

        // Populate form fields with cart items
        const form = document.getElementById("cart-form");
        const cartItemsInput = document.createElement('input');
        cartItemsInput.type = 'hidden';
        cartItemsInput.name = 'cart_items';
        cartItemsInput.value = JSON.stringify(cartItems);
        form.appendChild(cartItemsInput);

        // Submit the form
        form.submit();
    }
</script>




<script>
  document.addEventListener("DOMContentLoaded", function() {
    const cartItemsContainer = document.getElementById("cart-items");
    const addToCartButtons = document.querySelectorAll(".btn-danger");
    const checkoutButton = document.createElement("button");
    checkoutButton.textContent = "Checkout";
    checkoutButton.classList.add("checkout-button");
    checkoutButton.style.display = "none"; // Hide the checkout button initially

    // Append the checkout button to the parent of the cart items container
    cartItemsContainer.parentElement.appendChild(checkoutButton);

    // Initially disable the cart items container
    cartItemsContainer.classList.add("disabled");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();

            // Get product details
            const card = this.closest(".card");
            const itemName = card.querySelector("h4").textContent;
            const itemImage = card.querySelector("img").src;
            const itemDescription = card.querySelector("p").textContent; // Assuming first paragraph for description
            const selectedCrust = card.querySelector("select[name='crust']").value;
            const selectedSize = card.querySelector("select[name='size']").value;

            // Create quantity selector
            const quantityInput = document.createElement("input");
            quantityInput.type = "number";
            quantityInput.min = 1;
            quantityInput.max = 100;
            quantityInput.value = 1;
            quantityInput.defaultValue = 1;

            // Create a span element to wrap the quantity label text
            const quantityLabel = document.createElement("span");
            quantityLabel.textContent = "Quantity: ";
            quantityLabel.style.fontWeight = "normal"; // Remove bold styling from the label
            quantityLabel.style.fontSize = "smaller"; // Decrease the font size of the label

            // Append the quantity label and input to a container element
            const quantityContainer = document.createElement("div");
            quantityContainer.classList.add("quantity-selector");
            quantityContainer.appendChild(quantityLabel);
            quantityContainer.appendChild(quantityInput);

            // Create delete button
            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.classList.add("delete-button");
            deleteButton.addEventListener("click", function() {
                cartItemsContainer.removeChild(cartItemElement);
                // Disable the cart items container if it's empty
                if (cartItemsContainer.children.length === 0) {
                    cartItemsContainer.classList.add("disabled");
                    // Hide the checkout button when cart is empty
                    checkoutButton.style.display = "none";
                }
            });

            // Create cart item element
            const cartItemElement = document.createElement("div");
            cartItemElement.classList.add("cart-item");
            cartItemElement.innerHTML = `
                <img src="${itemImage}" alt="${itemName}" class="cart-item-image">
                <div class="cart-item-details">
                    <h4>${itemName}</h4>
                    <p>${itemDescription}</p>
                    <p>Crust: ${selectedCrust}</p>
                    <p>Size: ${selectedSize}</p>
                    <div class="quantity-selector">
                        <label for="quantity" style="font-size:small"></label>
                        ${quantityContainer.outerHTML} 
                    </div>
                </div>
            `;
            cartItemElement.appendChild(deleteButton);

            cartItemsContainer.appendChild(cartItemElement);

            // Enable the cart items container if it's the first item
            if (cartItemsContainer.children.length === 1) {
                cartItemsContainer.classList.remove("disabled");
                // Show the checkout button when first item is added
                checkoutButton.style.display = "block";
            }
        });
    });

    // Checkout button event listener
    checkoutButton.addEventListener("click", function() {
        // Perform checkout action
        console.log("Checkout clicked");
        // Perform form submission or other actions as needed
    });
});

  </script>




<!-- <.....home-page js...> -->

  <script>
   var currentSetIndex = 0; // Variable to track current set index
    var imageSets = [
      ["../webroot/img/hmbg-1.png", "Homemade-Pepperoni"], // Set 1
      ["../webroot/img/hmbg-2.png", "Veggie Delight "],
      ["../webroot/img/hmbg-3.png", "Hawaiian Luau"], // Set 2
      // Add more sets as needed
    ];

    // Function to update image and name based on current set index
    function updateImageAndName() {
      var setImageAndName = imageSets[currentSetIndex];
      document.getElementById("profileImage").src = setImageAndName[0];
      document.getElementById("profileName").textContent = setImageAndName[1];
    }

    // Function to go to the previous set
    function goToPreviousSet() {
      currentSetIndex = (currentSetIndex === 0) ? imageSets.length - 1 : currentSetIndex - 1;
      updateImageAndName();
    }

    // Function to go to the next set
    function goToNextSet() {
      currentSetIndex = (currentSetIndex === imageSets.length - 1) ? 0 : currentSetIndex + 1;
      updateImageAndName();
    }

    // Add event listeners to navigation buttons
    document.getElementById("prevButton").addEventListener("click", goToPreviousSet);
    document.getElementById("nextButton").addEventListener("click", goToNextSet);

    // Initially update image and name
    updateImageAndName();
  </script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>
</html>