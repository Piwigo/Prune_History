<?php

if(!defined('PH_PATH'))
{
  define('PH_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

include_once (PH_PATH.'include/functions.inc.php');

function plugin_install()
{
	global $conf;

/* ****************************************************************** */
/* **************** BEGIN - Data preparation in vars **************** */
/* ****************************************************************** */

  $defaultPH = array();

  // Set current plugin version in config table
  $plugin =  PHInfos(PH_PATH);
  $version = $plugin['version'];

  // Default global parameters for Prune History conf
  // -------------------------------------------------
  $defaultPH[0] = $version;                                  // Prune History version
  $defaultPH[1] = 'false';                                   // Enable automated prune
  $defaultPH[2] = '0';                                       // Range
  $defaultPH[3] = '0';                                       // Value (Year, month, day)

  // Create Prune History conf if not already exists
  // ------------------------------------------------
	$query = '
SELECT param
  FROM '.CONFIG_TABLE.'
WHERE param = "PruneHistory"
;';
  $count = pwg_db_num_rows(pwg_query($query));
  
  if ($count == 0)
  {
    $q = '
INSERT INTO '.CONFIG_TABLE.' (param, value, comment)
VALUES ("PruneHistory","'.pwg_db_real_escape_string(serialize($defaultPH)).'","Prune History parameters")
  ;';
    pwg_query($q);
  }
}


function plugin_activate()
{
  global $conf;

/* Cleaning obsolete files */
/* *********************** */
  PH_Obsolete_Files();

/* Update plugin version number in #_config table */
/* and check consistency of #_plugins table       */
/* ********************************************** */
  PH_version_update();

/* Reload plugin parameters */
/* ************************ */
  load_conf_from_db('param like \'PruneHistory\'');
}


function plugin_uninstall()
{
  global $conf;

  if (isset($conf['PruneHistory']))
  {
    $q = '
DELETE FROM '.CONFIG_TABLE.'
WHERE param="PruneHistory"
;';

    pwg_query($q);
  }
}
?>