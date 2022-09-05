<?php 
//include header
include ("header.php");
?>

<form action="index.php" method="POST">
  <div class="container">
    <h2>Create An Account</h2>
    <p>Please fill in this form to create an account.</p>

    <label for="Username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" id="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>

    <button type="submit" class="registerbtn">Register</button>
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>


</form>




<?
//include footer
include ("footer.php");
?>