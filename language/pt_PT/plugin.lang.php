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
$lang['PH_Dump_Download'] = 'Para descarregar o arquivo do backup, sinalize esta caixa:';
$lang['PH_Restore_File'] = 'Historial de restauração';
$lang['PH_AutoRange_title_d'] = 'Por favor configure o critério do seu Historial de <b>conservação</b>  de poda automática. São possíveis várias opções :<br><br>
- Mantenha x dias<br>
- Mantenha x meses<br>
- Mantenha x anos<br>
Por exemplo:. Se desejar manter uma amplitude histórica de 3 meses, pode configurar três meses ou 91 dias<br><br>
Nota: O resumo do historial não é afetado pela poda automática.';
$lang['PH_AutoPrune_title_d'] = 'Se ativar a poda automática, esta vai ser acionada automaticamente à entrada de cada utilizador na galeria (incluindo o administrador ou o webmaster) de acordo com as configurações de conservação.<br><br>
<b style=&quot;color: red;&quot;>Use com cuidado! Dados podados não poderão ser recuperados!</b>';
$lang['PH_Support'] = 'O apoio oficial sobre esta extensão é apenas este tópico no fórum Piwigo: <br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_Save_Title_d'] = 'Porque a poda é final e irreversível, é aconselhável salvar sua tabela história antes de começar a poda. Por defeito, a tabela é salva num arquivo do servidor e pode ser restaurada a partir daí. <br>
Mas também é possível fazer a descarga do arquivo de backup para mantê-lo fora de sua galeria. Neste caso, a restauração deve ser feita através de sua ferramenta de gerenciamento de banco de dados (geralmente phpMyAdmin).';
$lang['PH_Prune_Error'] = 'Erro de poda manual! verifique a amplitude de datas.';
$lang['PH_Restore'] = 'Para restaurar um backup da tabela historial <br> apenas o arquivo salvo no server será tomado em conta.';
$lang['PH_Prune'] = 'Executar poda manual';
$lang['PH_Prune_Done'] = 'Poda manual efetuada';
$lang['PH_ManualPrune_title_d'] = 'Este recurso permite que você exclua o hidtorial de entradas com base num intervalo de datas. Escolha uma data de início e data final do tratamento e execute. <br>
<b style=&quot;color: red;&quot;>ATENÇÃO:Os dados do historial serão irremediavelmente apagados </b> Pode fazer backup e restaurar a tabela do historial usando as funções no quadro à direita <br>
Nota: O sumário do historial não é afetado pela poda.';
$lang['PH_AutoPrune_title'] = 'Poda automática';
$lang['PH_Bad_version_backup'] = 'Versão da extensão errada! O backup que está a tentar restaurar está desatualizado ou foi criado com uma versão mais antiga da extensão.';
$lang['PH_ManualPrune_title'] = 'Poda manual';
$lang['PH_Save'] = 'Historial de beckup\'s';
$lang['PH_Save_Title'] = 'Backup seguro';
$lang['range']['3'] = 'Ano(s)';
$lang['PH_save_config'] = 'Definições salvas';
$lang['PH_submit'] = 'Salvar definições';
$lang['Start_Date'] = 'Data inicial';
$lang['range']['1'] = 'Dia(s)';
$lang['range']['2'] = 'Mês(es)';
$lang['PH_AutoPrune_false'] = 'Desativar (Por defeito)';
$lang['PH_AutoPrune_true'] = 'Ativar';
$lang['PH_AutoRange_title'] = 'Manter o historial até:';
$lang['PH_Dump_NOK'] = 'Falhou o backup!';
$lang['PH_Dump_OK'] = 'Backup feito com sucesso!';
$lang['PH_No_Backup_File'] = 'Não existe backup para restaurar';
$lang['PH_Restoration_NOK'] = 'Falhou a restauraão';
$lang['PH_Restoration_OK'] = 'Restauração bem sucedida';
?>