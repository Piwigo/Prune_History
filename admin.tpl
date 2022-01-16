{combine_script id='jquery' path='themes/default/js/jquery.min.js'}
{combine_script id='jquery.cluetip' require='jquery' path='themes/default/js/plugins/jquery.cluetip.js'}

{combine_css path= $PH_PATH|@cat:'ph.css'}

{combine_script id='datepicker.js' load='footer' require='jquery.ui.datepicker' path=$PH_PATH|@cat:'datepicker.js'}

{assign var="datepicker_language" value="themes/default/js/ui/i18n/jquery.ui.datepicker-`$lang_info.code`.js"}

{if "PHPWG_ROOT_PATH"|@constant|@cat:$datepicker_language|@file_exists}
{combine_script id="jquery.ui.datepicker-$lang_info.code" load='footer' path=$datepicker_language}
{/if}

{combine_css path="themes/default/js/ui/theme/jquery.ui.datepicker.css"}

{footer_script require='jquery.ui.datepicker,datepicker.js'}
function pwg_initialization_datepicker(day, month, year, linked_date, checked_on_change, min_linked_date, max_linked_date)
{ldelim}
  return pwg_common_initialization_datepicker(
    "{$ROOT_URL}{$themeconf.icon_dir}/datepicker.png",
    day, month, year, linked_date, checked_on_change, min_linked_date, max_linked_date);
}
{/footer_script}

{footer_script}{literal}
  pwg_initialization_datepicker("#start_day", "#start_month", "#start_year", "#start_linked_date", null, null, "#end_linked_date");
  pwg_initialization_datepicker("#end_day", "#end_month", "#end_year", "#end_linked_date", null, "#start_linked_date", null);
{/literal}{/footer_script}

<script type="text/javascript">
jQuery().ready(function()
{ldelim}
  jQuery('.cluetip').cluetip(
  {ldelim}
    width: 500,
    splitTitle: '|'
  {rdelim});
{rdelim});
</script>

<div class="titrePage">
  <h2>{$PH_NAME} {$PH_VERSION}</h2>
</div>

<fieldset class="save">
  <ul>
    <li>
      <label class="cluetip" title="{'PH_ManualPrune_title'|translate}|{'PH_ManualPrune_title_d'|translate}">
        {'PH_ManualPrune_title'|@translate}
      </label>

      <fieldset class="save">
      <div style="text-align: center; text-transform: uppercase;">
      <label class="cluetip" title="{'PH_Save_Title'|translate}|{'PH_Save_Title_d'|translate}">
        {'PH_Save_Title'|@translate}
      </label>
      </div>
      <form method="post" action="" class="general">
        <p>
          {'PH_Dump_Download'|@translate}&nbsp;
            <input type="checkbox" name="dump_download" value="true" {$PH_DUMP_DOWNLOAD}><br><br>
            <input class="submit" type="submit" value="{'PH_Save'|@translate}" name="save" {$TAG_INPUT_ENABLED}>
        </p>
      </form>
      <br>
      <form method="post" action="" class="general">
        <p>
          {'PH_Restore'|@translate}<br><br>
            <input class="submit" type="submit" value="{'PH_Restore_File'|@translate}" name="restore" {$TAG_INPUT_ENABLED}>
        </p>
      </form>
      </fieldset>

      <br><br>
      <form method="post" name="prune" action="" class="general">
        <ul class="date">
          <li class="date">
            <label class="date">{'Start_Date'|@translate}</label>
          </li>
          <li class="date">
            <select id="start_day" name="start_day">
              <option value="0">--</option>
              {section name=day start=1 loop=32}
                <option value="{$smarty.section.day.index}" {if $smarty.section.day.index==$START_DAY_SELECTED}selected="selected"{/if}>{$smarty.section.day.index}</option>
              {/section}
            </select>
            <select id="start_month" name="start_month">
              {html_options options=$month_list selected=$START_MONTH_SELECTED}
            </select>
            <input id="start_year" name="start_year" value="{$START_YEAR}" type="text" size="4" maxlength="4" >
            <input id="start_linked_date" name="start_linked_date" type="hidden" size="10" disabled="disabled">
          </li>
          <li class="date">
            <a class="date_today" href="#" onClick="document.prune.start_day.value={$smarty.now|date_format:"%d"};document.prune.start_month.value={$smarty.now|date_format:"%m"};document.prune.start_year.value={$smarty.now|date_format:"%Y"};return false;">{'today'|@translate}</a>
          </li>
        </ul>

        <ul class="date">
          <li class="date">
            <label class="date">{'End-Date'|@translate}</label>
          </li>
          <li class="date">
            <select id="end_day" name="end_day">
              <option value="0">--</option>
              {section name=day start=1 loop=32}
                <option value="{$smarty.section.day.index}" {if $smarty.section.day.index==$END_DAY_SELECTED}selected="selected"{/if}>{$smarty.section.day.index}</option>
              {/section}
            </select>
            <select id="end_month" name="end_month">
              {html_options options=$month_list selected=$END_MONTH_SELECTED}
            </select>
            <input id="end_year" name="end_year" value="{$END_YEAR}" type="text" size="4" maxlength="4" >
            <input id="end_linked_date" name="end_linked_date" type="hidden" size="10" disabled="disabled">
          </li>
          <li class="date">
      <a class="date_today" href="#" onClick="document.prune.end_day.value={$smarty.now|date_format:"%d"};document.prune.end_month.value={$smarty.now|date_format:"%m"};document.prune.end_year.value={$smarty.now|date_format:"%Y"};return false;">{'today'|@translate}</a>
          </li>
        </ul>

        <p>
          <input class="submit" type="submit" value="{'PH_Prune'|@translate}" name="prune" {$TAG_INPUT_ENABLED}>
        </p>
      </li>
    </ul>
  </form>
