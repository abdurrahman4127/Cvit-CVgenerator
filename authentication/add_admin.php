<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Admin SignUp</title>
</head>
<body>
<?php  session_start(); if(isset($_SESSION['non'])){
        if($_SESSION['non']==TRUE) {?>
            
            <?php
            header("location: \Cvit-CVgenerator/user2/index.php");
            
            
    }}?>
    <nav>
        <ul>
          <li><a href="\Cvit-CVgenerator/admin/index.php">Dashboard</a></li>
       
        </ul>
      </nav>
    
<div class="sign_container">
    <div class="sign_contain">
        <div class="sign_card">
            <h1>Signup</h1>
<form action="admin_signup.php" method="post">

<input type="text" name="name" id="name" class="sign_text" placeholder="Enter Your Name">

<input type="email" name="email" id="email" class="sign_text" placeholder="Enter Your Email">

<input type="password" name="password" id="password" class="sign_text" placeholder="Enter Your Password">
<select id="sign" name="sign" class="sign_text">
  <option value="cv_admin" class="sign_text" >Admin</option>
  
 
</select><br>
<button type="submit" class="btn_signup" >SignUp</button>
<h1>already have account?<a href="login.php" ><span class="log_link">Log in</span></a></h1>
</form>
</div>
</div>
</div>
<?php


 $_SESSION['check']="sign";
 ?>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6541e338a84dd54dc48758ba/1he4lv6c6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>