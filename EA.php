<?php


$account_no = empty($_post["account_no"]) ? "" : $_post["account_no"];


$valid_accounts = array(
  2185670, //khorzokhan
  2180967  //Ali pirooz


);
$result = in_array((int)$account_no,);
if($result) echo("success");
else echo ("failed... ".$account_no."Was not found...");
?>
