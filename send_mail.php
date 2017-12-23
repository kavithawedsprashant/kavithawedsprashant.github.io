<?php
   $Email = $_POST['email'];
   $Name = $_POST['name'];
   $Msg = "Name = $Name\tEmail = $Email\n"
   $myfile = fopen("guest.html", "a") or die("Unable to open file!");
   fwrite($myfile, $Msg);
   fclose($myfile);
 ?>
