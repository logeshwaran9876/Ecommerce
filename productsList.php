<?php
session_start();



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sneakers Ecommerce</title>
    <link
      href="https://fonts.googleapis.com/css?family=Kumbh+Sans:100,200,300,regular,500,600,700,800,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="./script.js" defer></script>

    <style>
       @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);
/* Card hover effect */
.trendy-card:hover {
    transform: scale(1.05);
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

/* Image hover effect */
.trendy-card:hover .trendy-image {
    transform: scale(1.1);
    transition: transform 0.3s;
    z-index: 1;
}

/* Badge static positioning */
.trendy-badge {
    z-index: 2;
    position: absolute;
    top: 0.5rem;
    right: 0.5rem;
    background-color: #dc3545;
    color: white;
    padding: 0.3rem 0.8rem;
    font-size: 0.9rem;
    border-radius: 0.5rem;
    transition: transform 0.3s, background-color 0.3s;
}

/* Badge hover effect */
.trendy-badge:hover {
    transform: scale(1.1);
    background-color: #c82333;
}

      body {
          font-family: 'Calibri', sans-serif !important
      }
        body {
        max-width: 100%;          /* Set a fixed maximum width, such as 400px */
        word-wrap: break-word;     /* Breaks long words onto a new line if needed */
        overflow-wrap: break-word; /* Ensures wrapping for long words across browsers */
        }

/* Card hover effect */
.trendy-card:hover {
    transform: scale(1.05);
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

/* Badge hover effect */
.trendy-badge:hover {
    background-color: #dc3545;
    transform: scale(1.1);
    transition: transform 0.3s, background-color 0.3s;
}

/* Image hover effect */
.trendy-card:hover .trendy-image {
    transform: scale(1.1);
}

/* Button hover effect */
.trendy-button {
    transition: background-color 0.3s, transform 0.3s;
}

.trendy-button:hover {
    background-color: #17a2b8;
    color: #fff;
    transform: scale(1.05);
}

/* Title hover effect */
.trendy-title:hover {
    color: #007bff;
    text-decoration: underline;
    transition: color 0.3s;
}

/* Description hover effect */
.trendy-description:hover {
    color: #6c757d;
    font-weight: bold;
    transition: color 0.3s, font-weight 0.3s;
}

    </style>

      <!--
      - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- jQuery -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

    <!--
      - google font link
    -->
     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
        <style>
          
        </style>

    </head>
    <body>
    


<div class="notification-toast" data-toast>

  <button class="toast-close-btn" data-toast-close>
    <ion-icon name="close-outline"></ion-icon>
  </button>

  <div class="toast-banner">
    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
  </div>

  <div class="toast-detail">

    <p class="toast-message">
      Someone in new just bought
    </p>

    <p class="toast-title">
      Rose Gold Earrings
    </p>

    <p class="toast-meta">
      <time datetime="PT2M">2 Minutes</time> ago
    </p>

  </div>

</div>





<header>

  <div class="header-top">

    <div class="container">

      <ul class="header-social-container">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

      </ul>

      <div class="header-alert-news">
        <p>
          <b>Free Shipping</b>
          This Week Order Over - $55
        </p>
      </div>

      <div class="header-top-actions">

        <select name="currency">

          <option value="usd">USD &dollar;</option>
          <option value="eur">EUR &euro;</option>

        </select>

        <select name="language">

          <option value="en-US">English</option>
          <option value="es-ES">Espa&ntilde;ol</option>
          <option value="fr">Fran&ccedil;ais</option>

        </select>

      </div>

    </div>

  </div>

  <div class="header-main">

<div class="container">

  <a href="index.php" class="header-logo">
    <h1 style="color: black; text-decoration: none; ">Shopping</h1>
  </a>

  <div class="header-search-container">

    <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

    <button class="search-btn">
      <ion-icon name="search-outline"></ion-icon>
    </button>

  </div>

  <div class="header-user-actions">

  <a href="order_products" class="action-btn">
  <h1>
  <i class="las la-shopping-cart"></i>
  </h1>
  </a>
  
  <a href="wishlist" class="action-btn">
    <ion-icon name="heart-outline"></ion-icon>
    <span class="count">0</span>
  </a>

  <a href="cart" class="action-btn">
    <ion-icon name="bag-handle-outline"></ion-icon>
    <span class="count">0</span>
  </a>

  
<?php


$isLoggedIn = isset($_SESSION['user_id']);
?>

<!-- The Auth Button -->
<button class="action-btn" id="authButton">
    <i class="las <?php echo $isLoggedIn ? 'lar la-user [&#xf007;]' : 'las la-door-open'; ?>"></i>
    <?php  $isLoggedIn ? 'Logout' : 'Login'; ?>
</button>

<script>
   
    document.getElementById('authButton').addEventListener('click', function () {
        <?php if ($isLoggedIn): ?>
        
            window.location.href = 'account'; 
        <?php else: ?>
        
            window.location.href = '../login.php'; 
        <?php endif; ?>
    });
</script>


    

  </div>

</div>

</div>
  <nav class="desktop-navigation-menu">
    <div class="container">
        <ul class="desktop-menu-category-list" id="categoryList">
            <li class="menu-category">
                <a href="" class="menu-title">Home</a>
            </li>
        </ul>
    </div>
</nav>





<script>
$(document).ready(function() {
 
        $.ajax({
            url: 'api/category?limit=9', 
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#categoryList').empty();

                if (Array.isArray(data) && data.length) {
                    data.forEach(function(category) {
                        $('#categoryList').append(`
                            <li class="menu-category">
                                <a href="productsList?id=${category.category_id}" class="menu-title">${category.category_name}</a>
                            </li>
                        `);
                    });
                } else {
                    $('#result').html('<p>No categories found.</p>');
                }
            },
            error: function(jqXHR) {
                $('#result').html('<p>Error: ' + jqXHR.status + ' ' + jqXHR.statusText + '</p>');
            }
        });
    });

</script>














  <div class="mobile-bottom-navigation">

    <button class="action-btn" data-mobile-menu-open-btn>
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <button class="action-btn">
      <ion-icon name="bag-handle-outline"></ion-icon>

      <span class="count">0</span>
    </button>

    <button class="action-btn">
      <ion-icon name="home-outline"></ion-icon>
    </button>

    <button class="action-btn">
      <ion-icon name="heart-outline"></ion-icon>

      <span class="count">0</span>
    </button>

    <button class="action-btn" data-mobile-menu-open-btn>
      <ion-icon name="grid-outline"></ion-icon>
    </button>

  </div>

  <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

    <div class="menu-top">
      <h2 class="menu-title">Menu</h2>

      <button class="menu-close-btn" data-mobile-menu-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button>
    </div>

    <ul class="mobile-menu-category-list">

      <li class="menu-category">
        <a href="#" class="menu-title">Home</a>
      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Men's</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Shirt</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Shorts & Jeans</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Safety Shoes</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Wallet</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Women's</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Dress & Frock</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Earrings</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Necklace</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Makeup Kit</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Jewelry</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Earrings</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Couple Rings</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Necklace</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Bracelets</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">

        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">Perfume</p>

          <div>
            <ion-icon name="add-outline" class="add-icon"></ion-icon>
            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
          </div>
        </button>

        <ul class="submenu-category-list" data-accordion>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Clothes Perfume</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Deodorant</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Flower Fragrance</a>
          </li>

          <li class="submenu-category">
            <a href="#" class="submenu-title">Air Freshener</a>
          </li>

        </ul>

      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Blog</a>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Hot Offers</a>
      </li>

    </ul>

    <div class="menu-bottom">

      <ul class="menu-category-list">

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Language</p>

            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">English</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Espa&ntilde;ol</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Fren&ccedil;h</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Currency</p>
            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">USD &dollar;</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">EUR &euro;</a>
            </li>
          </ul>
        </li>

      </ul>

      <ul class="menu-social-container">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

  </nav>

</header>

<style>
  #grid{
    margin-left: 50px;
  }
