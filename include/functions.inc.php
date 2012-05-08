<?php
/* Function called from main.inc.php to get the plugin version and name */
function PHInfos($dir)
{
  $path = $dir;

  $plg_data = implode( '', file($path.'main.inc.php') );
  if ( preg_match("|Plugin Name: (.*)|", $plg_data, $val) )
  {
    $plugin['name'] = trim( $val[1] );
  }
  if (preg_match("|Version: (.*)|", $plg_data, $val))
  {
    $plugin['version'] = trim($val[1]);
  }
  if ( preg_match("|Plugin URI: (.*)|", $plg_data, $val) )
  {
    $plugin['uri'] = trim($val[1]);
  }
  if ($desc = load_language('description.txt', $path.'/', array('return' => true)))
  {
    $plugin['description'] = trim($desc);
  }
  elseif ( preg_match("|Description: (.*)|", $plg_data, $val) )
  {
    $plugin['description'] = trim($val[1]);
  }
  if ( preg_match("|Author: (.*)|", $plg_data, $val) )
  {
    $plugin['author'] = trim($val[1]);
  }
  if ( preg_match("|Author URI: (.*)|", $plg_data, $val) )
  {
    $plugin['author uri'] = trim($val[1]);
  }
  if (!empty($plugin['uri']) and strpos($plugin['uri'] , 'extension_view.php?eid='))
  {
    list( , $extension) = explode('extension_view.php?eid=', $plugin['uri']);
    if (is_numeric($extension)) $plugin['extension'] = $extension;
  }
// IMPORTANT SECURITY !
  $plugin = array_map('htmlspecialchars', $plugin);

  return $plugin ;
}


/* *************************************** */
/* Update plugin version in conf table     */
/* Used everytime a new version is updated */
/* even if no database upgrade is needed   */
/* *************************************** */
function PH_version_update()
{
  global $conf;
  
  load_language('plugin.lang', PH_PATH);
  
  // Get current plugin version
  // --------------------------
  $plugin =  PHInfos(PH_PATH);
  $version = $plugin['version'];

  // Upgrading options
  // -----------------
  $query = '
SELECT value
FROM '.CONFIG_TABLE.'
WHERE param = "PruneHistory"
;';

  $result = pwg_query($query);
  $conf_PH = pwg_db_fetch_assoc($result);
    
  $Newconf_PH = unserialize($conf_PH['value']);
  
  $Newconf_PH[0] = $version;

  $update_conf = serialize($Newconf_PH);

  conf_update_param('PruneHistory', pwg_db_real_escape_string($update_conf));


// Check #_plugin table consistency
// Only useful if a previous version upgrade has not worked correctly (rare case)
// ------------------------------------------------------------------------------
  $query = '
SELECT version
  FROM '.PLUGINS_TABLE.'
WHERE id = "PruneHistory"
;';
  
  $data = pwg_db_fetch_assoc(pwg_query($query));
  
  if (empty($data['version']) or $data['version'] <> $version)
  {
    $query = '
UPDATE '.PLUGINS_TABLE.'
SET version="'.$version.'"
WHERE id = "PruneHistory"
LIMIT 1
;';

    pwg_query($query);
  }
}


/**
 * Delete obsolete files on plugin upgrade
 * Obsolete files are listed in file obsolete.list
 *
 */
function PH_Obsolete_Files()
{
  if (file_exists(PH_PATH.'obsolete.list')
    and $old_files = file(PH_PATH.'obsolete.list', FILE_IGNORE_NEW_LINES)
    and !empty($old_files))
  {
    array_push($old_files, 'obsolete.list');
    foreach($old_files as $old_file)
    {
      $path = PH_PATH.$old_file;
      if (is_file($path))
      {
        @unlink($path);
      }
      elseif (is_dir($path))
      {
        @rmdir($path);
      }
    }
  }
}


/**
 * Manual prune function
 * 
 * @param : Start and stop range to prune
 * 
 * @return : boolean
 */
function history_prune($startdate,$stopdate)
{
  list($year, $month, $day) = explode('-', $startdate); // explode date of $startdate						 
 	$starttimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp

  list($year, $month, $day) = explode('-', $stopdate); // explode date of $stopdate						 
 	$stoptimestamp = mktime(0, 0, 0, $month, $day, $year);// Generate UNIX timestamp

  if ($starttimestamp < $stoptimestamp)
  {
    $query = '
DELETE
FROM '.HISTORY_TABLE.' 
WHERE date < "'.$stopdate.'" 
AND date > "'.$startdate.'"
AND summarized = "true";';

    $r = pwg_query($query);

    if ($r)
    {
      $query = 'OPTIMIZE TABLE '.HISTORY_TABLE.';';
      pwg_query($query);
    }
    return true;
  }
  else if ($starttimestamp == $stoptimestamp)
  {
    $query = '
DELETE FROM '.HISTORY_TABLE.' 
WHERE date = "'.$stopdate.'" 
AND summarized = "true";';

    $r = pwg_query($query);

    if ($r)
    {
      $query = 'OPTIMIZE TABLE '.HISTORY_TABLE.';';
      pwg_query($query);
    }
    return true;
  }

  return false;
}


/**
 * Automatic prune function
 * 
 * @param : Start and stop range to prune
 * 
 * @return : boolean
 */
function history_autoprune()
{
  global $conf;
  
  $conf_PH = unserialize($conf['PruneHistory']);

  // Definition of the range to keep
  if (isset($conf_PH[1]) and $conf_PH[1] == 'true' and isset($conf_PH[2]) and $conf_PH[2] <> '0' and isset($conf_PH[3]) and $conf_PH[3] <> '0')
  {
    if ($conf_PH[3] == '1') // Ranged for days
    {
      $limit = mktime(0, 0, 0, date("m") , date("d")-$conf_PH[2], date("Y"));
      $limit = date('Y-m-d', $limit);
    }
    else if ($conf_PH[3] == '2') // Ranged for months
    {
      $limit = mktime(0, 0, 0, date("m")-$conf_PH[2] , date("d"), date("Y"));
      $limit = date('Y-m-d', $limit);
    }
    else if  ($conf_PH[3] == '3') // Ranged for years
    {
      $limit = mktime(0, 0, 0, date("m") , date("d"), date("Y")-$conf_PH[2]);
      $limit = date('Y-m-d', $limit);
    }
  }

  $query = '
DELETE FROM '.HISTORY_TABLE.' 
WHERE date < "'.$limit.'"
AND summarized = "true";';

  $r = pwg_query($query);

  if($r)
	{
    $query = 'OPTIMIZE TABLE '.HISTORY_TABLE.';';
    pwg_query($query);
  }
}



/**
 * Useful for debugging - 4 vars can be set
 * Output result to log.txt file
 *
 */
function PHLog($var1, $var2, $var3, $var4)
{
   $fo=fopen (PH_PATH.'log.txt','a') ;
   fwrite($fo,"======================\n") ;
   fwrite($fo,'le ' . date('D, d M Y H:i:s') . "\r\n");
   fwrite($fo,$var1 ."\r\n") ;
   fwrite($fo,$var2 ."\r\n") ;
   fwrite($fo,$var3 ."\r\n") ;
   fwrite($fo,$var4 ."\r\n") ;
   fclose($fo) ;
}
?>