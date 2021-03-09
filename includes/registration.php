<html>
  <head>
    <title>User registration</title>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
  </head>
  <body>

  <div>
      <?php 
      if ( isset ($_POST['create'] ) ) {
          $firstname     =$_POST['firstname'];
          $lastname      =$_POST['lastname'];
          $email         =$_POST['email'];
          $phonenumber   =$_POST['phonenumber'];
          $password      =$_POST['password'];

          echo 
        ?>
  </div> $firstname " " $lastname  " "  $email " " $phonenumber " " $password

 
   <div>
     
       <form action="registration.php" method="post">
        
            <div class="container">

              <div class="row">

                   <div class="col-sm-3"></div>
                       <h1>Registration</h1>
                       <p>Fill in this form to register with us</p>
                        <hr class="mb-3">
                        <!--FOR FIRST NAME-->

                        <label for="firstname"><b>First name</b></label>
                        <input class="form-control" type="text" name="firstname" required>

                         <!--FOR LAST NAME-->
              
                         <label for="lastname"><b>Last name</b></label>
                         <input class="form-control" type="text" name="lastname" required>

                         <!--FOR EMAIL-->
              
                        <label for="email"><b>Email adress</b></label>
                         <input class="form-control" type="email" name="email" required>

                        <!--FOR PHONE NUMBER-->
              
                          <label for="phonenumber"><b>Phone number</b></label>
                          <input class="form-control" type="text" name="phonenumber" required>

                        <!--FOR PASSWORD-->
              
                         <label for="password"><b>Password</b></label>
                         <input class="form-control" type="password" name="password" required>
                         <hr class="mb-3">
                        <!--FOR SUBMIT-->
              
                         <input class="btn btn-primary" type="submit" name="create" value="Sign up">

                    </div>
             </div>
         </div>

     </form>
 </div>

 </body>
</html>