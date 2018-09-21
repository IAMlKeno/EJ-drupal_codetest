# EJ-drupal_codetest

# Description
The University of Prince Edward Island is gauging interest for a new summer course, "Theory of Computing 2: Electric Boogaloo". This web app will allow the logged in user to register for the course. If they are already registered, they will be unable to register again.

# INIT
After installing the code test locally, navigate to the modules and enable "Registration Form". 

Once successfully installed, open a drush terminal and run the following command: drush src scripts/db_load.php. This will load some test users into the database. 

You can also list the users/students that registered for the course using the following command: drush src scripts/list_registered_users.php.

## TODO
* ~~When displaying registered users, tally the total users registered~~
* If a user chose not to register for the class, allow them to change their decision.
