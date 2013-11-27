<?php 
function tpl_528328e8_ReportDetail__WaSZxAOZFiLaT1ixfxqFug(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div class="menu">			
			<?php /* tag "div" from line 11 */; ?>
<div id="sidebar">
				<?php /* tag "ul" from line 12 */; ?>
<ul style="display: block;">																				
					<?php 
/* tag "li" from line 13 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Tracking1 = new PHPTAL_RepeatController($ctx->TrackingAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Tracking1 as $ctx->Tracking1): ;
if (null !== ($_tmp_2 = ($ctx->Tracking1->getId()==$ctx->Tracking->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
						<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking1, 'getURLView')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
							<?php /* tag "i" from line 15 */; ?>
<i class="icon-book"></i><?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Tracking1, 'getName')); ?>
</span>							
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
			</div>
		</div>
		<?php /* tag "div" from line 21 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>
			
			<?php 
/* tag "div" from line 23 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 24 */; ?>
<div class="row">
				<?php /* tag "div" from line 25 */; ?>
<div class="container-fluid">
					<?php /* tag "div" from line 26 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 27 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 28 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "table" from line 29 */; ?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 30 */; ?>
<thead>
										<?php /* tag "tr" from line 31 */; ?>
<tr>
											<?php /* tag "th" from line 32 */; ?>
<th width="60"><?php /* tag "i" from line 32 */; ?>
<i class="glyphicons-macbook"></i></th>
											<?php /* tag "th" from line 33 */; ?>
<th><?php /* tag "div" from line 33 */; ?>
<div class="text-left">TÊN</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 36 */; ?>
<tbody>
										<?php /* tag "tr" from line 37 */; ?>
<tr>
											<?php /* tag "td" from line 38 */; ?>
<td class="center"><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLReportPayRollSave')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 38 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 39 */; ?>
<td><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLReportPayRoll')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>(0) BẢNG LƯƠNG</a></td>
										</tr>
										<?php /* tag "tr" from line 41 */; ?>
<tr>
											<?php /* tag "td" from line 42 */; ?>
<td class="center"><?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLCollectGeneralSave')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 42 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 43 */; ?>
<td><?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLCollectGeneral')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_3 ?>
>(1) TỔNG HỢP THU</a></td>
										</tr>
										<?php /* tag "tr" from line 45 */; ?>
<tr>
											<?php /* tag "td" from line 46 */; ?>
<td class="center"><?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLPaidGeneralSave')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 46 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLPaidGeneral')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>(2) TỔNG HỢP CHI</a></td>
										</tr>
										<?php /* tag "tr" from line 49 */; ?>
<tr>
											<?php /* tag "td" from line 50 */; ?>
<td class="center"><?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLStoreSave')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 50 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 51 */; ?>
<td><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>(3) TỔNG HỢP TỒN KHO</a></td>
										</tr>
										<?php /* tag "tr" from line 53 */; ?>
<tr>
											<?php /* tag "td" from line 54 */; ?>
<td class="center"></td>
											<?php /* tag "td" from line 55 */; ?>
<td><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLGeneral')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>(4) TỔNG HỢP</a></td>
										</tr>										
										<?php /* tag "tr" from line 57 */; ?>
<tr>
											<?php /* tag "td" from line 58 */; ?>
<td class="center"></td>
											<?php /* tag "td" from line 59 */; ?>
<td><?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLCourse')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>THỐNG KÊ CÁC MÓN</a></td>
										</tr>
										<?php /* tag "tr" from line 61 */; ?>
<tr>
											<?php /* tag "td" from line 62 */; ?>
<td class="center"></td>
											<?php /* tag "td" from line 63 */; ?>
<td><?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLResource')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
>THỐNG KÊ NHẬP HÀNG</a></td>
										</tr>										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 73 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 74 */ ;
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

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\ReportDetail.html (edit that file instead) */; ?>