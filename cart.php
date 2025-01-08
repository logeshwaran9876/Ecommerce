


<?php
session_start();


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css?family=Kumbh+Sans:100,200,300,regular,500,600,700,800,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Shopping Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
       @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
            font-family: 'Calibri', sans-serif !important
        }

        .mt-100 {
            margin-top: 100px
        }

        .container {
            margin-top: 200px
        }

        .card {
          margin-left: 420px;
          margin-top: 100px;
            position: relative;
            display: flex;
            width: 450px;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 4px;
            -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
            box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
        }

        .card .card-body {
            padding: 1rem 1rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }

        p {
            font-size: 14px
        }

        h4 {
            margin-top: 18px
        }

        .cross {
            padding: 10px;
            color: #d6312d;
            cursor: pointer
        }

        .continue:focus {
            outline: none
        }

        .continue {
            border-radius: 5px;
            text-transform: capitalize;
            font-size: 13px;
            padding: 8px 19px; 
            cursor: pointer;
            color: #fff;
            background-color: #D50000
        }

        .continue:hover {
            background-color: #D32F2F !important
        }






      /* Modal Styles */
      .modal-content {
          border-radius: 8px;
          overflow: hidden;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
      }

      .modal-header {
      
          color: black;
          padding: 15px;
      }


      .btn-close {
          background-color: #fff;
          border-radius: 50%;
          width: 30px;
          height: 30px;
          display: flex;
          align-items: center;
          justify-content: center;
      }

      .modal-body {
          padding: 20px;
          background-color: #f9f9f9;
      }

      /* Section Titles */
      .section-title {
          font-size: 1.2rem;
          font-weight: 600;
          margin-bottom: 15px;
          color: #333;
      }

      /* Input and Form Styles */
      .form-control, .form-select {
          border-radius: 6px;
          border: 1px solid #ccc;
          padding: 10px;
          transition: border-color 0.3s;
      }

      .form-control:focus, .form-select:focus {
          border-color: #007bff;
          outline: none;
          box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
      }

      .mb-3 label {
          font-size: 0.9rem;
          color: #555;
      }

      /* Payment Options */
      .border p, .border label {
          font-size: 0.95rem;
          color: #444;
      }

      input[type="radio"] {
          margin-right: 10px;
          transform: scale(1.2);
          cursor: pointer;
      }

      /* Buttons */
      .btn.complete-order-btn {
          background-color: #28a745;
          color: #fff;
          font-size: 1rem;
          font-weight: 600;
          padding: 12px 0;
          border-radius: 6px;
          transition: background-color 0.3s, transform 0.2s;
      }

      .btn.complete-order-btn:hover {
          background-color: #218838;
          transform: scale(1.02);
      }

      .btn {
          cursor: pointer;
      }

      /* Order Summary */
      #summary {
          background: #f8f9fa;
          padding: 10px;
          border-radius: 6px;
          margin-bottom: 10px;
          border: 1px solid #ddd;
      }

      /* Responsive Styles */
      @media (max-width: 768px) {
          .modal-dialog {
              width: 100%;
              margin: 10px;
          }

          .modal-body {
              padding: 15px;
          }

          .row .col-md-4 {
              margin-bottom: 20px;
          }
      }
      </style>

          <style>
          @media (max-width: 768px) {
              table {
                  font-size: 14px;
              }
              td, th {
                  display: block;
                  width: 100%;
              }
              td img {
                  max-width: 100%;
              }
              td input, td button {
                  margin: 5px auto;
              }
          }
      </style><style>
              /* Custom styles for the wide modal */
              .modal-dialog {
                  max-width: 95%; /* Adjust the width for a wide view */
                  margin: auto;   /* Center the modal */
              }
              .checkout-container {
                  padding: 20px;
                  background-color: #f9f9f9;
                  border-radius: 8px;
              }
              .section-title {
                  font-weight: bold;
                  margin-bottom: 10px;
              }
              .complete-order-btn {
                  background-color: #ff6200;
                  color: white;
              }
          </style>
      <style>
          .modal-xl {
              max-width: 100%; /* Make the modal wider */
          }

          .modal-dialog {
              margin: auto; /* Center horizontally */
          }
          #checkoutModal{
            margin-left: 270px;
        
          }
      </style>


          
          <style>
              /* Custom styles */
              .table-header {
                  background-color: #ff6b6b;
                  color: white;
              }
              .coupon-section {
                  background-color: #ff6b6b;
                  color: white;
                  padding: 15px;
                  margin-top: 20px;
              }

              .cart-total-section{
                background-color: #ff6b6b;
                  color: white;
                  padding: 15px;
                  margin-top: 20px;
                  position:-ms-page;
              }
        
      </style>

          <script src="./script.js" defer></script>

          <style>
            
              body {
              max-width: 100%;          /* Set a fixed maximum width, such as 400px */
              word-wrap: break-word;     /* Breaks long words onto a new line if needed */
              overflow-wrap: break-word; /* Ensures wrapping for long words across browsers */
              }


    </style>

      <!--
      - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- jQuery -->
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
<!-- Bootstrap CSS (CDN) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

