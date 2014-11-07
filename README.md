Boone
=====

A base framework that includes, but is not limited to: Codeigniter, Ion Auth, HMVC for CI, &amp; Bootstrap.
=====
Codeigniter with Wiredesignz- Hmvc module, Bootstrap 3, Stripe.php, and ION Auth Integration

UPDATE: I've now refactored ion_auth to be able to use it as an hmvc module.

Configuration

After cloning and installing you will need to update the database config file in application/config/database.php with your database connection details. Then you will need to run the sql file in /ion auth sql that matches the type of database you are using (MY,POSTGRE, etc) on your database to create the ion auth tables ion auth uses. once you have a database set up import ci_sessions.sql to create a ci_sessions table. The default user is admin@admin.com and the password is password. ONCE YOUVE HAVE FINISHED CONFIGURATION LOADING YOUR DOMAIN SHOULD LOAD THE AUTH/LOGIN PAGE BY DEFAULT

Packages Included

UPDATED WITH LATEST BOOTSTRAP WITH THE LESS LATEST ION AUTH ION AUTH PAGES ARE STYLED USING BOOTSTRAP AND INCLUDE AN NAVBAR HMVC MODULE

CODEIGNITER https://ellislab.com/codeigniter

Stripe.php

@copyright Copyright (c) 2011 Pixative Solutions
@author Ben Cessa ben@pixative.com
@author_url http://www.pixative.com
ION Auth https://github.com/benedmunds/CodeIgniter-Ion-Auth

Bootstrap 3 http://getbootstrap.com/

dompdf https://github.com/dompdf/dompdf

Hmvc bootstrap navbar module.

HMVC HEADER AND FOOTER MODULES

Originally forked from

https://github.com/tariqrahiman/hmvc

License

MIT with CodeIgniter Amendments
