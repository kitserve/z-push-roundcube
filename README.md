# z-push-roundcube
Z-Push backend to allow synchronisation of Roundcube contacts with ActiveSync enabled mobile devices

To use:
- Set up Z-Push as normal.
- Create the backend/roundcubecontacts directory
- Copy the file roundcubecontacts.php and config.php into the backend/roundcubecontacts folder.
- Open the main Z-Push config.php file in a text editor.
- Set BACKEND_PROVIDER to BackendRoundcubeContacts in the main config.php
- Update backend/roundcubecontacts/config.php and set Rouncube's DB and choose what mechanism you want to use to authenticate users (either database or imap)