<!-- jQuery CDN -->


    </head>
    <body>
      
<div class="overlay" data-overlay></div>

<!--
  - MODAL


<div class="modal" data-modal>

  <div class="modal-close-overlay" data-modal-overlay></div>

  <div class="modal-content">

    <button class="modal-close-btn" data-modal-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="newsletter-img">
      <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
    </div>

    <div class="newsletter">

      <form action="#">

        <div class="newsletter-header">

          <h3 class="newsletter-title">Subscribe Newsletter.</h3>

          <p class="newsletter-desc">
            Subscribe the <b>Anon</b> to get latest products and discount update.
          </p>

        </div>

        <input type="email" name="email" class="email-field" placeholder="Email Address" required>

        <button type="submit" class="btn-newsletter">Subscribe</button>

      </form>

    </div>

  </div>

</div>

-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">



<!--
  - NOTIFICATION TOAST


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
-->




<!--
  - HEADER
-->

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
</div>
  <nav class="desktop-navigation-menu">
    <div class="container" style="margin-bottom:-30px;">
        <ul class="desktop-menu-category-list" id="categoryList">
            <li class="menu-category">
                <a href="" class="menu-title">Home</a>
            </li>
        </ul>
    </div>
</nav>
<style>
  a{
    text-decoration: none;
  }


.cart-checkbox {
    -webkit-appearance: none; 
    -moz-appearance: none; 
    appearance: none; 
    width: 24px; 
    height: 24px;
    border: 2px solid #0d6efd; 
    border-radius: 4px; 
    outline: none;
    cursor: pointer;
    transition: all 0.3s ease;
    background-color: #fff;
    position: relative;
    left:45px;
}

/* Checked state style */
.cart-checkbox:checked {
    background-color: #0d6efd; /* Blue background */
    border-color: #0d6efd; /* Blue border */
}

/* Adding the checkmark when checked */
.cart-checkbox:checked::after {
    content: "";
    position: absolute;
    top: 4px;
    left: 6px;
    width: 6px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

/* Hover effect for better UX */
.cart-checkbox:hover {
    border-color: #0056b3; /* Darker blue border on hover */
    box-shadow: 0 0 5px rgba(13, 110, 253, 0.5); /* Subtle glow effect */
}

/* Scale adjustment */
.cart-checkbox:focus {
    outline: none; /* Remove outline on focus */
    box-shadow: 0 0 5px rgba(13, 110, 253, 0.75); /* Glow when focused */
}

/* Optional: Adding some spacing between checkboxes if needed */
td input[type="checkbox"] {
    margin: 5px;
}

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    $("#logout").click(function() {
       
        if (confirm("Are you sure you want to log out?")) {
          
            window.location.href = "api/logout"; 
        }
    });
});
</script>

