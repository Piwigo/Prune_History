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
$lang['PH_Dump_Download'] = 'Para fazer o download da copia de segurança marque esta caixa:';
$lang['PH_Save_Title'] = 'Copia de Segurança';
$lang['PH_Save'] = 'Backup do histórico';
$lang['PH_save_config'] = 'Configurações salvas!';
$lang['PH_submit'] = 'Salvar configurações';
$lang['Start_Date'] = 'Data inicial';
$lang['range']['1'] = 'Dia(s)';
$lang['range']['2'] = 'Mês(es)';
$lang['range']['3'] = 'Ano(s)';
$lang['PH_AutoPrune_false'] = 'Desabilitar (padrão)';
$lang['PH_AutoPrune_title'] = 'Expurgo automático';
$lang['PH_AutoPrune_true'] = 'Habilitar';
$lang['PH_AutoRange_title'] = 'Manter o histórico até: ';
$lang['PH_Dump_NOK'] = 'A copia de segurança falhou!';
$lang['PH_Dump_OK'] = 'A copia de segurança foi feita com sucesso!';
$lang['PH_ManualPrune_title'] = 'Expurgo manual';
$lang['PH_No_Backup_File'] = 'Nenhum arquivo de backup foi encontrado para restaurar!';
$lang['PH_Prune'] = 'Executar expurgo manual';
$lang['PH_Prune_Done'] = 'Expurgo manual feito!';
$lang['PH_Prune_Error'] = 'Erro no expurgo manual! Verifique o intervalo das datas.';
$lang['PH_Restoration_NOK'] = 'Restauração falhou!';
$lang['PH_Restoration_OK'] = 'Restaurado com sucesso!';
$lang['PH_Restore_File'] = 'Restaurar histórico';
$lang['PH_Save_Title_d'] = 'Porque o expurgo é final e irreversível, é aconselhável salvar sua tabela história antes de começar o expurgo. Por padrão, a tabela é salva em um arquivo no servidor e pode ser restaurado a partir de lá.<br><br>
Mas também é possível fazer o download do arquivo de backup para mantê-lo fora de sua galeria. Neste caso, a restauração deve ser feita através da sua ferramenta de gestão de base de dados (geralmente phpMyAdmin).';
$lang['PH_Support'] = 'O suporte oficial sobre este plugin é apenas sobre estes tópico do fórum Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_Restore'] = 'Para restaurar um backup de sua tabela história.<br>Apenas os arquivos salvos no servidor é levados em conta.';
$lang['PH_Bad_version_backup'] = 'Versão do plugin errado! O backup que você está tentando restaurar está desatualizada ou foi criado com uma versão mais antiga do plugin.';
$lang['PH_ManualPrune_title_d'] = 'Este recurso permite que você exclua as entradas do histórico baseado em um intervalo de datas. Escolha uma data de início e data final do tratamento e execute.<br><br>
<b style=&quot;color: red;&quot;>Os dados do histórico serão irremediavelmente apagados!</b> 
Você pode fazer backup e restaurar a tabela de histórico usando as funções do quadro à direita.<br><br>
Nota: O resumo da história não é afetado pela poda.';
$lang['PH_AutoPrune_title_d'] = 'Se você ativar a poda automática, ele será acionado automaticamente a cada login do usuário na galeria (incluindo um administrador ou webmaster) e com base nas configurações de conservação.<br><br><b style=&quot;color: red;&quot;>Use com cuidado! Dados podados não serão recuperáveis!</b>';
$lang['PH_AutoRange_title_d'] = 'Por favor configurar seu Histórico<b>conservação</b>critério para a poda automática. Várias opções são possíveis:<br><br>
-Mantenha x dias<br>
-Mantenha x meses<br>
-Mantenha x anos<br>
Por exemplo: Se você quer manter uma profundidade histórica de 3 meses, você pode definir até três meses ou 91 dias.<br><br>
Nota: O resumo da história não é afetado pela poda automática.';
?>