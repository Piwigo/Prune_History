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
$lang['PH_Bad_version_backup'] = 'Versión incorrecta del plugin! La copia de seguridad que está intentando restaurar esta obsoleta o se creó con una versión anterior del complemento.';
$lang['PH_AutoRange_title_d'] = 'Configure los criterios aquí <b> conservación </ b> historial de la poda automática. Varias opciones son posibles: <br>
- Mantener x días<br>
- Mantener x mes<br> 
- Mantener x años<br>
Por ejemplo: Si desea conservar una profundidad historial de 3 meses, puede configurar tres meses o 91 días<br><br>.
Nota: el historial no se ve afectado por la poda automática.';
$lang['PH_AutoPrune_title'] = 'Poda automatica';
$lang['PH_AutoRange_title'] = 'seguir el historial hasta:';
$lang['PH_AutoPrune_true'] = 'Permitir';
$lang['PH_AutoPrune_title_d'] = 'Si habilita la poda automática, se activará automáticamente en cada inicio de sesión de usuario en la galería (incluyendo un administrador o webmaster) y en base a la configuración de conservación. <br><br>
<b style=&quot;color: red;&quot;>
Usar con precaución! Datos podados no será recuperable </ b>';
$lang['PH_AutoPrune_false'] = 'Desactivado (por defecto)';
$lang['PH_save_config'] = 'Configuración guardada!';
$lang['PH_submit'] = 'Guarde la configuración';
$lang['Start_Date'] = 'Fecha de inicio';
$lang['range']['1'] = 'Días';
$lang['range']['2'] = 'Mes';
$lang['range']['3'] = 'Año(s)';
$lang['PH_Support'] = 'Soporte oficial de este plugin es sólo se encuentra en este hilo del foro FR Piwigo <br>
<a href="http://fr.piwigo.org/forum/viewtopic.php?id=22039" onclick="window.open(this.href);return false;">Forum français - http://fr.piwigo.org/forum/viewtopic.php?id=22039</a>';
$lang['PH_Save_Title_d'] = 'La poda es definitiva e irreversible, es recomendable guardar la tabla de historial antes de empezar a podar. Por defecto, la tabla se almacena en un archivo en el servidor y se puede restaurar desde esta ubicación.<br><br>
Pero también es posible descargar el archivo de copia de seguridad para mantenerlo fuera de la galería. En este caso, la restauración debe hacerse utilizando la base de datos de gestión de herramientas (normalmente phpMyAdmin).';
$lang['PH_Dump_Download'] = 'Para descargar el archivo de copia de seguridad, marque esta casilla:';
$lang['PH_Dump_NOK'] = 'La copia de seguridad falló!';
$lang['PH_Dump_OK'] = 'La copia de seguridad se ha realizado correctamente!';
$lang['PH_ManualPrune_title'] = 'Poda Manual';
$lang['PH_No_Backup_File'] = 'No existe el archivo de copia de seguridad para restaurar!';
$lang['PH_Prune'] = 'Realizar la poda manual';
$lang['PH_Prune_Done'] = 'Poda manual hecho!';
$lang['PH_Prune_Error'] = 'Error poda manual ! Revise su rango de fechas.';
$lang['PH_Restoration_NOK'] = 'Restauración fallida!';
$lang['PH_Restoration_OK'] = 'Restauración con éxito!';
$lang['PH_Restore'] = 'Para restaurar una copia de seguridad de la tabla de la historia. <br> Sólo el archivo guardado en el servidor se toma en cuenta.';
$lang['PH_Restore_File'] = 'Restaurar el histórial';
$lang['PH_Save'] = 'Guardar historial';
$lang['PH_Save_Title'] = 'Copia de seguridad';
$lang['PH_ManualPrune_title_d'] = 'Esta función le permite borrar las entradas del historial basado en un rango de fechas. Seleccione una fecha de inicio y una fecha de finalización del tratamiento y correr.<br><br>
<b style=&quot;color: red;&quot;>Advertencia: Los datos del historial se eliminarán de forma permanente </b> Puede guardar y restaurar la tabla del historial previo utilizando las funciones en el marco de la derecha.<br><br>
Nota: El resumen del historial no se ve afectado por la poda.';
?>