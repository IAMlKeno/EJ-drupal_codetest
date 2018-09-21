<?php 

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
  $account->is_new = TRUE;
  $account->status = TRUE;
  $account = new StdClass();
  $account->name = $user['name'];
  $account->pass = user_hash_password($user['pass']);
  $account->mail = $user['email'];
  $account->init = $user['email'];
  user_save($account);

}
