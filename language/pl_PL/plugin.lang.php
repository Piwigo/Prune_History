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
$lang['PH_AutoPrune_false'] = 'Nieaktwne (domyślnie)';
$lang['PH_AutoPrune_title_d'] = 'Jeśli udostępnisz automatyczne przycinanie, będzie ono uruchamiane automatycznie przy każdym zalogowaniu do galerii (włączając w to administratora i webmastera) oraz będzie używało ustawień konserwacji <br><br>
<b style=&quot;color: red;&quot;>Używaj z rozwagą! Przyciętych danych nie można odszyskać!</b>';
$lang['PH_AutoPrune_title'] = 'Automatyczne przycinanie';
$lang['PH_AutoPrune_true'] = 'Aktywne';
$lang['PH_AutoRange_title_d'] = 'Skonfiguruj kryteria <b>konserwacji</b> historii do automatycznego przycinania. Jest kilka opcji do skonfigurowania: <br><br>
- Pamiętaj x dni<br>
- Pamiętaj x miesięcy<br>
- Pamiętaj x lat<br>
Dla przykładu: Jeśli chcesz trzymać historię przez 3 miesiące możesz ustawić zarówno 3 miesiące jak i 91 dni<br><br>
Uwaga: Podsumowanie historii nie jest zmieniane przez autoprzycinanie';
$lang['PH_AutoRange_title'] = 'trzymaj historię do:';
$lang['PH_Bad_version_backup'] = 'Zła wersja wtyczki! Backup który próbujesz odtworzyć został stworzony przez starszą wersję wtyczki i jest przestarzały.';
$lang['PH_Dump_Download'] = 'Zaznacz tu aby pobrać plik backup\'u';
$lang['PH_Dump_NOK'] = 'Backup nieudany!';
$lang['PH_Dump_OK'] = 'Backup udany!';
$lang['PH_ManualPrune_title_d'] = 'Pozwala na usuwanie wpisów w historii bazując na zasięgu dat. Wybierz datę początkową i końcową i uruchom.<br><br>
<b style=&quot;color: red;&quot;>Uwaga: dane historii zostaną bezpowrotnie usunięte!</b>
Możesz backupować i odzyskiwać dane historii używając funkcji w prawej ramce.<br><br>
Uwaga: Podsumowanie historii nie jest zmieniane przez autoprzycinanie';
$lang['PH_ManualPrune_title'] = 'Ręczne przycinanie';
$lang['PH_No_Backup_File'] = 'Nie znaleziono pliku backupu do odzyzskania!';
$lang['PH_Prune_Done'] = 'Ręczne przycinanie ukończone';
$lang['PH_Prune_Error'] = 'Błąd podczas ręcznego przycinania! Sprawdź daty.';
$lang['PH_Prune'] = 'Uruchom ręczne przycinanie';
$lang['PH_Restoration_NOK'] = 'Nieudane odzyskiwanie!';
$lang['PH_Restoration_OK'] = 'Udane odzyskiwanie!';
$lang['PH_Restore_File'] = 'Odzyskaj historię';
$lang['PH_Restore'] = 'Odzyskaj backup tabeli z historią.<br> Tylko pliki zapisane na serwerze brane są pod uwagę.';
$lang['PH_Save_Title_d'] = 'Ponieważ przycinanie jest nieodwracalne, zaleca się zapisanie tabeli z historię przed rozpoczęciem przycinania. Domyślnie tabela zapisywana jest jako plik na serwerze i stamtąd też jest odzyskiwania.<br><br>
Jest również możliwość pobrania pliku z backupem. W takim przypadku odzyskiwanie musi się odbyć poprzez narzędzie zarządzania bazą (zazwyczaj jest to phpMyAdmin).';
$lang['PH_Save_Title'] = 'Backup bezpieczeństwa';
$lang['PH_Save'] = 'Backup historii';
$lang['PH_Support'] = 'Oficjalny support tej wtyczki odbywa się w tym temacie forum Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_save_config'] = 'Ustawienia zapisane';
$lang['PH_submit'] = 'Zapisz ustawienia';
$lang['Start_Date'] = 'Data początkowa';
$lang['range']['1'] = 'Dzień(dni)';
$lang['range']['2'] = 'Miesiąc(e)';
$lang['range']['3'] = 'Rok(lata)';
?>