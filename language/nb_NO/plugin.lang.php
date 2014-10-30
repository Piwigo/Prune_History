<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
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
$lang['PH_Save_Title_d'] = 'Fordi beskjæring er endelig og ikke reverserbar, er det tilrådelig å lagre historikk tabellen før du begynner beskjæring. Som standard er tabellen lagret i en fil på serveren og kan gjenopprettes derfra.<br><br>
Men det er også mulig å laste ned sikkerhetskopien for å holde det utenfor galleriet. I dette tilfellet må gjenopprettingen gjøres via din database styringsverktøy (vanligvis phpMyAdmin).';
$lang['PH_Support'] = 'Den offisielle støtten for dette programtillegget finnes bare på disse Piwigo forumemne:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_save_config'] = 'Innstillinger lagret!';
$lang['PH_submit'] = 'Lagre innstillinger';
$lang['Start_Date'] = 'Start dato';
$lang['range']['1'] = 'Dag(er)';
$lang['range']['2'] = 'Måned(er)';
$lang['range']['3'] = 'År';
$lang['PH_Save'] = 'Sikkerhets kopier historikken';
$lang['PH_Save_Title'] = 'Sikker sikkerhetskopi';
$lang['PH_AutoPrune_false'] = 'Deaktivert (som standard)';
$lang['PH_AutoPrune_title'] = 'Automatisk beskjæring';
$lang['PH_AutoPrune_title_d'] = 'Hvis du aktiverer automatisk beskjæring, vil det bli aktivert automatisk for hver bruker som er pålogget galleriet (inkludert en administrator eller webmaster) og basert på vedlikeholds innstillinger. 
<br><br>
<b style=&quot;color: red;&quot;> Brukes med forsiktighet! Beskjært data vil ikke kunne gjenopprettes!</B>';
$lang['PH_AutoPrune_true'] = 'Aktivert';
$lang['PH_AutoRange_title'] = 'lagre historikken frem til:';
$lang['PH_AutoRange_title_d'] = 'Vennligst konfigurer Historikken din <b>vedlikehold</b> kriterium for automatisk beskjæring. Flere valg er mulig:<br><br>
- Lagre x dager<br>
- Lagre x måneder<br>
- Lagre x år<br><br>
For eksempel: Hvis du ønsker å lagre en historisk lengde på tre måneder, kan du sette opp tre måneder eller 91 dager<br><br>.
Merk: Historikk oppsummeringen blir ikke påvirket av auto beskjæring.';
$lang['PH_Bad_version_backup'] = 'Feil programtillegg versjon! Sikkerhetskopien som du prøver å gjenopprette er utdatert eller har blitt opprettet med en eldre versjon av programtillegget.';
$lang['PH_Dump_Download'] = 'For å laste ned en Sikkerhetskopi av filen, kryss av denne boksen:';
$lang['PH_Dump_NOK'] = 'Sikkerhetskopieringen mislyktes!';
$lang['PH_Dump_OK'] = 'Sikkerhetskopieringen var vellykket!';
$lang['PH_ManualPrune_title'] = 'Manuel beskjærning';
$lang['PH_ManualPrune_title_d'] = 'Denne funksjonen lar deg slette loggoppføringer basert på en rekke datoer. Velg en startdato og sluttdato for behandling og kjør.<br><br>
<b style=&quot;color: red;&quot;> Advarsel: De historiske data vil bli ugjenkallelig slettet!.</b> Du kan sikkerhetskopiere og gjenopprette historikk tabellen ved å bruke funksjonene på høyre side<br><br>
Merk: Historikk oppsummeringen bli ikke påvirket av beskjæring.';
$lang['PH_No_Backup_File'] = 'Ingen sikkerhetskopi funnet for gjenoppretting!';
$lang['PH_Prune'] = 'Kjør manuel beskjærning';
$lang['PH_Prune_Done'] = 'Manule beskjærning utført!';
$lang['PH_Prune_Error'] = 'Feil ved manuel beskjærning! Sjekk datoperioden.';
$lang['PH_Restoration_NOK'] = 'Gjenoppretting mislyktes!';
$lang['PH_Restoration_OK'] = 'Gjenoppretting vellykket!';
$lang['PH_Restore'] = 'For å gjenopprette en sikkerhetskopi fra din historikk tabell.<br>Kun den lagrede filen på serveren vil bli lagt til konto.';
$lang['PH_Restore_File'] = 'Gjenopprett historikken';