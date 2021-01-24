<?php
/**
 * Plugin administration menu
 */
function PH_admin_menu($menu)
{
  // Retreive plugin name
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


/**
 * Function to retreive some plugin information like version and name
 * stored in main.inc.php file
 * 
 * @param : Path to plugin
 * 
 * @return : Array of retreived information
 */
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


/**
 * Function to update plugin version number in config table
 * Used everytime a new version is updated even if no database
 * upgrade is needed
 */
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

  $Newconf_PH['PHVersion'] = $version;

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
AND date > "'.$startdate.'"';

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
WHERE date = "'.$stopdate.'"';

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
 * Automatic prune function called from 'login_success' trigger
 * in main.inc.php file
 * 
 */
function history_autoprune()
{
  global $conf;
  
  $conf_PH = unserialize($conf['PruneHistory']);

  // Definition of the range to keep
  if (isset($conf_PH['AUTOPRUNE']) and $conf_PH['AUTOPRUNE'] == 'true' and isset($conf_PH['RANGEVALUE']) and $conf_PH['RANGEVALUE'] <> '0' and isset($conf_PH['RANGE']) and $conf_PH['RANGE'] <> '0')
  {
    if ($conf_PH['RANGE'] == '1') // Ranged for days
    {
      $limit = mktime(0, 0, 0, date("m") , date("d")-$conf_PH['RANGEVALUE'], date("Y"));
      $limit = date('Y-m-d', $limit);
    }
    else if ($conf_PH['RANGE'] == '2') // Ranged for months
    {
      $limit = mktime(0, 0, 0, date("m")-$conf_PH['RANGEVALUE'] , date("d"), date("Y"));
      $limit = date('Y-m-d', $limit);
    }
    else if  ($conf_PH['RANGE'] == '3') // Ranged for years
    {
      $limit = mktime(0, 0, 0, date("m") , date("d"), date("Y")-$conf_PH['RANGEVALUE']);
      $limit = date('Y-m-d', $limit);
    }

  $query = '
DELETE FROM '.HISTORY_TABLE.' 
WHERE date < "'.$limit.'"';

  $r = pwg_query($query);

  if($r)
	{
    $query = 'OPTIMIZE TABLE '.HISTORY_TABLE.';';
    pwg_query($query);
  }
  }
}


/**
 * PH specific database dump
 * Creates an SQL dump of history table for safety before manual prune
 * 
 * @returns  : Boolean to manage appropriate message display
 * 
 */
function PH_dump($download)
{
  global $conf;

  $plugin =  PHInfos(PH_PATH);
  $version = $plugin['version'];

  // Initial backup folder creation and file initialisation
  // ------------------------------------------------------
  if (!is_dir(PH_PATH.'/include/backup'))
    mkdir(PH_PATH.'/include/backup');

  $Backup_File = PH_PATH.'/include/backup/PH_Historybackup.sql';

  $fp = fopen($Backup_File, 'w');

  // Writing plugin version
  $insertions = "-- ".$version." --\n\n";
  fwrite($fp, $insertions);

  // Saving History table
  // --------------------
  $ListTables = array(HISTORY_TABLE);
  $j=0;
  
  while($j < count($ListTables))
  {
    $sql = 'SHOW CREATE TABLE '.$ListTables[$j];
    $res = pwg_query($sql);

    if ($res)
    {
      $insertions = "-- -------------------------------------------------------\n";
      $insertions .= "-- Create ".$ListTables[$j]." table\n";
      $insertions .= "-- ------------------------------------------------------\n\n";

      $insertions .= "DROP TABLE IF EXISTS ".$ListTables[$j].";\n\n";

      $array = pwg_db_fetch_row($res);
      $array[1] .= ";\n\n";
      $insertions .= $array[1];

      $req_table = pwg_query('DESCRIBE '.$ListTables[$j].';') or die(my_error());
      $nb_fields = pwg_db_num_rows($req_table);
      $req_table2 = pwg_query('SELECT * FROM '.$ListTables[$j]) or die(my_error());

      while ($line = pwg_db_fetch_row($req_table2))
      {
        $insertions .= 'INSERT INTO '.$ListTables[$j].' VALUES (';
        for ($i=0; $i<$nb_fields; $i++)
        {
          $insertions .= '\'' . pwg_db_real_escape_string($line[$i]) . '\', ';
        }
        $insertions = substr($insertions, 0, -2);
        $insertions .= ");\n";
      }
      $insertions .= "\n\n";
    }

    fwrite($fp, $insertions);    
    $j++;
  }

  fclose($fp);

  // Download generated dump file
  // ----------------------------
  if ($download == 'true')
  {
    if (@filesize($Backup_File))
    {
      $http_headers = array(
        'Content-Length: '.@filesize($Backup_File),
        'Content-Type: text/x-sql',
        'Content-Disposition: attachment; filename="PH_Historybackup.sql";',
        'Content-Transfer-Encoding: binary',
        );

      foreach ($http_headers as $header)
      {
        header($header);
      }

      @readfile($Backup_File);
      exit();
    }
  }

  return true;
}


/**
 * PH_Restore_backup_file
 * Restore backup history table
 * 
 * @returns : Boolean
 */
function PH_Restore_backup_file() 
{
  global $prefixeTable, $dblayer, $conf;
  
  define('DEFAULT_PREFIX_TABLE', 'piwigo_');
  
  $Backup_File = PH_PATH.'/include/backup/PH_Historybackup.sql';

  // Restore sql backup file - DROP TABLE queries are executed
  // ---------------------------------------------------------
  PH_execute_sqlfile(
    $Backup_File,
    DEFAULT_PREFIX_TABLE,
    $prefixeTable,
    $dblayer
  );
}


/**
 * loads an sql file and executes all queries / Based on Piwigo's original install file
 *
 * Before executing a query, $replaced is... replaced by $replacing. This is
 * useful when the SQL file contains generic words.
 *
 * @param string filepath
 * @param string replaced
 * @param string replacing
 * @return void
 */
function PH_execute_sqlfile($filepath, $replaced, $replacing, $dblayer)
{
  $sql_lines = file($filepath);
  $query = '';
  foreach ($sql_lines as $sql_line)
  {
    $sql_line = trim($sql_line);
    if (preg_match('/(^--|^$)/', $sql_line))
    {
      continue;
    }
    
    $query.= ' '.$sql_line;
    
    // if we reached the end of query, we execute it and reinitialize the
    // variable "query"
    if (preg_match('/;$/', $sql_line))
    {
      $query = trim($query);
      $query = str_replace($replaced, $replacing, $query);
      if ('mysql' == $dblayer)
      {
        if (preg_match('/^(CREATE TABLE .*)[\s]*;[\s]*/im', $query, $matches))
        {
          $query = $matches[1].' DEFAULT CHARACTER SET utf8'.';';
        }
      }
      pwg_query($query);
      $query = '';
    }
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