</fieldset>

<fieldset>
<form method="post" name="autoprune" action="" class="general">
  <ul>
    <li>
      <label class="cluetip" title="{'PH_AutoPrune_title'|translate}|{'PH_AutoPrune_title_d'|translate}">
        {'PH_AutoPrune_title'|@translate}
      </label>
    <br><br>
      <input type="radio" value="false" {$PH_AUTOPRUNE_FALSE} name="PH_AutoPrune">
        {'PH_AutoPrune_false'|@translate}<br>
      <input type="radio" value="true" {$PH_AUTOPRUNE_TRUE} name="PH_AutoPrune">
        {'PH_AutoPrune_true'|@translate}
    <fieldset>
      <ul>
        <li>
          <label class="cluetip" title="{'PH_AutoRange_title'|translate}|{'PH_AutoRange_title_d'|translate}">
            {'PH_AutoRange_title'|@translate}
          </label>
        </li>
        <br>
        <ul class="date">
          <li class="date">
            <input type="text" name="PH_Range_Value" value="{$PH_RANGE_VALUE}" size="10" style="text-align: center;">
            <select id="PH_Range" name="PH_Range">
              {html_options options=$range_list selected=$PH_RANGE_SELECTED}
            </select>
          </li>
        </ul>
      </ul>
    </fieldset>
    <p>
      <input class="submit" type="submit" value="{'PH_submit'|@translate}" name="submit" {$TAG_INPUT_ENABLED}>
    </p>
    </li>
  </ul>
</form>
</fieldset>

<fieldset>
  <label>{'PH_Support'|@translate}</label><br><br>
</fieldset>

{html_head}
<script type="text/javascript">
jQuery(document).ready(function() {ldelim}
  jQuery('#theAdminPage #the_page').addClass('{$themeconf.name}');
	jQuery(".infos").fadeOut(800).fadeIn(1200).fadeOut(400).fadeIn(800).fadeOut(400);
	jQuery(".errors").fadeOut(400).fadeIn(400).fadeOut(400).fadeIn(400).fadeOut(400).fadeIn(400); 
});
</script>
{/html_head}
