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
$lang['PH_AutoPrune_false'] = 'Disabilita (default)';
$lang['PH_AutoPrune_title'] = 'Pulizia automatica';
$lang['PH_AutoPrune_true'] = 'Abilita';
$lang['PH_AutoRange_title'] = 'Mantieni lo storico fino a:';
$lang['PH_Bad_version_backup'] = 'Versione del plug-in errata! Il backup che stai tentando di ripristinare è troppo vecchio oppure è stato creato con una versione precedente del plug-in.';
$lang['PH_Dump_Download'] = 'Per scaricare il file di backup, seleziona questa casella';
$lang['PH_Dump_NOK'] = 'Il backup è fallito!';
$lang['PH_Dump_OK'] = 'Il backup è stato concluso con successo!';
$lang['PH_ManualPrune_title'] = 'Pulizia manuale';
$lang['PH_No_Backup_File'] = 'Nessun file di backup trovato per il ripristino!';
$lang['PH_Prune_Done'] = 'Pulizia manuale eseguita!';
$lang['PH_Prune_Error'] = 'Errore durante la pulizia! Verifica l\'intervallo di date.';
$lang['PH_Prune'] = 'Esegui pulizia manuale';
$lang['PH_Restoration_NOK'] = 'Ripristino fallito!';
$lang['PH_Restoration_OK'] = 'Ripristino concluso con successo!';
$lang['PH_Restore_File'] = 'Ripristina lo storico';
$lang['PH_Restore'] = 'Per ripristinare un backup della tabella storico.<br>Solo i file salvati sul server sono inseriti nell\'account';
$lang['PH_Save_Title'] = 'Backup di sicurezza';
$lang['PH_Save'] = 'Backup storico';
$lang['PH_save_config'] = 'Impostazioni salvate!';
$lang['PH_submit'] = 'Salva impostazioni';
$lang['Start_Date'] = 'Data di inizio';
$lang['range']['1'] = 'Giorno/i';
$lang['range']['2'] = 'Mese/i';
$lang['range']['3'] = 'Anno/i';
$lang['PH_Support'] = 'Il supporto ufficiale su questo plugin è solo in questa discussione del forum Piwigo:<br><a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_AutoPrune_title_d'] = 'Se si attiva l\'eliminazione automatica, verrà attivato automaticamente in base al criterio della conservazione ad ogni login utente alla galleria (compresi amministratore o webmaster).<br><br>
<b style=&quot;color: red;&quot;>Usare con cautela! I dati eliminati non sono recuperabili in caso di errore</b>';
$lang['PH_Save_Title_d'] = 'Poiché la pulizia è definitiva e irreversibile, si consiglia di salvare la tabella dello storico prima di eseguire la pulizia. Di default, la tabella viene salvata in un file sul server e può essere ripristinata da lì.<br><br>
E\' anche possibile scaricare il file di backup per conservarlo al di fuori della galleria. In questo caso il riprisino deve essere eseguite tramite il vostro strumento di amministrazione del database (di solito phpMyAdmin).';
$lang['PH_ManualPrune_title_d'] = 'Questa funzione permette di eliminare lo storico sulla base di un intervallo di date. Scegli una data inizio e una data fine da trattare ed esegui.<br><br>
<b style=&quot;color: red;&quot;>Attenzioni: I dati dello storico saranno irreversibilmente cancellati!</b> Puoi fare il backup e ripristinare la tabella dello storico utilizzando le funzioni nel riquadro a destra.<br><br>
Nota: il sommario dello storico non è soggetto alla pulizia.';
$lang['PH_AutoRange_title_d'] = 'Per favore configura i criteri di <b>conservazione</b> dello storico per la pulizia automatica. Sono possibili diverse scelte:
- Mantieni per x giorni<br>
- Mantieni per x mesi<br>
- Mantieni per x anni<br><br>
Per esempio: se vuoi tenere uno storico di 3 mesi, puoi impostare 3 mesi o 91 giorni.<br><br>
Nota: il sommario dello storico non è soggetto alla pulizia automatica.';
?>