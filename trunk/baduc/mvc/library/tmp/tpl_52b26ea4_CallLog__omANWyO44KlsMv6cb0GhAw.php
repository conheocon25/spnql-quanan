<?php 
function tpl_52b26ea4_CallLog__omANWyO44KlsMv6cb0GhAw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "div" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>	
	<?php /* tag "body" from line 7 */; ?>
<body>
		<?php 
/* tag "div" from line 8 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuApp', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 11 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row">																	
				<?php /* tag "div" from line 15 */; ?>
<div class="col-12">
					<?php /* tag "div" from line 16 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 17 */; ?>
<div class="widget-content">
							<?php /* tag "p" from line 18 */; ?>
<p>Cứ mỗi 10 giây hệ thống sẽ tự cập nhật lại DANH SÁCH MÓN GỌI ...<?php /* tag "B" from line 18 */; ?>
<B id="CountShow"></B> giây</p>
						</div>
					</div>
					<?php /* tag "div" from line 21 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 22 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "div" from line 23 */; ?>
<div id="CourseLog"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 29 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 30 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 31 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			var Count = 10;
			$("#CountShow").html(Count);
			$("#CourseLog").load("/calllog/loading");
			//Thiết lập mặc định 10 giây
			setInterval(function () {
				Count --;
				if (Count<0){
					Count = 10;
					$("#CourseLog").load("/calllog/loading");
				}
				$("#CountShow").html(Count);
			},1000);
		/*]]>*/
		</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\CallLog.html (edit that file instead) */; ?>