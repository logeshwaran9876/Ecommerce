<?php
session_start();


if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
  header("Location: ../login.php");
    exit();
}

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

body {
    font-family: 'Calibri', sans-serif !important
}

        body {
        max-width: 100%;          
        word-wrap: break-word;    
        overflow-wrap: break-word; 
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
   
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

 
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">



    </head>
    <body>
      
<div class="overlay" data-overlay></div>



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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



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
  a{
    text-decoration: none;
  }

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

.btn-danger:hover{
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.3); 
    transform: translateY(-5px);     
}

.btn-danger:hover{
  transform: translateY(5px);    
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);

}


.btn-danger{
  margin-left: 10px;
}
</style>


<p id="result"></p>

<div id="result"></div> 

<script>
  $(document).ready(function() {
    $.ajax({
     
        url: `api/order`, 
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#contain').empty(); 

            if (Array.isArray(data) && data.length > 0) { 
                data.forEach(item => {
                    $('#contain').append(`
                        <div class="col">
                            <div class="card" style="width: 17rem; height:450px">
                                <img class="text-center rounded mx-auto d-block mt-2" style="width:80%; height:194px;" src="${item.product_image}" alt="${item.product_name}">
                                <div class="card-body">
                                    <h5 class="card-title">${item.product_name}</h5>
                                    <p class="card-text">${item.product_description}</p>
                                    <a href="productPage?id=${item.product_id}" class="showcase-category">
                                        <button class="add-to-cart text-center but" id="addcartbut" data-id="${item.product_id}" style="width:230px">
                                            <i class="la la-eye"></i> Show Product
                                        </button>
                                       
                                    </a>
                                </div>
                            </div>
                        </div>
                    `);
                });
            } else {
                $('#contain').html('<p>No products found in the Orders.</p>');
            }
        },
        error: function(jqXHR) {
            $('#contain').html('<p>Error: ' + jqXHR.status + ' ' + jqXHR.statusText + '</p>');
        }
    });
  });
</script>



    


<h2 class="text-center m-3 bg-secondary ">Ordered Items</h2>


<div class="product-main " style="margin-left: 50px;">



<div class="product-grid mt-4"  id="contain">




</div>

</div>



  
    <div class="container text-center" id="contain" style="margin-top:50px;">
       
    </div>
  


























  <script src="./assets/js/script.js"></script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  </body>
</html>
