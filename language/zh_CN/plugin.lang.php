<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['PH_Save_Title_d'] = '由于精简是不可逆的，建议在精简前备份历史记录表。记录表默认以文件形式保存在服务器上，并可从那里被恢复。<br><br>
但也可下载备份文件，在图库外保存。在这种情况下，恢复工作必须通过您的数据库管理工具来做（通常为phpMyAdmin）。';
$lang['PH_Support'] = '本插件的唯一官方技术支持在Piwigo论坛的此主题：<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_ManualPrune_title_d'] = '此功能允许基于日期范围删除历史记录条目。请选择起始日期并执行。<br><br>
<b style=&quot;color: red;&quot;>警告：历史数据删除后将不可恢复！</b>您可使用页面右侧的功能备份和恢复历史记录表。<br><br>
注意：历史摘要不受自动精简影响。';
$lang['PH_Prune_Error'] = '手动精简出错！请检查日期范围。';
$lang['PH_Save'] = '备份历史记录';
$lang['PH_Save_Title'] = '安全备份';
$lang['PH_save_config'] = '设置已保存！';
$lang['PH_submit'] = '保存设置';
$lang['Start_Date'] = '开始日期';
$lang['range']['1'] = '天';
$lang['range']['2'] = '月';
$lang['range']['3'] = '年';
$lang['PH_No_Backup_File'] = '未发现可恢复的备份文件！';
$lang['PH_Prune'] = '执行手动精简';
$lang['PH_Prune_Done'] = '手动精简完成！';
$lang['PH_Restoration_NOK'] = '恢复失败！';
$lang['PH_Restoration_OK'] = '恢复成功！';
$lang['PH_Restore'] = '从备份文件恢复历史记录表。<br>仅包括保存在服务器上的文件。';
$lang['PH_Restore_File'] = '恢复历史记录';
$lang['PH_ManualPrune_title'] = '手动精简';
$lang['PH_Dump_OK'] = '备份成功！';
$lang['PH_Dump_NOK'] = '备份失败！';
$lang['PH_Dump_Download'] = '如需下载备份文件，请勾选：';
$lang['PH_Bad_version_backup'] = '插件版本错误！您想恢复的备份已过期或是由旧版本插件创建的。';
$lang['PH_AutoRange_title_d'] = '历史记录设置<b>保护设置</b> 自动精简规则。选项：<br><br>
- 保留 x 天<br>
- 保留 x 月<br>
- 保留 x 年<br><br>
如：如想保留历史记录长至3个月，可设为3个月或91天。<br><br>
注意：历史摘要不受自动精简影响。';
$lang['PH_AutoRange_title'] = '保留历史至：';
$lang['PH_AutoPrune_true'] = '启用';
$lang['PH_AutoPrune_title_d'] = '如启用自动精简，每位用户（包括管理员和站长）登录图库时它将自动开启，并将基于保护设置。<br><br>
<b style=&quot;color: red;&quot;>请谨慎使用！被精简移除的数据将无法恢复！</b>';
$lang['PH_AutoPrune_false'] = '禁用';
$lang['PH_AutoPrune_title'] = '自动精简';
?>