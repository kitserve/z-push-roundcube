# z-push-roundcube
Z-Push backend to allow synchronisation of Roundcube contacts with ActiveSync enabled mobile devices

To use:
- Set up Z-Push as normal.
- Copy the file roundcubecontacts.php into the backend folder.
- Open the Z-Push config.php file in a text editor.
- Set BACKEND_PROVIDER to BackendRoundcubeContacts.
- Add
	define('ROUNDCUBE_CONTACT_DB_NAME','database');
	define('ROUNDCUBE_CONTACT_DB_USER','user');
	define('ROUNDCUBE_CONTACT_DB_PASS','password');
	define('ROUNDCUBE_CONTACT_DB_HOST','host');
- Save the file.
