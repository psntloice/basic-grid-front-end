<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="my kasmall webpage">
<meta name="Keywords" content="HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website">
<meta http-equiv="refresh" content="50">
  <meta charset="utf-8">
  <title>Boardrooom</title>
  <link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body> 
  
  <div class="mc_index">
    

  <div class = "navheadindex">
  <a href="#"><img src="assets/images/qwerty.png"></a>
<a href="#">About</a>
</div>

<div class = "landcontent" >
  <h2>Hello</h2>
</div>

<div class="signup">
  <div class="signbox">
      <h2 id = "signupheader"><u>SignIn</u></h2>      
      <form class ="tform" action="" method="post">
        <?php
// Check if the form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Retrieve form data
  $username = $_POST["uname"];
  $password = $_POST["psw"];
  
  // Check if username and password are correct (example condition)
  if ($username === "user" ) {
    // Redirect to a success page
    header("Location: User/");
    exit(); // Make sure to exit to prevent further execution
  } else if ($username === "approver" ){
    header("Location: Approvers/");
    exit();
  }
  //add an error statement
  
}
?>

  <div class="imgcontainer">
    <img src="assets/images/humanface1.jpg" alt="Avatar" class="avatar">
  </div>
  <div id="signcontainer">
    <label for="uname"><b>Username/Email</b></label>
    <input type="text" placeholder="Enter Username/Email" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit">Login</button>
    <p><label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></p>
  </div>
  <div id="signcontainer2">
    <button type="button" class="cancelbtn">Cancel</button>
    <p class="psw">Forgot <a href="#" style="color:#f1f1f1">password?</a></p>
  </div>
</form>
  </div>
</div>

<div class="navfooter">
      <?php $IPATH = __DIR__ . "/includes/";
      include($IPATH . "footer.php"); ?>
    </div>


</div>

<script src="../assets/js/script.js"></script>
</body>

</hmtl>