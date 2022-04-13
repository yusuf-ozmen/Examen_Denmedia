<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/contactstyle.css" type="text/css">
</head>
<body>
<?php
include_once('header.php');
?>
    <?php
    // (A) PROCESS CONTACT
    if (isset($_POST["firstname"])) {
      require "contactconnect.php";
      if ($_CONTACT->save(
        $_POST["firstname"], $_POST["lastname"], $_POST["subject"])) {
        echo "<div class='ok'>Reservation saved.</div>";
      } else { echo "<div class='err'>".$_CONTACT->error."</div>"; }
    }
    ?>
<div class="container">
  <form method="post" target="_self">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<?php
include_once('footer.php');
?>
</body>
</html>