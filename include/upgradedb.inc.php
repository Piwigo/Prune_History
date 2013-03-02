<?php
/**
 * @author Eric@piwigo.org
 *  
 * Upgrade processes for old plugin version
 * Called from maintain.inc.php on plugin activation
 * 
 */

if(!defined('PH_PATH'))
{
  define('PH_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

include_once (PH_PATH.'include/functions.inc.php');

// +----------------------------------------------------------+
// |       Upgrading database from old plugin versions        |
// +----------------------------------------------------------+

/* upgrade from 1.0 to 1.1 */
/* *********************** */
function upgrade_100_110()
{
  global $conf;
  
  load_language('plugin.lang', PH_PATH);

  // Upgrading options - Changing config variables to assoc array
  // ------------------------------------------------------------
  
  // Upgrade $conf_PH options
  $conf_PH = unserialize($conf['PruneHistory']);

  $Newconf_PH = array(
    'PHVersion'   => $conf_PH[0],
    'AUTOPRUNE'   => $conf_PH[1],
    'RANGEVALUE'  => $conf_PH[2],
    'RANGE'       => $conf_PH[3],
  );

  // unset obsolete conf
  // -------------------
  for ($i = 0; $i <= 3; $i++)
  {
    unset ($conf_PH[$i]);
  }

  $update_conf = serialize($Newconf_PH);

  conf_update_param('PruneHistory', pwg_db_real_escape_string($update_conf));
}
?>