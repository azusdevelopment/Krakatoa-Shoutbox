<?php
// Author: Sean Hill (@Azzusss)
// Project Start Date: 4/10/17

define('IN_IPB', true);
//define('IPB_LOCATION', 'Krakatoa Shoutbox,);
require_once 'global.php';
require_once IPB_ROOT . 'ksb/plugins/krakatoa/class_core.php';
$krakatoa = krakatoa_shoutbox::get_instance();
$allowed_actions = array(
          'getshouts',
          'newshout',
          'getactiveusers',
          'getsmilies',
          'updatestyles',
          'getprivateshouts',
          'getshout',
          'deleteshout',
          'updateshout',
          'archive'
);

?>
