<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

     <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    
    style="background-color: #98AAF3;">
    <header>
      <nav>
        <ul>
          <li class="menu"><a href="index.php">Home</a></li>
          <li><a href="pages/hobby.html">Hobby</a></li>
          <li><a href="pages/contact.php">Contact</a></li>
          <li><a href="pages/photo.html">Photo</a></li>
          <li><a href="pages/video.html">Video</a></li>
          <li><a href="pages/feedback.php">Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
            </ul> 
      </nav>
    </header>
    <h1 style="margin-left: 20px;">Profile</h1>

    <body>
<div class="main">
</style>
<body>

  <div class="table"><div class="profile">
<img src="picture.png" align="style" height="120px" width="100px">
</div> 
<div class="topright"></div>



<table class="table" style="width:100%;">
   
  <div style="margin-top: 118px"> 
   <h2 style="text-align: center;"> Personal details </h2>
 </div>
   <h2> 
  <tr>
    <td>Name:</td>
    <td>Md Nafis Sadik Rafhy</td>
  </tr>
   <tr>
    <td>Profession:</td>
    <td>Student</td>
  </tr>
   <tr>
    <td>Universuty Name:</td>
    <td>University of Liberal Arts Bangladesh</td>
  </tr>
   <tr>
    <td>Department:</td>
    <td>Computer Science & Engineering (CSE)</td>
  </tr>
  
  <tr>
    <td>ID:</td>
    <td>191014006</td>
  </tr>
  
  <tr>
    <td>Gender:</td>
    <td>Male</td>
  </tr>
  
  <tr>
    <td>Address:</td>
    <td>Dhaka, Bangladesh </td>

  </tr>
  </h2>
</table>


   
</body>
</html>

<style>
body {
  background-image: url('backgroundindex.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>