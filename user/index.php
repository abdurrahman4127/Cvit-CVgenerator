<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
<?php session_start()?>
    <section class="sidebar">

<div class="user_card">
    <div class="top_flex">
    <img src="/img/01.jpg" alt="" class="user_profile_photo"></div>
   <p class="user_name"> <?php echo $_SESSION['name'] ?></p>

<ul>
    <li><a href="">profile</a></li>
    <li><a href="\chosetemplate.php">Create Cv</a></li>
    <li><a href="\download.php">Download CV</a></li>
    <li><a href="">All Courses</a></li>
    <li><a href="\index.php">Home</a></li>
    <li><a href="\index.php">Logout</a></li>

</ul>
</div>
<div class="user_card2">

<h1>Enrolled Course</h1>
<section class="container">
    <div class="course">



        

        <a href="webdesign.html" class="card" > 
            <h1 class="cardtext"><span class="t1">WEB DESIGN</span></h1>

          <div class="in_card"><p>Click Here to Start Learning</p></div>




        </a>

        <a href="webdevelopment.html" class="card" > 
            <h1 class="cardtext"><span class="t1">WEB DEVELOPMENT</span></h1>
               
          <div class="in_card"><p>Click Here to Start Learning</p></div>
        </a>
        <a href="machinelearning.html" class="card" > 
            <h1 class="cardtext"><p class="t1">MACHINE LEARNING</p></h1>
            
          <div class="in_card"><p>Click Here to Start Learning</p></div>
        </a>


        <a href="dataanalytics.html" class="card" > 
            <h1 class="cardtext"><span class="t1">DATA ANALYTICS</span></h1>
            
          <div class="in_card"><p>Click Here to Start Learning</p></div>
        </a>

</div>



</section>

<h1>Complete Course</h1>
<section class="container">
    <div class="course">



        

        <a href="webdesign.html" class="card" > 
            <h1 class="cardtext"><span class="t1">WEB DESIGN</span></h1>

          <div class="in_card"><p>Click Here to Start Learning</p></div>




        </a>

        <a href="webdevelopment.html" class="card" > 
            <h1 class="cardtext"><span class="t1">WEB DEVELOPMENT</span></h1>
               
          <div class="in_card"><p>Click Here to Start Learning</p></div>
        </a>
        <a href="machinelearning.html" class="card" > 
            <h1 class="cardtext"><p class="t1">MACHINE LEARNING</p></h1>
            
          <div class="in_card"><p>Click Here to Start Learning</p></div>
        </a>


        <a href="dataanalytics.html" class="card" > 
            <h1 class="cardtext"><span class="t1">DATA ANALYTICS</span></h1>
            
          <div class="in_card"><p>Click Here to Start Learning</p></div>
        </a>

</div>
    
</div>
    </section>



</body>
</html>