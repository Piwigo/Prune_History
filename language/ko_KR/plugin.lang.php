<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+
$lang['PH_Support'] = '이 플러그인에 대한 공식 지원은 오직 다음 Piwigo 포럼 게시물에서만 제공됩니다:<br>
<a href="http://piwigo.org/forum/viewtopic.php?id=19418" onclick="window.open(this.href);return false;">영어 포럼 - http://piwigo.org/forum/viewtopic.php?id=19418</a>';
$lang['PH_Save_Title_d'] = '정리 작업은 최종적이며 되돌릴 수 없으므로, 작업을 시작하기 전에 기록 테이블을 백업해 두는 것이 좋습니다. 기본적으로 이 테이블은 서버의 파일에 저장되며, 해당 파일에서 복원할 수 있습니다.<br><br>
하지만 백업 파일을 다운로드하여 갤러리 외부에 보관할 수도 있습니다. 이 경우, 데이터베이스 관리 도구(보통 phpMyAdmin)를 통해 복원해야 합니다.';
$lang['PH_ManualPrune_title_d'] = '이 기능을 사용하면 지정된 기간의 내역 항목을 삭제할 수 있습니다. 치료 시작일과 종료일을 선택한 후 실행하십시오.<br><br>
<b style=&quot;color: red;&quot;>경고: 내역 데이터는 복구할 수 없게 영구적으로 삭제됩니다!</b>
오른쪽 프레임의 기능을 사용하여 내역 테이블을 백업하고 복원할 수 있습니다.<br><br>
참고: 내역 요약은 데이터 정리 작업의 영향을 받지 않습니다.';
$lang['PH_save_config'] = '설정이 저장되었습니다!';
$lang['PH_submit'] = '설정 저장';
$lang['Start_Date'] = '시작 날짜';
$lang['range']['1'] = '요일';
$lang['range']['2'] = '월';
$lang['range']['3'] = '연도';
$lang['PH_No_Backup_File'] = '복원할 백업 파일을 찾을 수 없습니다!';
$lang['PH_Prune'] = '수동 정리 실행';
$lang['PH_Prune_Done'] = '수동 정리 완료!';
$lang['PH_Prune_Error'] = '수동 정리 오류! 날짜 범위를 확인하십시오.';
$lang['PH_Restoration_NOK'] = '복원 실패!';
$lang['PH_Restoration_OK'] = '복원 성공!';
$lang['PH_Restore'] = '이력 테이블의 백업을 복원하려면.<br>서버에 저장된 파일만 고려됩니다.';
$lang['PH_Restore_File'] = '이력 복원';
$lang['PH_Save'] = '백업 이력';
$lang['PH_Save_Title'] = '안전 백업';
$lang['PH_Dump_Download'] = '백업 파일을 다운로드하려면 이 상자를 선택하세요:';
$lang['PH_Dump_NOK'] = '백업에 실패했습니다!';
$lang['PH_Dump_OK'] = '백업이 성공적으로 완료되었습니다!';
$lang['PH_ManualPrune_title'] = '수동 정리';
$lang['PH_AutoPrune_false'] = '비활성화 (기본값)';
$lang['PH_AutoPrune_title'] = '자동 정리';
$lang['PH_AutoPrune_true'] = '활성화';
$lang['PH_AutoRange_title'] = '기록을 최대 다음 기간까지 보관:';
$lang['PH_AutoRange_title_d'] = '자동 삭제를 위해 기록 <b>보존</b> 기준을 설정해 주십시오. 다음과 같은 옵션이 있습니다:<br><br>
- x일 동안 보관<br>
- x개월 동안 보관<br>
- x년 동안 보관<br><br>
예: 3개월 분량의 기록을 보관하려면 3개월 또는 91일로 설정할 수 있습니다.<br><br>
참고: 기록 요약은 자동 정리의 영향을 받지 않습니다.';
$lang['PH_Bad_version_backup'] = '플러그인 버전이 잘못되었습니다! 복원하려는 백업 파일이 오래되었거나 이전 버전의 플러그인으로 생성된 것입니다.';
$lang['PH_AutoPrune_title_d'] = '자동 정리 기능을 활성화하면, 갤러리에 사용자가 로그인할 때마다(관리자나 웹마스터 포함) 보존 설정에 따라 자동으로 실행됩니다.<br><br>
<b style=&quot;color: red;&quot;>주의해서 사용하십시오! 정리된 데이터는 복구할 수 없습니다!</b>';