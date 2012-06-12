<?php
$lang['PH_ManualPrune_title'] = 'Manuální Pročištění';
$lang['PH_ManualPrune_title_d'] = 'Tato funkce umožňuje odstranit záznamy v historii na základě rozsahu datum. Určete počáteční a koncové datum pro úpravu a spusťte.<br><br>
<b style=&quot;color: red;&quot;>Varování: Veškerá obsažená data ve zvoleném rozsahu historie budou nevratně odstraněna!</b> Tabulku historie můžete zálohovat a obnovit použitím vhodné funkce v pravém sloupci.<br><br>
Pozn. Celkový historický přehled není pročišťováním ovlivněn.';

$lang['PH_Save_Title'] = 'Bezpečná záloha';
$lang['PH_Save_Title_d'] = 'Protože je pročišťování nevratné, je dobré provést zálohu historie před samotným čistícím úkonem. Ve výchozím stavu je tabulka uložena jako soubor na serveru a odtud může být také obnovena.<br><br>
Samozřejmě je možné tento soubor uložit na disk PC a tak provést zálohu mimo galerii. V takovém případě je obnovení nutné provést skrze vás nástroj pro práci s databází (např. phpmyadmin,apod).';

$lang['PH_Dump_Download'] = 'Pro stažení a uložení souboru mimo server zvolte tento bod:';
$lang['PH_Restore'] = 'Pro snadné obnovení ze zálohy.<br>Je použit jen a pouze soubor, který je uložen na serveru.';
$lang['PH_Save'] = 'Záloha historie';
$lang['PH_Restore_File'] = 'Obnovení historie';
$lang['PH_Dump_OK'] = 'Záloha byla provedena!';
$lang['PH_Dump_NOK'] = 'Záloha nebyla dokončena!';
$lang['PH_Restoration_OK'] = 'Obnova byla dokončena!';
$lang['PH_Restoration_NOK'] = 'Obnova nebyla dokončena!';
$lang['PH_Bad_version_backup'] = 'Nesprávná verze pluginu! Záloha, kterou se snažíte obnovit je ze zastaralé verze nebo byla vytvořena se starší verzí pluginu.';
$lang['PH_No_Backup_File'] = 'Soubor se zálohou nebyl nalezen!';

$lang['PH_AutoPrune_title'] = 'Automatické Čištění';
$lang['PH_AutoPrune_title_d'] = 'Pokud aktivujete Automatické Čištění, bude se samo provádět při každém přihlášení každého uživatele do galerie (včetně přístupu administrátora nebo webmastera) a na základě zvoleného nastavení.<br><br>
<b style=&quot;color: red;&quot;>Používejte s rozmyslem! Takto odstraněná data nejsou obnovitelná!</b>';

$lang['PH_AutoPrune_false'] = 'Vypnuto (výchozí)';
$lang['PH_AutoPrune_true'] = 'Zapnuto';
$lang['Start_Date'] = 'Počáteční datum';

$lang['PH_AutoRange_title'] = 'zachová historii až do:';
$lang['PH_AutoRange_title_d'] = 'Prosím nastavte Historii kritérirum <b>uchovávání</b> pro Automatické Čištění. Více možností je k dispozici:<br><br>
- Zachovat x dnů<br>
- Zachovat x měsíců<br>
- Zachovat x roků<br><br>
Například: pokud chcete zahovat hloubku pro historii 3 měsíce, můžete nastavit 3 měsíce nebo 91 dnů.<br><br>
Poznámka: Celková statistika historie není ovlivněna Automatickým Čištěním.';

$lang['PH_save_config'] = 'Nastavení uloženo!';
$lang['PH_Prune'] = 'Spustit manuální čištění';
$lang['PH_submit'] = 'Uložit nastavení';

$lang['PH_Prune_Done'] = 'Manuální čištění dokončeno!';
$lang['PH_Prune_Error'] = 'Chyba manuálního čištění! Zkontrolujte rozsah pro datumy.';

$lang['range'][1] = 'Den(dny)';
$lang['range'][2] = 'Měsíc(e)';
$lang['range'][3] = 'Rok(y)';

$lang['PH_Support'] = 'Jediná oficiální podpora tohoto pluginu je v tomto vlíknu na Piwigo forum:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">Anglické fórum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
?>