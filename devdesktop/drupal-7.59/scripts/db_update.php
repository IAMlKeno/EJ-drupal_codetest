<?php 

// load user object
$existingUser = user_load('USERID');

// update some user property
$existingUser->some_property = 'blah';

// save existing user
user_save((object) array('uid' => $existingUser->uid), (array) $existingUser);