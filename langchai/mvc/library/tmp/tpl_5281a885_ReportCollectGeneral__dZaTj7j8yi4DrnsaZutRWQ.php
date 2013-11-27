<?php 
function tpl_5281a885_ReportCollectGeneral__dZaTj7j8yi4DrnsaZutRWQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "body" from line 1 */ ;
?>
<body>
	<?php 
/* tag "div" from line 2 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ReportHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

	<?php /* tag "h2" from line 3 */; ?>
<h2>1. THU KHÁC</h2>
	<?php /* tag "table" from line 4 */; ?>
<table width="100%" border="1" cellpadding="2">
		<?php /* tag "tr" from line 5 */; ?>
<tr>			
			<?php /* tag "th" from line 6 */; ?>
<th width="4%" align="center"><?php /* tag "B" from line 6 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 7 */; ?>
<th width="10%" align="center"><?php /* tag "B" from line 7 */; ?>
<B>NGÀY</B></th>
			<?php /* tag "th" from line 8 */; ?>
<th width="18%" align="left"><?php /* tag "B" from line 8 */; ?>
<B>MỤC</B></th>
			<?php /* tag "th" from line 9 */; ?>
<th width="56%" align="left"><?php /* tag "B" from line 9 */; ?>
<B>GHI CHÚ</B></th>
			<?php /* tag "th" from line 10 */; ?>
<th width="12%" align="right"><?php /* tag "B" from line 10 */; ?>
<B>GIÁ TRỊ</B></th>
		</tr>
		<?php 
/* tag "tr" from line 12 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Collect = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getCollectAllSum'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Collect as $ctx->Collect): ;
?>
<tr>
			<?php /* tag "td" from line 13 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Collect/number')); ?>
</td>
			<?php /* tag "td" from line 14 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->Collect, 'getDatePrint')); ?>
</td>
			<?php /* tag "td" from line 15 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Collect, 'getTerm/getName')); ?>
</td>
			<?php /* tag "td" from line 16 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Collect, 'getNote')); ?>
</td>
			<?php /* tag "td" from line 17 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->Collect, 'getValuePrint')); ?>
</td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "tr" from line 19 */; ?>
<tr>
			<?php /* tag "th" from line 20 */; ?>
<th align="right" colspan="4"><?php /* tag "b" from line 20 */; ?>
<b>TỔNG (1)</b></th>
			<?php /* tag "th" from line 21 */; ?>
<th align="right"><?php /* tag "b" from line 21 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Tracking, 'getCollectAllSumValuePrint')); ?>
</b></th>
		</tr>
	</table>
	<?php /* tag "BR" from line 24 */; ?>
<BR/>		
	<?php /* tag "h2" from line 25 */; ?>
<h2>2. THU DOANH SỐ</h2>
	<?php /* tag "table" from line 26 */; ?>
<table width="100%" border="1" cellpadding="2">	
		<?php /* tag "tr" from line 27 */; ?>
<tr>
			<?php /* tag "th" from line 28 */; ?>
<th width="4%" align="center"><?php /* tag "B" from line 28 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 29 */; ?>
<th width="10%" align="left"><?php /* tag "B" from line 29 */; ?>
<B>THỜI GIAN</B></th>			
			<?php /* tag "th" from line 30 */; ?>
<th width="9%" align="right"><?php /* tag "B" from line 30 */; ?>
<B>N.VIÊN</B></th>
			<?php /* tag "th" from line 31 */; ?>
<th width="9%" align="right"><?php /* tag "B" from line 31 */; ?>
<B>PHÒNG</B></th>
			<?php /* tag "th" from line 32 */; ?>
<th width="44%" align="left"><?php /* tag "B" from line 32 */; ?>
<B>GHI CHÚ</B></th>
			<?php /* tag "th" from line 33 */; ?>
<th width="12%" align="right"><?php /* tag "B" from line 33 */; ?>
<B>PHIẾU NỢ</B></th>
			<?php /* tag "th" from line 34 */; ?>
<th width="12%" align="right"><?php /* tag "B" from line 34 */; ?>
<B>THU ĐỦ</B></th>
		</tr>
		<?php 
/* tag "tr" from line 36 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->path($ctx->Tracking, 'getSessionAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr>
			<?php /* tag "td" from line 37 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</td>
			<?php /* tag "td" from line 38 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</td>			
			<?php /* tag "td" from line 39 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</td>
			<?php /* tag "td" from line 40 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->Session, 'getTable/getName')); ?>
</td>
			<?php /* tag "td" from line 41 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->Session, 'getNote')); ?>
</td>
			<?php /* tag "td" from line 42 */; ?>
