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
$lang['PH_AutoRange_title_d'] = 'Будь ласка, налаштуйте критерій <b>збереження</b> історії для автоматичногоочищення. Деякі можливі варіанти:<br><br>
- Зберігайте х днів<br>
- Зберігайте х місяців<br> 
- Зберігайте х років<br><br> 
Наприклад, якщо ви хочете зберегти історію до 3 місяців, Ви можете налаштувати три місяці або 91 днів.<br><br>
Примітка: історія резюме не впливає на автоматичне очищення.';
$lang['PH_AutoPrune_title_d'] = 'Якщо ви включили автоматичне очищення, воно буде запускатися автоматично при кожному вході користувача в галерею (включаючи адміністратора або веб-майстер) і на основі збережених налаштувань <br><br>
<b style=&quot;color: red;&quot;>Використовуйте з обережністю! Очищені дані не можна буде відновити!</b>';
$lang['PH_ManualPrune_title_d'] = 'Ця функція дозволяє видалити записи історії на основі діапазон дат. Виберіть дату початку та дату завершення очищення і запустити.<br><br><b style=&quot;color: red;&quot;>Попередження: дані журналу будуть безповоротно видалені!</b> Ви можете створити резервну копію і відновити таблицю історії за допомогою функції в правильному куту екрану.<br><br>Примітка: Історія резюме не постраждають від очищення.';
$lang['PH_Save_Title_d'] = 'Оскільки обрізки є остаточним і незворотні, бажано зберегти вашу таблицю історії перед початком очищення. За замовчуванням таблиця зберігається у файлі на сервері і може бути відновлена звідти.<br><br> Але також можна завантажити файл резервної копії, щоб отримати його з вашої галереї. У цьому випадку відновлення повинно бути зроблено через ваш інструмент управління бази даних (зазвичай phpMyAdmin).';
$lang['PH_Support'] = 'Офіційна підтримка плаґіну, тальки на цій темі форуму Piwigo:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">Англійський форум - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_Restore'] = 'Щоб відновити резервну копію вашої таблиці історії.<br>Враховується тільки збережений файл на сервері.';
$lang['PH_AutoPrune_title'] = 'Автоматичне очищення';
$lang['PH_Prune'] = 'Запустити ручне очищення';
$lang['PH_Prune_Done'] = 'Ручне очищення зроблено!';
$lang['PH_Prune_Error'] = 'Помилка ручного очищення! Перевірте свій діапазон дат.';
$lang['PH_Bad_version_backup'] = 'Неправильна версія плаґіна! Резервна копія, яку ви намагаєтеся відновити застаріла або була створена з більш старої версії плаґіна.';
$lang['PH_No_Backup_File'] = 'Не знайдено файл резервної копії для відновлення!';
$lang['PH_Save'] = 'Резервне копіювання історії';
$lang['PH_Save_Title'] = 'Безпека резервного копіювання';
$lang['PH_save_config'] = 'Налаштування збережені!';
$lang['PH_submit'] = 'Зберегти налаштування';
$lang['Start_Date'] = 'Дата початку';
$lang['range']['1'] = 'День(в)';
$lang['range']['2'] = 'Місяць(ів)';
$lang['range']['3'] = 'Рік(и)';
$lang['PH_AutoPrune_false'] = 'Вимкнути (за замовчуванням)';
$lang['PH_AutoPrune_true'] = 'Увімкнути';
$lang['PH_AutoRange_title'] = 'зберігати історію до:';
$lang['PH_Dump_Download'] = 'Перевірити це поле, щоб завантажити файл резервної копії:';
$lang['PH_Dump_NOK'] = 'Не вдалося виконати резервне копіювання!';
$lang['PH_Dump_OK'] = 'Резервне копіювання виконано!';
$lang['PH_ManualPrune_title'] = 'Керівництво Prune';
$lang['PH_Restoration_NOK'] = 'Не вдалося виконати відновлення!';
$lang['PH_Restoration_OK'] = 'Відновлення успішне!';
$lang['PH_Restore_File'] = 'Відновити історію';
?>