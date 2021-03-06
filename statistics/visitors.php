<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('statistics','default');


// Head variables
$cssLinks = array('style.css');
$javaScriptLinks = array();
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("title","Statistics - History");

$tpl->assign("homeTab",true);

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);


$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

if($c->isLoggedIn){
	if(!$c->p->hasPermission('view_statisticsVisitor')){
		$tpl->display('/home/content/99/11499199/html/templates/pages/403.tpl');
		die();
	}
}else{
	// Must be logged in
	$c->notify->source()->type('error')->msg("You must be logged in ")->process();
	$continue = base64_encode('http://techberry.org/statistics/');
	header('Location: http://techberry.org/login.php?continue='.$continue);
}

require_once('/home/content/99/11499199/html/statistics/config.php');

ob_start();

?>

<div id="container">
<div id="menu">
 <ul>
	<li><a href="http://techberry.org/statistics/">OneView</a></li>
	<li><a href="http://techberry.org/statistics/visitors.php">Visitors</a></li>
	<li><a href="http://techberry.org/statistics/history.php">History</a></li> 
 </ul>
</div>
  <div class="middle">
    <h3>Referrer Top10</h3>
	<table width="100%" border="0" cellpadding="5" cellspacing="0" class="valign">
	<tr>
      <td width="30"><strong>Nr.</strong></td>
      <td width="280"><strong>Referrer</strong></td>
      <td width="120"><strong>Prozent</strong></td>
    </tr>
    <?PHP  
	// gesammt Referrer	
	$abfrage=mysql_query("select sum(view) from ".$db_prefix."Referer");
	$ges_referer=mysql_result($abfrage,0,0);
	mysql_free_result($abfrage);
	// Top Refferrer
	$nr = 1;
	$abfrage=mysql_query("SELECT referer, SUM(view) AS views from ".$db_prefix."Referer GROUP BY referer ORDER BY views DESC LIMIT 0, 10");
	while($row=mysql_fetch_array($abfrage))
	  	{
		$referer=htmlspecialchars($row['referer']);
		if(strlen($referer) > 35){$shortreferer=substr($referer,0,30)."<a href=\"#\" title=\"$referer\">...</a>";}
		else {$shortreferer=$referer;}		
		$views=$row['views'];
		$prozent = (100/$ges_referer)*$views;
		if ($prozent < 0.1 ) $prozent = round($prozent,2);
		else $prozent = round($prozent,1);
		$bar_width = round((100/$ges_referer)*$views);
		echo"	<tr>\n";
		echo"		<td>$nr</td>\n";
		echo"		<td>$shortreferer</td>\n";
		echo"		<td nowrap><div class=\"vbar\" style=\"width:".$bar_width."px;\" title=\"$views Visitors\" >&nbsp;$prozent%</div></td>\n";
		echo"	</tr>\n";
		$nr++;
		}
	mysql_free_result($abfrage);
	?>
    </table>
  </div>
  <div class="middle">
    <h3>Pages Top10</h3>
	<table width="100%" cellpadding="5" cellspacing="0" class="valign">
  	<tr>
      <td width="30"><strong>Nr.</strong></td>
      <td width="280"><strong>Page</strong></td>
      <td width="120"><strong>Prozent</strong></td>
  	</tr>
<?PHP  
	// gesammt Pages
	$abfrage=mysql_query("select sum(view) from ".$db_prefix."Page");
	$ges_page=mysql_result($abfrage,0,0);
	mysql_free_result($abfrage);
	// Top Pages
	$nr = 1;
	$abfrage=mysql_query("SELECT page, SUM(view) AS views from ".$db_prefix."Page GROUP BY page ORDER BY views DESC LIMIT 0, 10");
	while($row=mysql_fetch_array($abfrage))
		{
		$page=htmlspecialchars($row['page']);
		if(strlen($page) > 35){$shortpage="<a href=\"#\" title=\"$page\">...</a>".substr($page,strlen($page)-30,strlen($page)); }
		else {$shortpage=$page;}
		$views=$row['views'];
		$prozent = (100/$ges_page)*$views;
		if ($prozent < 0.1 ) $prozent = round($prozent,2);
		else $prozent = round($prozent,1);
		$bar_width = round((100/$ges_page)*$views);
		echo"	<tr>\n";
		echo"		<td>$nr</td>\n";
		echo"		<td>$shortpage</td>\n";
		echo"		<td nowrap><div class=\"vbar\" style=\"width:".$bar_width."px;\" title=\"$views Visits\" >&nbsp;$prozent%</div></td>\n";
		echo"	</tr>\n";
		$nr++;
		}
	mysql_free_result($abfrage);
