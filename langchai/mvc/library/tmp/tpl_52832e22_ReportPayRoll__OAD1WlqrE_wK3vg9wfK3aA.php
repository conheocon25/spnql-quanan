<?php 
function tpl_52832e22_ReportPayRoll__OAD1WlqrE_wK3vg9wfK3aA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html style="overflow-y:hidden;" lang="en">
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
	
	<?php /* tag "body" from line 8 */; ?>
<body data-menu-position="closed">
		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php /* tag "div" from line 10 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php /* tag "div" from line 13 */; ?>
<div class="container-fluid">							
				<?php /* tag "div" from line 14 */; ?>
<div class="row">
					<?php /* tag "div" from line 15 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 16 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 17 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "div" from line 18 */; ?>
<div role="grid" class="dataTables_wrapper">
									<?php /* tag "table" from line 19 */; ?>
<table class="table table-bordered table-striped table-hover">
										<?php /* tag "thead" from line 20 */; ?>
<thead>
											<?php /* tag "tr" from line 21 */; ?>
<tr role="row">
												<?php /* tag "th" from line 22 */; ?>
<th width="35">STT</th>											
												<?php /* tag "th" from line 23 */; ?>
<th><?php /* tag "div" from line 23 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
												<?php /* tag "th" from line 24 */; ?>
<th width="120"><?php /* tag "div" from line 24 */; ?>
<div class="text-right">ỨNG LƯƠNG</div></th>
												<?php /* tag "th" from line 25 */; ?>
<th width="120"><?php /* tag "div" from line 25 */; ?>
<div class="text-right">LƯƠNG THÁNG</div></th>
												<?php /* tag "th" from line 26 */; ?>
<th width="120"><?php /* tag "div" from line 26 */; ?>
<div class="text-right">THỰC LÃNH</div></th>
											</tr>
										</thead>									
										<?php /* tag "tbody" from line 29 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
											<?php 
/* tag "tr" from line 30 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->D = new PHPTAL_RepeatController($ctx->Data)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->D as $ctx->D): ;
?>
<tr class="gradeA odd">
												<?php /* tag "td" from line 31 */; ?>
<td align="center"><?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->D[0]); ?>
</span></td>
												<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->D[1]); ?>
</span></td>
												<?php /* tag "td" from line 33 */; ?>
<td align="right"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->D[2]); ?>
</span></td>
												<?php /* tag "td" from line 34 */; ?>
<td align="right"><?php /* tag "span" from line 34 */; ?>
<span><?php echo phptal_escape($ctx->D[3]); ?>
</span></td>
												<?php /* tag "td" from line 35 */; ?>
<td align="right"><?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->D[4]); ?>
</span></td>												
											</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											<?php /* tag "tr" from line 37 */; ?>
<tr>
												<?php /* tag "td" from line 38 */; ?>
<td colspan="4" align="right"><?php /* tag "B" from line 38 */; ?>
<B>TỔNG CỘNG</B></td>
												<?php /* tag "td" from line 39 */; ?>
<td align="right"><?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->Sum); ?>
</span></td>
											</tr>										
										</tbody>
									</table>
								</div>							
								<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLReportPayRoll')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="btn btn-primary"<?php echo $_tmp_1 ?>
>Lưu xuống DB</a>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 51 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\ReportPayRoll.html (edit that file instead) */; ?>