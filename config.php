<?php
# The database details of Roundcube's database
define('ROUNDCUBE_CONTACT_DB_NAME',"roundcubemail");
define('ROUNDCUBE_CONTACT_DB_USER',"user");
define('ROUNDCUBE_CONTACT_DB_PASS',"password");
define('ROUNDCUBE_CONTACT_DB_HOST',"host");

# Use this section if you want to authenticate users against passwords in a database
define('ROUNDCUBE_CONTACT_USER_AUTH','database');
define('ROUNDCUBE_PASSWORD_SQL',"SELECT password FROM users WHERE username='%u'");
define('ROUNDCUBE_AUTH_DB_NAME',"authdb");
define('ROUNDCUBE_AUTH_DB_USER',"user");
define('ROUNDCUBE_AUTH_DB_PASS',"password");
define('ROUNDCUBE_AUTH_DB_HOST',"localhost");

# Use this section if you want to use imap to authenticate users
#define('ROUNDCUBE_CONTACT_USER_AUTH','imap');
#define('ROUNDCUBE_CONTACT_IMAP_SERVER','{localhost:993/imap/ssl/novalidate-cert}');

?>