<script>
$(document).ready(function() {
   
  
        $.ajax({
            url: 'api/category?limit=9 ', 
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

  <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu >

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


<?php
if(isset( $_SESSION['user_id']))
{
$user_id = $_SESSION['user_id'];
}
?>

<script>
    const userId = <?php echo json_encode($user_id); ?>; 
</script>


<div id="result"></div>


    






<div class="product-main " style="margin-left: 50px;">



<div class="product-grid mt-4"  id="contain">




</div>

</div>













<div class="container my-2">
    <h1 class="mb-4 text-center">Shopping Cart</h1>
    
    <!-- Shopping Cart Table -->
    <div class="table-responsive">
        <table class="table text-center">
            <thead class="table-header">
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th id="padd">Select</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="contain1" class="p-4">
                <!-- Cart items will be added here by JavaScript -->
            </tbody>
        </table>
    </div>

    <!-- Cart Totals Section -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cart-total-section text-center">
                <h5>Cart Total</h5>
                <ul class="list-unstyled">
                    <li>Shipping: $<span id="shipping">$0.00</span></li>
                    <li>Tax: $<span id="tax">$0.00</span></li>
                    <li>Handling Fee: <span id="handle">$0.00</span></li>
                    <li>Total: $<span id="total">$0.00</span></li>
                </ul>
                <button class="btn btn-dark w-100 mt-3" id="proceed">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>

    </div>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>








<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="order.php" id="form" method="post" >
    <!-- First row for the title -->
          <div class="row">
                  <div class="col-md-4">
                      <h5 class="section-title">1. REVIEW YOUR ORDER</h5>
                      <div id="row1"></div>
                  </div>

                  <div class="col-md-4">
                      <h5 class="section-title">2. DELIVERY ADDRESS</h5>
                      <div class="border p-3">
                          <div class="mb-3">
                              <label for="email">Email Address *</label>
                              <input type="email" id="email" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label for="firstname">First Name *</label>
                              <input type="text" id="firstname" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label for="lastname">Last Name *</label>
                              <input type="text" id="lastname" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label for="address">Delivery Address *</label>
                              <input type="text" id="address" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label for="state">State/Territory *</label>
                              <input type="text" id="state" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label for="zip">Postcode/ZIP Code *</label>
                              <input type="text" id="zip" class="form-control" required>
                          </div>
                          <div class="mb-3">
                              <label for="country">Country *</label>
                              <select id="country" class="form-select">
                                  <option selected>United States</option>
                                  <option>United Kingdom</option>
                                  <option>Germany</option>
                                  <option>France</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <h5 class="section-title">3. SELECT PAYMENT METHOD</h5>
                      <div class="border p-3">
                          <input type="radio" id="card" name="payment" checked>
                          <label for="card">Card</label><br>
                          <input type="radio" id="paypal" name="payment">
                          <label for="paypal">PayPal</label><br>
                          <input type="radio" id="googlepay" name="payment">
                          <label for="googlepay">Google Pay</label>
                          <hr>
                          <p><strong>Order Summary</strong></p>
                          <div id="summary">

                          </div>
                          <div>
                            Total Amount :$ <span id="tot"></span>
                          </div>
                          <button type="submit" id="completeOrderBtn" class="btn complete-order-btn w-100">Complete Order</button>
                      </div>
                  </div>
                  </form>
          </div>
          </div>
      </div>

    </div>
</div>

<style>
    .modal-xl {
        max-width: 100%; 
    }

    .modal-dialog {
        margin: auto; 
    }
</style>

<style>
    .modal-dialog {
        max-width: 100%; 
        margin: auto;  
    }

    .modal-content {
        border-radius: 10px;
    }

  
    @media (max-width: 768px) {
        .modal-dialog {
            max-width: 100%;  
        }
    }
</style>
<script>
$(document).ready(function() {
    let selectedCartIds = [];
    let selectedCartprice = [];
    let selectedCartname = [];
    let selectedProductId =[];
    let total = 0; 
  function loadcart(){
    $.ajax({
        url: `api/cart`,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#contain1').empty(); 

            if (Array.isArray(data) && data.length > 0) {
                data.forEach(item => {
                    
                  $('#contain1').append(`
                <tr data-id="${item.cart_item_id}">
                    <td class="text-center "><img src="${item.product_image}" alt="${item.product_name}"  width="50"></td>
                    <td class="text-center pt-4">${item.product_name}</td>
                    <td class="text-center pt-4">$${item.product_price}</td>
                    <td class="text-center pt-3">
                        <input type="checkbox" class="cart-checkbox" data-id="${item.cart_item_id}" data-price="${item.product_price}" data-name="${item.product_name}" data-proid="${item.product_id}">
                    </td>
                    <td class="text-center  pt-3">
                        <button class="btn btn-danger btn-sm remove-item close" data-cart="${item.cart_item_id}" data-product="${item.product_id}">🗑️ Remove</button>
                    </td>
                </tr>
            `);


                });
              
                updateCartSummary();  
            } else {
                $('#contain1').html('<p>No products found in the cart.</p>');
            }
        },
        error: function(jqXHR) {
            $('#contain1').html('<p>Error: ' + jqXHR.status + ' ' + jqXHR.statusText + '</p>');
        }
    });
  }
  loadcart();

  
    $(document).on('change', '.cart-checkbox', function() {
        const cartId = $(this).data('id');
        const cartname = $(this).data('name');
        const price = parseFloat($(this).data('price'));
        const proid = $(this).data('proid');
        if ($(this).is(':checked')) {
        
            selectedCartIds.push(cartId);
            selectedCartname.push(cartname);
            selectedCartprice.push(price);
            selectedProductId.push(proid);
            total += price;
        } else { 
            
            selectedCartIds = selectedCartIds.filter(id => id !== cartId);
            selectedCartname = selectedCartname.filter(name => name !== cartname);
            selectedCartprice = selectedCartprice.filter(p => p !== price);
            total -= price;
        }

        updateCartSummary();
    });

  
    function updateCartSummary() {
        const tax = (total / 25).toFixed(2);
        const shipping = Math.round(total / 10).toFixed(2);
        const handle = Math.round(total / 5).toFixed(2);

        $('#total').text(total.toFixed(2));
        $('#tax').text(tax);
        $('#shipping').text(shipping);
        $('#handle').text(handle);
    }

  
    $('#proceed').on('click', function () {
        
        if (selectedCartIds.length === 0) {
            alert('Please select at least one product before proceeding.');
            return; 
        }

        let checkoutContent = '';

        
        for (let i = 0; i < selectedCartIds.length; i++) {
            checkoutContent += `
            <div class="border p-3">
                <p><strong>${selectedCartname[i]}</strong></p>
                <p>Price: $${selectedCartprice[i]}</p>
            </div>
            `;
        }

        
        let summaryContent="";
        for (let i = 0; i < selectedCartIds.length; i++) {
            summaryContent += `
            <div >
                <p><strong>${selectedCartname[i]}</strong></p>
                <p>Price: $${selectedCartprice[i]}</p>


            </div>
            `;
        }
       
        let sum = 0;

        for (let i = 0; i < selectedCartprice.length; i++) {
          sum += selectedCartprice[i];
        }
        $("#tot").html(sum);



        
        $('#row1').html(checkoutContent); 

        $('#summary').html(summaryContent);
        $('#checkoutModal').modal('show'); 
    });
<?php 

$sessionUserId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

?>
    
    $('#completeOrderBtn').on('click', function(event) {
        event.preventDefault(); 
        var sessionUserId = <?php echo json_encode($sessionUserId); ?>;
        if (!sessionUserId) {
                    window.location.href = "../login.php"; 
                    exit();
                }
        const productIds = selectedProductId;
       
        $.ajax({
            url: 'api/order',  
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({
                action: "multiple",
                product_ids: productIds
            }),
            success: function(response) {
                console.log(response);  
                if (response.success) {
                    alert('Order placed successfully!');
                    $('#checkoutModal').modal('hide'); 
                    $('.cart-checkbox').prop('checked', false);
                    
                      $('.close').click();
                      $('#total').text(0);
                      $('#tax').text(0);
                      $('#shipping').text(0);
                      $('#handle').text(0);

                        $('#myModal').modal('show');
                        selectedCartIds =[];

                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('An error occurred while placing the order.');
            }
        });
    });



    
    $('#contain1').on('click', '.close', function() {
    const productId = $(this).data('product');
    const cart_id=$(this).data("cart");

    $.ajax({
        url: 'api/cart',
        type: 'DELETE',
        data: {
            product_id: productId,
            cart_id: cart_id
        },
        success: function(response) {
            if (response.success) {
                loadcart();
            } else {
                alert(response.error || "Failed to remove product");
            }
        },
        error: function(jqXHR) {
            alert("Error: " + jqXHR.status + ' ' + jqXHR.statusText);
        }
    });
});


});
</script>







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <div class="container d-flex justify-content-center">
    
 <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
         <div class="card">
             <div class="text-right cross"> <i class="fa fa-times"></i> </div>
             <div class="card-body text-center"> <img src="https://img.icons8.com/bubbles/200/000000/trophy.png">
                 <h4>CONGRATULATIONS!</h4>
                 <p>You have been personally selected to take part in our 2024 annual visitors survey!</p> <button class="btn btn-out btn-square continue">CONTINUE</button>
             </div>
         </div>
     </div>
 </div>
<div class="overlay" data-overlay></div>







     
  <script src="./assets/js/script.js"></script>
 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  </body>
</html>




























































































