<?php
$lang['PH_ManualPrune_title'] = 'Elagage manuel';
$lang['PH_ManualPrune_title_d'] = 'Cette fonction permet de supprimer des entrées dans l\'historique en fonction d\'une plage de dates. Choisissez une date de début et une date de fin de traitement et exécutez.<br><br>
<b style=&quot;color: red;&quot;>Attention : Les données de l\'historique seront alors irrémédiablement supprimées !</b> Vous pouvez sauvegarder préalablement et restaurer la table d\'historique en utilisant les fonctions dans le cadre de droite.<br><br>
Note : Le récapiltulatif de l\'historique n\'est pas affecté par l\'élagage.';

$lang['PH_Save_Title'] = 'Sauvegarde de sécurité';
$lang['PH_Save_Title_d'] = 'L\'élagage étant définitif et irréversible, il est vivement conseillé de sauvegarder votre table d\'historique avant de lancer un élagage. Par défaut, la table est sauvegardée dans un fichier sur le serveur et peut être restaurée depuis cet emplacement.<br><br>
Mais il est aussi possible de télécharger le fichier de sauvegarde pour le conserver en dehors de votre galerie. Dans ce cas, la restauration devra se faire via votre outil de gestion de base de données (généralement PhpMyAdmin).';

$lang['PH_Dump_Download'] = 'Pour télécharger le fichier de sauvegarde, cochez cette case:';
$lang['PH_Restore'] = 'Pour restaurer une sauvegarde de votre table d\'historique.<br>Seul le fichier sauvegardé sur le serveur est pris en compte.';
$lang['PH_Save'] = 'Sauvegarder l\'historique';
$lang['PH_Restore_File'] = 'Restaurer l\'historique';
$lang['PH_Dump_OK'] = 'La sauvegarde a réussi !';
$lang['PH_Dump_NOK'] = 'La sauvegarde a échoué !';
$lang['PH_Restoration_OK'] = 'Restauration réussie !';
$lang['PH_Restoration_NOK'] = 'Restauration échouée !';
$lang['PH_Bad_version_backup'] = 'Mauvaise version du plugin ! La sauvegarde que vous tentez de restaurer est obsolète ou a été créée avec une ancienne version du plugin.';
$lang['PH_No_Backup_File'] = 'Aucun fichier de sauvegarde trouvé pour la restauration !';

$lang['PH_AutoPrune_title'] = 'Elagage automatique';
$lang['PH_AutoPrune_title_d'] = 'Si vous activez l\'élagage automatique, celui-ci se déclenchera automatiquement en fonction du critère de conservation à chaque connexion d\'un utilisateur sur la galerie (y compris un administrateur ou le webmaster).<br><br>
<b style=&quot;color: red;&quot;>A utiliser avec précaution ! Les données élaguées ne seront pas récupérables en cas d\'erreur !</b>';

$lang['PH_AutoPrune_false'] = 'Désactiver (par défaut)';
$lang['PH_AutoPrune_true'] = 'Activer';
$lang['Start_Date'] = 'Date de début';

$lang['PH_AutoRange_title'] = 'Ne conserver un historique que sur :';
$lang['PH_AutoRange_title_d'] = 'Configurez ici votre critère <b>de conservation</b> de l\'historique pour l\'élagage automatique. Plusieurs choix sont possibles :<br><br>
- Conserver x jours<br>
- Conserver x mois<br>
- Conserver x années<br><br>
Par exemple : Si vous ne souhaitez conserver qu\'une profondeur d\'historique de 3 mois,  vous pouvez paramétrer 3 mois ou 91 jours.<br><br>
Note : Le récapiltulatif de l\'historique n\'est pas affecté par l\'élagage automatique.';

$lang['PH_save_config'] = 'Configuration enregistrée !';
$lang['PH_Prune'] = 'Exécuter l\'élagage manuel';
$lang['PH_submit'] = 'Enregistrer la configuration';

$lang['PH_Prune_Done'] = 'Elagage manuel effectué !';
$lang['PH_Prune_Error'] = 'Erreur lors de l\'élagage manuel ! Vérifiez votre plage de dates.';

$lang['range'][1] = 'Jour(s)';
$lang['range'][2] = 'Mois';
$lang['range'][3] = 'Année(s)';

$lang['PH_Support'] = 'Le support officiel sur ce plugin se fait exclusivement sur ce fil du forum FR de Piwigo:<br>
<a href="http://fr.piwigo.org/forum/viewtopic.php?id=" onclick="window.open(this.href);return false;">Forum français - http://fr.piwigo.org/forum/viewtopic.php?id=</a>';
?>