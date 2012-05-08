<?php

global $lang, $conf, $errors;

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

if(!defined('PH_PATH'))
{
  define('PH_PATH' , PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
}

load_language('plugin.lang', PH_PATH);

$page['global'] = array();
$range = array();
$dump_download = '';


// +-------------------------------------------------------------------+
// |                      Get plugin version and name                  |
// +-------------------------------------------------------------------+
$plugin =  PHInfos(PH_PATH);
$version = $plugin['version'];
$name = $plugin['name'];


// +-----------------------------------------------------------------------+
// |                      Saving new configuration                         |
// +-----------------------------------------------------------------------+
if (isset($_POST['submit']) and isset($_POST['PH_AutoPrune']) and isset($_POST['PH_Range_Value']) and isset($_POST['PH_Range']))
{

  $newconf_PH[0] = $version;
  $newconf_PH[1] = $_POST['PH_AutoPrune'];
  $newconf_PH[2] = $_POST['PH_Range_Value'];
  $newconf_PH[3] = $_POST['PH_Range'];

  $conf['PruneHistory'] = serialize($newconf_PH);

  conf_update_param('PruneHistory', pwg_db_real_escape_string($conf['PruneHistory']));

  array_push($page['infos'], l10n('PH_save_config'));
}


// +--------------------------------------------------------------------+
// |                     Saving history tables                          |
// +--------------------------------------------------------------------+
if (isset($_POST['save']))
{
  $dump_download = (isset($_POST['dump_download'])) ? 'true' : 'false';
    
  if(PH_dump($dump_download) and $dump_download == 'false')
  {
    array_push($page['infos'], l10n('PH_Dump_OK'));
  }
  else
  {
    array_push($page['errors'], l10n('PH_Dump_NOK'));
  }
}


// +--------------------------------------------------------------------+
// |             Restoring backed up history tables                     |
// +--------------------------------------------------------------------+
if (isset($_POST['restore']))
{
  $Backup_File = PH_PATH.'/include/backup/PH_Historybackup.sql';

  if (file_exists($Backup_File) and $file = file($Backup_File, FILE_IGNORE_NEW_LINES) and !empty($file))
  {
    // Check backup file version
    // -------------------------
    if ($file[0] == "-- ".$version." --")
    {
      $restore = PH_Restore_backup_file();
      if(empty($restore))
      {
        array_push($page['infos'], l10n('PH_Restoration_OK'));
      }
      else
      {
        array_push($page['errors'], l10n('PH_Restoration_NOK'));
      }
    }
    else array_push($page['errors'], l10n('PH_Bad_version_backup'));
  }
  else
  {
    array_push($page['errors'], l10n('PH_No_Backup_File'));
  }
}


// +--------------------------------------------------------------------+
// |                      Manual prune settings                         |
// +--------------------------------------------------------------------+
$conf_PH = unserialize($conf['PruneHistory']);

// Manual prune
if (isset($_POST['prune']))
{
  // Starting range date
  if (!empty($_POST['start_year']))
  {
    $range['date-after'] = sprintf(
      '%d-%02d-%02d',
      $_POST['start_year'],
      $_POST['start_month'],
      $_POST['start_day']
      );
  }

  // Ending range date
  if (!empty($_POST['end_year']))
  {
    $range['date-before'] = sprintf(
      '%d-%02d-%02d',
      $_POST['end_year'],
      $_POST['end_month'],
      $_POST['end_day']
      );
  }

  // Prune action on ranged dates
  if (history_prune($range['date-after'],$range['date-before']))
  {
    array_push($page['infos'], l10n('PH_Prune_Done')); 
  }
  else array_push($page['errors'], l10n('PH_Prune_Error'));
}
else
{
  // by default, the selected date have to be the current date
  $_POST['start_year']  = $_POST['end_year']  = date('Y');
  $_POST['start_month'] = $_POST['end_month'] = date('n');
  $_POST['start_day']   = $_POST['end_day']   = date('j');
}


// +-----------------------------------------------------------------------+
// |                           templates init                              |
// +-----------------------------------------------------------------------+
$month_list = $lang['month'];
$month_list[0]='------------';
ksort($month_list);

$range_list = $lang['range'];
$range_list[0]='------------';
ksort($range_list);

$template->assign(
  array(
    'PH_PATH'                    => PH_PATH,
    'PWG_ROOT_PATH'              => PHPWG_ROOT_PATH,
    'PH_NAME'                    => $name,
    'PH_VERSION'                 => $version,
    'PH_DUMP_DOWNLOAD'           => $dump_download,
		'PH_AUTOPRUNE_TRUE'          => $conf_PH[1]=='true' ? 'checked="checked"' : '' ,
		'PH_AUTOPRUNE_FALSE'         => $conf_PH[1]=='false' ? 'checked="checked"' : '' ,
    'PH_RANGE_VALUE'             => $conf_PH[2],
    'PH_RANGE_SELECTED'          => $conf_PH[3],
    'range_list'                 => $range_list,
    'month_list'                 => $month_list,
    'START_DAY_SELECTED'         => @$_POST['start_day'],
    'START_MONTH_SELECTED'       => @$_POST['start_month'],
    'START_YEAR'                 => @$_POST['start_year'],
    'END_DAY_SELECTED'           => @$_POST['end_day'],
    'END_MONTH_SELECTED'         => @$_POST['end_month'],
    'END_YEAR'                   => @$_POST['end_year'],
  )
);


// +-----------------------------------------------------------------------+
// |                           templates display                           |
// +-----------------------------------------------------------------------+
$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/PH_admin.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>