?>
	</table>
  </div>
  <div style="clear:both"></div>
   <div class="middle">
    <h3>Keywords Top10</h3>
	<table width="100%" border="0" cellpadding="5" cellspacing="0" class="valign">
      <tr>
        <td width="30"><strong>Nr.</strong></td>
        <td width="280"><strong>Keywords</strong></td>
        <td width="120"><strong>Prozent</strong></td>
      </tr>
	<?PHP  
	// gesammt keywords	
	$abfrage=mysql_query("select sum(view) from ".$db_prefix."Keyword");
	$ges_keyword=mysql_result($abfrage,0,0);
	mysql_free_result($abfrage);
	// Top Keywords
	$nr = 1;
	$abfrage=mysql_query("SELECT keyword, SUM(view) AS views from ".$db_prefix."Keyword GROUP BY keyword ORDER BY views DESC LIMIT 0, 10");
	while($row=mysql_fetch_array($abfrage))
		{
		$keyword=urldecode($row['keyword']);
		if(strlen($keyword) > 35){$shortkeyword=substr($keyword,0,30)."<a href=\"#\" title=\"$keyword\">...</a>";}
		else {$shortkeyword=$keyword;}
		$views=$row['views'];
		$prozent = (100/$ges_keyword)*$views;
		if ($prozent < 0.1 ) $prozent = round($prozent,2);
		else $prozent = round($prozent,1);
		$bar_width = round((100/$ges_keyword)*$views);
		echo"	<tr>\n";
		echo"		<td>$nr</td>\n";
		echo"		<td>$shortkeyword</td>\n";
		echo"		<td nowrap><div class=\"vbar\" style=\"width:".$bar_width."px;\" title=\"$views Visitors\" >&nbsp;$prozent%</div></td>\n";
		echo"	</tr>\n";
		$nr++;
		}
	mysql_free_result($abfrage);
	?>	  
    </table>
  </div>
  <div class="middle">
    <h3>Languages Top10</h3>
	<table width="100%" border="0" cellpadding="5" cellspacing="0" class="valign">
      <tr>
        <td width="30"><strong>Nr.</strong></td>
        <td width="280"><strong>Language</strong></td>
        <td width="120"><strong>Prozent</strong></td>
      </tr>
	<?PHP  
	// gesammt Languages	
	$abfrage=mysql_query("select sum(view) from ".$db_prefix."Language");
	$ges_language=mysql_result($abfrage,0,0);
	mysql_free_result($abfrage);
	// Code to Language
	$code2lang = array(
	'ar'=>'Arabic',
	'bn'=>'Bengali',
	'bg'=>'Bulgarian',
	'zh'=>'Chinese',
	'cs'=>'Czech',
	'da'=>'Danish',
	'en'=>'English',
	'et'=>'Estonian',
	'fi'=>'Finnish',
	'fr'=>'French',
	'de'=>'German',
	'el'=>'Greek',
	'hi'=>'Hindi',
	'id'=>'Indonesian',
	'it'=>'Italian',
	'ja'=>'Japanese',
	'kg'=>'Korean',
	'nb'=>'Norwegian',
	'nl'=>'Nederlands',
	'pl'=>'Polish',
	'pt'=>'Portuguese',
	'ro'=>'Romanian',
	'ru'=>'Russian',
	'sr'=>'Serbian',
	'sk'=>'Slovak',
	'es'=>'Spanish',
	'sv'=>'Swedish',	
	'th'=>'Thai',
	'tr'=>'Turkish',
	''=>'');
	// Top Languages
	$nr = 1;
	$abfrage=mysql_query("SELECT language, SUM(view) AS views from ".$db_prefix."Language GROUP BY language ORDER BY views DESC LIMIT 0, 10");
	while($row=mysql_fetch_array($abfrage))
		{
		$language=$row['language'];
		if (array_key_exists($language,$code2lang)) $language=$code2lang[$language];
		$views=$row['views'];
		$prozent = (100/$ges_language)*$views;
		if ($prozent < 0.1 ) $prozent = round($prozent,2);
		else $prozent = round($prozent,1);
		$bar_width = round((100/$ges_language)*$views);
		echo"	<tr>\n";
		echo"		<td>$nr</td>\n";
		echo"		<td>$language</td>\n";
		echo"		<td nowrap><div class=\"vbar\" style=\"width:".$bar_width."px;\" title=\"$views Visitors\" >&nbsp;$prozent%</div></td>\n";
		echo"	</tr>\n";
		$nr++;
		}
	mysql_free_result($abfrage);
	?>	  
	</table>
  </div>
  <div style="clear:both"></div>
</div>
<?php 
$tpl->assign("statistics",ob_get_clean());

$tpl->display('/home/content/99/11499199/html/statistics/templates/stats.tpl');
?>