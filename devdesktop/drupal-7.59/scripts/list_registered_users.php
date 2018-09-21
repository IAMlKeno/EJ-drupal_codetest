<?php 
/**
* List the users that are registers for the boogalo course
* Created: 09/21/2018
* Author: Elkeno Jones
*/

$results = db_query("SELECT username FROM registration_form WHERE signed_up = 1");

if ($results->rowCount() > 0) {
  $counter = 0;
  echo "Registered users: \n";
  
  foreach($results as $user) {
    echo $user->username. "\n";
	$counter++;
  }
  echo "Total users registered: ". $counter;
}
else {
  echo "There are no registered users yet.";
}