</style>


<script>
    function getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

$(document).ready(function() {
  
    const category_id = getUrlParameter('id') 
    
  
    $.ajax({
        url: `api/categoryProducts?id=${category_id}`,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#contain').empty();
            if (data) {
              
                $('#contain').append(`
                  <p>${data.category_id}</p>
                   <p>${data.category_name}</p>
                `);
            } else {
                $('#contain').html('<p>category not found.</p>');
            }
        },
        error: function(jqXHR) {
            $('#contain').html('<p>Error: ' + jqXHR.status + ' ' + jqXHR.statusText + '</p>');
        }
    });
});
</script>





<div class="product-main">



<div class="product-grid mt-4" id="grid" >




</div>

</div>


<script>
    function getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

$(document).ready(function() {
  
    const category_id = getUrlParameter('id') 
    

    $.ajax({
        url: `api/categoryProducts?id=${category_id}`,
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#grid').empty();
  
                  if (Array.isArray(data) && data.length) {
                      data.forEach(function(products) {
                        let productPrice = parseInt(products.product_price);
                        let thirtyPercent = parseInt((productPrice * 30) / 100);
                        let discount = parseInt(productPrice + thirtyPercent);

                        $('#grid').append(`
                           <div class="col">
    <div class="card shadow-sm position-relative trendy-card" style="width: 18rem; height: auto;">
        <!-- Discount Badge -->
        <div class="badge trendy-badge">20% OFF</div>
        <img class="rounded mx-auto d-block mt-2 trendy-image" 
            style="width: 80%; height: 200px; " 
            src="${products.product_image}" 
            alt="${products.product_name}">
        <div class="card-body">
            <h5 class="card-title text-truncate trendy-title">${products.product_name}</h5>
            <p class="card-text small text-muted trendy-description">${products.product_description}</p>
            <div class="price-section text-center mb-3">
                <span class="original-price text-muted text-decoration-line-through">$${discount}.99</span>
                <span class="discounted-price text-success fw-bold">$${products.product_price}</span>
            </div>
            <div class="d-flex flex-column align-items-center">
                <a href="productPage?id=${products.product_id}" 
                  class="btn btn-outline-primary mb-2 showcase-category trendy-button" 
                  style="width: 230px;">
                    <i class="la la-eye"></i> Show Product
                </a>
                <button class="btn btn-success add-to-cart mb-2 trendy-button but" 
                        data-id="${products.product_id}" 
                        style="width: 230px;">
                    <i class="la la-cart-plus"></i> Add to Cart
                </button>
            </div>
        </div>
    </div>
</div>

                        `);


                      });
                  } else {
                      $('#result').html('<p>No Products found.</p>');
                  }
              },
              error: function(jqXHR) {
                  $('#result').html('<p>Error: ' + jqXHR.status + ' ' + jqXHR.statusText + '</p>');
              }
          });
      });

