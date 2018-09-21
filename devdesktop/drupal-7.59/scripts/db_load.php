<?php 
/**
* Load new users into the database for test database
* Created: 09/21/2018
* Author: Elkeno Jones
*/
require_once DRUPAL_ROOT . '/' . variable_get('password_inc', 'includes/password.inc');

$users = array(
  array(
    'name' => 'ejones1',
	'email' => 'name1@domain',
	'pass' => 'super'
  ),
		
  array(
	'name' => 'ejones2',
	'email' => 'name2@domain',
	'pass' => 'super'
  ),
	
  array(
	'name' => 'ejones3',
	'email' => 'name3@domain',
	'pass' => 'super'
  )
);    

foreach ($users as $user) {
  $account = new StdClass();
  $account->is_new = TRUE;
  $account->status = 1;
  $account->name = $user['name'];
  $account->pass = user_hash_password($user['pass']);
  $account->mail = $user['email'];
  $account->init = $user['email'];
  user_save($account);
}
