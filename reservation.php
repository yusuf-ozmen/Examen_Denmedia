<!DOCTYPE html>
<html>
  <head>
    <title>RESERVATION PAGE</title>
    <link href="css/reservation.css" rel="stylesheet">
    </script>
  </head>
  <body>
  <?php
include_once('header.php');
?>
    <?php
    // (A) PROCESS RESERVATION
    if (isset($_POST["date"])) {
      require "reserve.php";
      if ($_RSV->save(
        $_POST["date"], $_POST["slot"], $_POST["name"],
        $_POST["email"], $_POST["tel"], $_POST["notes"])) {
        echo "<div class='ok'>Reservation saved.</div>";
      } else { echo "<div class='err'>".$_RSV->error."</div>"; }
    }
    ?>

    <!-- (B) RESERVATION FORM -->
    <h1 style="margin-top: 50px; margin-bottom: 11px; margin-left:13px">RESERVATION</h1>
    <form id="resForm" method="post" target="_self">
      <label for="res_name">Name</label>
      <input type="text" required name="name" value="John Doe"/>

      <label for="res_email">Email</label>
      <input type="email" required name="email" value="john@doe.com"/>

      <label for="res_tel">Telephone Number</label>
      <input type="text" required name="tel" value="123456789"/>

      <label for="res_notes">Notes (if any)</label>
      <input type="text" name="notes" value="Testing"/>

      <?php
      // @TODO - MINIMUM DATE (TODAY)
      // $mindate = date("Y-m-d", strtotime("+2 days"));
      $mindate = date("Y-m-d");
      ?>
      <label>Reservation Date</label>
      <input type="date" required id="res_date" name="date"
             min="<?=$mindate?>">

      <label>Reservation Slot</label>
      <select name="slot">
        <option value="10:00 uur">10:00 uur</option>
        <option value="10:30 uur">10:30 uur</option>
		<option value="11:00 uur">11:00 uur</option>
		<option value="11:30 uur">11:30 uur</option>
		<option value="12:00 uur">12:00 uur</option>
		<option value="12:30 uur">12:30 uur</option>
		<option value="13:00 uur">13:00 uur</option>
		<option value="13:30 uur">13:30 uur</option>
		<option value="14:00 uur">14:00 uur</option>
		<option value="14:30 uur">14:30 uur</option>
		<option value="15:00 uur">15:00 uur</option>
		<option value="15:30 uur">15:30 uur</option>
		<option value="16:00 uur">16:00 uur</option>
		<option value="16:30 uur">16:30 uur</option>
		<option value="17:00 uur">17:00 uur</option>
      </select>

      <input type="submit" value="Submit"/>
    </form><br /><br /><br /><br /><br />
	<?php
include_once('footer.php');
?>
  </body>
</html>
