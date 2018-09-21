# EJ-drupal_codetest

## INIT
# After installing the code test locally, navigate to the modules and enable "Registration Form". 

Once successfully installed, open a drush terminal and run the following command: drush src scripts/db_load.php. This will load some test users into the database. 

I was unable to figure out why the status of the user defaults to 0, so you may have to modify them to 1 to make them active.
