<?php
$lang['PH_ManualPrune_title'] = 'Manual Prune';
$lang['PH_ManualPrune_title_d'] = 'This feature allows you to delete history entries based on a range of dates. Choose a start date and end date of treatment and run.<br><br>
<b style=&quot;color: red;&quot;>Warning: The history data will be irretrievably deleted!</b> You can backup and restore history table by using the functions in the right frame.<br><br>
Note: The history summary is not affected by pruning.';

$lang['PH_Save_Title'] = 'Safety backup';
$lang['PH_Save_Title_d'] = 'Because pruning is final and irreversible, it is advisable to save your history table before beginning pruning. By default, the table is saved in a file on the server and can be restored from there.<br><br>
But it is also possible to download the backup file to keep it out of your gallery. In this case, the restoration must be done via your database management tool (usually phpMyAdmin).';

$lang['PH_Dump_Download'] = 'To download the backup file, check this box:';
$lang['PH_Restore'] = 'To restore a backup of your history table.<br>Only the saved file on the server is taken into account.';
$lang['PH_Save'] = 'Backup history';
$lang['PH_Restore_File'] = 'Restore history';
$lang['PH_Dump_OK'] = 'The backup was successful!';
$lang['PH_Dump_NOK'] = 'The backup failed!';
$lang['PH_Restoration_OK'] = 'Restoration successful!';
$lang['PH_Restoration_NOK'] = 'Restoration failed!';
$lang['PH_Bad_version_backup'] = 'Wrong plugin version! The backup you are trying to restore is outdated or has been created with an older version of the plugin.';
$lang['PH_No_Backup_File'] = 'No backup file found to restore!';

$lang['PH_AutoPrune_title'] = 'Automatic Prune';
$lang['PH_AutoPrune_title_d'] = 'If you enable automatic pruning, it will be triggered automatically at each user login on the gallery (including an administrator or webmaster) and based on the conservation settings.<br><br>
<b style=&quot;color: red;&quot;>Use with caution! Pruned data will not be recoverable!</b>';

$lang['PH_AutoPrune_false'] = 'Disable (default)';
$lang['PH_AutoPrune_true'] = 'Enable';
$lang['Start_Date'] = 'Start date';

$lang['PH_AutoRange_title'] = 'keep the history up to:';
$lang['PH_AutoRange_title_d'] = 'Please configure your History <b>conservation</b> criterion for automatic pruning. Several choices are possible:<br><br>
- Keep x days<br>
- Keep x months<br>
- Keep x years<br><br>
For example: If you want to keep a historical depth of 3 months, you can set up three months or 91 days.<br><br>
Note: The history summary is not affected by auto pruning.';

$lang['PH_save_config'] = 'Settings saved!';
$lang['PH_Prune'] = 'Run manual pruning';
$lang['PH_submit'] = 'Save settings';

$lang['PH_Prune_Done'] = 'Manual pruning done!';
$lang['PH_Prune_Error'] = 'Error manual pruning! Check your date range.';

$lang['range'][1] = 'Day(s)';
$lang['range'][2] = 'Month(s)';
$lang['range'][3] = 'Year(s)';

$lang['PH_Support'] = 'The official support on this plugin is only on these Piwigo forum topic:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=</a>';
?>