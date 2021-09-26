<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Register & Login</title>
</head>
<body class="bg-gradient-to-r from-gray-700 to-gray-500">
 
    <div class=" grid grid-cols-1 sm:grid-cols-2  "  >
        <div class=" p-10 rounded w-10/12 bg-gradient-to-r from-gray-500 to-gray-700 shadow-xl ml-auto mt-24 mr-auto">
               <div class=" text-center font-bold sm:text-3xl text-1xl text-white m-2 p-2  "  >
                  REGISTER
               </div>    
                    <form action="register.php" method="post" id="registration_form">
                        <input type="text" placeholder="Enter Your Name"  id="name" name="name" class="rounded  w-full border-2 p-2">
                             <span class="text-white" id="name_error"> </span>
                        <input type="text" placeholder="Enter Email" id="email" name="email" class="rounded w-full mt-2 border-2 p-2">
                             <span class="text-white" id="email_error"> </span>
                        <input type="password" placeholder="Password"  id="password" name="password" class="rounded mt-2 w-full border-2 p-2">
                             <span class="text-white" id="password_error"> </span>
                        <input type="password" placeholder="Confirm Password"  id="confirm_password" name="confirm_password" class="rounded mt-2 w-full border-2 p-2">
                            <span class="text-white" id="confirm_password_error"> </span>
                        <div class="  p-2 flex justify-center"  >
                            <button id="regbtn" class="bg-red-300 text-white  rounded px-8 py-1  mt-6" disabled>
                               Register</button>
                        </div>

                    </form>
         </div>
             
                <div class=" p-10 w-10/12  rounded bg-gradient-to-r from-gray-500 to-gray-700 shadow-xl mt-24 ml-auto mr-auto ">
                    <div class=" text-center font-bold text-3xl text-white m-2 p-2  "  >
                        <h1>LOGIN</h1>
                    </div>     
                           <form action="login.php" method="post">                  
                                 <input type="email" placeholder="Email" id="lgn_email"  name="email" 
                                 class="rounded w-full border-2 p-2">
                                 <span class="text-white" id="lgn_email_error"> </span>

                                 <input type="password" placeholder="********" id="lgn_password" name="password" 
                                    class="rounded mt-2 w-full border-2 p-2"> 
                                    <span class="text-white" id="lgn_password_error"> </span>

                                 <div class="flex justify-between text-xs mt-1 text-white">
                                    <p class=" "><input type="checkbox" name="remember" value=1>  Remember </p>
                                    <p class=" "><a href="#"> Forgot Password? </a></p>
                                 </div>
                                 <div class="  p-2 flex justify-center"  >
                                    <button id="lgnbtn" class="bg-red-300 text-white  rounded px-8 py-1  mt-6" disabled>Login</button>
                                 </div>
                     
                           </form>
                </div>
    </div> 
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
   $(function(){


      $('#name').on("keyup",function(){
         var name = $(this).val();
         var email = $('email').val();
         var password = $('#password').val();
         var confirm_password = $('#confirm_password').val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0 ){
            $('#regbtn').attr('disabled' , false);
         }else{
            if (name.length > 0) {
                $('#name_error').html("");
                
            }else{
               $('#name_error').html("**Name can not be empty");
            }   
            $('#regbtn').attr('disabled' , true);
         }

      });

         $('#email').on("keyup",function(){
         var name = $('name').val();
         var email = $(this).val();
         var password = $('#password').val();
         var confirm_password = $('#confirm_password').val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0  ){
            $('#regbtn' ).attr('disabled' , false);
         }else{  
            $('#regbtn').attr('disabled' , true);
         }

      });

      $("#email").focusout(function() {
            check_email();
         });

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error").hide();
               $("#email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error").html("**Invalid Email");
               $("#email_error").show();
               $("#email").css("border-bottom","2px solid #F90A0A");
               email_error = true;
            }
         }

         $('#password').on("keyup",function(){
         var name = $('#name').val();
         var email = $('#email').val();
         var password = $(this).val();
         var confirm_password = $('#confirm_password').val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0  ){
            $('#regbtn').attr('disabled' , false);
         }else{
            $('#regbtn').attr('disabled' , true);
         }

      });

      $("#password").focusout(function() {
            check_password();
         });

         function check_password() {
            var password_length = $("#password").val().length;
            if (password_length < 8) {
               $("#password_error").html("**Atleast 8 Characters");
               $("#password_error").show();
               $("#password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error").hide();
               $("#password").css("border-bottom","2px solid #34F458");
            }
         }


         $('#confirm_password').on("keyup",function(){
         var name = $('#name').val();
         var email = $('#email').val();
         var password = $('#password').val();
         var confirm_password = $(this).val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0 && password == confirm_password ){
            $('#regbtn').attr('disabled' , false);
         }else{
            $('#regbtn').attr('disabled' , true);
         }

      });

      $("#confirm_password").focusout(function() {
            check_password_confirm();
         });

      function check_password_confirm() {
            var password = $("#password").val();
            var retype_password = $("#confirm_password").val();
            if (password !== retype_password) {
               $("#confirm_password_error").html("**Passwords Did not Matched");
               $("#confirm_password_error").show();
               $("#password_cconfirm_passwordonfirm").css("border-bottom","2px solid #F90A0A");
               confirm_password_error = true;
            } else {
               $("#confirm_password_error").hide();
               $("#confirm_password").css("border-bottom","2px solid #34F458");
            }
         }

   });

// Login Button Enable

$('#email').on("keyup",function(){
     
         var email = $(this).val();
         var password = $('#password').val();

         if(email.length > 0 && password.length > 0 ){
            $('#lgnbtn' ).attr('disabled' , false);
         }else{  
            $('#lgnbtn').attr('disabled' , true);
         }

      });

      $("#lgn_email").focusout(function() {
            check_email();
         });

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#lgn_email").val();
            if (pattern.test(email) && email !== '') {
               $("#lgn_email_error").hide();
               $("#email").css("border-bottom","2px solid #34F458");
            } else {
               $("#lgn_email_error").html("**Invalid Email");
               $("#lgn_email_error").show();
               $("#email").css("border-bottom","2px solid #F90A0A");
               email_error = true;
            }
         }

         $('#lgn_password').on("keyup",function(){
      
         var email = $('#lgn_email').val();
         var password = $(this).val();
 
         if( email.length > 0 && password.length > 0 ){
            $('#lgnbtn').attr('disabled' , false);
         }else{
            $('#lgnbtn').attr('disabled' , true);
         }

      });

      $("#lgn_password").focusout(function() {
            check_password();
         });

         function check_password() {
            var password_length = $("#lgn_password").val().length;
            if (password_length < 8) {
               $("#lgn_password_error").html("**Atleast 8 Characters");
               $("#lgn_password_error").show();
               $("#lgn_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#lgn_password_error").hide();
               $("#lgn_password").css("border-bottom","2px solid #34F458");
            }
         }
</script>
</body>
</html>