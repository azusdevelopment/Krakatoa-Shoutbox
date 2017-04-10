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
$action = (isset($_GET['action']) ? $_GET['action'] : false);
if (!in_array($action, $allowed_actions) || !$settings['krakatoa_enabled'])
{
     exit;
}
$lang->load('krakatoa');
$uid              = $krakatoa->userinfo['uid'];
$ugid             = $ipb->user['usergroup'];
$bold             = $krakatoa->userinfo['bold'];
$admin            = $krakatoa->admin;
$mod              = ($admin) ? true : krakatoa ->mod;
$italic           = $krakatoa->userinfo['italic'];
$underline        = $krakatoa->userinfo['underline'];
$banned           = $krakatoa->banned;
$silenced         = $krakatoa->userinfo['silenced'];

?>
