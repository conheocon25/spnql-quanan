<?php 
function tpl_52954e6a_ReportDetail__WaSZxAOZFiLaT1ixfxqFug(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
								<?php /* tag "H3" from line 29 */; ?>
<H3>BẢNG KÊ CHI TIẾT</H3>
								<?php /* tag "table" from line 30 */; ?>
<table class="table table-striped table-hover">
									<?php /* tag "thead" from line 31 */; ?>
<thead>
										<?php /* tag "tr" from line 32 */; ?>
<tr>										
											<?php /* tag "th" from line 33 */; ?>
<th><?php /* tag "div" from line 33 */; ?>
<div class="text-left">NGÀY</div></th>
											<?php /* tag "th" from line 34 */; ?>
<th width="90"><?php /* tag "div" from line 34 */; ?>
<div class="text-center">NHẬT KÝ</div></th>
											<?php /* tag "th" from line 35 */; ?>
<th width="90"><?php /* tag "div" from line 35 */; ?>
<div class="text-center">DOANH SỐ</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 38 */; ?>
<tbody>
										<?php 
/* tag "tr" from line 39 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Day = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getURLDayAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Day as $ctx->Day): ;
?>
<tr>										
											<?php /* tag "td" from line 40 */; ?>
<td><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->Day[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->Day[0]); ?>
</span></a></td>
											<?php /* tag "td" from line 41 */; ?>
<td align="center"><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_1 = ($ctx->Day[2]))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 41 */; ?>
<span class="glyphicons-print"></span></a></td>
											<?php /* tag "td" from line 42 */; ?>
<td align="center"><?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->Day[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 42 */; ?>
<span class="glyphicons-print"></span></a></td>
										</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

										<?php /* tag "tr" from line 44 */; ?>
<tr>
											<?php /* tag "td" from line 45 */; ?>
<td align="center"><?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLSellingGeneral')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>TỔNG HỢP</a></td>
											<?php /* tag "td" from line 46 */; ?>
<td></td>
											<?php /* tag "td" from line 47 */; ?>
<td align="center"><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLSellingGeneral')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 47 */; ?>
<span class="glyphicons-print"></span></a></td>
										</tr>
									</tbody>
								</table>
								<?php /* tag "BR" from line 51 */; ?>
<BR/>
								<?php /* tag "table" from line 52 */; ?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 53 */; ?>
<thead>
										<?php /* tag "tr" from line 54 */; ?>
<tr>
											<?php /* tag "th" from line 55 */; ?>
<th width="60"><?php /* tag "i" from line 55 */; ?>
<i class="glyphicons-macbook"></i></th>
											<?php /* tag "th" from line 56 */; ?>
<th><?php /* tag "div" from line 56 */; ?>
<div class="text-left">TÊN</div></th>											
										</tr>
									</thead>
									<?php /* tag "tbody" from line 59 */; ?>
<tbody>
										<?php /* tag "tr" from line 60 */; ?>
<tr>
											<?php /* tag "td" from line 61 */; ?>
<td class="center"><?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLReportPayRollSave')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 61 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 62 */; ?>
<td><?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLReportPayRoll')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>(0) BẢNG LƯƠNG</a></td>
										</tr>
										<?php /* tag "tr" from line 64 */; ?>
<tr>
											<?php /* tag "td" from line 65 */; ?>
<td class="center"><?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLCollectGeneralSave')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 65 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 66 */; ?>
<td><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLCollectGeneral')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_3 ?>
>(1) TỔNG HỢP THU</a></td>
										</tr>
										<?php /* tag "tr" from line 68 */; ?>
<tr>
											<?php /* tag "td" from line 69 */; ?>
<td class="center"><?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLPaidGeneralSave')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 69 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 70 */; ?>
<td><?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLPaidGeneral')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
>(2) TỔNG HỢP CHI</a></td>
										</tr>
										<?php /* tag "tr" from line 72 */; ?>
<tr>
											<?php /* tag "td" from line 73 */; ?>
<td class="center"><?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLStoreSave')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 73 */; ?>
<i class="glyphicons-disk_save"></i></a></td>
											<?php /* tag "td" from line 74 */; ?>
<td><?php 
/* tag "a" from line 74 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>(3) TỔNG HỢP TỒN KHO</a></td>
										</tr>
										<?php /* tag "tr" from line 76 */; ?>
<tr>
											<?php /* tag "td" from line 77 */; ?>
<td class="center"></td>
											<?php /* tag "td" from line 78 */; ?>
<td><?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Tracking, 'getURLGeneral')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
>(4) TỔNG HỢP</a></td>
										</tr>										
										<?php /* tag "tr" from line 80 */; ?>
<tr>
											<?php /* tag "td" from line 81 */; ?>
<td class="center"></td>
											<?php /* tag "td" from line 82 */; ?>
<td><?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Tracking, 'getURLCourse')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>THỐNG KÊ CÁC MÓN</a></td>
										</tr>
										<?php /* tag "tr" from line 84 */; ?>
<tr>
											<?php /* tag "td" from line 85 */; ?>
<td class="center"></td>
											<?php /* tag "td" from line 86 */; ?>
<td><?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Tracking, 'getURLResource')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
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
/* tag "div" from line 96 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 97 */ ;
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