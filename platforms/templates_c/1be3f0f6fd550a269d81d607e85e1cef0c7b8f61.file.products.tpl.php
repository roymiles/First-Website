<?php /* Smarty version Smarty-3.1.16, created on 2014-07-05 06:12:11
         compiled from "/home/content/99/11499199/html/templates/pages/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2098931803530f8aa90f98f3-17147208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be3f0f6fd550a269d81d607e85e1cef0c7b8f61' => 
    array (
      0 => '/home/content/99/11499199/html/templates/pages/products.tpl',
      1 => 1403530231,
      2 => 'file',
    ),
    '10956c3bff9329ea720192a9f75e0391c75bd778' => 
    array (
      0 => '/home/content/99/11499199/html/templates/commonLayout.tpl',
      1 => 1404562680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098931803530f8aa90f98f3-17147208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530f8aa939e495_20576250',
  'variables' => 
  array (
    'docType' => 0,
    'startOfHead' => 0,
    'endOfHead' => 0,
    'isLoggedIn' => 0,
    'token' => 0,
    'startOfBody' => 0,
    'loginError' => 0,
    'url' => 0,
    'username' => 0,
    'avatar' => 0,
    'customBanner' => 0,
    'withTopPadding' => 0,
    'withSidePadding' => 0,
    'disableFooter' => 0,
    'endOfBody' => 0,
    'toTopButton' => 0,
    'alerts' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f8aa939e495_20576250')) {function content_530f8aa939e495_20576250($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('/home/content/99/11499199/html/templates/config/css.prefix.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['docType']->value;?>

<!--
 _________  _______   ________  ___  ___  ________  _______   ________  ________      ___    ___     
|\___   ___\\  ___ \ |\   ____\|\  \|\  \|\   __  \|\  ___ \ |\   __  \|\   __  \    |\  \  /  /|    
\|___ \  \_\ \   __/|\ \  \___|\ \  \\\  \ \  \|\ /\ \   __/|\ \  \|\  \ \  \|\  \   \ \  \/  / /    
     \ \  \ \ \  \_|/_\ \  \    \ \   __  \ \   __  \ \  \_|/_\ \   _  _\ \   _  _\   \ \    / /     
      \ \  \ \ \  \_|\ \ \  \____\ \  \ \  \ \  \|\  \ \  \_|\ \ \  \\  \\ \  \\  \|   \/  /  /      
       \ \__\ \ \_______\ \_______\ \__\ \__\ \_______\ \_______\ \__\\ _\\ \__\\ _\ __/  / /        
        \|__|  \|_______|\|_______|\|__|\|__|\|_______|\|_______|\|__|\|__|\|__|\|__|\___/ /         
                                                                                    \|___|/        
-->
<head>
	<?php echo $_smarty_tpl->tpl_vars['startOfHead']->value;?>

	<?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->tpl_vars['endOfHead']->value;?>

	
		<script type="text/javascript">
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-43206333-1', 'techberry.org');
		  ga('send', 'pageview');
		</script>
	<script type="text/javascript">function im(u){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im").remove();document.cookie = 'im='+u+'; expires=0; path=/';document.body.innerHTML += '<iframe id="im" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';<?php } else { ?>window.location.href= "http://techberry.org/login.php?continue=<?php echo md5($_SERVER['PHP_SELF']);?>
";<?php }?>}function im_list(){<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$("#im_list").remove();document.cookie = 'im_list=1; expires=0; path=/';document.body.innerHTML += '<iframe id="im_list" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"></iframe>';<?php } else { ?>window.location.href ="http://techberry.org/login.php?continue=<?php echo md5($_SERVER['PHP_SELF']);?>
";<?php }?>}function renderDynamicTips(){Opentip.styles.default = {showOn: 'mouseover',target: true,tipJoint: "bottom"};Opentip.styles.hovercard = {showOn: 'click',target: true,tipJoint: "bottom",className: "hovercard",group: "hovercards",background: "#fff",borderColor: "rgba(0, 0, 0, 0)",borderRadius: "3",shadowColor: "rgba(0, 0, 0, 0.298039)",stem: false,showEffect: 'blindDown',hideTriggers:[document,document],hideOn:['keydown','click']};$('.miniprofile').each(function(i,obj){new Opentip(obj,{ style: "hovercard", ajax:"http://techberry.org/frames/user.profile.php?username="+$(this).data('user') });});$('.tooltipWiki').each(function(i,obj){new Opentip(obj,{ style: "default", ajax:"http://techberry.org/frames/tooltip.wiki.php?explain="+$(this).data('v') });});}function checkAuth(){var logged = (function(){var isLogged = null;$.ajax({'async': false,'global': false,'url': 'http://techberry.org/loginStatus?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
','success': function(resp) {isLogged = (resp === "1");}});return isLogged;})();return logged;}$(function (){renderDynamicTips();});<?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>$(document).ready(function(){var u = getCookie('im');var l = getCookie('im_list');if(u){document.body.innerHTML += '<iframe id="im" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.instant_messenger.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}if(l){$('#toTop').css('bottom','3em');$('#toTop').css('right','1em');document.body.innerHTML += '<iframe id="im_list" style="bottom:-265px;" scrolling="no" src="http://techberry.org/frames/user.im_following_list.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&username_to='+u+'"></iframe>';}setInterval(function(){$.ajax({type:'POST',url:'http://techberry.org/poll/updateRecentActivity.php',data:"token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"});}, 45000);});<?php }?></script>
</head>
<body><?php echo $_smarty_tpl->tpl_vars['startOfBody']->value;?>
<div id="<?php echo $_smarty_tpl->getConfigVariable('prefixMain');?>
bg"></div><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value==false) {?><?php if ($_smarty_tpl->tpl_vars['loginError']->value) {?><form accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><div id="login_error" class="error"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div><?php } else { ?><a href="http://techberry.org/login.php?ref=1" onclick="ShowLogin(this); return false;" rel="nofollow"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Sign in</button></a><form style="visibility:hidden" accept-charset="UTF-8" action="http://techberry.org/process.login.php" method="post" name="login_form" id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
login"><input class="h_input" type="text" name="email" id="username" maxlength="50"/><input class="h_input" type="password" name="password" id="password" maxlength="50"/><input class="h_login" type="submit" value="Login" class="login_submit" onclick="formhash(this.form, this.form.password)"/><input type="hidden" value="<?php echo base64_encode($_smarty_tpl->tpl_vars['url']->value);?>
" name="continue"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" name="token"/><a href="http://techberry.org/register.php" rel="nofollow" class="h_sign-up"><span>Sign Up</span></a></form><?php }?><?php } else { ?><a href="http://techberry.org/process.logout.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn blue">Logout</button></a><!--{if $privilege > 1}--><a href="http://techberry.org/admin/"><button class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixHeader');?>
_head_btn red">Admin</button></a><!--{/if}--><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_header_block"><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/" style="margin-top:13px"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><a class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_link" href="http://techberry.org/account/notifications/" onclick="notifications(); return false"><span id="notification_bell"></span></a><span style="height:25px" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" width="25px" height="25px"></span><div id="notifications" class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixUser');?>
_flyout" style="display:none"><div class="body-arrow"></div><div style="width:400px;height:327px;background-color:#e5e5e5;"><iframe id="notification_iframe" style="width:100%;height:100%" data-src="http://techberry.org/frames/user.notifications.php?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" src="about:blank"></iframe></div></div></div><?php }?><a href="http://techberry.org/"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
logo"></div></a></div></div><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['customBanner']->value) {?><?php echo $_smarty_tpl->tpl_vars['customBanner']->value;?>
<?php }?><div id="notification_overlay" onclick="notifications();" style="display:none"></div><div <?php if ($_smarty_tpl->tpl_vars['withTopPadding']->value==true) {?>style="padding-top:20px"<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['withSidePadding']->value==true) {?>class="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
wrap"<?php }?>><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page" style="height:100%"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixGlobal');?>
page"><div id="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
results"><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/code/">ScribbleCode</a></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a href="http://techberry.org/code/"><img src="http://techberry.org/images/code.png" width="32" height="32"></a><p>Web development tool. Share, collaborate and build your scripts in a simple sandbox</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/news/">News</a></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a href="http://techberry.org/news/"><img src="http://techberry.org/images/news.png" width="32" height="32"></a><p>Crawls the latest and most reliable news for current and upcoming technology</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/answers/">Questions</a></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a href="http://techberry.org/answers/"><img src="http://techberry.org/images/qa.png" width="32" height="32"></a><p>Ask and offer advice for any specific questions or queries.</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/tutorials/">Tutorials</a></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a href="http://techberry.org/tutorials/"><img src="http://techberry.org/images/tuts.png" width="32" height="32"></a><p>Detailed tutorials for a wide variety of languages and computer tricks</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/docs/">API</a></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a href="http://techberry.org/docs/"><img src="http://techberry.org/images/api.png" width="32" height="32"></a><p>For developers who want to manipulate and interact with our services</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/upload/">Upload</a></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
"><a href="http://techberry.org/upload/"><img src="http://techberry.org/images/upload.png" width="32" height="32"></a><p>Upload, save and share your files for free</p></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
light"><h2><a href="http://techberry.org/chat/">Shoutbox</a><!-- | <a href="http://techberry.org/chat/freenode.php" data-ot="Real time webchat for members <u>and</u> guests, though a platform not developed by us.">Freenode</a>--></h2></div><div class="<?php echo $_smarty_tpl->getConfigVariable('prefixProducts');?>
<?php echo $_smarty_tpl->getConfigVariable('subPrefixWrap');?>
" style="margin-bottom:50px"><a href="http://techberry.org/chat/"><img src="http://techberry.org/images/chat.png" width="32" height="32"></a><p>Talk to other users online in real-time</p></div></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['disableFooter']->value) {?><?php echo $_smarty_tpl->getSubTemplate ("/home/content/99/11499199/html/templates/core/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?></div><?php echo $_smarty_tpl->tpl_vars['endOfBody']->value;?>
<?php if ($_smarty_tpl->tpl_vars['toTopButton']->value) {?><a id="toTop" href="#top" style="display:inline"><img width="40" height="40" src="http://techberry.org/images/to-top.png"></a><?php }?><script type="text/javascript">$(".shortened").shorten(),function(){$(function(){return $(".age.now").attr("datetime",new Date),$(".age.default").age(),$(".age.tiny").age({style:"tiny"}),$(".age.expired").age({expired:"expired"}),$(".age.pending").age({pending:"pending"})})}.call(this);</script><script type="text/javascript">
			$(document).ready(function () {
				$(".loadMore").click(function () {
					var t = this;
					$.get("http://techberry.org/ajax/loadMore.php?info="+$(t).attr('data-info')+"&from="+$(t).attr('data-from'), function (a){
						if(a=='false'){
							$("#contentList").append('<h2 style="text-align:center;margin-top:5px">End of the line</h2>');
							$(t).remove();
						}else{
							$(t).attr("data-from", parseInt($(t).attr("data-from"))+parseInt(20))
							$("#contentList").append(a);
						}
					})
				}), $(".pointsNeeded").click(function (a) {
					var b = $(this).attr("data-action");
					$.get("http://techberry.org/ajax/actions.php?name=" + b, function (a) {
						createAlert("log", "Requires " + a + " points"), $(this).attr("onclick", "createAlert('log','Requires " + a + " points')")
					}), a.preventDefault()
				})
			});
			function reportBug(){
				// Initialize
				$("body").htmlfeedback();
				
				// Show HTMLFeedback immediatly
				$("body").htmlfeedback("show");
				
				$(document.body).append('<div id="draggable"><p onclick="exitBugReport()">test</p></div>');
				$('#draggable').css('position', 'fixed');
				$('#draggable').css('width', '150px');
				$('#draggable').css('height', '150px');
				$('#draggable').css('z-index', '5000');
				$('#draggable').css('top', '50%');
				$('#draggable').css('left', '50%');
				$('#draggable').css('margin-left', '-50px');
				$('#draggable').css('margin-top', '-50px');
				$('#draggable').css('background-color', 'red');
				$( "#draggable" ).draggable();
			}
			
			function exitBugReport(){
				$("body").htmlfeedback("hide");
				$( "#draggable" ).remove();
			}
			</script><?php if ($_smarty_tpl->tpl_vars['alerts']->value) {?><script type="text/javascript"><?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>Messenger().post({message: "<?php echo $_smarty_tpl->tpl_vars['alert']->value[0];?>
",type: '<?php echo $_smarty_tpl->tpl_vars['alert']->value[1];?>
',hideAfter: 10,hideOnNavigate: true});<?php } ?></script><?php }?></body><?php }} ?>
