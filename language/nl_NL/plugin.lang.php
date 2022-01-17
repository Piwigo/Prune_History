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
$lang['PH_ManualPrune_title_d'] = 'Met deze functie kunt je de geschiedenis verwijderen op basis van een datumbereik. Kies een begindatum en einddatum van de behandeling en voer de plugin uit.<br><br>
<b style=&quot;color:red;&quot;> Waarschuwing: De geschiedenis- gegevens zullen onherroepelijk worden verwijderd </ b> Je kunt back-up en herstel van de geschiedenis tabel met behulp van de functies in de juiste frame <br>!.
Opmerking: De geschiedenis-samenvatting wordt niet beïnvloed door snoeien.';
$lang['PH_AutoPrune_title_d'] = 'Als je automatische schonen inschakelt, wordt deze automatisch geactiveerd bij elke aanmelding van een gebruiker (inclusief beheerder of webmaster) en gebaseerd op de aangegeven instellingen.<br>
<b style=&quot;color: red;&quot;> Wees voorzichtig! Geschoonde gegevens kunnen niet meer hersteld worden! </ B>';
$lang['PH_AutoRange_title_d'] = 'Configureer jouw Geschiedenis<b>bewaar</b>criterium voor automatisch schonen. Verschillende keuzes zijn mogelijk: <br><br>
- Bewaar x dagen <br>
- Bewaar x maanden <br>
- Bewaar x jaar <br><br>
Bijvoorbeeld: Als je 3 maanden geschiedenis wilt bewaren, geef je op: drie maanden of 91 dagen <br><br>.
NB: De Geschiedenissamenvatting wordt niet beïnvloed door automatisch schonen.';
$lang['PH_Save_Title_d'] = 'Omdat schonen definitief en onomkeerbaar is, word je aangeraden om jouw geschiedenistabel op te slaan voordat u begint met schonen. Standaard wordt de tabel opgeslagen in een bestand op de server en kan van diezelfde server worden hersteld.<br><br>
Maar het is ook mogelijk om het backupbestand te downloaden om het buiten jouw galerij te houden. In dat geval dient het herstel via je database management tool (meestal phpMyAdmin) uitgevoerd worden.';
$lang['PH_Support'] = 'De officiële support voor deze plugin kun je vinden op het Piwigo-forum via de volgende link:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">Engels forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_Save'] = 'Backup geschiedenis';
$lang['PH_Save_Title'] = 'Veiligheidsbackup';
$lang['PH_save_config'] = 'Instellingen bewaard!';
$lang['PH_submit'] = 'Bewaar instellingen';
$lang['Start_Date'] = 'Startdatum';
$lang['range']['1'] = 'Dag(en)';
$lang['range']['2'] = 'Maand(en)';
$lang['range']['3'] = 'Ja(a)r(en)';
$lang['PH_AutoPrune_title'] = 'Automatische schoning';
$lang['PH_AutoPrune_true'] = 'Aanzetten';
$lang['PH_AutoRange_title'] = 'De geschiedenis bewaren tot:';
$lang['PH_Bad_version_backup'] = 'Verkeerde plugin-versie! De backup die je probeert terug te zetten is verouderd of is gemaakt met een oudere versie van de plugin.';
$lang['PH_Dump_Download'] = 'Vink dit vakje om de backup terug te zetten:';
$lang['PH_Dump_NOK'] = 'Backup mislukt!';
$lang['PH_Dump_OK'] = 'De backup is gelukt.';
$lang['PH_ManualPrune_title'] = 'Handmatige schoning';
$lang['PH_No_Backup_File'] = 'Geen backup gevonden die teruggezet kan worden!';
$lang['PH_Prune'] = 'Voer een handmatige schoning uit!';
$lang['PH_Prune_Done'] = 'Handmatige schoning uitgevoerd!';
$lang['PH_Prune_Error'] = 'Fout tijdens handmatige schoning. Controleer jouw datumbereik.';
$lang['PH_Restoration_NOK'] = 'Terugzetten mislukt!';
$lang['PH_Restoration_OK'] = 'Terugzetten gelukt!';
$lang['PH_Restore'] = 'Om een backup van jouw geschiedenistabel terug te zetten.<br> Alleen het op de server opgeslagen bestand wordt in beschouwing genomen.';
$lang['PH_Restore_File'] = 'Geschiedenis terugzetten';
$lang['PH_AutoPrune_false'] = 'Uitzetten (standaard)';