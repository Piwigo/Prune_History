<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2012 Piwigo Team                  http://piwigo.org |
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
$lang['PH_Save'] = 'Sikkerhedskopihistorik';
$lang['PH_Save_Title'] = 'Sikkerhedskopi';
$lang['PH_Save_Title_d'] = 'Da oprydning er endelig og uigenkaldelig, anbefales det at du gemmer din historiktabel før tømningen iværksættes. Som standard gemmes tabellen i en fil på serveren og kan blive gendannet fra den.<br><br>
Men det er også muligt at downloade sikkerhedsfilen, for at holde den væk fra dit galleri. I det tilfælde skal gendannelsen ske via dit værktøj til databasehåndtering (normalt PhpMyAdmin).';
$lang['PH_Support'] = 'Officiel support vedørende denne plugin findes kun i disse Piwigo-forumemner:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">engelsk forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_save_config'] = 'Indstillinger gemt!';
$lang['PH_submit'] = 'Gem indstillinger';
$lang['Start_Date'] = 'Startdato';
$lang['range']['1'] = 'Dag(e)';
$lang['range']['2'] = 'Måned(er)';
$lang['range']['3'] = 'År';
$lang['PH_AutoPrune_false'] = 'Deaktiveret (standard)';
$lang['PH_AutoPrune_title'] = 'Automatisk oprydning';
$lang['PH_AutoPrune_title_d'] = 'Hvis du aktiverer automatisk oprydning, vil det ske automatisk hver gang en bruger logger på galleriet (herunder administrator og webmaster) og baseret på bevaringsindstillingerne.<br><br>
<b style=&quot;color: red;&quot;>Brug med forsigtighed! Opryddede data kan ikke genskabes!</b>';
$lang['PH_AutoPrune_true'] = 'Aktiver';
$lang['PH_AutoRange_title'] = 'bevar historikken op til:';
$lang['PH_AutoRange_title_d'] = 'Opsæt historikkens <b>bevarings</b>kriterium til automatisk oprydning. Der er flere mulige valg:<br><br>
- Bevar x dage<br>
- Bevar x måneder<br>
- Bevar x år<br><br>
Eksempel: Hvis du ønsker at bevare en historisk dybde på tre måneder, kan du opsætte tre måneder eller 91 dage.<br><br>
Bemærk: Historikresuméet påvirkes ikke af automatisk oprydning.';
$lang['PH_Bad_version_backup'] = 'Forkert pluginversion. Sikkerhedskopien du prøver at gendanne er forældet eller blev oprettet af en ældre version af plugin\'en.';
$lang['PH_Dump_Download'] = 'For at downloade sikkerhedskopien sættes flueben i denne boks:';
$lang['PH_Dump_NOK'] = 'Sikkerhedskopieringen mislykkedes!';
$lang['PH_Dump_OK'] = 'Sikkerhedskopieringen er gennemført!';
$lang['PH_ManualPrune_title'] = 'Manuel oprydning';
$lang['PH_ManualPrune_title_d'] = 'Funktionen gør det muligt at slette historiske registreringer baseret på et datointerval. Vælg en start- og en slutdata, som der skal arbejdes på, og kør oprydningen.<br><br>
<b style=&quot;color: red;&quot;>Advarsel: De historiske data vil blive uigenkaldeligt slettet!</b> Du kan tage en sikkerhedskopi og gendanne historiktabellen ved at anvende funktionerne i den højre ramme.<br><br>
Bemærk: Historikresuméet påvirkes ikke af automatisk oprydning.';
$lang['PH_No_Backup_File'] = 'Der blev ikke fundet sikkerhedskopifil til gendannelse!';
$lang['PH_Prune'] = 'Kør manuel oprydning';
$lang['PH_Prune_Done'] = 'Manuel oprydning udført!';
$lang['PH_Prune_Error'] = 'Fejl ved manuel oprydning! Kontroller dit datointerval.';
$lang['PH_Restoration_NOK'] = 'Gendannelse mislykkedes!';
$lang['PH_Restoration_OK'] = 'Gendannelse er gennemført!';
$lang['PH_Restore'] = 'Til gendannelse ud fra en sikkerhedskopi af din historiktabel.<br>Kun den gemte fil på serveren tages i betragtning.';
$lang['PH_Restore_File'] = 'Gendan historik';
?>