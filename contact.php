<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'menu.php'; ?>

<div class="jumbotron">
  <h1>Contact Page</h1>
  <p>ID Number: 21IT171 :} & 21IT176 :) & 21IT177 ;}</p>
  <p>We are the developers of this website, AWT project.</p>
</div>

<video width="100%" height="500px" 
        controls ="controls"/ autoplay> 
          
        <source src="images/video.mp4" 
            type="video/mp4"> 
    </video>

<div class="py-5">
    <h2 class="text-center display-4"><u>Contact Us</u></h2>
  </div>

  <div class="w-50 m-auto py-5">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
  </div>

<footer>
  <p class="p-3 bg-dark text-white text-center">ID Number: 21IT171 & 21IT176 & 21IT177</p>
</footer>

</body>
</html>