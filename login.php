
<?php 
//include header
include ("header.php");
?>


<form action="login.php" method="POST">
  <div class="container">
    <h2>Login</h2>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <button type="submit" class="registerbtn">Login</button>
    <p>Don't have an account? <a href="index.php">Register</a>.</p>
  </div>


</form>






<?
//include footer
include ("footer.php");
?>
