<html>
  <head>
    <title>User registration</title>
  </head>
  <body>

  <div>
      <?php 
      if ( isset ($_POST['create'] ) ) {
          echo 'User submitted.'; }
        ?>
  </div>

  <div>
      <form action="registration.php" method="post">
          <div class="container">
              <h1>Registration</h1>
              <p>Fill in this form to registrate with us</p>

              <!--FOR FIRST NAME-->

              <label for="firstname"><b>First name</b></label>
              <input type="text" name="firstname" required>

               <!--FOR LAST NAME-->
              
               <label for="lastname"><b>Last name</b></label>
              <input type="text" name="lastname" required>

               <!--FOR EMAIL-->
              
               <label for="email"><b>Email adress</b></label>
              <input type="email" name="email" required>

               <!--FOR PHONE NUMBER-->
              
               <label for="phonenumber"><b>Phone number</b></label>
              <input type="text" name="phonenumber" required>

               <!--FOR PASSWORD-->
              
               <label for="password"><b>Password</b></label>
              <input type="password" name="password" required>

              <!--FOR SUBMIT-->
              
              <input type="submit" name="create" value="Sign up">

          </div>

      </form>
  </div>

  </body>
</html>