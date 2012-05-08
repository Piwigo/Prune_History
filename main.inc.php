<?php
/*
Plugin Name: Prune History
Version: 1.0.0-beta1
Description: Based on original History_cleanup plugin from VDigital, this plugin allows to manually or automatically prune history table according to configurable criteria
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=
Author: Eric
Author URI: http://www.infernoweb.net
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if(!defined('PH_PATH'))
{
  define('PH_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

global $conf;

include_once (PH_PATH.'include/functions.inc.php');

load_language('plugin.lang', PH_PATH);
$conf_PH = unserialize($conf['PruneHistory']);

/* Plugin admin */
add_event_handler('get_admin_plugin_menu_links', 'PH_admin_menu');

function PH_admin_menu($menu)
{
// +-----------------------------------------------------------------------+
// |                      Getting plugin name                              |
// +-----------------------------------------------------------------------+
  $plugin =  PHInfos(PH_PATH);
  $name = $plugin['name'];
  
  array_push($menu,
    array(
      'NAME' => $name,
      'URL' => get_root_url().'admin.php?page=plugin-'.basename(PH_PATH)
    )
  );

  return $menu;
}

// Prune automation on user login
if (isset($conf_PH[1]) and $conf_PH[1] == 'true')
{
  add_event_handler('login_success', 'history_autoprune' );
}
?>