</script>

<script>
$(document).ready(function() {
    $(document).on("click", ".but", function() {
        const id = $(this).data('id');  
      
        const quantity = 1;

        $.ajax({
            url: `api/cart?id=${id}`,
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert(response.success);
                } else if (response.error) {
                    if (response.error === "Product already exists in the cart") {
                        const currentQuantity = response.current_quantity;
                        const confirmUpdate = confirm(`This product is already in the cart with a quantity of ${currentQuantity}. Do you want to update the quantity?`);
                        
                        if (confirmUpdate) {
                       
                            $.ajax({
                                url: 'api/cart?action=update',
                                type: 'POST',
                                data: {
                                  
                                    product_id: id,
                                    new_quantity: currentQuantity + quantity
                                },
                                dataType: 'json',
                                success: function(updateResponse) {
                                    if (updateResponse.success) {
                                        alert(updateResponse.success);
                                    } else {
                                        alert(updateResponse.error);
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    alert("An error occurred: " + textStatus + " - " + errorThrown);
                                }
                            });
                        }
                    } else {
                        alert(response.error); 
                    }
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("An error occurred: " + textStatus + " - " + errorThrown);
            }
        });
    });
});



</script>
<style>
  
    #addcartbut {     
        color: white;                 
        padding: 10px 20px;            
        border: none;                    
        border-radius: 5px;           
        font-size: 16px;                
        font-weight: bold;          
        cursor: pointer;                
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); 
        transition: all 0.3s ease;    
    }

    #addcartbut:hover {     
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.3);
        transform: translateY(-5px);   
    }

    #addcartbut:active {
        transform: translateY(5px);    
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); 
        background-color: #1e7e34;      
    }
    
</style>



  <script src="./assets/js/script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



  </body>
</html>
