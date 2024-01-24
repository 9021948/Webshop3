<!DOCTYPE html>
<html>
<body>
<?php
      // bestaat de parameter
      if(isset($_get['koptekst']) == true) {
        // print kopstektst
        echo "<h2>" . $_get['titel'] . "</h2>";
      } else {
        echo "<h2>html forms</h2>";
      }


?>
<form action="action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