<td align="right"><?php echo phptal_escape($ctx->Session->getStatus()==2?$ctx->Session->getValuePrint():0); ?>
</td>
			<?php /* tag "td" from line 43 */; ?>
<td align="right"><?php echo phptal_escape($ctx->Session->getStatus()==1?$ctx->Session->getValuePrint():0); ?>
</td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "tr" from line 45 */; ?>
<tr>
			<?php /* tag "th" from line 46 */; ?>
<th align="right" colspan="5" width="76%"><?php /* tag "b" from line 46 */; ?>
<b>TỔNG (2)</b></th>
			<?php /* tag "th" from line 47 */; ?>
<th align="right" width="12%"><?php /* tag "B" from line 47 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Tracking, 'getSessionAllValue2Print')); ?>
</B></th>
			<?php /* tag "th" from line 48 */; ?>
<th align="right" width="12%"><?php /* tag "B" from line 48 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Tracking, 'getSessionAllValue1Print')); ?>
</B></th>
		</tr>		
	</table>	
	<?php /* tag "BR" from line 51 */; ?>
<BR/>
	<?php /* tag "table" from line 52 */; ?>
<table width="100%" border="0" cellpadding="2">
		<?php /* tag "tr" from line 53 */; ?>
<tr>
			<?php /* tag "td" from line 54 */; ?>
<td width="85%" align="right"></td>
			<?php /* tag "td" from line 55 */; ?>
<td width="15%" align="right"></td>
		</tr>
		<?php /* tag "tr" from line 57 */; ?>
<tr>
			<?php /* tag "td" from line 58 */; ?>
<td width="85%" align="right">
				<?php /* tag "h3" from line 59 */; ?>
<h3>TỔNG HỢP THU = TỔNG (1) + TỔNG (2) = </h3>
			</td>
			<?php /* tag "td" from line 61 */; ?>
<td width="15%" align="right">
				<?php /* tag "font" from line 62 */; ?>
<font color="blue" size="12">
					<?php /* tag "B" from line 63 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Tracking, 'getCollectGeneralValuePrint')); ?>
</B>
				</font>
			</td>
		</tr>
	</table>
	
	<?php /* tag "table" from line 69 */; ?>
<table width="100%" border="0" cellpadding="2">
		<?php /* tag "tr" from line 70 */; ?>
<tr>
			<?php /* tag "td" from line 71 */; ?>
<td width="35%" align="center"></td>
			<?php /* tag "td" from line 72 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 73 */; ?>
<td width="35%" align="center"><?php echo phptal_escape($ctx->DateCurrent); ?>
</td>
		</tr>
		<?php /* tag "tr" from line 75 */; ?>
<tr>
			<?php /* tag "td" from line 76 */; ?>
<td width="35%" align="center">NGƯỜI LẬP BẢNG</td>
			<?php /* tag "td" from line 77 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 78 */; ?>
<td width="35%" align="center">QUẢN LÝ</td>
		</tr>
		<?php /* tag "tr" from line 80 */; ?>
<tr><?php /* tag "td" from line 80 */; ?>
<td width="35%"></td><?php /* tag "td" from line 80 */; ?>
<td width="30%"></td><?php /* tag "td" from line 80 */; ?>
<td width="35%"></td></tr>
		<?php /* tag "tr" from line 81 */; ?>
<tr><?php /* tag "td" from line 81 */; ?>
<td width="35%"></td><?php /* tag "td" from line 81 */; ?>
<td width="30%"></td><?php /* tag "td" from line 81 */; ?>
<td width="35%"></td></tr>
		<?php /* tag "tr" from line 82 */; ?>
<tr><?php /* tag "td" from line 82 */; ?>
<td width="35%"></td><?php /* tag "td" from line 82 */; ?>
<td width="30%"></td><?php /* tag "td" from line 82 */; ?>
<td width="35%"></td></tr>
		<?php /* tag "tr" from line 83 */; ?>
<tr>
			<?php /* tag "td" from line 84 */; ?>
<td width="35%" align="center"></td>
			<?php /* tag "td" from line 85 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 86 */; ?>
<td width="35%" align="center"></td>
		</tr>
	</table>
</body><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\ReportCollectGeneral.html (edit that file instead) */; ?>