<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="assets/css/styles.css">
   
<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


   <title>Login form - Bedimcode</title>
</head>
<body>
   <div class="login">
      <img src="assets/img/login-bg.png" alt="image" class="login__bg">

      <form method="POST" class="login__form" action="check.php" id="myForm"  autocomplete="off">

         <h1 class="login__title">Login</h1>

         <div class="login__inputs">
            <div class="login__box">
            <input type="email" placeholder="Email ID" name="username" id="username" required class="login__input">
               <i class="ri-mail-fill"></i>
            </div>

            <div class="login__box">
            <input type="password" placeholder="Password" name="password" id="password" required class="login__input">
               <i class="ri-lock-2-fill"></i>
            </div>
         </div>

         <div class="login__check">
            <div class="login__check-box">
               <input type="checkbox" class="login__check-input" id="user-check">
               <label for="user-check" class="login__check-label">Remember me</label>
            </div>

            <a href="#" class="login__forgot">Forgot Password?</a>
         </div>

         <button type="submit" class="login__button">Login</button>

         <div class="login__register">
            Don't have an account? <a href="#">Register</a>
         </div>
      </form>
   </div><!-- Include jQuery Validation Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>


   <script>
      $(document).ready(function() {
         $("#myForm").validate({
            rules: {
               username: {
                  required: true,
                  email: true
               },
               password: {
                  required: true,
                  minlength: 5
               }
            },
            messages: {
               username: {
                  required: "",
                  email: ""
               },
               password: {
                  required: "",
                  minlength: ""
               }
            },
            submitHandler: function(form) {
               form.submit();  // Submit the form once it’s validated
            }
         });
      });
   </script>

</body>
</html>
