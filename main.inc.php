<?php
/*
Plugin Name: Prune History
Version: auto
Description: Based on original History_cleanup plugin from VDigital, this plugin allows to manually or automatically prune history table according to configurable criteria
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=604
Author: Eric
Author URI: http://www.piwigo.org
Has Settings: true
*/

/* See release history and changes in changelog.txt file */

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if(!defined('PH_PATH'))
{
  define('PH_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

global $conf;

include_once (PH_PATH.'include/functions.inc.php');

add_event_handler('loading_lang', 'PH_loading_lang');	  
function PH_loading_lang(){
  load_language('plugin.lang', PH_PATH);
}

$conf_PH = unserialize($conf['PruneHistory']);


/* Prune automation on user login */
if (isset($conf_PH['AUTOPRUNE']) and $conf_PH['AUTOPRUNE'] == 'true')
{
  add_event_handler('login_success', 'history_autoprune', EVENT_HANDLER_PRIORITY_NEUTRAL, 10);
}
?>