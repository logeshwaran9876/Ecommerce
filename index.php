<?php
session_start();

// Check if the user is logged in and is a customer


// Customer-specific content
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping eCommerce Website</title>


  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="./assets/css/style-prefix.css">
<style>
  @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
    font-family: 'Calibri', sans-serif !important
}

</style>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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



  <!--
    - NOTIFICATION TOAST
  -->

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

  <style>
    a{
      text-decoration: none;
    }

    #authButton{
      width: 30px;
    }
  </style>




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
        <ul class="desktop-menu-category-list" id="categoryList10">
            <li class="menu-category">
                <a href="" class="menu-title">Home</a>
            </li>
        </ul>
    </div>



    
</nav>





<script>
$(document).ready(function() {
  
  
        $.ajax({
            url: 'api/category?limit=8',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#categoryList10').empty(); 

                if (Array.isArray(data) && data.length) {
                   
                    data.forEach(function(category) {
                        $('#categoryList10').append(`
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










  


  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

 
  
<div class="banner1">
  
  <div>
    <div class="container">
      <div class="slider-container slider-container1">
        <div class="slider-item">
        <img src="./assets/images/banner-1.jpg" alt="Banner Image 1" class="banner-img">
        <div class="banner-content">

          <p class="banner-subtitle">Trending item</p>

          <h2 class="banner-title">Women's latest fashion sale</h2>

          <p class="banner-text">
            starting at &dollar; <b>20</b>.00
          </p>

          <a href="#" class="banner-btn">Shop now</a>

        </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container">
      <div class="slider-container slider-container1">
        <div class="slider-item">
        <img src="./assets/images/banner-2.jpg" alt="Banner Image 1" class="banner-img">
        <div class="banner-content">

          <p class="banner-subtitle">Trending accessories</p>

          <h2 class="banner-title">Modern sunglasses</h2>

          <p class="banner-text">
            starting at &dollar; <b>15</b>.00
          </p>

          <a href="#" class="banner-btn">Shop now</a>

        </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container">
      <div class="slider-container slider-container1">
        <div class="slider-item">
        <img src="./assets/images/banner-3.jpg" alt="Banner Image 1" class="banner-img">
        <div class="banner-content">

          <p class="banner-subtitle">Sale Offer</p>

          <h2 class="banner-title">New fashion summer sale</h2>

          <p class="banner-text">
            starting at &dollar; <b>29</b>.99
          </p>

          <a href="#" class="banner-btn">Shop now</a>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('.banner1').slick({
      autoplay: true,       
      autoplaySpeed: 1000,    
      dots: true,       
      arrows: true,     
      fade: true,           
      speed: 500            
  });
});
</script>


    

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar" id="category1">




          

          
          
          

        </div>

      </div>

    </div>



 
<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/category?limit=7', 
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#categoryList').empty(); 
  
                  if (Array.isArray(data) && data.length) {
                    
                      data.forEach(function(category) {
                          $('#category1').append(`
                              <div class="category-item">

                          <div class="category-img-box">
                            <img src="${category.category_image}.svg" alt="dress & frock" width="30">
                          </div>
                          <a href="productsList?id=${category.category_id}">
                
                          <div class="category-content-box">

                            <div class="category-content-flex">
                              <h3 class="category-item-title">${category.category_name}</h3>

                              <p class="category-item-amount">(${category.category_contains})</p>
                            </div>

                            <a href="products_cat?category_id=${category.category_id}" class="category-btn">Show all</a>
                             
                          </div>
                                    </a>

                        </div>
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
















    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        
        

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category" id="category2">

              </li>

            
            </ul>

          </div>



<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/category?limit=10', 
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#categoryList').empty(); 
  
                  if (Array.isArray(data) && data.length) {
                   
                      data.forEach(function(category) {
                          $('#category2').append(`
                          
                <div class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="${category.category_image}.svg" alt="clothes" width="20" height="20"
                      class="menu-title-img">

                     <a href="productsList?id=${category.category_id}">
                     
                     <p class="menu-title mb-1">${category.category_name}</p>
                     </a>
                  </div
                                 
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










          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1.jpg" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">baby fabric shoes</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$4.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">men's hoodies t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$17.00</del>
                      <p class="price">$7.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">girls t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$3.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">woolen hat for men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$15.00</del>
                      <p class="price">$12.00</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>
         


        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container" id="showacase_product1">

                
                 
                </div>

                <div class="showcase-container"  id="showacase_product2">
                
                  
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Trending</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container" id="showacase_product3">
            
                
            
                  
                </div>
            
                <div class="showcase-container"  id="showacase_product4">
            
                  
                        
                  
            
                </div>
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Rated</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container"  id="showacase_product5">
            
                  
            
                </div>
            
                <div class="showcase-container"   id="showacase_product6">
            
                 
                </div>
            
              </div>
            
            </div>

          </div>






<script>
   $(document).ready(function() {
 
    
          $.ajax({
              url: 'api/products?limit=4&offset=0',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#showacase_product1').empty();
  
                  if (Array.isArray(data) && data.length) {
                    
                      data.forEach(function(products) {
                          $('#showacase_product1').append(`

                      <div class="showcase " >

                         <a href="productPage?id=${products.product_id}" class="showcase-img-box">
                    
                          <img src="${products.product_image}" alt="${products.product_image}" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                          <a href="productPage?id=${products.product_id}">
                            <h4 class="showcase-title">${products.product_name}</h4>
                          </a>

                          <a  href="products_cat?category_id=${products.category_id}" class="showcase-category">${products.category_name}</a>
                            
                          <div class="price-box">
                            <p class="price">$${products.product_price}</p>
                            <del>$12.00</del>
                          </div>

                        </div>

                      </div>    
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



<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/products?limit=4&offset=4',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#showacase_product2').empty(); 
  
                  if (Array.isArray(data) && data.length) {
                  
                      data.forEach(function(products) {
                          $('#showacase_product2').append(`
                      <div class="showcase " >

                         <a href="productPage?id=${products.product_id}" class="showcase-img-box">
                    
                          <img src="${products.product_image}" alt="${products.product_image}" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                          <a href="productPage?id=${products.product_id}">
                            <h4 class="showcase-title">${products.product_name}</h4>
                          </a>

                         <a  href="products_cat?category_id=${products.category_id}" class="showcase-category">${products.category_name}</a>

                          <div class="price-box">
                            <p class="price">$${products.product_price}</p>
                            <del>$12.00</del>
                          </div>

                        </div>

                      </div>    
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



<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/products?limit=4&offset=9',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#showacase_product3').empty(); 
  
                  if (Array.isArray(data) && data.length) {
                     
                      data.forEach(function(products) {
                          $('#showacase_product3').append(`
                      <div class="showcase " >

                         <a href="productPage?id=${products.product_id}" class="showcase-img-box">
                    
                          <img src="${products.product_image}" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                          <a href="productPage?id=${products.product_id}">
                            <h4 class="showcase-title">${products.product_name}</h4>
                          </a>

                          <a  href="products_cat?category_id=${products.category_id}" class="showcase-category">${products.category_name}</a>

                          <div class="price-box">
                            <p class="price">$${products.product_price}</p>
                            <del>$12.00</del>
                          </div>

                        </div>

                      </div>    
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


<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/products?limit=4&offset=14',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#showacase_product4').empty(); 
  
                  if (Array.isArray(data) && data.length) {
                      
                      data.forEach(function(products) {
                          $('#showacase_product4').append(`
                   <div class="showcase " >

                         <a href="productPage?id=${products.product_id}" class="showcase-img-box">
                    
                          <img src="${products.product_image}" alt="${products.product_image}" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                          <a href="productPage?id=${products.product_id}">
                            <h4 class="showcase-title">${products.product_name}</h4>
                          </a>
                          <a  href="products_cat?category_id=${products.category_id}" class="showcase-category">${products.category_name}</a>

                          <div class="price-box">
                            <p class="price">$${products.product_price}</p>
                            <del>$12.00</del>
                          </div>

                        </div>

                      </div>   
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




<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/products?limit=4&offset=25',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#showacase_product5').empty();   
  
                  if (Array.isArray(data) && data.length) {
                      
                      data.forEach(function(products) {
                          $('#showacase_product5').append(`
                     <div class="showcase " >

                         <a href="productPage?id=${products.product_id}" class="showcase-img-box">
                    
                          <img src="${products.product_image}" alt="${products.product_image}" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                          <a href="productPage?id=${products.product_id}">
                            <h4 class="showcase-title">${products.product_name}</h4>
                          </a>

                          <a  href="products_cat?category_id=${products.category_id}" class="showcase-category">${products.category_name}</a>

                          <div class="price-box">
                            <p class="price">$${products.product_price}</p>
                            <del>$12.00</del>
                          </div>

                        </div>

                      </div>    
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


<script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/products?limit=4&offset=30',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#showacase_product6').empty(); 
  
                  if (Array.isArray(data) && data.length) {
                     
                      data.forEach(function(products) {
                          $('#showacase_product6').append(`
                      <div class="showcase ">

                         <a href="productPage?id=${products.product_id}" class="showcase-img-box">
                    
                          <img src="${products.product_image}" alt="${products.product_image}" width="70" class="showcase-img">
                        </a>

                        <div class="showcase-content">

                          <a href="productPage?id=${products.product_id}">
                            <h4 class="showcase-title">${products.product_name}</h4>
                          </a>

                          <a  href="products_cat?category_id=${products.category_id}" class="showcase-category">${products.category_name}</a>

                          <div class="price-box">
                            <p class="price">$${products.product_price}</p>
                            <del>$12.00</del>
                          </div>

                        </div>

                      </div>     
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



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$150.00</p>

                      <del>$200.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>
              
                    <div class="price-box">
                      <p class="price">$1990.00</p>
                      <del>$2000.00</del>
                    </div>
              
                    <button class="add-cart-btn">add to cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid " id="grid">

              <div class="showcase box">

                <div class="showcase-banner">

                  <img src="./assets/images/products/jacket-3.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/products/jacket-4.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">jacket</a>

                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>

                </div>

              </div>

              

             

            </div>

          </div>

        </div>

      </div>

    </div>






    <script>
   $(document).ready(function() {
    
    
          $.ajax({
              url: 'api/products?limit=12&offset=35',
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#grid').empty();
  
                  if (Array.isArray(data) && data.length) {
                      data.forEach(function(products) {
                          $('#grid').append(`

                          <div class="showcase box">

                      <div class="showcase-banner">

                        <img src="${products.product_image}" alt="${products.product_image}" width="300" class="product-img default">
                        <img src="${products.product_image}" alt="${products.product_image}" width="300" class="product-img hover">

                        <p class="showcase-badge">15%</p>

                      <div class="showcase-actions">

                        <button class="btn-action">
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>

                        <button class="btn-action">
                          <ion-icon name="eye-outline"></ion-icon>
                        </button>

                        <button class="btn-action">
                          <ion-icon name="repeat-outline"></ion-icon>
                        </button>

                          <button class="btn-action">
                            <ion-icon name="bag-add-outline"></ion-icon>
                          </button>

                        </div>

                      </div>

                      <div class="showcase-content">

                        <a href="productPage?id=${products.product_id}" class="showcase-category">${products.product_name}</a>

                        <a href="productPage?id=${products.product_id}">
                          <h3 class="showcase-title">${products.product_description}</h3>
                        </a>

                        <div class="showcase-rating">
                          <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                      </div>

                      <div class="price-box">
                        <p class="price">$${products.product_price}</p>
                        <del>$75.00</del>
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








    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Alan Doe</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Fashion</a>

              <a href="#">
                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Clothes</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Shoes</a>
          
              <h3>
                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Electronics</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Fashion :</h3>

          <a href="#" class="footer-category-link">T-shirt</a>
          <a href="#" class="footer-category-link">Shirts</a>
          <a href="#" class="footer-category-link">shorts & jeans</a>
          <a href="#" class="footer-category-link">jacket</a>
          <a href="#" class="footer-category-link">dress & frock</a>
          <a href="#" class="footer-category-link">innerwear</a>
          <a href="#" class="footer-category-link">hosiery</a>

        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">footwear :</h3>
        
          <a href="#" class="footer-category-link">sport</a>
          <a href="#" class="footer-category-link">formal</a>
          <a href="#" class="footer-category-link">Boots</a>
          <a href="#" class="footer-category-link">casual</a>
          <a href="#" class="footer-category-link">cowboy shoes</a>
          <a href="#" class="footer-category-link">safety shoes</a>
          <a href="#" class="footer-category-link">Party wear shoes</a>
          <a href="#" class="footer-category-link">Branded</a>
          <a href="#" class="footer-category-link">Firstcopy</a>
          <a href="#" class="footer-category-link">Long shoes</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">jewellery :</h3>
        
          <a href="#" class="footer-category-link">Necklace</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
          <a href="#" class="footer-category-link">Pendants</a>
          <a href="#" class="footer-category-link">Crystal</a>
          <a href="#" class="footer-category-link">Bangles</a>
          <a href="#" class="footer-category-link">bracelets</a>
          <a href="#" class="footer-category-link">nosepin</a>
          <a href="#" class="footer-category-link">chain</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">cosmetics :</h3>
        
          <a href="#" class="footer-category-link">Shampoo</a>
          <a href="#" class="footer-category-link">Bodywash</a>
          <a href="#" class="footer-category-link">Facewash</a>
          <a href="#" class="footer-category-link">makeup kit</a>
          <a href="#" class="footer-category-link">liner</a>
          <a href="#" class="footer-category-link">lipstick</a>
          <a href="#" class="footer-category-link">prefume</a>
          <a href="#" class="footer-category-link">Body soap</a>
          <a href="#" class="footer-category-link">scrub</a>
          <a href="#" class="footer-category-link">hair gel</a>
          <a href="#" class="footer-category-link">hair colors</a>
          <a href="#" class="footer-category-link">hair dye</a>
          <a href="#" class="footer-category-link">sunscreen</a>
          <a href="#" class="footer-category-link">skin loson</a>
          <a href="#" class="footer-category-link">liner</a>
          <a href="#" class="footer-category-link">lipstick</a>
        </div>

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Anon</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>






  <script src="./assets/js/script.js"></script>

 
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>