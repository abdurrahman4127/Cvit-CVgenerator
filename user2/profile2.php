<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro.css">
    <title>Exprience</title>
</head>
<body>

<?php session_start();
if(isset($_SESSION['user'])){



$_SESSION['edu1']=$_POST['edu1'];
$_SESSION['deg1']=$_POST['deg1'];
$_SESSION['cgpa1']=$_POST['cgpa1'];
$_SESSION['edu2']=$_POST['edu2'];
$_SESSION['deg2']=$_POST['deg2'];
$_SESSION['cgpa2']=$_POST['cgpa2'];





?>
    <img src="/Cvit-CVgenerator\img\check-button.png" alt="" class="c1">
    <img src="/Cvit-CVgenerator\img\check-button.png" alt="" class="c2">
<p class="pro">Personal Details</p>
<p class="edu">Education</p>
<p class="exp">Exprience</p>
<p class="ski">Skills</p>

    <img src="/Cvit-CVgenerator\img\id-card.png" alt="" class="i1">
    <img src="/Cvit-CVgenerator\img\test.png" alt="" class="i2 green">
    <img src="/Cvit-CVgenerator\img\experience.png" alt="" class="i3 green">
    <img src="/Cvit-CVgenerator\img\self-development.png" alt="" class="i4">
    <hr class="h1 green_line">
    <hr class="h2 green_line">
    <hr class="h3">
    
<div class="con">
    <div class="design">
    <form action="/Cvit-CVgenerator\user2\profile3.php" method="post">
        <p class="top_pro">Works Exprience</p>
        <input type="text" name="og1" id="" class="text_box1" placeholder="Organization  Name*" required>
    

        <input type="text" name="og2" id="" class="text_box1" placeholder="Organization  Name" >
        <input type="text" name="p1" id="" class="text_box1" placeholder="Position*" required>
         
           <input type="text" name="p2" id="" class="text_box1" placeholder="Position" >
           <input type="text" name="y1" id="" class="text_box1" placeholder="Working Year*" required>
              
              <input type="text" name="y2" id="" class="text_box1" placeholder="Working Year" >

             <a href="profile1.html"><button class="btn_submit" type="submit">save and next</button></a>

    </form>
</div></div>
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
<?php
}else{
    header("location: \Cvit-CVgenerator/authentication/login.php");

}


?>
</body>
</html>