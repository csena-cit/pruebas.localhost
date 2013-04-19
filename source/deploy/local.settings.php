<?php

/*
 Making the Admin menu work!
*/

// Set secure cookie when a SSL protocol is being used
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
  ini_set('session.cookie_secure',1);
}

$conf['https'] = TRUE;

$conf['admin_menu_cache_client'] = FALSE;
