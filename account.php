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
.card {
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #007bff;
        }
</style>
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f5f5f5;
        }
        .sidebar {
            background-color: #fff;
            border-right: 1px solid #ddd;
            height: 100vh;
        }
        .sidebar a {
            text-decoration: none;
            color: #333;
            padding: 15px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #e9ecef;
            color: #000;
        }
        .active-link {
            background-color: #007bff !important;
            color: #fff !important;
        }
        .content-area {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 5px;
        }
        .address-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-top: 10px;
            background-color: #fafafa;
        }
        .address-card h5 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        .address-card p {
            margin: 0;
            color: #666;
        }
        .add-address-btn {
            color: #007bff;
            cursor: pointer;
        }
        .add-address-btn:hover {
            text-decoration: underline;
        }
    </style>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>
  .hh{
    text-decoration: none;
    color: black;
  }
</style>

<body>


<div class="overlay" data-overlay></div>


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

        <a href="index.php" class="hh header-logo">
          <h1 class="hh">Shopping</h1>
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
 
  


          

        </div>

      </div>

    </div>


  </header>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   
  <div class="container-fluid">
    <div class="row">
   
        <div class="col-md-3 sidebar">
            <div class="text-center py-4">
                <h5>Hello, <span id='name'>--</span></h5>
            </div>
            <a href="#" class="active-link" id='address'>Manage Addresses</a>
            <a href="#"  id="profile">Profile Information</a>
            <a href="#"  id="pass">Change Password</a>
            <a href="#" id="logout">Logout</a>
          
        </div>

        <div class="col-md-9">
            <div class="content-area">
   
              
               
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



<style> 


    .modal-content {
        border-radius: 8px;
        border: 1px solid #ccc; 
        background-color: #fff; 
    }

    .modal-header {
        background-color: #f0f0f0; 
        color: #333; 
        border-bottom: 1px solid #ccc; 
    }

    .modal-body {
        padding: 25px; 
    }

    .form-control {
        height: 35px;
        font-size: 14px; 
        border-radius: 5px; 
        border: 1px solid #ccc;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-secondary {
        background-color: #f8f9fa;
        color: #495057; 
        border: 1px solid #ddd; 
    }

    .btn-secondary:hover {
        background-color: #e2e6ea
    }

</style>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-3 shadow-sm">
            <div class="modal-header" style="background-color: #f0f0f0; color: #333;">
                <h5 class="modal-title" id="editModalLabel">Edit Customer Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Input Fields for Editing -->
                <form id="editCustomerForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control form-control-sm" id="firstName" name="firstName" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control form-control-sm" id="lastName" name="lastName" placeholder="Enter last name">
                        </div>
                        <div class="col-12">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control form-control-sm" id="fullName"  name="fullName" placeholder="Enter full name">
                        </div>
                        <div class="col-12">
                            <label for="addressLine1" class="form-label">Address Line 1</label>
                            <input type="text" class="form-control form-control-sm" id="addressLine1" name="addressLine1"  placeholder="Enter address line 1">
                        </div>
                        <div class="col-12">
                            <label for="addressLine2" class="form-label">Address Line 2</label>
                            <input type="text" class="form-control form-control-sm" id="addressLine2" name="addressLine2" placeholder="Enter address line 2">
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="Enter city">
                        </div>
                        <div class="col-md-6">
                            <label for="remarks" class="form-label">Remarks</label>
                            <input type="text" class="form-control form-control-sm" id="remarks"  name="remarks" placeholder="Enter remarks">
                        </div>
                        <div class="col-12">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control form-control-sm" id="state"  name="state" placeholder="Enter state">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function () {
  
      
    $('#address').on('click',function(){
            $(".content-area").empty();
            $('#address').addClass('active-link');
            $('#profile').removeClass('active-link');
            $('#pass').removeClass('active-link');
            $('#logout').removeClass('active-link');
            loadaddr();
            
        })
    function loadaddr() {
      $.ajax({
        url: 'api/users?type=address',
        type: 'GET',
        success: function (data) {
          if (data.customer_id) {
            $(".content-area").html(`  <!-- Clear previous content before appending new -->
              <h3>Manage Addresses</h3>
              <div class="address-card">
                <h2>${data.customer_first_name} ${data.customer_last_name}</h2>
                <p>${data.customer_address_full_name}</p>
                <p>${data.customer_address_line1}</p>
                <p>${data.customer_address_line2}</p>
                <p>${data.customer_address_city}</p>
                <p>${data.customer_address_remarks}</p>
                <p>${data.state_name}</p>
                <button class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#editModal" data-id="${data.customer_id}" data-fullname="${data.customer_address_full_name}" data-line1="${data.customer_address_line1}" data-line2="${data.customer_address_line2}" data-city="${data.customer_address_city}" data-remarks="${data.customer_address_remarks}">Change</button>
              </div>
            `);
            $('#name').text(data.customer_first_name); 

          
            $('.btn-primary').on('click', function() {
              $('#editCustomerForm #fullname').val($(this).data('fullname'));
              $('#editCustomerForm #line1').val($(this).data('line1'));
              $('#editCustomerForm #line2').val($(this).data('line2'));
              $('#editCustomerForm #city').val($(this).data('city'));
              $('#editCustomerForm #remarks').val($(this).data('remarks'));
            });

          } else {
            alert("No address found.");
          }
        },
        error: function (xhr, status, error) {
          console.error("Error: " + status + " " + error);
          alert("Failed to fetch address.");
        }
      });
    }

    
    loadaddr();

   
    $('#saveChangesBtn').on('click', function () {
      var formData = $('#editCustomerForm').serialize();

      $.ajax({
        url: 'api/users?type=editaddress',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(data) {
          alert(data.message);
          $("#editModal").modal('hide');  
          loadaddr(); 
          
        
          $('body').removeClass('modal-open');
          $('.modal-backdrop').remove();
        },
        error: function(jqXHR) {
          alert('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
        }
      });
    });
  });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">




