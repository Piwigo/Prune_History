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
$lang['PH_Save_Title_d'] = 'Geri döndürülemez bir işlem olduğundan budama işlemine başlamadan geçmiş tablosunun yedeklenmesi önerilir. Varsayılan olarak, yedekleme dosyası sunucuya kaydedilir ve buradan onarım işlemi yapılabilir.<br><br>
Yedekleme dosyasının indirilip galeri haricinde muhafaza edilmesi de mümkündür. Bu durumda, onarım işlemi veri tabanı yönetim aracı üzerinden yapılmalıdır. (genellikle phpMyAdmin)';
$lang['PH_ManualPrune_title_d'] = 'Bu özellik, geçmiş girdilerini belirli tarih aralığı için budamanızı  (silmenizi) sağlar. Uygulama için bir başlangıç ve bitiş tarihi seçin ve çalıştırın.<br><br>
<b style=&quot;color: red;&quot;>Uyarı: Geçmiş verisi geri alınamaz şekilde silinecektir!</b> Sağdaki böümde yer alan fonksiyonlar yardımı ile geçmiş tablosunu yedekleyebilir ve onarabilirsiniz.<br><br>
Not: Geçmiş özeti budama işleminden etkilenmez.';
$lang['PH_AutoRange_title_d'] = 'Lütfen otomatik budama için geçmiş <b>muhafaza</b> kriterlerini belirleyin. Bir kaç seçenek mümkün:<br><br>
- x gün muhafaza et<br>
- x ay muhafaza et<br>
- x yıl muhafaza et<br><br>
Örneğin: Eğer geçmişi 3 ay muhafaza etmek istiyorsanız 3 ay veya 91 gün olarak ayarlamalısınız.<br><br>
Not: Geçmiş özeti otomatik budamadan etkilenmez.';
$lang['PH_AutoPrune_title_d'] = 'Eğer otomatik budamayı etkinleştirirseniz, seçilen ayarlara göre galeride her kullanıcının  (webmaster ve yönetici dahil) oturum açışında otomatik olarak tetiklenecektir.<br><br>
<b style=&quot;color: red;&quot;>Dikkatli kullanın! Budanan veriler geri alınamaz!</b>';
$lang['PH_Support'] = 'Bu eklentinin resmi destek sayfası şu Piwigo forum konusundadır:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">English forum - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_Bad_version_backup'] = 'Yanlış eklenti sürümü! Onarım için kullanmaya çalıştığınız dosya, eklentinin eski sürümü ile yaratılmış veya dosyanın hükmü kalmamış.';
$lang['PH_Restore'] = 'Geçmiş tablosu yedeği ile onarım yapmak için sadece sunucudaki kaydedilmiş dosyalar dikkate alınır.';
$lang['PH_Save'] = 'Geçmişi yedekle';
$lang['PH_Save_Title'] = 'Güvenlik yedeği';
$lang['PH_save_config'] = 'Yapılandırma kaydedildi!';
$lang['PH_submit'] = 'Yapılandırmayı kaydet';
$lang['Start_Date'] = 'Başlangıç tarihi';
$lang['range']['1'] = 'Gün';
$lang['range']['2'] = 'Ay';
$lang['range']['3'] = 'Yıl';
$lang['PH_AutoPrune_false'] = 'Devre dışı bırak (varsayılan)';
$lang['PH_AutoPrune_true'] = 'Etkinleştir';
$lang['PH_Restore_File'] = 'Geçmişi onar';
$lang['PH_Restoration_OK'] = 'Onarım işlemi başarılı!';
$lang['PH_Restoration_NOK'] = 'Onarım işleminde hata oluştu!';
$lang['PH_Prune_Error'] = 'Manuel budamada hata! Tarihi kontrol ediniz.';
$lang['PH_Prune_Done'] = 'Manuel budama yapıldı!';
$lang['PH_Prune'] = 'Manuel budamayı çalıştır';
$lang['PH_No_Backup_File'] = 'Onarım için kullanılacak yedek dosyası bulunamadı!';
$lang['PH_ManualPrune_title'] = 'Manuel Budama';
$lang['PH_Dump_OK'] = 'Yedekleme başarılı!';
$lang['PH_Dump_NOK'] = 'Yedekleme başarısız oldu!';
$lang['PH_Dump_Download'] = 'Yedekleme dosyasını indirmek için bu kutuyu işaretleyin:';
$lang['PH_AutoRange_title'] = 'geçmişi buraya kadar koru:';
$lang['PH_AutoPrune_title'] = 'Otomatik Budama';
?>