

<!doctype html>

<html>
  <head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

  <body style="background-color: #F2FFF8;">
    <header>
      <nav>
        <ul>
          <li class="menu"><a href="../index.php">Home</a></li>
          <li><a href="hobby.html">Hobby</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="photo.html">Photo</a></li>
          <li><a href="video.html">Video</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="../logout.php">Logout</a></li>
            </ul>
      </nav>
    </header>
    <h1 style="margin-left: 20px;">Feedback Form</h1>
 
<meta name="viewport" content="width=device-width, initial-scale=1">    
 
<body>       
<div class="container2">    
  <form>    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your first name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="none">Select Country</option>    
          <option value="australia">Australia</option>
          <option value="china">Bangladesh</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Pakistan</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="write something here...." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input style= "width: 400px; margin: auto;" type="submit" value="Submit">    
    </div>    
  </form>    
</div>    
    
</body>    
 
  </body>
</html>