<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-3 shadow-lg">
      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <!-- Modal Body -->
      <div class="modal-body">
        <form id="editProfileForm">
          <div class="row g-3">
            <!-- First Name -->
            <div class="col-md-6">
              <label for="editFirstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="editFirstName" name="editFirstName" placeholder="Enter First Name">
            </div>
            
            <!-- Last Name -->
            <div class="col-md-6">
              <label for="editLastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="editLastName" name="editLastName" placeholder="Enter Last Name">
            </div>
            
            <!-- Email -->
            <div class="col-12">
              <label for="editEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="editEmail"  name="editEmail" placeholder="Enter Email">
            </div>
            
            <!-- Mobile -->
            <div class="col-12">
              <label for="editMobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="editMobile" name="editMobile" placeholder="Enter Mobile Number">
            </div>
            
            <!-- Date of Birth -->
            <div class="col-md-6 ">
              <label for="editDob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" id="editDob" name="editDob">
            </div>
            <div class="col-md-6">
            <label for="editGender">Gender</label>
            <select class="form-control" id="editGender">
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
            </div>
            <!-- Password -->
           
          </div>
        </form>
      </div>
      
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="basic" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="saveProfileChanges">Save Changes</button>
      </div>
    </div>
  </div>
</div>



<!-- profile ajax -->
<script>
    $(document).ready(function () {
        function loadProfileContent() {
            $(".content-area").empty();
            $('#profile').addClass('active-link');
            $('#address').removeClass('active-link');
            $('#pass').removeClass('active-link');
            $('#logout').removeClass('active-link');
            $.ajax({
                url: 'api/users?type=profile',
                type: 'GET',
                success: function (data) {
                    if (data.customer_id) {
                        $('.content-area').append(`
                            <div class="container mt-5">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Profile Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Personal Information</h5>
                                                <p><strong>Name:</strong> ${data.customer_first_name} ${data.customer_last_name}</p>
                                                <p><strong>Gender:</strong> ${data.customer_gender}</p>
                                                <p><strong>Date of Birth:</strong> ${data.customer_dob}</p>
                                                <p><strong>Email:</strong> ${data.customer_email}</p>
                                                <p><strong>Mobile:</strong> ${data.customer_mobile}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                        `);
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error loading profile: " + status + " " + error);
                    alert("Failed to load profile data.");
                }
            });
        }

        $('#profile').on('click', function () {
            loadProfileContent();
        });

        $('#editProfileModal').on('show.bs.modal', function () {
            $.ajax({
                url: 'api/users?type=profile',
                type: 'GET',
                success: function (data) {
                    if (data.customer_id) {
                        $('#editFirstName').val(data.customer_first_name);
                        $('#editLastName').val(data.customer_last_name);
                        $('#editEmail').val(data.customer_email);
                        $('#editMobile').val(data.customer_mobile);
                        $('#editDob').val(data.customer_dob);
                        $('#editGender').val(data.customer_gender);
                    } else {
                        alert("Profile data not found.");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error fetching profile data: " + status + " " + error);
                    alert("Failed to fetch profile data.");
                }
            });
        });

        $('#saveProfileChanges').on('click', function () {
            var formData = {
                customer_first_name: $('#editFirstName').val(),
                customer_last_name: $('#editLastName').val(),
                customer_email: $('#editEmail').val(),
                customer_mobile: $('#editMobile').val(),
                customer_dob: $('#editDob').val(),
                customer_gender: $('#editGender').val(),
            };

            $.ajax({
                url: 'api/users?type=editprofile',
                type: 'POST',
                data: JSON.stringify(formData),
                contentType: 'application/json',
                success: function (data) {
                    alert(data.message || "Profile updated successfully!");
                    $('#editProfileModal').modal('hide'); 
                    $('#basic').trigger('click'); 
                    loadProfileContent(); 
                },
                error: function (xhr, status, error) {
                    console.error("Error saving profile: " + status + " " + error);
                    alert("Failed to save profile changes.");
                }
            });
        });

    });
</script>

<!-- append passs -->

<script>
   $(document).ready(function () {
       $('#pass').on('click', function () {
           $(".content-area").empty();
           $('#address').removeClass('active-link');
           $('#profile').removeClass('active-link');
           $('#pass').addClass('active-link');
           $('#logout').removeClass('active-link');
           $(".content-area").append(`
               <div class="container mt-5">
                   <div class="card">
                       <div class="card-header">
                           <h3>Password Change</h3>
                       </div>
                       <div class="card-body">
                           <div class="row">
                               <div class="col-md-6">
                                   <p>New Password</p>
                                   <input type="password" class="form-control mb-3" placeholder="Enter The Password" id="newPassword">
                                   <p>Confirm Password</p>
                                   <input type="password" class="form-control mb-3" placeholder="Enter The Confirm Password" id="confirmPassword">
                                   <button type="submit" class="btn btn-success" id="submitPassword">Submit</button>
                                    <button type="button" class="btn btn-secondary" id="reset">Reset</button>
                           
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           `);
       });
   });
</script>


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


  <!--  password  -->
<script>
    $(document).on('click', "#submitPassword", function () {
      let pass = $("#newPassword").val();
      let conf = $("#confirmPassword").val();

      if (pass !== conf) {
        alert("Passwords do not match!");
        return;
      }
      if (pass.length < 6) {
        alert("Password must be at least 6 characters long.");
        return;
      }

      $.ajax({
        url: 'api/users?type=passupdate', 
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({ password: pass }),
        success: function (response) {
          if (response.message) {
            alert("Password updated successfully!");
          } else {
            alert("Unexpected response from server.");
          }
        },
        error: function (xhr) {
          alert(`Error: ${xhr.responseText || "Server error"}`);
        }
      });
    });

    $(document).on('click', "#reset", function (){
      
      $("#newPassword").val("");
      $("#confirmPassword").val("");
    })
</script>



<script>
  $(document).ready(function () {

    $('#logout').on('click', function () {
      $(".content-area").empty();
      $('#address').removeClass('active-link');
      $('#profile').removeClass('active-link');
      $('#pass').removeClass('active-link');
      $('#logout').addClass('active-link');
      $(".content-area").append(`
        <div class="container mt-5">
          <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
              <h3 class="mb-0"><i class="las la-sign-out-alt"></i> Logout</h3>
            </div>
            <div class="card-body text-center">
              <p class="text-muted mb-4">Are you sure you want to logout?</p>
              <button type="button" id="distroy" class="btn btn-danger btn-lg px-4">
                <i class="las la-power-off"></i> Logout
              </button>
            </div>
          </div>
        </div>
      `);
    });

   
    $(document).on('click', '#distroy', function () {
      window.location.href = 'api/logout';
    });

  });
</script>



<script>

</script>



  <script src="./assets/js/script.js"></script>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>